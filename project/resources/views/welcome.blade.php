<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Order Directory For Freelancers</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
   {{-- <script>
        let liczba=0;
        animacja();
        function animacja(){
            let i;
            let x=document.getElementById("sliderimg");
            for(i-0; i<x.length; i++){
                x[i].style.display="none";
            }
            liczba++;
            if(liczba>x.length)
            {
                liczba=1
            }
            x[liczba-1].style.display="block";
            setTimeout(animacja, 2000);
        }
    </script>--}}
</head>


<body>

<div class="flex logo  top-0 ">
    <img src="{{asset('images/logo4.png')}}" alt="logo">

</div>

<div class="icon-bar">
<a href="https://www.agh.edu.pl/" class="fa fa-facebook facebook hover:bg-blue-500"></a>
<a href="https://www.agh.edu.pl/" class="fa fa-twitter twitter hover:bg-blue-200"></a>
    <a href="https://www.agh.edu.pl/" class="fa fa-linkedin linkedin hover:bg-blue-300"></a>
</div>

<h2 class="flex justify-center text-green-900 font-semibold " style="font-size: 48px;">How it works?</h2>


<div class="flex justify-center  bg-color-gray-100 ">
    <div class="cont">
        <ul class="progressbar ">
            <li><img src="{{asset('images/image1.png')}}" class="img">
                <br>
                <a class="mediumtext">Post a job (it’s free)</a>
                <br>
                Tell us about your project. Upwork connects you with top talent around the world, or near you.
            </li>
            <li><img src="{{asset('images/image2.png')}}" class="img">
                <br>
                <a class="mediumtext">Freelancers come to you</a>
                <br>
                Get qualified proposals within 24 hours. Compare bids, reviews, and prior work. Interview favorites and
                hire the best fit.
            </li>
            <li><img src="{{asset('images/image3.png')}}" class="img">
                <br>
                <a class="mediumtext"> Collaborate easily</a>
                <br>
                Use Upwork to chat or video call, share files, and track project milestones from your desktop or mobile.
            </li>
            <li><img src="{{asset('images/image4.png')}}" class="img">
                <br>
                <a class="mediumtext "> Payment simplified</a>
                <br>
                Pay hourly or fixed-price and receive invoices through Upwork. Pay for work you authorize.
            </li>
        </ul>
    </div>
</div>


<div class="my_link_button">

    @auth
        <x-link-button href="{{url('/dashboard')}}">Try it now!</x-link-button>
    @else
        <x-link-button href="{{route('register')}}">Try it now!</x-link-button>
    @endauth

</div>


<div class="relative flex items-top justify-center mx-auto bg-color-gray-100  dark:bg-gray-900 sm:items-center sm:px-6">
    @if (Route::has('login'))
        <div class=" fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>


<h2 class="flex justify-center text-green-900 font-semibold m-20" style="font-size: 48px;">Opinions</h2>
<div>
 <x-slider></x-slider>
</div>


<div class="flex flex-col w-full sm:max-w-md my-8 px-6 py-4 bg-color-gray-100 shadow-md overflow-hidden sm:rounded-lg" style="margin: auto; margin-bottom: 40px">
    <div>
        Do you have any questions?
    </div>
    <div>
        You can send an e-mail to
    </div>
    <div class="text-gray-600">
        <div>
            orderdirectiory@gmail.com
        </div>
        <div>
            directioryfeelancers@gmail.com
        </div>
    </div>

    <div>
        You can also call our consultants
    </div>
    <div class="text-gray-600">
        <div>
            +48 111 111 111
        </div>
        <div>
            +48 111 222 111
        </div>
    </div>


</div>

</body>
</html>


{{--

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

 <div class="mt-8 bg-white text-green-600 overflow-hidden text text-center shadow sm:rounded-lg">
            Why We?
            <div class="myText1 fade  bg-white">
                <ul class="bg-white small-text ">
                    <a class="mediumtext">Talk to One of Our Industry Experts</a>
                    Our director of engineering will work with you to understand your goals, technical needs, and team
                    dynamics.
                </ul>
            </div>
            <div class="myText1 fade   bg-white">
                <ul class="bg-white small-text ">
                    <a class="mediumtext">Work With Hand-Selected Talent</a>
                    Within days, You will find the right developer for your project. Average time to match is under 24
                    hours.
                </ul>
            </div>
            <div class="myText1 fade   bg-white">
                <ul class="bg-white small-text ">
                    <a class="mediumtext">The Right Fit, Guaranteed</a>
                    Work with your new developer for a trial period (pay only if satisfied), ensuring they're the right
                    fit before starting the engagement.
                </ul>
            </div>
        </div>


  <div class="mt-8 bg-white text-green-600 overflow-hidden text text-center shadow sm:rounded-lg">
            Why We are better?
            <div class="myText2 fade   bg-white">
                <ul class="bg-white small-text ">
                    <a class="mediumtext">Our Katalog is GDPR ready</a>
                    We believe data privacy is one of the most important aspects of business. Our users’ and partners’ data is protected in accordance with GDPR.
                </ul>
            </div>
            <div class="myText2 fade   bg-white">
                <ul class="bg-white small-text ">
                    <a class="mediumtext">Competition</a>
                    See how they compare to other developers worldwide. Our unique scoring algorithm helps you identify the rising stars.
                </ul>
            </div>
            <div class="myText2 fade   bg-white">
                <ul class="bg-white small-text ">
                    <a class="mediumtext">Exponentially growing community</a>
                    1+ users join us every month from Poland. You can access new job-seeker talent every year.
                </ul>
            </div>
        </div>




--}}
