@extends('Student.Layout.header')
@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">My Class</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="/intern_dashboard">Intern</a></li>
            <li><span>Class</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row"> 
        <div class="card shadow mb-4">
            <div class="card-header py-3 py-3 d-flex justify-content-end">
                <a href="#joinModal" class="btn btn-primary" data-bs-toggle="modal"><i class="fa-solid fa-plus"></i> <span> Join Class</span></a>
                 <!-- Modal -->
                 <div class="modal fade" id="joinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Join Class</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="text-start mt-10" action={{ route('intern_class.store') }} method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="modal-body">
                         <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group mb-10"> 
                                      <label class="font-sm color-text-mutted mb-10">Class Code *</label>
                                      <input class="form-control" type="text" name="class_code" placeholder="abCdEFGh" required>
                                    </div>
                                </div>
                             
                            </div>
                         </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Join</button>
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
                                <th>Class Section</th>
                                <th>Date Joined</th>
                                <th>Date Approved</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                          @if(count($classes)>0)
                            @foreach ($classes as $key=>$class)
                            <tr>
                              <td>#</td>
                              <td>{{$class->room->class_name}}</td>
                              <td>{{$class->room->class_section}}</td>
                              <td>{{$class->date_joined}}</td>
                              @if($class->status=="pending")
                              <td>0000-00-00</td>
                              @else
                                <td>{{$class->date_approved}}</td>
                              @endif
                              <td>{{strtoupper($class->status)}}</td>
                              <td>
                                @if($class->status=="pending")
                                  <a href="#" style="width:3em;" class="btn btn-warning btn-sm px-2 py-2 disabled"><i class="fa-solid fa-eye"></i></a>
                                @else
                                <a href="#" style="width:3em;" class="btn btn-warning btn-sm px-2 py-2"><i class="fa-solid fa-eye"></i></a>
                                @endif

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