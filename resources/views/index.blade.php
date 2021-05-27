<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- <script src="js/wow.min.js"></script> -->
    <!-- <script>
        new WOW().init();
    </script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body onload="load()">
    <div id="header">
        <a class="animate__animated animate__fadeInLeft" href="{{route('index',app()->getLocale())}}"> <img src="{{asset('images/4.png')}}" alt=""  width="50%"></a>
        <div id="ww"><h6>{{__('Service')}}</h6></div>
        <div id="ww" class="model"><a href="{{route('model',app()->getLocale())}}" style="color: white; text-decoration: none;"><h6>{{__('Model')}}</h6></a></div>
        <div id="ww" class="contact"><a href="{{route('contact',app()->getLocale())}}" style="color: white; text-decoration: none;"><h6>{{__('Contact')}}</h6></a></div>
        <div  class="model">
            <a href="{{route(Route::currentRouteName(),'en')}}" style="color: white; text-decoration: none;"><h6 style="display:inline;">EN</h6></a>
            <a href="{{route(Route::currentRouteName(),'ru')}}" style="color: white; text-decoration: none;"><h6>RU</h6></a>
        </div>
        @guest
            @if (Route::has('login'))
            @endif
            @if (Route::has('register'))
            @endif
        @else
            <div class="nav-item dropdown">
                <h6>
                    <a style="color:white;font-size:1 rem" id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout',app()->getLocale()) }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST" class="d-none">
                            @csrf
                        </form>
                     </div>
                </h6>

                
            </div>
        @endguest
    </div>
    <div class="firstpage">
        <img src="{{asset('images/q1.jpg')}}" width="100%">
        <h1 id="q1text">{{__('Welcome')}}!</h1>
        <p>{{__('Retro Classic Car is a family owned Classic Car dealership. Established now for over 20 years we are situated in the village of')}}<br> 
            {{__('Swainby in the scenic North York Moors National Park. Our private and secure showroom offers one of the leading selections')}}<br> 
            {{__('of the most sought-after and iconic American classics in the UK.')}}
        </p>
        <img id="q4" src="{{asset('images/q4.jpg')}}" width="100%"> 
        <h1 id="q4text">{{__('CLASSIC CARS OF THE HISTORY')}}</h1>
        <div class="block">
        @guest
            @if (Route::has('register'))
                <form id="register" method="POST" action="{{ route('register',app()->getLocale()) }}" class="registerForm">
                    @csrf
                    <h6>{{__('Sign-up for our newsletter to hear first about our latest stock, news and more.')}}</h6>
                    <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>
                    
                    <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>

                    <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>

                    <input placeholder="Confirm password" class="form-control" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    <br>

                    <button type="submit" class="btn btn-dark">
                        {{ __('Register') }}
                    </button><br>
                    <div style="color:white;display:inline;text-align:center;margin-left: 40px;"><br>
                        <p style="color:#007bff;display:inline;" onclick="showLogin()">{{__('Log in')}}</p>, {{__('if you have a account')}}.
                    </div>
                </form>
            @endif
            
            @if (Route::has('login'))
            <form  id="login" style="display:none;" action="{{route('login',app()->getLocale())}}" method="POST" class="loginForm">
                @csrf
                <h6>{{__('Log In')}}</h6>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>

                <button type="submit" class="btn btn-dark">
                    {{ __('Login') }}
                </button> <br>

                <div style="color:white;display:inline;text-align:center;margin-left: 130px;"><br>
                    <p style="color:#007bff;display:inline;" onclick="showSignUp()">{{__('Sign Up')}}</p>, {{__('if you have not a account')}}.
                </div>
            </form>
            @endif
        @else
        @endguest
        </div>
    </div>
    </div>
    <script>
        function showLogin(){
            document.getElementById('login').style.display = "block";
            document.getElementById('register').style.display = "none";
        }

        function showSignUp(){
            document.getElementById('login').style.display = "none";
            document.getElementById('register').style.display = "block";
        }
    </script>
</body>
</html>