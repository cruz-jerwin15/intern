@extends('Employer.Layout.header')

@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">Jobs List</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="/employer-job">Employer</a></li>
            <li><span>Job List</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-lg-12"> 
        <div class="section-box">
          <div class="container"> 
            <div class="panel-white mb-30">
              <div class="box-padding">
                <div class="box-filters-job">
                  <div class="row">
                    <div class="col-xl-6 col-lg-5"><span class="font-sm text-showing color-text-paragraph">Showing 41-60 of 944 jobs</span></div>
                    <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                      <div class="display-flex2">
                        <div class="box-border mr-10"><span class="text-sortby">Show:</span>
                          <div class="dropdown dropdown-sort">
                            <button class="btn dropdown-toggle" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>12</span><i class="fi-rr-angle-small-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                              <li><a class="dropdown-item active" href="#">10</a></li>
                              <li><a class="dropdown-item" href="#">12</a></li>
                              <li><a class="dropdown-item" href="#">20</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="box-border"><span class="text-sortby">Sort by:</span>
                          <div class="dropdown dropdown-sort">
                            <button class="btn dropdown-toggle" id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span><i class="fi-rr-angle-small-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                              <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                              <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                              <li><a class="dropdown-item" href="#">Rating Post</a></li>
                            </ul>
                          </div>
                        </div>
                        {{-- <div class="box-view-type"><a class="view-type" href="#"><img src="{{asset('assets/imgs/template/icons/icon-list.svg')}}" alt="careerIn"></a><a class="view-type" href="my-job-grid.html"><img src="assets/imgs/template/icons/icon-grid-hover.svg" alt="careerIn"></a></div> --}}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row display-list">
                  <div class="col-lg-6">
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img1.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img2.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">   
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img3.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">   
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img4.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img5.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img5.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img1.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img2.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">   
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img3.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">   
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img4.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img5.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img5.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">   
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img3.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">   
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img4.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img5.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card-style-2 hover-up">
                      <div class="card-head">
                        <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img5.png')}}" alt="careerIn"></div>
                        <div class="card-title"> 
                          <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                        </div>
                      </div>
                      <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="paginations">
                  <ul class="pager">
                    <li><a class="pager-prev" href="#"></a></li>
                    <li><a class="pager-number" href="#">1</a></li>
                    <li><a class="pager-number" href="#">2</a></li>
                    <li><a class="pager-number" href="#">3</a></li>
                    <li><a class="pager-number" href="#">4</a></li>
                    <li><a class="pager-number" href="#">5</a></li>
                    <li><a class="pager-number active" href="#">6</a></li>
                    <li><a class="pager-number" href="#">7</a></li>
                    <li><a class="pager-next" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
   
    
  </div>
@endsection