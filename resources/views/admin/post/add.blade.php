@extends('layouts.main')

@section('page-title', 'Add new post')

@section('content')
<div class="col-md-8 offset-md-2">
    <form action="" method="post">
        @csrf
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Title:</label>
          <div class="col-sm-10">
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            {{-- @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
            @endif --}}
          </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Category:</label>
            <div class="col-sm-10">
                <select name="cate_id" class="custom-select">
                    @foreach ($categories as $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                    @endforeach
                </select>
              {{-- @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name')}}</span>
              @endif --}}
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Content:</label>
            <div class="col-sm-10">
                <textarea name="content" class="form-control">{{ old('content') }}</textarea>
                {{-- @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name')}}</span>
              @endif --}}
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Image Url:</label>
            <div class="col-sm-10">
              <input type="text" name="image" class="form-control" value="{{ old('image') }}">
              {{-- @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name')}}</span>
              @endif --}}
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Short Desc:</label>
            <div class="col-sm-10">
                <textarea name="short_desc" class="form-control">{{ old('short_desc') }}</textarea>
                {{-- @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name')}}</span>
              @endif --}}
            </div>
          </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Author:</label>
          <div class="col-sm-10">
            <input type="text" name="author" class="form-control" value="{{ old('author') }}">
            {{-- @if ($errors->has('logo'))
                    <span class="text-danger">{{ $errors->first('logo')}}</span>
            @endif --}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <div class="text-center">
                <button class="btn btn-success" type="submit">Create</button>
                <a href="{{ route('post.index') }}" class="btn btn-warning">Cancel</a>
            </div>
          </div>
        </div>
      </form>
</div>
@endsection