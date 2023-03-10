@extends('Layout.header')
@section('content')
<main class="main">
  <div class="bg-homepage1"></div>
  <section class="section-box">
    <div class="banner-hero hero-1">
      <div class="banner-inner">
        <div class="row">
          <div class="col-xl-8 col-lg-12">
            <div class="block-banner">
              <h1 class="heading-banner wow animate__animated animate__fadeInUp">The <span class="color-brand-2">Easiest Way</span><br class="d-none d-lg-block">to Get Your New Job</h1>
              <div class="banner-description mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Each month, more than 3 million job seekers turn to <br class="d-none d-lg-block">website in their search for work, making over 140,000 <br class="d-none d-lg-block">applications every single day</div>
              <div class="form-find mt-40 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                <form>
                  <div class="box-industry">
                    <select class="form-input mr-10 select-active input-industry">
                      <option value="0">Industry</option>
                      <option value="1">Software</option>
                      <option value="2">Finance</option>
                      <option value="3">Recruting</option>
                      <option value="4">Management</option>
                      <option value="5">Advertising</option>
                      <option value="6">Development</option>
                    </select>
                  </div>
                  <select class="form-input mr-10 select-active">
                    <option value="">Location</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="PW">Belau</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="VG">British Virgin Islands</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo (Brazzaville)</option>
                    <option value="CD">Congo (Kinshasa)</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Cura&Ccedil;ao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and McDonald Islands</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran</option>
                    <option value="IQ">Iraq</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="CI">Ivory Coast</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao S.A.R., China</option>
                    <option value="MK">Macedonia</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="KP">North Korea</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PS">Palestinian Territory</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="QA">Qatar</option>
                    <option value="IE">Republic of Ireland</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russia</option>
                    <option value="RW">Rwanda</option>
                    <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
                    <option value="BL">Saint Barth&eacute;lemy</option>
                    <option value="SH">Saint Helena</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="SX">Saint Martin (Dutch part)</option>
                    <option value="MF">Saint Martin (French part)</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="SM">San Marino</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia/Sandwich Islands</option>
                    <option value="KR">South Korea</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syria</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom (UK)</option>
                    <option value="US">USA (US)</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VA">Vatican</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Vietnam</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="WS">Western Samoa</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>
                  <input class="form-input input-keysearch mr-10" type="text" placeholder="Your keyword... ">
                  <button class="btn btn-default btn-find font-sm">Search</button>
                </form>
              </div>
              <div class="list-tags-banner mt-60 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><strong>Popular Searches:</strong><a href="#">Designer</a>, <a href="#">Web</a>, <a href="#">IOS</a>, <a href="#">Developer</a>, <a href="#">PHP</a>, <a href="#">Senior</a>, <a href="#">Engineer</a></div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-12 d-none d-xl-block col-md-6">
            <div class="banner-imgs">
              <div class="block-1 shape-1"><img class="img-responsive" alt="careerIn" src="{{asset('assets/imgs/page/homepage1/banner1.png')}}"></div>
              <div class="block-2 shape-2"><img class="img-responsive" alt="careerIn" src="{{asset('assets/imgs/page/homepage1/banner2.png')}}"></div>
              <div class="block-3 shape-3"><img class="img-responsive" alt="careerIn" src="{{asset('assets/imgs/page/homepage1/icon-top-banner.png')}}"></div>
              <div class="block-4 shape-3"><img class="img-responsive" alt="careerIn" src="{{asset('assets/imgs/page/homepage1/icon-bottom-banner.png')}}"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="mt-100"></div>
  <section class="section-box mt-80">
    <div class="section-box wow animate__animated animate__fadeIn">
      <div class="container">
        <div class="text-center">
          <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Browse by category</h2>
          <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Find the job that&rsquo;s perfect for you. about 800+ new jobs everyday</p>
        </div>
        <div class="box-swiper mt-50">
          <div class="swiper-container swiper-group-5 swiper">
            <div class="swiper-wrapper pb-70 pt-5">
              <div class="swiper-slide hover-up"><a href="jobs-list.html">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/page/homepage1/marketing.svg')}}"></div>
                    <div class="text-info-right">
                      <h4>Marketing &amp; Sale</h4>
                      <p class="font-xs">1526<span> Jobs Available</span></p>
                    </div>
                  </div></a><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/page/homepage1/customer.svg')}}"></div>
                    <div class="text-info-right">
                      <h4>Customer Help</h4>
                      <p class="font-xs">185<span> Jobs Available</span></p>
                    </div>
                  </div></a>
              </div>
              <div class="swiper-slide hover-up"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/page/homepage1/finance.svg')}}"></div>
                    <div class="text-info-right">
                      <h4>Finance</h4>
                      <p class="font-xs">168<span> Jobs Available</span></p>
                    </div>
                  </div></a><a href="jobs-list.html">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/page/homepage1/lightning.svg')}}"></div>
                    <div class="text-info-right">
                      <h4>Software</h4>
                      <p class="font-xs">1856<span> Jobs Available</span></p>
                    </div>
                  </div></a>
              </div>
              <div class="swiper-slide hover-up"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/page/homepage1/human.svg')}}"></div>
                    <div class="text-info-right">
                      <h4>Human Resource</h4>
                      <p class="font-xs">165<span> Jobs Available</span></p>
                    </div>
                  </div></a><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/page/homepage1/management.svg')}}"></div>
                    <div class="text-info-right">
                      <h4>Management</h4>
                      <p class="font-xs">965<span> Jobs Available</span></p>
                    </div>
                  </div></a>
              </div>
              <div class="swiper-slide hover-up"><a href="jobs-list.html">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/page/homepage1/retail.svg')}}"></div>
                    <div class="text-info-right">
                      <h4>Retail &amp; Products</h4>
                      <p class="font-xs">563<span> Jobs Available</span></p>
                    </div>
                  </div></a><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/page/homepage1/security.svg')}}"></div>
                    <div class="text-info-right">
                      <h4>Security Analyst</h4>
                      <p class="font-xs">254<span> Jobs Available</span></p>
                    </div>
                  </div></a>
              </div>
              <div class="swiper-slide hover-up"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/page/homepage1/content.svg')}}"></div>
                    <div class="text-info-right">
                      <h4>Content Writer</h4>
                      <p class="font-xs">142<span> Jobs Available</span></p>
                    </div>
                  </div></a><a href="jobs-list.html">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/page/homepage1/research.svg')}}"></div>
                    <div class="text-info-right">
                      <h4>Market Research</h4>
                      <p class="font-xs">532<span> Jobs Available</span></p>
                    </div>
                  </div></a>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </section>
 
  <section class="section-box mt-50">
    <div class="container">
      <div class="text-center">
        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Jobs of the day</h2>
        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Search and connect with the right candidates faster. </p>
       
      </div>
      <div class="mt-70">
        <div class="tab-content" id="myTabContent-1">
          <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-1.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a><a class="btn btn-grey-small mr-5" href="#">Photoshop</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-2.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Intern</span><span class="card-time">5<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">React</a><a class="btn btn-grey-small mr-5" href="#">NodeJS</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-3.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Java Software Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Python</a><a class="btn btn-grey-small mr-5" href="#">AWS</a><a class="btn btn-grey-small mr-5" href="#">Photoshop</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-4.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Typescript</a><a class="btn btn-grey-small mr-5" href="#">Java</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5">
                          <div class="btn btn-apply-now" ><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-5.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">React Native Web Developer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Angular</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-6.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Senior System Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Intern</span><span class="card-time">5<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-7.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Products Manager</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-8.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-job-2" role="tabpanel" aria-labelledby="tab-job-2">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-6.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Senior System Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Intern</span><span class="card-time">5<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-7.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Products Manager</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-4.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Typescript</a><a class="btn btn-grey-small mr-5" href="#">Java</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-5.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">React Native Web Developer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Angular</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-8.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-1.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a><a class="btn btn-grey-small mr-5" href="#">Photoshop</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-2.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Intern</span><span class="card-time">5<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">React</a><a class="btn btn-grey-small mr-5" href="#">NodeJS</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-3.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Java Software Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Python</a><a class="btn btn-grey-small mr-5" href="#">AWS</a><a class="btn btn-grey-small mr-5" href="#">Photoshop</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-job-3" role="tabpanel" aria-labelledby="tab-job-3">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-4.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Typescript</a><a class="btn btn-grey-small mr-5" href="#">Java</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-5.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">React Native Web Developer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Angular</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-6.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Senior System Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Intern</span><span class="card-time">5<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-7.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Products Manager</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-8.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-1.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a><a class="btn btn-grey-small mr-5" href="#">Photoshop</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-2.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Intern</span><span class="card-time">5<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">React</a><a class="btn btn-grey-small mr-5" href="#">NodeJS</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-3.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Java Software Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Python</a><a class="btn btn-grey-small mr-5" href="#">AWS</a><a class="btn btn-grey-small mr-5" href="#">Photoshop</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-job-4" role="tabpanel" aria-labelledby="tab-job-4">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-7.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Products Manager</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-8.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-4.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Typescript</a><a class="btn btn-grey-small mr-5" href="#">Java</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-5.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">React Native Web Developer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Angular</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-6.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Senior System Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Intern</span><span class="card-time">5<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-1.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a><a class="btn btn-grey-small mr-5" href="#">Photoshop</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-2.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Intern</span><span class="card-time">5<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">React</a><a class="btn btn-grey-small mr-5" href="#">NodeJS</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-3.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Java Software Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Python</a><a class="btn btn-grey-small mr-5" href="#">AWS</a><a class="btn btn-grey-small mr-5" href="#">Photoshop</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-job-5" role="tabpanel" aria-labelledby="tab-job-5">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-8.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-1.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a><a class="btn btn-grey-small mr-5" href="#">Photoshop</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-4.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Typescript</a><a class="btn btn-grey-small mr-5" href="#">Java</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-5.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">React Native Web Developer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Angular</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-6.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Senior System Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Intern</span><span class="card-time">5<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-7.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Products Manager</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-2.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Intern</span><span class="card-time">5<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">React</a><a class="btn btn-grey-small mr-5" href="#">NodeJS</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-3.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Java Software Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Python</a><a class="btn btn-grey-small mr-5" href="#">AWS</a><a class="btn btn-grey-small mr-5" href="#">Photoshop</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-job-6" role="tabpanel" aria-labelledby="tab-job-6">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-8.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-1.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a class="btn btn-grey-small mr-5" href="#">Figma</a><a class="btn btn-grey-small mr-5" href="#">Photoshop</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-2.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Intern</span><span class="card-time">5<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">React</a><a class="btn btn-grey-small mr-5" href="#">NodeJS</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-3.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Java Software Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Python</a><a class="btn btn-grey-small mr-5" href="#">AWS</a><a class="btn btn-grey-small mr-5" href="#">Photoshop</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-4.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Typescript</a><a class="btn btn-grey-small mr-5" href="#">Java</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-5.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">React Native Web Developer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="#">Angular</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                        {{--  {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}} --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-6.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Senior System Engineer</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Intern</span><span class="card-time">5<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left"><span class="flash"></span>
                    <div class="image-box"><img src="{{asset('assets/imgs/brands/brand-7.png')}}" alt="careerIn"></div>
                    <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">Lipa City, Batangas</span></div>
                  </div>
                  <div class="card-block-info">
                    <h6><a href="job-details.html">Products Manager</a></h6>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row">
                         {{-- <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div> --}}
                        <div class="col-lg-5 col-5 text-end">
                         <div class="btn btn-apply-now"><a href="/register" style="color:white;">Apply now</a></div>
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
  </section>
  
  
  <section class="section-box mt-50">
    <div class="container">
      <div class="text-center">
        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Top Employers</h2>
        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Discover your next career move, freelance gig, or internship</p>
      </div>
    </div>
    <div class="container">
      <div class="box-swiper mt-50">
        <div class="swiper-container swiper-group-1 swiper-style-2 swiper">
          <div class="swiper-wrapper pt-5">
            <div class="swiper-slide">
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-1.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Linkedin</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">25<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-2.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Adobe</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>42</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">17<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-3.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Dailymotion</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>46</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">65<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-4.png')}}"></div>
                    <div class="text-info-right">
                      <h4>NewSum</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">25<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-5.png')}}"></div>
                    <div class="text-info-right">
                      <h4>PowerHome</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>87</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">34<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-6.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Whop.com</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">56<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-7.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Greewood</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>124</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">78<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-8.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Kentucky</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">98<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-9.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Qeuity</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>76</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">90<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-10.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Honda</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>89</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">34<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-5.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Toyota</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">26<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-3.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Lexuxs</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>27</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">54<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-6.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Ondo</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">58<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-2.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Square</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>16</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">37<span> Open Jobs</span></span></div>
                  </div></a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="careerIn" src="{{asset('assets/imgs/brands/brand-8.png')}}"></div>
                    <div class="text-info-right">
                      <h4>Vista</h4><img alt="careerIn" src="{{asset('assets/imgs/template/icons/star.svg')}}"><img alt="careerIn" src="assets/imgs/template/icons/star.svg"><img alt="careerIn" src="assets/imgs/template/icons/star.svg"><img alt="careerIn" src="assets/imgs/template/icons/star.svg"><img alt="careerIn" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>97</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">Lipa City, Batangas</span><span class="font-xs color-text-mutted float-end mt-5">43<span> Open Jobs</span></span></div>
                  </div></a></div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next swiper-button-next-1"></div>
        <div class="swiper-button-prev swiper-button-prev-1"></div>
      </div>
    </div>
  </section>
 
 
 
  <script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
</main>
  
@endsection