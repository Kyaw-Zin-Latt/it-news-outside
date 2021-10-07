@extends('layouts.app')

@section("title") Edit Category @endsection

@section('content')
    <x-bread-crumb>
        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category Manger</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
    </x-bread-crumb>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-0">
                        <i class="feather-layers"></i>
                        Edit Category
                    </h4>
                    <hr>

                    <form action="{{ route('category.update',$category->id) }}" class="mb-3" method="post">
                        @csrf
                        @method('put')
                        <div class="form-inline">
                            <input type="text" name="title" placeholder="New Category" value="{{ old('title',$category->title) }}" class="form-control @error('title') is-invalid @enderror form-control-lg mr-2" required>
                            <button class="btn btn-primary btn-lg">Update</button>
                            <br>
                        </div>
                        @error("title")
                        <small class="text-danger">{{ $message }}</small>
                        @enderror

                        @if(session('message'))
                            <small class="text-success">{{ session('message') }}</small>
                        @endif

                    </form>

                    @include('category.list')
                </div>
            </div>
        </div>
    </div>
@endsection
