@extends('Employer.Layout.header')

@section('content')
<div class="box-content">
    <div class="box-heading">
      <div class="box-title"> 
        <h3 class="mb-35">Candidates</h3>
      </div>
      <div class="box-breadcrumb"> 
        <div class="breadcrumbs">
          <ul> 
            <li> <a class="icon-home" href="/employer-candidates">Employer</a></li>
            <li><span>Candidates</span></li>
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
                <div class="row mb-30"> 
                  <div class="col-12"> 
                    <div class="box-list-character">
                      <ul>
                        <li><a class="active" href="#">A</a></li>
                        <li><a href="#">B</a></li>
                        <li><a href="#">C</a></li>
                        <li><a href="#">D</a></li>
                        <li><a href="#">E</a></li>
                        <li><a href="#">F</a></li>
                        <li><a href="#">G</a></li>
                        <li><a href="#">H</a></li>
                        <li><a href="#">I</a></li>
                        <li><a href="#">J</a></li>
                        <li><a href="#">K</a></li>
                        <li><a href="#">L</a></li>
                        <li><a href="#">M</a></li>
                        <li><a href="#">N</a></li>
                        <li><a href="#">O</a></li>
                        <li><a href="#">P</a></li>
                        <li><a href="#">Q</a></li>
                        <li><a href="#">R</a></li>
                        <li><a href="#">S</a></li>
                        <li><a href="#">T</a></li>
                        <li><a href="#">U</a></li>
                        <li><a href="#">V</a></li>
                        <li><a href="#">W</a></li>
                        <li><a href="#">X</a></li>
                        <li><a href="#">Y</a></li>
                        <li><a href="#">Z</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates/1"  target="_blank">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user1.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates/1" target="_blank">
                            <h5>Robert Fox</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe Illustrator</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Sketch</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user2.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Cody Fisher</h5></a><span class="font-xs color-text-mutted">Python developer</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user3.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Jerome Bell</h5></a><span class="font-xs color-text-mutted">Content Manager</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user4.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Jane Cooper</h5></a><span class="font-xs color-text-mutted">Network</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user5.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Floyd Miles</h5></a><span class="font-xs color-text-mutted">Photo Editing</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user6.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Devon Lane</h5></a><span class="font-xs color-text-mutted">Online Marketing</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user7.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Jerome Bell</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user8.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Eleanor</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user9.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Theresa</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user10.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Robert Fox</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user11.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Cameron</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user12.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Jacob Jones</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user13.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Court Henry</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user14.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Hawkins</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user15.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5>Howard</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital</a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left">
                        <div class="card-grid-2-image-rd online"><a href="/employer-candidates">
                            <figure><img alt="jobBox" src="{{asset('employerassets/imgs/page/candidates/user1.png')}}"></figure></a></div>
                        <div class="card-profile pt-10"><a href="/employer-candidates">
                            <h5> Alexander</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                          </div>
                      </div>
                      <div class="card-block-info">
                        <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                        <div class="card-2-bottom card-2-bottom-candidate mt-30">
                          <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="#">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="#">Digital    </a>
                          </div>
                        </div>
                        <div class="employers-info align-items-center justify-content-center mt-15">
                          <div class="row">
                            <div class="col-12"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Lipa, Batangas</span></span></div>
                           
                          </div>
                        </div>
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