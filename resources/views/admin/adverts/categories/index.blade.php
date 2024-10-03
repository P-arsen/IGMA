@extends('layouts.app')

@section('content')
    @include('admin.adverts.categories._nav')
<div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
    <p><a href="{{ route('admin.adverts.categories.create') }}" class="btn btn-success">Ավելացնել Կատեգորիա</a></p>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th class="text-center">Նկար</th>
            <th class="text-center">Ենթակատեգորիա</th>
            <th class="text-center">Անվանում Հայերեն</th>
            <th class="text-center">Անվանում Ռուսերեն</th>
            <th class="text-center">Անվանում Անգլերեն</th>
            <th class="text-center">Անվանում Լատինատառ</th>
            <th class="text-center">Գործողություններ</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($categories as $category)
            <tr>
                <td><img src="{{asset('storage/'.$category['icon'])}}" alt="" height="100px"></td>
                @if($category->parent != null)
                    <td style="line-height: 100px;text-align: center">{{$categories[$category->parent_id ]['name_am']}}</td>
                @else
                    <td style="line-height: 100px;text-align: center">Գլխավոր</td>
                @endif
                <td class="text-center">
                    <a href="{{ route('admin.adverts.categories.show', $category) }}" style="line-height: 100px;text-align: center">{{ $category->name_am }}</a>
                    </td>
                <td class="text-center">
                    <a href="{{ route('admin.adverts.categories.show', $category) }}" style="line-height: 100px;text-align: center">{{ $category->name_ru }}</a>
                </td>
                <td class="text-center">
                    <a href="{{ route('admin.adverts.categories.show', $category) }}" style="line-height: 100px;text-align: center">{{ $category->name_en }}</a>
                </td>

                <td style="line-height: 100px;text-align: center">{{ $category->slug }}</td>
                <td>
                    <div class="d-flex flex-row">
                        <form method="POST" action="{{ route('admin.adverts.categories.first', $category) }}" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-outline-primary"><span class="fa fa-angle-double-up"></span></span></button>
                        </form>
                        <form method="POST" action="{{ route('admin.adverts.categories.up', $category) }}" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-outline-primary"><span class="fa fa-angle-up"></span></button>
                        </form>
                        <form method="POST" action="{{ route('admin.adverts.categories.down', $category) }}" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-outline-primary"><span class="fa fa-angle-down"></span></button>
                        </form>
                        <form method="POST" action="{{ route('admin.adverts.categories.last', $category) }}" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-outline-primary"><span class="fa fa-angle-double-down"></span></span></button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection
