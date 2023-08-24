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
                <h3 class="card-title">Add about yourself</h3>
            </div>
            <div class="card-body">
                <form action="{{url('aboutus/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

@endsection
