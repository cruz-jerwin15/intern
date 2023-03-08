@extends('Coordinator.Layout.header')
@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">{{$room->class_name}}</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="#">Class</a></li>
            <li><span>My Class</span></li>
            <li><span>{{$room->class_name}}</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row"> 
        <div class="container">
            <a href="/coordinator_single_class/{{$room->id}}" type="button" class="btn btn-outline-primary">Students (For Approval)</a>
            <a href="/coordinator_active_class/{{$room->id}}" class="btn btn-primary">Students (Active)</a>
            <a href="#" type="button" class="btn btn-outline-primary">Assessment Reports</a>   
        </div>
        <div class="card shadow mb-4 mt-2">
            
            <div class="card-body">
                @include('Message.index')
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Level-Course/Track</th>
                                <th>Date Joined</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            
                        <tbody>
                            @if(count($students)>0)
                            @php
                              $count=0;
                            @endphp
                                @foreach ($students as $key => $student)
                                @php
                                   $count++;
                                @endphp
                                <tr>
                                    <td>{{$count}}</td>
                                  <td>
                                    @php
                                    $profile_link = 'profile/'.$student->account->student->image_profile;
                                @endphp
                                <img style="width:2.5em;height:2.5em;" class="rounded-circle" src="{{asset($profile_link)}}" alt="jobBox">
                               
                                  </td>
                                    <td>{{$student->account->student->last_name}}, {{$student->account->student->first_name}}</td>
                                    <td>
                                      {{$student->account->coursetracklevel->level->level_name}}
                                      -
                                      {{$student->account->coursetracklevel->coursetrack->course_track_name}}
                                    </td>
                                    <td>{{$student->date_joined}}</td>
                                    <td>{{strtoupper($student->status)}}</td>
                                    <td>
                                      {{-- <a href="#approveStudent{{$student->user_id}}" data-bs-toggle="modal" style="width:3em;" class="btn btn-primary btn-sm px-2 py-2"><i class="fa-solid fa-check"></i></a> --}}
                                      <a href="#disapproveStudent{{$student->user_id}}" data-bs-toggle="modal" style="width:3em;" class="btn btn-danger btn-sm px-2 py-2"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>


                                {{-- Start Modal --}}

                                   <!-- Approved Modal -->
                             <div class="modal fade" id="approveStudent{{$student->user_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Approve Intern</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <p class="text-dark fs-6">Click 'Approve' if you want to approve this intern</p>
                                  </div>
                                  <form action={{ route('update_status.store') }} method="POST" enctype="multipart/form-data">
                                      @csrf
                                  <div class="modal-footer">
                                      <input type="hidden" value="{{$student->user_id}}" name="statusid">
                                      <input type="hidden" value="{{$student->class_id}}" name="classid">
                                      <input type="hidden" value="APPROVEDINTERN" name="process">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Approve</button>
                                  </div>
                                  </form>
                              </div>
                              </div>
                          </div>
                         
                               <!-- Diapproved Modal -->
                               <div class="modal fade" id="disapproveStudent{{$student->user_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Remove Intern</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-dark fs-6">Click 'Remove' if you want to remove this intern</p>
                                    </div>
                                    <form action={{ route('update_status.store') }} method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="modal-footer">
                                        <input type="hidden" value="{{$student->user_id}}" name="statusid">
                                        <input type="hidden" value="{{$student->class_id}}" name="classid">
                                        <input type="hidden" value="REMOVEDINTERN" name="process">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Remove</button>
                                    </div>
                                    </form>
                                </div>
                                </div>
                            </div>

                                {{-- End Modal --}}
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