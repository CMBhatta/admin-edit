@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper" style="min-height: 1604.71px;">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
                @if(session()->has('success'))
                <div>
                    {{ session('success') }}
                </div>
                @endif
        </div>
        <!-- /.card -->

        <!-- Create Form -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add New Testimonial</h3>
            </div>
            <div class="card-body">
                <form action="{{route('testimonials.update',['id' => $testimonial->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <img src="{{ asset('images/'.$testimonial->photo) }}" alt="Testimonial Photo" width="100" height="100">
                        <input type="file" class="form-control" id="photo" name="photo" value="{{$testimonial->photo}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$testimonial->name}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{$testimonial->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

@endsection
