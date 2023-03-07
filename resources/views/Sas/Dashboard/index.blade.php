@extends('Sas.Layout.header')
@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">Dashboard</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="/sas-dashboard">Sas</a></li>
            <li><span>Dashboard</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-xxl-8 col-xl-7 col-lg-7">
        <div class="section-box">
          <div class="row"> 
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6"> 
              <div class="card-style-1 hover-up">
                <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/computer.svg')}}" alt="careerIn"></div>
                <div class="card-info"> 
                  <div class="card-title">
                    <h3>1568
                    </h3>
                  </div>
                  <p class="color-text-paragraph-2">Interview Schedules</p>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
              <div class="card-style-1 hover-up">
                <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/bank.svg')}}" alt="careerIn"></div>
                <div class="card-info"> 
                  <div class="card-title">
                    <h3>284
                    </h3>
                  </div>
                  <p class="color-text-paragraph-2">Posted Jobs</p>
                </div>
              </div>
            </div>
            
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
              <div class="card-style-1 hover-up">
                <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/headphone.svg')}}" alt="careerIn"></div>
                <div class="card-info"> 
                  <div class="card-title">
                    <h3>985</span>
                    </h3>
                  </div>
                  <p class="color-text-paragraph-2">Application Received</p>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
              <div class="card-style-1 hover-up">
                <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/look.svg')}}" alt="careerIn"></div>
                <div class="card-info"> 
                  <div class="card-title">
                    <h3>165
                    </h3>
                  </div>
                  <p class="color-text-paragraph-2">Profile Viewed</p>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
              <div class="card-style-1 hover-up">
                <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/open-file.svg')}}" alt="careerIn"></div>
                <div class="card-info"> 
                  <div class="card-title">
                    <h3>2356
                    </h3>
                  </div>
                  <p class="color-text-paragraph-2">New Messages</p>
                </div>
              </div>
            </div>
           
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
              <div class="card-style-1 hover-up">
                <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/man.svg')}}" alt="careerIn"></div>
                <div class="card-info"> 
                  <div class="card-title">
                    <h3>548
                    </h3>
                  </div>
                  <p class="color-text-paragraph-2">CV Filtered</p>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        <div class="section-box">
          <div class="container"> 
            <div class="panel-white">
              <div class="panel-head"> 
                <h5>Latest Jobs</h5>
                
              </div>
              <div class="panel-body">
                <div class="card-style-2 hover-up">
                  <div class="card-head">
                    <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img1.png')}}" alt="careerIn"></div>
                    <div class="card-title"> 
                      <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Lipa City, Batangas</span>
                    </div>
                  </div>
                  <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a>
                  </div>
                  {{-- <div class="card-price"><strong>Php.30,000</strong><span class="Month">/Month</span></div> --}}
                </div>
                <div class="card-style-2 hover-up">
                  <div class="card-head">
                    <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img2.png')}}" alt="careerIn"></div>
                    <div class="card-title"> 
                      <h6>Senior Full Stack Engineer, Creator Success</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Tanauan City, Batangas</span>
                    </div>
                  </div>
                  <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                  </div>
                  {{-- <div class="card-price"><strong>Php.650</strong><span class="Month">/Month</span></div> --}}
                </div>
                <div class="card-style-2 hover-up">
                  <div class="card-head">
                    <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img3.png')}}" alt="careerIn"></div>
                    <div class="card-title"> 
                      <h6>Lead Product/UX/UI Designer Role</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Batangas City, Batangas</span>
                    </div>
                  </div>
                  <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                  </div>
                  {{-- <div class="card-price"><strong>Php.1200</strong><span class="Month">/Month</span></div> --}}
                </div>
                <div class="card-style-2 hover-up">
                  <div class="card-head">
                    <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img4.png')}}" alt="careerIn"></div>
                    <div class="card-title"> 
                      <h6>Marketing Graphic Designer</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">Metro Manila</span>
                    </div>
                  </div>
                  <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                  </div>
                  {{-- <div class="card-price"><strong>Php.580</strong><span class="Month">/Month</span></div> --}}
                </div>
                <div class="card-style-2 hover-up">
                  <div class="card-head">
                    <div class="card-image"> <img src="{{asset('employerassets/imgs/page/dashboard/img5.png')}}" alt="careerIn"></div>
                    <div class="card-title"> 
                      <h6>Director, Product Design - Creator</h6><span class="job-type">Intern</span><span class="time-post">3mins ago</span><span class="location">BGC, Taguig</span>
                    </div>
                  </div>
                  <div class="card-tags"> <a class="btn btn-tag">Figma</a><a class="btn btn-tag">Adobe XD</a><a class="btn btn-tag">PSD</a>
                  </div>
                  {{-- <div class="card-price"><strong>Php.1500</strong><span class="Month">/Month</span></div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-5 col-lg-5">
        <div class="section-box">
          <div class="container"> 
            <div class="panel-white">
              <div class="panel-head"> 
                <h5>Top Candidates</h5>
              </div>
              <div class="panel-body">
                <div class="card-style-3 hover-up">
                  <div class="card-image online"><img src="{{asset('employerassets/imgs/page/dashboard/avata1.png')}}" alt="careerIn"></div>
                  <div class="card-title"> 
                    <h6>Robert Fox</h6><span class="job-position">UI/UX Designer</span>
                  </div>
                  <div class="card-location"> <span class="location">Tanauan City, Batangas</span></div>
                  {{-- <div class="card-rating"><img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <span class="font-xs color-text-mutted">
                       (65)</span></div> --}}
                </div>
                <div class="card-style-3 hover-up">
                  <div class="card-image online"><img src="{{asset('employerassets/imgs/page/dashboard/avata2.png')}}" alt="careerIn"></div>
                  <div class="card-title"> 
                    <h6>Cody Fisher</h6><span class="job-position">Network Engineer</span>
                  </div>
                  <div class="card-location"> <span class="location">Lipa City, Batangas</span></div>
                  {{-- <div class="card-rating"><img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <span class="font-xs color-text-mutted">
                    (65)</span></div> --}}
                </div>
                <div class="card-style-3 hover-up">
                  <div class="card-image online"><img src="{{asset('employerassets/imgs/page/dashboard/avata3.png')}}" alt="careerIn"></div>
                  <div class="card-title"> 
                    <h6>Jane Cooper</h6><span class="job-position">Content Manager</span>
                  </div>
                  <div class="card-location"> <span class="location">Tanauan City, Batangas</span></div>
                  {{-- <div class="card-rating"><img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <span class="font-xs color-text-mutted">
                    (65)</span></div> --}}
                </div>
                <div class="card-style-3 hover-up">
                  <div class="card-image online"><img src="{{asset('employerassets/imgs/page/dashboard/avata4.png')}}" alt="careerIn"></div>
                  <div class="card-title"> 
                    <h6>Jerome Bell</h6><span class="job-position">Frontend Developer</span>
                  </div>
                  <div class="card-location"> <span class="location">Tanauan City, Batangas</span></div>
                  {{-- <div class="card-rating"><img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <span class="font-xs color-text-mutted">
                    (65)</span></div> --}}
                </div>
                <div class="card-style-3 hover-up">
                  <div class="card-image online"><img src="{{asset('employerassets/imgs/page/dashboard/avata5.png')}}" alt="careerIn"></div>
                  <div class="card-title"> 
                    <h6>Floyd Miles</h6><span class="job-position">NodeJS Dev</span>
                  </div>
                  <div class="card-location"> <span class="location">Tanauan City, Batangas</span></div>
                  {{-- <div class="card-rating"><img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <img src="{{asset('employerassets/imgs/page/dashboard/star.svg')}}" alt="careerIn"> <span class="font-xs color-text-mutted">
                    (65)</span></div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section-box">
          <div class="container"> 
            <div class="panel-white">
              <div class="panel-head"> 
                <h5>Queries by search</h5>
              </div>
              <div class="panel-body">
                <div class="card-style-5 hover-up">
                  <div class="card-title"> 
                    <h6 class="font-sm">Developer</h6>
                  </div>
                  <div class="card-progress"> 
                    <div class="number font-sm">2635</div>
                    <div class="progress">
                      <div class="progress-bar" style="width: 100%"></div>
                    </div>
                  </div>
                </div>
                <div class="card-style-5 hover-up">
                  <div class="card-title"> 
                    <h6 class="font-sm">UI/Ux Designer</h6>
                  </div>
                  <div class="card-progress"> 
                    <div class="number font-sm">1658</div>
                    <div class="progress">
                      <div class="progress-bar" style="width: 90%"></div>
                    </div>
                  </div>
                </div>
                <div class="card-style-5 hover-up">
                  <div class="card-title"> 
                    <h6 class="font-sm">Marketing</h6>
                  </div>
                  <div class="card-progress"> 
                    <div class="number font-sm">1452</div>
                    <div class="progress">
                      <div class="progress-bar" style="width: 80%"></div>
                    </div>
                  </div>
                </div>
                <div class="card-style-5 hover-up">
                  <div class="card-title"> 
                    <h6 class="font-sm">Content manager</h6>
                  </div>
                  <div class="card-progress"> 
                    <div class="number font-sm">1325</div>
                    <div class="progress">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>
                  </div>
                </div>
                <div class="card-style-5 hover-up">
                  <div class="card-title"> 
                    <h6 class="font-sm">Ruby on rain</h6>
                  </div>
                  <div class="card-progress"> 
                    <div class="number font-sm">985</div>
                    <div class="progress">
                      <div class="progress-bar" style="width: 60%"></div>
                    </div>
                  </div>
                </div>
                <div class="card-style-5 hover-up">
                  <div class="card-title"> 
                    <h6 class="font-sm">Human hunter</h6>
                  </div>
                  <div class="card-progress"> 
                    <div class="number font-sm">920</div>
                    <div class="progress">
                      <div class="progress-bar" style="width: 50%"></div>
                    </div>
                  </div>
                </div>
                <div class="card-style-5 hover-up">
                  <div class="card-title"> 
                    <h6 class="font-sm">Finance</h6>
                  </div>
                  <div class="card-progress"> 
                    <div class="number font-sm">853</div>
                    <div class="progress">
                      <div class="progress-bar" style="width: 40%"></div>
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