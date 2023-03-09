@extends('Employer.Layout.header')
@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">Company Profile</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="index.html">Account</a></li>
            <li><span>Company Profile</span></li>
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
                <h6 class="color-text-paragraph-2">Update your company profile</h6>
                <form class="text-start mt-20" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="box-profile-image"> 
                  <div class="img-profile"> 
                    @if(strlen($company)<=0)
                        <img class="rounded-circle" src="{{asset('employerassets/imgs/page/profile/img-profile.png')}}" alt="jobBox">
                    @else
                       
                        @php
                            $profile_link = 'profile/'.$company->image_profile;
                        @endphp
                        <img style="width:5em;height:5em;" class="rounded-circle" src="{{asset($profile_link)}}" alt="jobBox">
                    @endif
                   
                    </div>
                  <div class="info-profile"> 
                    <label class="btn btn-default" for="profile-image">Upload Company Logo</label>
                    <input type="file" name="profileImage" id="profile-image" style="visibility: hidden;width:1px;" >
                </div>
                </div>
                <div class="row"> 
                @if(strlen($company)>0)
                <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30"> 
                      <label class="font-sm color-text-mutted mb-10">First Name *</label>
                      <input class="form-control" type="text" value="{{$company->first_name}}" name="firstname" placeholder="Steven" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30"> 
                      <label class="font-sm color-text-mutted mb-10">Middle Name *</label>
                      <input class="form-control" type="text" value="{{$company->middle_name}}" name="middlename" placeholder="Johnson" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30"> 
                      <label class="font-sm color-text-mutted mb-10">Last Name *</label>
                      <input class="form-control" type="text" value="{{$company->last_name}}" name="lastname" placeholder="Job" required>
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
                      <label class="font-sm color-text-mutted mb-10">Contact number</label>
                      <input class="form-control"name="contactnumber" value="{{$company->contactnumber}}" type="text" placeholder="01 - 234 567 89">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">Company Name *</label>
                      <input class="form-control" name="company_name" value="{{$company->company_name}}" type="text"  placeholder="Apple Inc" required>
                    </div>
                  </div>
                 
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">Address Line 1 *</label>
                      <input class="form-control" name="address1"   value="{{$company->address1}}" type="text"  placeholder="Block 2 Lot 5" required>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">Address Line 2 *</label>
                      <input class="form-control" name="address2" type="text"  value="{{$company->address2}}" placeholder="Mabini Street" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">City *</label>
                      <input class="form-control" name="city" type="text"  value="{{$company->city}}" placeholder="Lipa City" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">Province *</label>
                      <input class="form-control" name="province"  value="{{$company->province}}" type="text"placeholder="Batangas" required>
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
                      <label class="font-sm color-text-mutted mb-10">Company Name *</label>
                      <input class="form-control" name="company_name" type="text"  placeholder="Apple Inc" required>
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
                      <label class="font-sm color-text-mutted mb-10">Contact number</label>
                      <input class="form-control" name="contactnumber" type="text" placeholder="01 - 234 567 89" required>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">Address Line 1 *</label>
                      <input class="form-control" name="address1" type="text"  placeholder="Block 2 Lot 5" required>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">Address Line 2 *</label>
                      <input class="form-control" name="address2" type="text"  placeholder="Mabini Street" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">City *</label>
                      <input class="form-control" name="city" type="text"  placeholder="Lipa City" required>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="form-group mb-30">
                      <label class="font-sm color-text-mutted mb-10">Province *</label>
                      <input class="form-control" name="province" type="text"placeholder="Batangas" required>
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