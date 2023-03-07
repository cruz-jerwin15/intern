@extends('Layout.header')

@section('content')
<main class="main">
    <section class="pt-100 login-register">
      <div class="container"> 
        <div class="row login-register-cover">
          <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
            <div class="text-center">
              <p class="font-sm text-brand-2">Welcome back! </p>
              <h2 class="mt-10 mb-5 text-brand-1">Member Sign In</h2>
              
            </div>
            @include('Message.index')
            <form class="login-register text-start mt-20" action={{ route('signin.store') }} method="POST">
                @csrf
              <div class="form-group">
                <label class="form-label" for="input-1">Email address *</label>
                <input class="form-control" id="input-1" type="text" required="" name="email" placeholder="juandelacruz@gmail.com">
              </div>
              <div class="form-group">
                <label class="form-label" for="input-4">Password *</label>
                <input class="form-control" id="input-4" type="password" required="" name="password" placeholder="************">
              </div>
              
              <div class="form-group">
                <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Sign In</button>
              </div>
              <div class="text-muted text-center">Don't have an Account? <a href="/register">Register</a></div>
            </form>
          </div>
          <div class="img-1 d-none d-lg-block"><img class="shape-1" src="assets/imgs/page/login-register/img-4.svg" alt="JobBox"></div>
          <div class="img-2"><img src="assets/imgs/page/login-register/img-3.svg" alt="JobBox"></div>
        </div>
      </div>
    </section>
  </main>
    
@endsection