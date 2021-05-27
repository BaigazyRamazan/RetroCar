<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('')}}css/cs.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap&libraries=&v=weekly"
      defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
   
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
            />
            <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div id="header">
        <a href="{{route('index',app()->getLocale())}}"> <img src="{{asset('images/4.png')}}" alt=""  width="50%"></a>
        <div id="ww"><h6>{{__('Service')}}</h6></div>
        <div id="ww"><h6>{{__('CarShow')}}</h6></div>
        <div id="ww"><a href="{{route('model',app()->getLocale())}}" style="color: white; text-decoration: none;"><h6>{{__('Model')}}</h6></a></div>
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

    <div id="secondpage">
         <img src="{{asset('images/fg.jpg')}}" alt="" width="100%">
         <h1>{{__('Contact us')}}</h1>
         <p>
         {{__('Contact us')}}<br>
         {{__('Retro Classic Car')}}<br><br>
            
         {{__('The Forge')}}<br>
         {{__('Emerson Close')}}<br>
         {{__('Swainby')}}<br>
         DL6 3EL<br>
         {{__('North Yorkshire')}}<br>
         {{__('United Kingdom')}}<br><br>
            
         {{__('Opening Times')}} <br><br>
            
         {{__('Monday to Saturday 10AM – 6PM Appointment Only')}}.<br><br>
            
         {{__('Sunday 10AM – 4PM Appointment Only')}}.<br><br>
            
         {{__('Showroom Appointment’s | Our Showroom is open strictly by appointment only')}}<br> 
         – {{__('Please contact us before traveling to confirm the car you are interested in is')}}<br>
          {{__('still available and to make arrangements to have the showroom open')}}.<br><br>
         </p>

         <h5>
         {{__('Telephone')}}<br>

         {{__('Call Adrian')}} – 07939 511 180<br>
            
         {{__('Call Sam')}} – 07930 007151<br>
            
         {{__('Email')}}<br>
            
         {{__('Adrian')}} – info@retroclassiccar.com<br>
            
         {{__('Sam')}} – sam@retroclassiccar.com<br>
         </h5>

         <h3>
         {{__('Feedback')}}:
         </h3>
        <form method="POST" action="{{route('feedback',app()->getLocale())}}">
            @csrf
            <textarea name="feedback" id="feedback" cols="30" rows="5"></textarea><br>
            <button type="submit">{{__('Send feedback')}}</button>
        </form>
    </div>

   
</body>
</html>