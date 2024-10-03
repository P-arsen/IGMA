
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Անվանում Հայերեն</th>
        <th>Անվանում Ռուսերեն</th>
        <th>Անվանում Անգլերեն</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($cargas as $carga)
        <tr>
            <td><a href="{{ route('admin.car.gas.edit', $carga) }}">{{ $carga->name_am }}</a></td>
            <td><a href="{{ route('admin.car.gas.edit', $carga) }}">{{ $carga->name_ru }}</a></td>
            <td><a href="{{ route('admin.car.gas.edit', $carga) }}">{{ $carga->name_en }}</a></td>
        </tr>
    @endforeach

    </tbody>
</table>
</div>
