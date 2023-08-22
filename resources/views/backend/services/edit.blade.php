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
                <h3 class="card-title">Update your services</h3>
            </div>
            <div class="card-body">
                <form action={{route('teams.update', ['id' => $services->id])}} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <img src="{{ file_exists(public_path('images/'. $services->photo)) ? asset('services/img/'. $services->photo) :'' }}" width="50px" height="50px">
                        <input type="file" class="form-control" id="photo" name="photo" value="{{$services->photo}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$services->name}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{$services->description}}</textarea>
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
