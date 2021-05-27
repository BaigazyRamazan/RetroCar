<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/model.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap&libraries=&v=weekly"
      defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div id="header">
        <a href="{{route('index',app()->getLocale() )}}"> <img src="{{asset('images/4.png')}}" alt=""  width="50%"></a>
        <div id="ww"><h6>{{__('Service')}}</h6></div>
        <div id="ww"><h6>{{__('CarShow')}}</h6></div>
        <div id="ww" class="model"><a href="{{route('model',app()->getLocale() )}}" style="color: white; text-decoration: none;"><h6>{{__('Model')}}</h6></a></div>
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
    <img src="{{asset('images/n1.jpg')}}" alt="" width="100%">
    <img src="{{asset('images/n2.jpg')}}" alt="" width="100%">

    <div class="md">
        <a href="">{{__('View car')}}</a>
    </div>

    <div class="mde">
        <a href="">{{__('View car')}}</a>
    </div>
</body>
</html>