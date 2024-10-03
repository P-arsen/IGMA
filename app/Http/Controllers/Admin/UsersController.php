<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Requests\Admin\Users\CreateRequest;
use App\Http\Requests\Admin\Users\UpdateRequest;
use App\Http\Controllers\Controller;
use App\UseCases\Auth\RegisterService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $register;

    public function __construct(RegisterService $register)
    {
        $this->register = $register;
        $this->middleware('can:manage-users');
    }

    public function index(Request $request)
    {
        $query = User::orderByDesc('id');

        if (!empty($value = $request->get('id'))) {
            $query->where('id', $value);
        }

        if (!empty($value = $request->get('first_name'))) {
            $query->where('first_name', 'like', '%' . $value . '%');
        }
        if (!empty($value = $request->get('last_name'))) {
            $query->where('last_name', 'like', '%' . $value . '%');
        }

        if (!empty($value = $request->get('email'))) {
            $query->where('email', 'like', '%' . $value . '%');
        }

        if (!empty($value = $request->get('status'))) {
            $query->where('status', $value);
        }

        if (!empty($value = $request->get('role'))) {
            $query->where('role', $value);
        }

        $users = $query->paginate(20);

        $statuses = [
            User::STATUS_WAIT => 'Waiting',
            User::STATUS_ACTIVE => 'Active',
        ];

        $roles = User::rolesList();
        $status = User::activeList();

        return view('admin.users.index', compact('users', 'statuses', 'roles', 'status'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(CreateRequest $request)
    {
        $user = User::new(
            $request['first_name'],
            $request['last_name'],
            $request['email']
        );
        return redirect()->route('admin.users.show', $user);
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = User::rolesList();
        $status = User::activeList();

        return view('admin.users.edit', compact('user', 'roles','status'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $user->update($request->only(['first_name', 'last_name', 'email','role','status']));

        if ($request['role'] !== $user->role) {
            $user->changeRole($request['role']);
        }
        if ($request['status'] !== $user->status) {
            $user->changeStatus($request['status']);
        }
        return redirect()->route('admin.users.show', $user);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index');
    }

    public function verify(User $user)
    {
        $this->register->verify($user->id);

        return redirect()->route('admin.users.show', $user);
    }
    public function unblock(User $user)
    {
        $user->blocked  =   0;
        $user->save();
        return redirect()->route('admin.users.index', $user);
    }

    public function block(User $user)
    {
      $user->blocked    =   1;
      $user->save();
        return redirect()->route('admin.users.index', $user);
    }
}
