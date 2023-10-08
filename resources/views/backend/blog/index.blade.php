@extends('backend.master')

@section('title')
    Manage Blog
@endsection

@section('body')
    <section class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-header">
                        <h1 class="text-center">Manage Blog (Totall)</h1>
                    </div>
                    <div class="card card-body">
                        <div class="col-12">
                            {{-- @if (session()->get('message'))
                            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                              <strong>{{ session()->get('message') }}</strong> 
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif --}}
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>

                                <tr>
                                    <th scope="col">Si No:</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->slug }}</td>
                                        <td>{{ $blog->category->name }}</td>
                                        <td>{{ $blog->description }}</td>
                                        <td>
                                            <img src="{{ asset($blog->image) }}" alt="" height="50"
                                                width="50">
                                        </td>
                                        <td>{{ $blog->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">
                                                <i class="fa fa-edit me-2"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
