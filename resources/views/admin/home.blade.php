@extends('layouts.app')

@section('content')
    @include ('admin._nav', ['page' => ''])

    <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">

            <table class="table table-bordered table-striped">
                <tbody>

                <tr>
                    <th>Ընդհանուր Օգտվողներ</th>
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


                    <td>{{$users}}</td>
                    <td>new</td>


                <tbody>
                </tbody>
            </table>
        </div>
@endsection
