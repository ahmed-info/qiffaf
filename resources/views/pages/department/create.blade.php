@extends('dashboard.layouts.layout')
@section('body')
<main>

    <div class="container-fluid px-4">
        <h1 class="mt-4">Create of Department</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <form action="{{route('dashboard.department.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
            <div class="form-group col-md-6 mt-3">
                <div class="form-group mb-5">
                    <label for="title"><h4>Department</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Enter Department*">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="form-group col-md-3 mt-3">
                <h3>Image Cover</h3>
                <label for="image_cover">Recomended Size: 1920 X 650</label>
                        <img style="height: 30vh" src="{{asset('images/default.jpg')}}" class="img-thumbnail" alt="">
                <input type="file" class="mt-3" name="image_cover">
                @error('image_cover')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <input type="submit" name="submit" class="btn btn-primary mt-1">
    </form>
    </div>
</main>
@endsection
