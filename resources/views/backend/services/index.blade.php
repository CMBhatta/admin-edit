@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper" style="min-height: 1604.71px;">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Service Details</h3> <br><br>
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
          <a href="{{route('teams.create')}}">
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
                      <th style="width: 20%">
                           Photo
                      </th>
                      <th style="width: 30%">
                          Name
                      </th>
                      <th>
                          Description
                      </th>
                      <th style="width: 8%" class="text-center">
                        Action
                    </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($services as $service)
                <tr>
                    <td>{{$service->id}}</td>
                   <td>
                    @if($service->photo)
                                    <img src="{{ asset('images/'.$service->photo) }}" style="height: 50px;width:100px;">
                                    @else 
                                    <span>No image found!</span>
                                    @endif
                   {{-- <img src="{{ file_exists(public_path('services/img/'. $service->photo)) ? asset('services/img/'. $service->photo) :'' }}" width="50px" height="50px"> --}}
                  </td>
                    <td>{{$service->name}}</td>
                    <td>{{$service->description}}</td>
                    
        
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('teams.edit', $service->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <form action="{{ route('teams.delete', $service->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td> 
                    
                   </tr> 
                @endforeach 
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

@endsection