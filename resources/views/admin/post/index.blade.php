@extends('layouts.main')

@section('page-title', "Posts")
    
@section('content')
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Image</th>
            <th>Short_desc</th>
            <th>Author</th>
            <th>
                <a href="{{ route('post.add') }}" class="btn btn-sm btn-success">Add</a>    
            </th>    
        </tr>   
    </thead> 
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <img src="{{ asset($post->image) }}" width="100">
                </td>
                <td>{{ $post->short_desc }}</td>
                <td>{{ $post->author }}</td>
                <td>
                    <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('post.remove', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">Remove</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
