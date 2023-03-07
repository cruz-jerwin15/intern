@extends('Layout.header')

@section('content')
<main class="main">
    <section class="pt-100 login-register">
      <div class="container"> 
        <div class="row login-register-cover">
          <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
            <div class="text-center">
              <p class="font-sm text-brand-2"> <h3>Register</h3> </p>
              {{-- <h2 class="mt-10 mb-5 text-brand-1">Start for free Today</h2>
              <p class="font-sm text-muted mb-30">Access to all features. No credit card required.</p>
              <button class="btn social-login hover-up mb-20"><img src="assets/imgs/template/icons/icon-google.svg" alt="jobbox"><strong>Sign up with Google</strong></button> --}}
              {{-- <div class="divider-text-center"><span>Or continue with</span></div> --}}
            </div>
            @include('Message.index')
            <form class="login-register text-start mt-20" action={{ route('register.store') }} method="POST">
                @csrf
              
              <div class="form-group">
                <label class="form-label" for="input-4">Email *</label>
                <input class="form-control" id="input-4" type="email" required="" name="email" placeholder="juandelacruz@gmail.com">
              </div>
              <div class="form-group">
                <label class="form-label" for="input-5">Password *</label>
                <input class="form-control" id="input-5" type="password" required="" name="password" placeholder="************">
              </div>
              <div class="form-group">
                <label class="form-label" for="input-6">Re-Password *</label>
                <input class="form-control" id="input-6" type="password" required="" name="repassword" placeholder="************">
              </div>
              <div class="form-group">
                <label class="form-label" for="input-7">Register as *</label>
                <select class="form-control" id="input-7" required="" name="usertype">
                  @if(count($priveleges)>0)
                    @foreach ($priveleges as $key => $privelege)
                      <option value="{{$privelege->privelege_id}}">{{strtoupper($privelege->privelege_name)}}</option>
                    @endforeach
                  @endif
              
                </select>
              </div>
              <div class="login_footer form-group d-flex justify-content-between">
                {{-- <label class="cb-container">
                  <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
                </label><a class="text-muted" href="page-contact.html">Lean more</a> --}}
              </div>
              <div class="form-group">
                <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Submit &amp; Register</button>
              </div>
              <div class="text-muted text-center">Already have an account? <a href="/signin">Sign in</a></div>
            </form>
          </div>
          <div class="img-1 d-none d-lg-block"><img class="shape-1" src="{{asset('assets/imgs/page/login-register/img-1.svg')}}" alt="JobBox"></div>
          <div class="img-2"><img src="{{asset('assets/imgs/page/login-register/img-2.svg')}}" alt="JobBox"></div>
        </div>
      </div>
    </section>
  </main>
@endsection