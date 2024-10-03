@extends('layouts.app')

@section('content')
    @include('admin.users._nav')
    <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <p><a href="{{ route('admin.users.create') }}" class="btn btn-success">Ավելացնել Հաշիվ</a></p>

    <div class="card mb-3">
        <div class="card-header">ԶՏԵԼ</div>
        <div class="card-body">
            <form action="?" method="GET">
                <div class="row">
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label for="id" class="col-form-label">ID</label>
                            <input id="id" class="form-control" name="id" value="{{ request('id') }}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="name" class="col-form-label">ԱՆՈՒՆ</label>
                            <input id="name" class="form-control" name="first_name" value="{{ request('first_name') }}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="name" class="col-form-label">ԱԶԳԱՆՈՒՆ</label>
                            <input id="name" class="form-control" name="last_name" value="{{ request('last_name') }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="email" class="col-form-label">Էլ֊Հասցե</label>
                            <input id="email" class="form-control" name="email" value="{{ request('email') }}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="status" class="col-form-label">Կարգավիճակ</label>
                            <select id="status" class="form-control" name="status">
                                <option value=""></option>
                                @foreach ($statuses as $value => $label)
                                    <option value="{{ $value }}"{{ $value === request('status') ? ' selected' : '' }}>{{ $label }}</option>
                                @endforeach;
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="role" class="col-form-label">Դեր</label>
                            <select id="role" class="form-control" name="role">
                                <option value=""></option>
                                @foreach ($roles as $value => $label)
                                    <option value="{{ $value }}"{{ $value === request('role') ? ' selected' : '' }}>{{ $label }}</option>
                                @endforeach;
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="col-form-label">&nbsp;</label><br />
                            <button type="submit" class="btn btn-primary">Որոնել</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Նկար</th>
            <th>Անուն</th>
            <th>Ազգանուն</th>
            <th>Էլ-Հասցե</th>
            <th>Հեռախոս</th>
            <th>Էջի Տիպ</th>
            <th>Հաստատված</th>
            <th>Կարգավիճակ</th>
            <th>Դեր</th>
            <th>Գրանցում</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach ($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td><img src="{{asset('storage/'.$user['image'])}}" alt="" width="40px"></td>
                <td><a href="{{ route('admin.users.show', $user) }}">{{ $user->first_name }}</a></td>
                <td><a href="{{ route('admin.users.show', $user) }}">{{ $user->last_name }}</a></td>
                <td>{{ $user->email }}</td>
                @if($user->phone)
                    <td>{{$user['phone']}}</td>
                @else
                    <td>Դատարկ</td>
                @endif
                @if($user->businese_page==1)

                    <td>Բիզնես Էջ</td>
                @else
                    <td>Սովորական Հաշիվ</td>
                @endif
                <td>
                    @if ($user->isWait())
                        <span class="badge badge-secondary">Սպասման Փուլում</span>
                    @endif
                    @if ($user->isActive())
                        <span class="badge badge-primary">Հաստատված</span>
                    @endif
                </td>
                @if($user->blocked==0)
                    <td class="text-center font-black">
                        <span class="badge-success">
                        Ակտիվ
                        </span>
                        </td>
                @else
                    <td class="font-black">
                        <span class="text-center badge-danger">Բլոկավորված</span></td>
                @endif
                <td>
                    @if ($user->isAdmin())
                        <span class="badge badge-danger">Ադմին</span>
                    @elseif($user->isModerator())
                        <span class="badge badge-danger">Մոդերատոր</span>
                    @else
                        <span class="badge badge-secondary">Օգտատեր</span>
                    @endif
                </td>
                <td class="text-center">{{$user['created_at']}}</td>
                @if($user->blocked==0)
                    <td>
                        <form action="{{route('admin.users.block',$user)}}" method="post">
                            @csrf
                            <button type="submit" style="background-color: red;border: 2px solid red;line-height: 50px;color:#fff;font-weight: bold;text-align: center">Բլոկավորել</button>
                        </form></td>
                @else
                    <td>
                        <form action="{{route('admin.users.unblock',$user)}}" method="post">
                            @csrf
                            <button type="submit" style="background-color: cyan;border: 2px solid cyan;line-height: 50px;color:#000000;font-weight: bold;text-align: center">Ակտիվացնել</button>
                        </form></td>
                @endif
            </tr>
        @endforeach

        </tbody>
    </table>

    {{ $users->links() }}
@endsection
