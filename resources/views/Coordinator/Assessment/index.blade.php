@extends('Coordinator.Layout.header')
@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">My Assessment</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="#">Assessment</a></li>
            <li><span>My Assessment</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row"> 
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-end">
                <a href="#createModal" class="btn btn-primary" data-bs-toggle="modal"><i class="fa-solid fa-plus"></i> <span> Add Assessment</span></a>
                {{-- Create Class Modal --}}
                <!-- Modal -->
                    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Assessment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="text-start mt-10" action={{ route('coordinator_assessment.store') }} method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-body">
                             <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-10"> 
                                          <label class="font-sm color-text-mutted mb-10">Assessment Title*</label>
                                          <input class="form-control" type="text" name="assessment_title" placeholder="Assessment for IT-4" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-10"> 
                                          <label class="font-sm color-text-mutted mb-10">Assessment Instruction *</label>
                                          <textarea class="form-control" rows="10" name="assessment_instruction" placeholder="Enter instruction here..." required></textarea>
                                         
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
                                <th>Assessment Name</th>
                                <th>Class List</th>
                                <th>Date Created</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                            @php
                                $count=0;
                            @endphp
                            @if(count($assessments)>0)
                                @foreach ($assessments as $item=>$assessment)
                                @php
                                    $count++;
                                @endphp
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{{$assessment->assessment_name}}</td>
                                        <td>
                                            @if(count($assessment->assessclass)>0)
                                            <ul>
                                                @foreach ($assessment->assessclass as $item=>$class)
                                                  @if($class->status=="active")
                                                  <li><a href="#removeClass{{$class->id}}" data-bs-toggle="modal" class="text-primary text-decoration-underline">{{$class->room->class_name}}</a></li>
                                               
                                                    
                                                  <!-- Diapproved Modal -->
                                                  <div class="modal fade" id="removeClass{{$class->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                   <div class="modal-dialog">
                                                   <div class="modal-content">
                                                       <div class="modal-header">
                                                       <h5 class="modal-title" id="exampleModalLabel">Remove {{$class->room->class_name}}</h5>
                                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                       </div>
                                                       <div class="modal-body">
                                                           <p class="text-dark fs-6">Click 'Remove' if you want to remove this class to the assessment</p>
                                                       </div>
                                                       <form action={{ route('update_status.store') }} method="POST" enctype="multipart/form-data">
                                                           @csrf
                                                       <div class="modal-footer">
                                                           <input type="hidden" value="{{$class->id}}" name="statusid">
                                                           <input type="hidden" value="REMOVEDCLASSASSESS" name="process">
                                                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                           <button type="submit" class="btn btn-danger">Remove</button>
                                                       </div>
                                                       </form>
                                                   </div>
                                                   </div>
                                               </div>
                                                  @endif
                                               
                                                @endforeach
                                            </ul>
                                            @else
                                            <span>No assigned class</span>
                                            @endif
                                          
                                            

                                        </td>



                                        <td>{{$assessment->created_at}}</td>
                                        <td>{{strtoupper($assessment->status)}}</td>
                                        <td>
                                            <a href="/coordinator_assessment/{{$assessment->id}}"  style="width:3em;" class="btn btn-success btn-sm px-2 py-2"><i class="fa-solid fa-eye"></i></a>
                                            <a href="#updateModal{{$assessment->id}}" data-bs-toggle="modal" style="width:3em;" class="btn btn-warning btn-sm px-2 py-2"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="#assignModal{{$assessment->id}}" data-bs-toggle="modal" style="width:3em;" class="btn btn-primary btn-sm px-2 py-2"><i class="fa-solid fa-plus"></i></a>
                                        </td>
                                         <!-- Modal -->
                    <div class="modal fade" id="updateModal{{$assessment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Assessment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('coordinator_assessment.update', $assessment->id) }}" enctype="multipart/form-data" > 
                                @method('PUT')
                                @csrf
                            <div class="modal-body">
                             <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-10"> 
                                          <label class="font-sm color-text-mutted mb-10">Assessment Title*</label>
                                          <input class="form-control" type="text" value="{{$assessment->assessment_name}}" name="assessment_title" placeholder="Assessment for IT-4" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-10"> 
                                          <label class="font-sm color-text-mutted mb-10">Assessment Instruction *</label>
                                          <textarea class="form-control"  rows="10" name="assessment_instruction" placeholder="Enter instruction here..." required>{{$assessment->assessment_instruction}}</textarea>
                                         
                                        </div>
                                    </div>
                                </div>
                             </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>

                       <!-- AssignModal -->
                       <div class="modal fade" id="assignModal{{$assessment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Assign Assessment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="text-start mt-10" action={{ route('coordinator_assign.store') }} method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-body">
                             <div class="container-fluid">
                                <div class="row">
                                    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group mb-10"> 
                                          <label class="font-sm color-text-mutted mb-10" for="input-7">List of Class *</label>
                                          <select class="form-control" id="input-7" required="" name="classes">
                                            @if(count($rooms)>0)
                                                @foreach ($rooms as $item=>$room)
                                                <option value="{{$room->id}}">{{$room->class_name}}</option>
                                                @endforeach
                                                
                                            @endif
                                          </select>
                                          <input type="hidden" name="assessment_id" value="{{$assessment->id}}"/>
                                        </div>
                                    </div>
                                  
                                </div>
                             </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Assign</button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
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