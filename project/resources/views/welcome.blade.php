<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Order Directory For Freelancers</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */


        a {
            background-color: transparent
        }


        a {
            color: inherit;
            text-decoration: inherit
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }


        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }


        .text-sm {
            font-size: .875rem
        }


        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }


        .ml-4 {
            margin-left: 1rem
        }


        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }


        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }


        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }


        .underline {
            text-decoration: underline
        }


        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }


            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }


        }

        @media (min-width: 768px) {


            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {


            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

        }
        html {
            scroll-behavior: smooth;
        }

        * {
            box-sizing: border-box;
            background-color: #f7fafc;
        }

        body {
            font-family: Verdana, sans-serif;
        }


        img {
            vertical-align: middle;
        }


        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }

        .cont {
            max-width: 50%;
        }

        .progressbar li {
            list-style-type: none;
            width: 25%;
            float: left;
            font-size: 12px;
            position: relative;
            text-align: center;
            text-transform: uppercase;

        }

        .mediumtext {
            font-size: 20px;
            font-weight: normal;
        }



        .icon-bar {
            position: fixed;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
        }

        .facebook {
            background: #3B5998;
        }

        .twitter {
            background: #55ACEE;
        }

        .linkedin {
            background: #007bb5;
        }
        .img{
            margin-left: 25%;
        }
        .but{
            max-width: 10%;
            justify-content: center;
            margin-left:45%;
            margin-top: 25px;
            margin-bottom: 25px;
        }
    </style>

</head>


<body>

<script>
    $(function(){
        $('#slideshow > div:gt(0)').hide();
        setInterval(function(){
            $('#slideshow > div:first')
                .fadeOut(2000)
                .next()
                .fadeIn(2000)
                .end()
                .appendTo('#slideshow');
        }, 4000);
    });
</script>

<div class="flex justify-center  top-0 ">
    <img src="{{asset('images/logo4.png')}}" alt="logo">

</div>


<div class="icon-bar">
<a href="https://www.agh.edu.pl/" class="fa fa-facebook facebook hover:bg-blue-500"></a>
<a href="https://www.agh.edu.pl/" class="fa fa-twitter twitter hover:bg-blue-200"></a>
    <a href="https://www.agh.edu.pl/" class="fa fa-linkedin linkedin hover:bg-blue-300"></a>
</div>


<h2 class="flex justify-center text-green-900 font-semibold " style="font-size: 48px;">How it works?</h2>

<div class="flex justify-center  bg-gray-100 ">
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



<div class="rounded-lg shadow text-white bg-green-900 max-w-20 block py-2 px-3 text-center hover:text-yellow-300 but" >
    @auth
        <a href="{{url('/dashboard')}}"> Try it now!</a>
    @else
        <a href="{{route('register')}}"> Try it now!</a>
    @endauth
</div>


<div class="relative flex items-top justify-center mx-auto bg-gray-100  dark:bg-gray-900 sm:items-center sm:px-6">
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

 {{--  <div class="grid  md:grid-cols-2">
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg  ">
                <div id="slideshow">
                    <div>
                        <img src="{{asset('images/image5.jpeg')}}" style="width:100%" class="top_pic">
                    </div>
                    <div>
                        <img src="{{asset('images/image5.jpeg')}}" style="width:100%" class="top_pic">
                    </div>
                    <div>
                        <img src="{{asset('images/image5.jpeg')}}" style="width:100%" class="top_pic">
                    </div>
                    <div>
                        <img src="{{asset('images/image5.jpeg')}}" style="width:100%" class="top_pic">
                    </div>
                </div>
            </div>




    </div>
--}}
</div>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>



</body>
</html>



{{--
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
