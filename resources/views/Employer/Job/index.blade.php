@extends('Employer.Layout.header')

@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">Post a Job</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="/employer-job-post">Employer</a></li>
            <li><span>Post New Job</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-lg-12">
        <div class="section-box">
          <div class="container"> 
            <div class="panel-white mb-30">
              <div class="box-padding bg-postjob">
                <h5 class="icon-edu">Tell us about the role</h5>
                <div class="row mt-30">
                  <div class="col-lg-9">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Job title *</label>
                          <input class="form-control" type="text" placeholder="e.g. Senior Product Designer">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Job Category *</label>
                          <select class="form-input mr-10 select-active form-control" >
                            <option value="">Choose Job Category</option>
                            <option value="1">Content Writer</option>
                            <option value="1">Marketing & Sale</option>
                            <option value="1">Finance</option>
                            <option value="1">Software</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-12"> 
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Add job description *</label>
                          <textarea class="form-control" name="message" rows="8" placeholder=" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at sem id enim suscipit commodo nec in ante. Sed viverra vel leo vitae pharetra. Morbi viverra venenatis neque, eu porttitor diam blandit nec. Etiam et volutpat magna, id molestie quam. Vestibulum vel libero gravida, scelerisque arcu eu, maximus mi. Suspendisse eu dolor lobortis, posuere enim venenatis, posuere quam.

                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at sem id enim suscipit commodo nec in ante. Sed viverra vel leo vitae pharetra. Morbi viverra venenatis neque, eu porttitor diam blandit nec. Etiam et volutpat magna, id molestie quam. Vestibulum vel libero gravida, scelerisque arcu eu, maximus mi. Suspendisse eu dolor lobortis, posuere enim venenatis, posuere quam."></textarea>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Job location *</label>
                          <input class="form-control" type="text" placeholder="e.g. &quot;Lipa City &quot; or &quot;Tanauan City”">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Course/Track *</label>
                          <select class="form-input mr-10 select-active">
                            <option value="">Choose Course/Track</option>
                            
                            <option value="1">Bachelor of Science in Computer Science</option>
                            <option value="1">Bachelor of Science in Information Technology</option>
                            <option value="1">STEM</option>
                            <option value="1">ABM</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Specialization *</label>
                          <select class="form-input mr-10 select-active">
                            <option value="">Choose Specialization</option>
                            <option value="1">C/C++</option>
                            <option value="1">Python</option>
                            <option value="1">Computer Graphics</option>
                            <option value="1">Web Development</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Workplace type *</label>
                          <select class="form-control">
                            <option value="1">Remote</option>
                            <option value="1">Office</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Skills *</label>
                          <span class="btn btn-grey-small mr-5">Programming</span>
                          <select class="form-input mr-10 select-active">
                            <option value="">Choose Skills</option>
                            <option value="1">Programming</option>
                            <option value="1">Animation</option>
                          </select>
                          
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Job Type *</label>
                          <select class="form-control">
                            <option value="1">Intern</option>
                            <option value="1">Full Time</option>
                            <option value="1">Part Time</option>
                          </select>
                          
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Salary (optional)</label>
                          <input class="form-control" type="text" placeholder="Php. 20,000">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Tags (optional) </label>
                          <input class="form-control" type="text" placeholder="UI/UX, Marketing...">
                        </div>
                      </div>
                      {{-- <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <div class="box-upload">
                            <div class="add-file-upload">
                              <input class="fileupload" type="file" name="file">
                            </div><a class="btn btn-default">Upload File</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30 box-file-uploaded d-flex align-items-center"><span>Job_required.pdf</span><a class="btn btn-delete">Delete</a></div>
                      </div> --}}
                      <div class="col-lg-12"> 
                        <div class="form-group mt-10">
                          <button class="btn btn-default btn-brand icon-tick">Post New Job</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
   
  </div>
@endsection