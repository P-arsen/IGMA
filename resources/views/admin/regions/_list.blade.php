
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Անվանում Հայերեն</th>
        <th>Անվանում Ռուսերեն</th>
        <th>Անվանում Անգլերեն</th>
        <th>Slug</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($regions as $region)
        <tr>
            <td><a href="{{ route('admin.regions.show', $region) }}">{{ $region->name_am }}</a></td>
            <td><a href="{{ route('admin.regions.show', $region) }}">{{ $region->name_ru }}</a></td>
            <td><a href="{{ route('admin.regions.show', $region) }}">{{ $region->name_en }}</a></td>
            <td>{{ $region->slug }}</td>
        </tr>
    @endforeach

    </tbody>
</table>
</div>
