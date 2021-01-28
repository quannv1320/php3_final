@extends('layouts.main')

@section('page-title', "Category")
    
@section('content')
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Logo</th>
            <th>
                <a href="{{ route('cate.add') }}" class="btn btn-success">Create new</a>    
            </th>    
        </tr>   
    </thead> 
    <tbody>
        @foreach ($categories as $cate)
            <tr>
                <td>{{ $cate->id }}</td>
                <td>{{ $cate->name }}</td>
                <td>
                    <img src="{{ asset($cate->logo) }}" width="70">
                </td>
                <td>
                    <a href="{{ route('cate.edit', ['id' => $cate->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('cate.remove', ['id' => $cate->id]) }}" class="btn btn-sm btn-danger">Remove</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
