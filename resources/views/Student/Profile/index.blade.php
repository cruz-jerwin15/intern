@extends('Student.Layout.header')
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
                    <form class="text-start mt-20" action={{ route('intern_profile.store') }} method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-profile-image"> 
                            <div class="img-profile"> 
                              @if(strlen($student)<=0)
                                  <img class="rounded-circle" src="{{asset('employerassets/imgs/page/profile/img-profile.png')}}" alt="jobBox">
                              @else
                                 
                                  @php
                                      $profile_link = 'profile/'.$student->image_profile;
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
                           @if(strlen($student)>0)
                           <div class="col-lg-4 col-md-4">
                            <div class="form-group mb-30"> 
                              <label class="font-sm color-text-mutted mb-10">First Name *</label>
                              <input class="form-control" value="{{$student->first_name}}" type="text" name="firstname" placeholder="Steven" required>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4">
                            <div class="form-group mb-30"> 
                              <label class="font-sm color-text-mutted mb-10">Middle Name *</label>
                              <input class="form-control" value="{{$student->middle_name}}" type="text" name="middlename" placeholder="Johnson" required>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4">
                            <div class="form-group mb-30"> 
                              <label class="font-sm color-text-mutted mb-10">Last Name *</label>
                              <input class="form-control" value="{{$student->last_name}}" type="text" name="lastname" placeholder="Job" required>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10">Email *</label>
                              <input class="form-control" type="text" value="{{$account->email}}" placeholder="stevenjob@gmail.com" disabled>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3">
                            <div class="form-group mb-30">
                                <label class="form-label color-text-mutted" for="input-7">Course/Track *</label>
                                <select class="form-control" id="input-7" required="" name="course_track" required>
                                  @if(count($course_tracks)>0)
                                    @foreach ($course_tracks as $key => $course_track)
                                        @if($course_track->id==$user_level_course_tracks->course_track_id)
                                        <option selected="selected" value="{{$course_track->id}}">{{strtoupper($course_track->course_track_name)}}</option>
                                        @else
                                        <option value="{{$course_track->id}}">{{strtoupper($course_track->course_track_name)}}</option>
                                        @endif
                                     
                                    @endforeach
                                  @endif
                              
                                </select>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3">
                            <div class="form-group mb-30">
                                <label class="form-label color-text-mutted" for="input-7">Level * </label>
                                <select class="form-control" id="input-7" required="" name="level" required>
                                  @if(count($levels)>0)
                                    @foreach ($levels as $key => $level)
                                        @if($level->id==$user_level_course_tracks->level_id)
                                        <option selected="selected" value="{{$level->id}}">{{strtoupper($level->level_name)}}</option>
                                        @else
                                        <option value="{{$level->id}}">{{strtoupper($level->level_name)}}</option>
                                        @endif
                                       
                                    @endforeach
                                  @endif
                              
                                </select>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3">
                            <div class="form-group mb-30">
                                <label class="form-label color-text-mutted" for="input-7">Gender *</label>
                                <select class="form-control" id="input-7" required="" name="gender" required>
                                    @if($student->gender=="M")
                                        <option selected="selected" value="M">Male</option>
                                        <option value="F">Female</option>
                                    @else
                                        <option value="M">Male</option>
                                        <option selected="selected"  value="F">Female</option>
                                    @endif
                                     
                                  
                                </select>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10">Contact number *</label>
                              <input class="form-control" value="{{$student->contactnumber}}" name="contactnumber" type="text" placeholder="01 - 234 567 89">
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8">
                          </div>
                          <div class="col-lg-3 col-md-3">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10">Address Line 1 *</label>
                              <input class="form-control" value="{{$student->address1}}" name="address1" type="text" placeholder="Block 1 Lot 2 Makiling Street">
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10">Address Line 2 *</label>
                              <input class="form-control" value="{{$student->address2}}" name="address2" type="text" placeholder="Barangay San Agustin">
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10">City *</label>
                              <input class="form-control" value="{{$student->city}}" name="city" type="text" placeholder="Sto. Tomas City">
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10">Province *</label>
                              <input class="form-control" value="{{$student->province}}" name="province" type="text" placeholder="Batangas">
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10">Linkedin *</label>
                              <input class="form-control" value="{{$student->linkedin}}" name="linkedin" type="text" placeholder="/elainebolambot">
                            </div>
                          </div>
                          <div class="col-lg-12"> 
                            <div class="form-group mt-10">
                              <button type="submit" class="btn btn-default btn-brand icon-tick">Save Change</button>
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
                              <div class="col-lg-3 col-md-3">
                                <div class="form-group mb-30">
                                  <label class="font-sm color-text-mutted mb-10">Email *</label>
                                  <input class="form-control" type="text" value="{{$account->email}}" placeholder="stevenjob@gmail.com" disabled>
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-3">
                                <div class="form-group mb-30">
                                    <label class="form-label color-text-mutted" for="input-7">Course/Track *</label>
                                    <select class="form-control" id="input-7" required="" name="course_track" required>
                                      @if(count($course_tracks)>0)
                                        @foreach ($course_tracks as $key => $course_track)
                                          <option value="{{$course_track->id}}">{{strtoupper($course_track->course_track_name)}}</option>
                                        @endforeach
                                      @endif
                                  
                                    </select>
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-3">
                                <div class="form-group mb-30">
                                    <label class="form-label color-text-mutted" for="input-7">Level *</label>
                                    <select class="form-control" id="input-7" required="" name="level" required>
                                      @if(count($levels)>0)
                                        @foreach ($levels as $key => $level)
                                          <option value="{{$level->id}}">{{strtoupper($level->level_name)}}</option>
                                        @endforeach
                                      @endif
                                  
                                    </select>
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-3">
                                <div class="form-group mb-30">
                                    <label class="form-label color-text-mutted" for="input-7">Gender *</label>
                                    <select class="form-control" id="input-7" required="" name="gender" required>
                                     
                                          <option value="M">Male</option>
                                          <option value="F">Female</option>
                                      
                                    </select>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                <div class="form-group mb-30">
                                  <label class="font-sm color-text-mutted mb-10">Contact number *</label>
                                  <input class="form-control"name="contactnumber" type="text" placeholder="01 - 234 567 89">
                                </div>
                              </div>
                              <div class="col-lg-8 col-md-8">
                              </div>
                              <div class="col-lg-3 col-md-3">
                                <div class="form-group mb-30">
                                  <label class="font-sm color-text-mutted mb-10">Address Line 1 *</label>
                                  <input class="form-control"name="address1" type="text" placeholder="Block 1 Lot 2 Makiling Street">
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-3">
                                <div class="form-group mb-30">
                                  <label class="font-sm color-text-mutted mb-10">Address Line 2 *</label>
                                  <input class="form-control"name="address2" type="text" placeholder="Barangay San Agustin">
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-3">
                                <div class="form-group mb-30">
                                  <label class="font-sm color-text-mutted mb-10">City *</label>
                                  <input class="form-control"name="city" type="text" placeholder="Sto. Tomas City">
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-3">
                                <div class="form-group mb-30">
                                  <label class="font-sm color-text-mutted mb-10">Province *</label>
                                  <input class="form-control"name="province" type="text" placeholder="Batangas">
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                <div class="form-group mb-30">
                                  <label class="font-sm color-text-mutted mb-10">Linkedin *</label>
                                  <input class="form-control"name="linkedin" type="text" placeholder="/elainebolambot">
                                </div>
                              </div>
                              <div class="col-lg-12"> 
                                <div class="form-group mt-10">
                                  <button type="submit" class="btn btn-default btn-brand icon-tick">Save Change</button>
                                </div>
                              </div>
                           @endif
                        </div>
                    </form>
                </div>
           
          </div>
        </div>
      </div>
      
    </div>
  
   
  </div>

@endsection