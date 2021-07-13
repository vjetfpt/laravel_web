@extends("layout")
@section('title')
Quản lý user
@endsection
@section('contents')
@if(empty($data))
    <h2>Không có dữ liệu</h2>
@else
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>
@endif

@endsection