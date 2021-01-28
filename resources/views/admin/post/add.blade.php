@extends('layouts.main')

@section('page-title', 'Add new post')

@section('content')
  <div class="col-md-10 offset-md-1">
    <form action="" method="post">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Title</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Category</label>
          <select name="cate_id" class="custom-select">
            @foreach ($categories as $cate)
            <option value="{{$cate->id}}">{{$cate->name}}</option>
            @endforeach
        </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Image Url</label>
          <input type="text" class="form-control" name="image">
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Author</label>
          <input type="text" name="author" class="form-control" value="{{ old('author') }}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Short description</label>
        <textarea name="short_desc" rows="3" class="form-control">{{ old('short_desc') }}</textarea>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Content</label>
        <textarea name="content" rows="5" class="form-control">{{ old('content') }}</textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('post.index') }}" class="btn btn-warning">Cancel</a>
      </div>
    </form>
  </div>
@endsection