@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper" style="min-height: 1604.71px;">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Customers' Testimonials Section</h3> <br><br>
          @if(session()->has('success'))
          <div>
              {{session('success')}}
          </div>
          @endif

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div>
          <a href="{{url('testimonials/create')}}">
            <button type="button" class="btn btn-block bg-gradient-success ">Add New</button>

          </a>

        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                       
                      <th>
                        Name
                    </th>
                      <th>
                          Description
                      </th>
                      <th>
                          Photo
                      </th>
                      <th style="width: 8%" class="text-center">
                        Action
                    </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($testimonials as $testimonial)
                <tr>
                    <td>{{$testimonial->id}}</td>
                    <td>{{$testimonial->name}}</td>
                    <td>{{$testimonial->description}}</td>
                    <td>
                      @if($testimonial->photo)
                      <img src="{{ asset('images/'.$testimonial->photo) }}" alt="About Photo" width="100" height="100">

                                      @else 
                                      <span>No image found!</span>
                                      @endif
                    </td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('testimonials.edit', $testimonial->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <form action="{{ route('testimonials.delete', $testimonial->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                       </td> 
                    
                   </tr> 
                @endforeach  
              </tbody>
          </table>
          <div class="row">
        </div>
        
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

@endsection