@extends('backend.master')

@section('title')
Add Category
@endsection

@section('body')
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="card card-header rounded-0">
                <h1 class="text-center">Edit Category</h1>
            </div>
        </div>
        <div class="col-12">
            @if ( session()->get('message'))
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>{{ session()->get('message') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div class="col-12 mx-auto">
            <div class="card card-body rounded-0">
                <form action="{{ route('update',$ctg->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="{{$ctg->name}}" class="form-control">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" value="{{$ctg->description}}" class="form-control"></textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="form-label"><img src="{{asset('/')}}{{$ctg->icon}}" alt=""height="90px"width="60px"></div>
                        <label class="form-label">Icon</label>
                        <input type="file" name="icon" value="$ctg->icon" class="form-control">
                        @error('icon')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-danger px-5">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

