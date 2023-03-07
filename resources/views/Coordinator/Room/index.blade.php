@extends('Coordinator.Layout.header')
@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">My Class</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="#">Class</a></li>
            <li><span>List of Class</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row"> 
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-end">
                <a href="#createModal" class="btn btn-primary" data-bs-toggle="modal"><i class="fa-solid fa-plus"></i> <span> Add Class</span></a>
                {{-- Create Class Modal --}}
                <!-- Modal -->
                    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Class</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="text-start mt-10" action={{ route('manage_class.store') }} method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-body">
                             <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-10"> 
                                          <label class="font-sm color-text-mutted mb-10">Class Name *</label>
                                          <input class="form-control" type="text" name="class_name" placeholder="Intern IT" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-10"> 
                                          <label class="font-sm color-text-mutted mb-10">Class Section *</label>
                                          <input class="form-control" type="text" name="class_section" placeholder="IT-4A" required>
                                        </div>
                                    </div>
                                </div>
                             </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
            </div>
            <div class="card-body">
                @include('Message.index')
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class Name</th>
                                <th>Section</th>
                                <th>Class Code</th>
                                <th>Date Created</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                          @if(count($rooms)>0)
                           
                            @php
                                $count=0;
                            @endphp
                            @foreach ($rooms as $key=>$room)
                            @php
                            $count++;
                            @endphp
                            <tr>
                                <th>{{$count}}</th>
                                <td>{{$room->class_name}}</td>
                                <td>{{$room->class_section}}</td>
                                <td>{{$room->class_code}}</td>
                                <td>{{$room->created_at}}</td>
                                <td>{{strtoupper($room->status)}}</td>
                                <td>
                                    <a href="#updateClass{{$room->id}}" style="width:3em;" data-bs-toggle="modal" class="btn btn-info btn-sm px-2 py-2">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <a href="#" style="width:3em;" data-bs-toggle="modal" class="btn btn-warning btn-sm px-2 py-2">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    @if($room->status=="active")
                                        <a href="#removeClass{{$room->id}}" style="width:3em;" data-bs-toggle="modal" class="btn btn-danger btn-sm px-2 py-2">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    @else
                                        <a href="#retrieveClass{{$room->id}}" style="width:3em;" data-bs-toggle="modal" class="btn btn-success btn-sm px-2 py-2">
                                            <i class="fa-solid fa-sync"></i>
                                        </a>
                                    @endif
                                  
                                        <!-- Update Class Modal -->
                                        <div class="modal fade" id="updateClass{{$room->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Class Information</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ url('manage_class/'.$room->id) }}" method="POST">
                                                @csrf
                                                 @method('PUT')
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group mb-10"> 
                                                                  <label class="font-sm color-text-mutted mb-10">Class Name *</label>
                                                                  <input class="form-control" type="text" value="{{$room->class_name}}" name="class_name" placeholder="Intern IT" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group mb-10"> 
                                                                  <label class="font-sm color-text-mutted mb-10">Class Section *</label>
                                                                  <input class="form-control" type="text" value="{{$room->class_section}}" name="class_section" placeholder="IT-4A" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                  
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>

                                         {{-- Remove Modal --}}
                                         <div class="modal fade" id="removeClass{{$room->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Remove Class</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-dark fs-6">Click 'Remove' if you want to remove this class.</p>
                                                </div>
                                                <form action={{ route('update_status.store') }} method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-footer">
                                                    <input type="hidden" value="{{$room->id}}" name="statusid">
                                                    <input type="hidden" value="REMOVECLASS" name="process">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Remove</button>
                                                </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>

                                         {{-- Retrieve Modal --}}
                                         <div class="modal fade" id="retrieveClass{{$room->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Retrieve Class</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-dark fs-6">Click 'Retrieve' if you want to retrieve this class.</p>
                                                </div>
                                                <form action={{ route('update_status.store') }} method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-footer">
                                                    <input type="hidden" value="{{$room->id}}" name="statusid">
                                                    <input type="hidden" value="RETRIEVECLASS" name="process">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Retrieve</button>
                                                </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                </td>
                            </tr>
                            @endforeach
                          @endif
                            
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
  </div>

@endsection