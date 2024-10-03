<ul class="nav nav-tabs mb-3">
    <li class="nav-item w-100 text-center"><a class="nav-link{{ $page === '' ? ' active' : '' }}" href="{{ route('admin.home') }}">Գլխավոր</a></li>
    @can ('manage-adverts')
        <li class="nav-item w-100 text-center"><a class="nav-link{{ $page === 'adverts' ? ' active' : '' }}" href="{{ route('admin.adverts.categories.create') }}">Adverts</a></li>
{{--        <li class="nav-item w-100 text-center"><a class="nav-link{{ $page === 'adverts' ? ' active' : '' }}" href="{{ route('admin.adverts.adverts.') }}">Adverts</a></li>--}}
    @endcan
   <li class="nav-item w-100 text-center" style="font-size: 20px">Կատեգորիաններ</li>
@foreach($categoriesArray as $category)
        @can ('manage-adverts-categories')
            @if($category['parent_id']==null)
            <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.banners.index') }}">{{$category['name_am']}}</a></li>
                @endif
        @endcan
    @endforeach
    @can ('manage-banners')
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.banners.index') }}">Banners</a></li>
    @endcan
    @can ('manage-adverts-categories')
        <li class="nav-item text-center w-100"><a class="nav-link" href="{{ route('admin.adverts.categories.index') }}">Կատեգորիաններ</a></li>
    @endcan
    @can ('manage-adverts-categories-name')
        <li class="nav-item text-center w-100"><a class="nav-link" href="{{ route('admin.adverts.category_name_index') }}">ցուցակ</a></li>
    @endcan
    @can ('manage-pages')
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.pages.index') }}">Pages</a></li>
    @endcan
    @can ('manage-users')
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.users.index') }}">Հաշիվներ</a></li>
    @endcan
    @can ('manage-tickets')
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Բաժինների Ֆիլտրացիա</a></li>
    @endcan
    <li class="nav-item w-100 text-center" style="font-size: 20px"> Ընդհանուր Հատկություններ</li>
    <hr>
    @can ('manage-general')
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.regions.index') }}">Տարածաշրջաններ</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.regions.index') }}">Թաղամաս</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Գույներ</a></li>
    @endcan
    <li class="nav-item w-100 text-center" style="font-size: 20px">Հատկություններ</li>
    <hr>
    <li class="nav-item w-100 text-center" style="font-size: 20px">Անշարժ Գույք</li>
    @can ('manage-real-estate')
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.real-estates.type.index') }}">Շինության տիպը</a></li>
{{--        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.real-estates.floor.index') }}">Առաստաղի բարձրություն</a></li>--}}
{{--        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.real-estates.balcony.index') }}">Պատշգամբ</a></li>--}}
{{--        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.real-estate.furniture.index') }}">Կահույք</a></li>--}}
{{--        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.real-estate.renovation.index') }}">Վերանորոգում</a></li>--}}
{{--        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.real-estate.parking.index') }}">Կայանատեղի</a></li>--}}
{{--        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.real-estate.view.index') }}">Տեսարան</a></li>--}}
    @endcan
    <li class="nav-item w-100 text-center" style="font-size: 20px">Էլեկտրոնիկա</li>
    <hr>
    <li class="nav-item w-100 text-center" style="font-size: 20px">Հեռախոսներ</li>
    @can ('manage-electronics')
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Մակնիշ</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Մոդելներ</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Հիշողություն</a></li>

    <li class="nav-item w-100 text-center" style="font-size: 20px">Պլանշետներ</li>
    <hr>
    <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Մակնիշ</a></li>
    <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Էկրանի Չափ</a></li>

        <li class="nav-item w-100 text-center" style="font-size: 20px">Խաղային Համակարգեր</li>
        <hr>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Համակարգչային Խաղեր</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Խաղային Համակարգեր</a></li>

    <li class="nav-item w-100 text-center" style="font-size: 20px">Նոթբուքեր</li>
    <hr>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Մակնիշ</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Էկրանի Չափ</a></li>
        <li class="nav-item w-100 text-center" style="font-size: 20px">Հեռուստացույցներ</li>
    <hr>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Մակնիշ</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Էկրանի Չափ</a></li>

            <li class="nav-item w-100 text-center" style="font-size: 20px">Լվացքի Մեքենա</li>
        <hr>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Մակնիշ</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Քաշը</a></li>
        <li class="nav-item w-100 text-center" style="font-size: 20px">Սառնարաններ</li>
        <hr>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Մակնիշ</a></li>
        <li class="nav-item w-100 text-center" style="font-size: 20px">Սալօջախներ</li>
        <hr>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.tickets.index') }}">Այրիչի տեսակը</a></li>

    @endcan
    <li class="nav-item w-100 text-center" style="font-size: 20px">Տրանսպորտ</li>
    <hr>

    @can ('manage-car')
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.car.model.index') }}">Մակնիշ</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.car.model.index') }}">Մոդել</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.car.drive.index') }}">Թափքի Տեսակը</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.car.drive.index') }}">Տարի</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.car.drive.index') }}">Շարժիչ</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.car.engine.type.index') }}">Շարժիչի Ծավալը</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.car.transmission.index') }}">Փոխանցման Տուփ</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.car.transmission.index') }}">Քարշակ</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.car.wheels.index') }}">Անիվներ</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.car.headlights.index') }}">Լուսարձակներ</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.car.interior.index') }}">Սրահը</a></li>
        <li class="nav-item w-100 text-center"><a class="nav-link" href="{{ route('admin.car.sunroof.index') }}">Լյուկ</a></li>
    @endcan
</ul>
</div>

