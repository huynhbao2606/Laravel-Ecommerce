@extends("layouts.master")
@section("MainView")
    <table class="table table-dark mt-3">
        <tr class="dark">
            <th>Mã Loại</th>
            <th>Tên Loại</th>
        </tr>
        @foreach($list as $ds)
            <tr>
                <td>{{$ds -> id}}</td>
                <td>{{$ds -> name}}</td>
            </tr>
        @endforeach
    </table>
@endsection
