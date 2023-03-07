@extends('Coordinator.Layout.header')
@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">My Profile</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="index.html">Account</a></li>
            <li><span>My Profile</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-xxl-12 col-xl-12 col-lg-12">
        <div class="section-box">
          <div class="container"> 
            <div class="panel-white mb-30">
                @include('Message.index')
              <div class="box-padding">
                <h6 class="color-text-paragraph-2">Update your profile</h6>
                <form class="text-start mt-20" action={{ route('coordinator_profile.store') }} method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="box-profile-image"> 
                  <div class="img-profile"> 
                    @if(strlen($coordinator)<=0)
                        <img class="rounded-circle" src="{{asset('employerassets/imgs/page/profile/img-profile.png')}}" alt="jobBox">
                    @else
                       
                        @php
                            $profile_link = 'profile/'.$coordinator->image_profile;
                        @endphp
                        <img style="width:5em;height:5em;" class="rounded-circle" src="{{asset($profile_link)}}" alt="jobBox">
                    @endif
                   
                    </div>
                  <div class="info-profile"> 
                    <label class="btn btn-default" for="profile-image">Upload Profile</label>
                    <input type="file" name="profileImage" id="profile-image" style="visibility: hidden;width:1px;" >
                </div>
                </div>
                <div class="row"> 
                @if(strlen($coordinator)>0)
                <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30"> 
                      <label class="font-sm color-text-mutted mb-10">First Name *</label>
                      <input class="form-control" type="text" value="{{$coordinator->first_name}}" name="firstname" placeholder="Steven" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30"> 
                      <label class="font-sm color-text-mutted mb-10">Middle Name *</label>
                      <input class="form-control" type="text" value="{{$coordinator->middle_name}}" name="middlename" placeholder="Johnson" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30"> 
                      <label class="font-sm color-text-mutted mb-10">Last Name *</label>
                      <input class="form-control" type="text" value="{{$coordinator->last_name}}" name="lastname" placeholder="Job" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">Email *</label>
                      <input class="form-control" type="text" value="{{$account->email}}" placeholder="stevenjob@gmail.com" disabled>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30">
                        <label class="form-label color-text-mutted" for="input-7">Department *</label>
                        <select class="form-control" id="input-7" required="" name="department" required>
                          @if(count($departments)>0)
                            @foreach ($departments as $key => $department)
                              @if($department->department_id==$userdepartment->department_id)
                              <option value="{{$department->department_id}}" selected="selected">{{strtoupper($department->department_name)}}</option>
                              @else
                              <option value="{{$department->department_id}}">{{strtoupper($department->department_name)}}</option>
                              @endif
                              
                            @endforeach
                          @endif
                      
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">Contact number</label>
                      <input class="form-control"name="contactnumber" value="{{$coordinator->contactnumber}}" type="text" placeholder="01 - 234 567 89">
                    </div>
                  </div>
                @else
                <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30"> 
                      <label class="font-sm color-text-mutted mb-10">First Name *</label>
                      <input class="form-control" type="text" name="firstname" placeholder="Steven" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30"> 
                      <label class="font-sm color-text-mutted mb-10">Middle Name *</label>
                      <input class="form-control" type="text" name="middlename" placeholder="Johnson" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30"> 
                      <label class="font-sm color-text-mutted mb-10">Last Name *</label>
                      <input class="form-control" type="text" name="lastname" placeholder="Job" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">Email *</label>
                      <input class="form-control" type="text" value="{{$account->email}}" placeholder="stevenjob@gmail.com" disabled>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30">
                        <label class="form-label color-text-mutted" for="input-7">Department *</label>
                        <select class="form-control" id="input-7" required="" name="department" required>
                          @if(count($departments)>0)
                            @foreach ($departments as $key => $department)
                              <option value="{{$department->department_id}}">{{strtoupper($department->department_name)}}</option>
                            @endforeach
                          @endif
                      
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">Contact number</label>
                      <input class="form-control"name="contactnumber" type="text" placeholder="01 - 234 567 89">
                    </div>
                  </div>
                @endif


                  <div class="form-group">
                
                
                  <div class="col-lg-12"> 
                    <div class="form-group mt-10">
                      <button type="submit" class="btn btn-default btn-brand icon-tick">Save Change</button>
                    </div>
                  </div>
                </div>
              </div>
                </form>
            </div>
           
          </div>
        </div>
      </div>
      
    </div>
  
   
  </div>

@endsection