@extends('admin.layouts.main')

@section('page-title', 'Add new category')

@section('content')
<div class="col-md-8 offset-md-2">
    <form action="" method="post">
        @csrf
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name:</label>
          <div class="col-sm-10">
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
            @endif
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Logo Url:</label>
          <div class="col-sm-10">
            <textarea name="logo" class="form-control">{{ old('logo') }}</textarea>
            @if ($errors->has('logo'))
                    <span class="text-danger">{{ $errors->first('logo')}}</span>
            @endif
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <div class="text-center">
                <button class="btn btn-success" type="submit">Create</button>
                <a href="{{ route('cate.index') }}" class="btn btn-warning">Cancel</a>
            </div>
          </div>
        </div>
      </form>
</div>
@endsection