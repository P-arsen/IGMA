@extends('layouts.appfront')

@section('content')
    @include('cabinet.profile._nav')

                <!--  -->


                <div class="col-span-12">
                    <div class="w-full">

                        <div class="w-full flex items-center justify-between gap-6 mt-2 border-b border-primary1 pb-1">
                            <p class="min-w-44 text-16 opacity-90 text-neutral-900">@lang($locale.'.avatar')</p>
                            <div class="w-16 h-16 rounded-full flex-shrink-0 overflow-hidden">
                                <img class="w-full h-full object-cover" src="{{asset('storage/'.Auth::user()->image)}}" alt="">
                            </div>
                        </div>
                        <div class="w-full flex gap-6 mt-2 border-b py-1 justify-between border-primary1 pb-1">
                            <p class="min-w-44 text-16 opacity-90 text-neutral-900">@lang($locale.'.first_name')</p>
                            <p class="text-16 opacity-90 text-neutral-900">{{Auth::user()->first_name}}</p>
                        </div>
                        <div class="w-full flex gap-6 mt-2 border-b py-1 justify-between border-primary1 pb-1">
                            <p class="min-w-44 text-16 opacity-90 text-neutral-900">@lang($locale.'.last_name')</p>
                            <p class="text-16 opacity-90 text-neutral-900">{{Auth::user()->last_name}}</p>
                        </div>
                        <div class="w-full flex gap-6 mt-2 border-b py-1 justify-between border-primary1 pb-1">
                            <label class="min-w-44 text-gray-700 flex justify-between items-center gap-4">
                                @lang($locale.'.region')
                            </label>
                                <p class="text-16 opacity-90 text-neutral-900">{{$region['name_'.$locale] ?? ''}}</p>
                        </div>

                    </div>
                    <div class="w-full flex gap-6 mt-2 border-b py-1 justify-between border-primary1 pb-1">
                        <p class="min-w-44 text-16 opacity-90 text-neutral-900">@lang($locale.'.email')</p>
                        <p class="text-16 opacity-90 text-neutral-900">{{Auth::user()->email}}</p>
                    </div>
                    <div class="w-full flex gap-6 mt-2 border-b py-1 justify-between border-primary1 pb-1">
                        <p class="min-w-44 text-16 opacity-90 text-neutral-900">@lang($locale.'.phone')</p>
                        <p class="text-16 opacity-90 text-neutral-900">{{Auth::user()->phone}}</p>
                    </div>
                    <div class="w-full flex gap-6 mt-2 border-b py-1 justify-between border-primary1 pb-1">
                        <p class="min-w-44 text-16 opacity-90 text-neutral-900">@lang($locale.'.change')</p>
                        <a href="{{ route('cabinet.profile.edit') }}" class="btn btn-primary">@lang($locale.'.edit')</a>
                    </div>
                        <div class="mb-3">

                        </div>
                        @if ($user->phone)
                            {{ $user->phone }}
                            @if (!$user->isPhoneVerified())
                                <i>(is not verified)</i><br />
                                <form method="POST" action="{{ route('cabinet.profile.phone') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success">@lang($locale.'.verify')</button>
                                </form>
                            @endif
                        @endif
                    </div>
                </div>
</section>
@endsection
