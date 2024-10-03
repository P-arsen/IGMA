@extends('layouts.appfront')

@section('content')
    @include('cabinet.profile._nav')

    <table class="table table-striped">
        <thead>
        <tr>
            <th>@lang($locale.'.id')</th>
            <th>@lang($locale.'.updated')</th>
            <th>@lang($locale.'.title')</th>
            <th>@lang($locale.'.region')</th>
            <th>@lang($locale.'.category')</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach ($adverts as $advert)
            <tr>
                <td>{{ $advert->id }}</td>
                <td>{{ $advert->updated_at }}</td>
                <td><a href="{{ route('adverts.show', $advert) }}" target="_blank">{{ $advert->title }}</a></td>
                <td>
                    @if ($advert->region)
                        {{ $advert->region->name.'_'.$locale }}
                    @endif
                </td>
                <td>{{ $advert->category->name.'_'.$locale }}</td>
                <td>
                    <form method="POST" action="{{ route('cabinet.favorites.remove', $advert) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"><span class="fa fa-remove"></span> @lang($locale.'remove')</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    {{ $adverts->links() }}
@endsection
