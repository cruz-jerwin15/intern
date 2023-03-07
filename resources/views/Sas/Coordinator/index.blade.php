@extends('Sas.Layout.header')
@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">Coordinators</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="/sas-dashboard">Sas</a></li>
            <li><span>Coordinator</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row"> 
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List of Coordinators</h6>
            </div>
            <div class="card-body">
                @include('Message.index')
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Porfile</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Contact Number</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                            @if(count($accounts)>0)
                            @php
                                $count=0;
                            @endphp
                                @foreach ($accounts as $key =>$account)
                                @php
                                $count++;
                            @endphp
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>
                                        @php
                                            $profile_link = 'profile/'.$account->coordinator->image_profile;
                                        @endphp
                                        <img style="width:2.5em;height:2.5em;" class="rounded-circle" src="{{asset($profile_link)}}" alt="jobBox">
                                       
                                    </td>
                                    <td>{{$account->coordinator->first_name}}</td>
                                    <td>{{$account->coordinator->last_name}}</td>
                                    <td>{{$account->coordinator->contactnumber}}</td>
                                    <td>{{strtoupper($account->status)}}</td>
                                    <td>
                                        @if($account->status=="for approval")
                                            <a href="#approveCoordinator{{$account->id}}" style="width:3em;" data-bs-toggle="modal" class="btn btn-primary btn-sm px-2 py-2">
                                                <i class="fa-solid fa-check"></i>
                                            </a>
                                            <a href="#disapproveCoordinator{{$account->id}}" style="width:3em;" data-bs-toggle="modal" class="btn btn-danger btn-sm px-2 py-2">
                                                <i class="fa-solid fa-times fs-6"></i>
                                            </a>
                                        @elseif($account->status=="inactive")
                                            <a href="#retrieveCoordinator{{$account->id}}" style="width:3em;" data-bs-toggle="modal" class="btn btn-success btn-sm px-2 py-2">
                                                <i class="fa-solid fa-sync "></i>
                                            </a>
                                            <a href="#disapproveCoordinator{{$account->id}}" style="width:3em;" data-bs-toggle="modal" class="btn btn-danger btn-sm px-2 py-2 disabled">
                                                <i class="fa-solid fa-trash fs-6"></i>
                                            </a>
                                        @else 
                                            <a href="#approveCoordinator{{$account->id}}" style="width:3em;" data-bs-toggle="modal" class="btn btn-primary btn-sm px-2 py-2 disabled">
                                                <i class="fa-solid fa-check "></i>
                                            </a>
                                            <a href="#removeCoordinator{{$account->id}}" style="width:3em;" data-bs-toggle="modal" class="btn btn-danger btn-sm px-2 py-2">
                                                <i class="fa-solid fa-trash fs-6"></i>
                                            </a>
    
                                        @endif
                                      
                                        <!-- Approved Modal -->
                                            <div class="modal fade" id="approveCoordinator{{$account->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Approve Coordinator</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-dark fs-6">Click 'Approve' if you want to approve this coordinator</p>
                                                    </div>
                                                    <form action={{ route('update_status.store') }} method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="modal-footer">
                                                        <input type="hidden" value="{{$account->id}}" name="statusid">
                                                        <input type="hidden" value="APPROVEDCOOR" name="process">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Approve</button>
                                                    </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                     
                                           <!-- Dispproved Modal -->
                                           <div class="modal fade" id="disapproveCoordinator{{$account->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Disapprove Coordinator</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-dark fs-6">Click 'Disapprove' if you want to disapprove this coordinator</p>
                                                </div>
                                                <form action={{ route('update_status.store') }} method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-footer">
                                                    <input type="hidden" value="{{$account->id}}" name="statusid">
                                                    <input type="hidden" value="DISAPPROVEDCOOR" name="process">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Disapprove</button>
                                                </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                        {{-- Retrieve Modal --}}
                                        <div class="modal fade" id="retrieveCoordinator{{$account->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Retrieve Coordinator</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-dark fs-6">Click 'Retrieve' if you want to retrieve this coordinator</p>
                                                </div>
                                                <form action={{ route('update_status.store') }} method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-footer">
                                                    <input type="hidden" value="{{$account->id}}" name="statusid">
                                                    <input type="hidden" value="RETRIEVECOOR" name="process">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Retrieve</button>
                                                </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>

                                         {{-- Remove Modal --}}
                                         <div class="modal fade" id="removeCoordinator{{$account->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Remove Coordinator</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-dark fs-6">Click 'Remove' if you want to remove this coordinator</p>
                                                </div>
                                                <form action={{ route('update_status.store') }} method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-footer">
                                                    <input type="hidden" value="{{$account->id}}" name="statusid">
                                                    <input type="hidden" value="REMOVECOOR" name="process">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Remove</button>
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