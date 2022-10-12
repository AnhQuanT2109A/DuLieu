@extends('front.layout.master')

@section('title', 'login')

@section('body')

    <!--Breadcrumb Begin-->
{{--    <div class="breacrumb-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="breadcrumb-text">--}}
{{--                        <a href="#"><i class="fa fa-home">Home</i></a>--}}

{{--                        <span> Login </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="register-login-section spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                   <h2>Login</h2>
                   <form action="./account/login" method="post">
                       @csrf
                     <div class="group-input">
                        <label for="email">Email address *</label>
                        <input type="email" id="email" name="email">
                     </div>
                     <div class="group-input">
                        <label for="pass">PassWords *</label>
                        <input type="password" id="pass" name="password">
                     </div>
                     <div class="group-input gi-check">
                       <div class="gi-more">
                          <label for="save-pass">
                             Save PassWords
                             <input type="checkbox" id="save-pass" name="remember">
                             <span class="checkmark"></span>
                          </label>
                          <a href="#" class="forget-pass">Forget your PassWords</a>
                       </div>
                     </div>
                     <button type="submit " class="site-btn login-btn"> Sign In</button>
                   </form>
                   <div class="switch-login">
                       <a href="./register" class="or-login">Or Create An Account</a>
                   </div>
                </div>
              </div>
          </div>
      </div>
    </div>


@endsection
