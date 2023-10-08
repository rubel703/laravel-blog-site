@extends('backend.master')
@section('title')
Managed Category
@endsection
@section('body')
    <div class="container-fluid pt-4 px-4">
        
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-4"> Category Total:{{$category->count()}}</h1>
                @if (Session::get('notification'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{Session::get('notification')}}</strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">#id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $key=>$ctg)
                        <tr>
                            {{-- <td>{{$loop->iteration}}</td> --}}
                            <td>{{$key+1}}</td>
                            <th scope="row">{{$ctg->id}}</th>
                            <td>{{$ctg->name}}</td>
                            <td>{{$ctg->description}}</td>
                            <td><img src="{{asset($ctg->icon)}}" alt="" height="100px" width="100px"></td>
                            <td>
                                <a href="{{ route('edit', $ctg->id) }}"class="text-white btn btn-success btn-md mb-1  ">Edit</a>
                                <a href="{{ route('destroy', $ctg->id) }}"class="text-white btn btn-danger bt-sm ">Delete</a>
                            </td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection