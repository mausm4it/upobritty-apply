<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upobritty.com</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('public/frontend/css/masum4it.css') }}">
    <script src="https://kit.fontawesome.com/df01d4c991.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{ asset('public/frontend/logo/upbriity logo.svg') }}">
</head>

<body class="bg-cover bg-center bg-no-repeat noto-serif-bengali-700"
    style="background-image: url('public/frontend/background/bg.jpg'); ">



    <div class="container mx-auto">
        @include('frontend.layouts.header')
        @yield('main_content')
        @include('frontend.layouts.footer')
    </div>




    <div
        class="marquee bg-white text-black font-bold py-2 px-4 rounded fixed bottom-0 w-full border-t-2  border-green-500 ">
        <span class="mr-8"><i class="fa-solid fa-circle-exclamation text-black"></i> এইচ.এস.সি ও অনার্সের উপবৃত্তি
            কার্যক্রম শুরু হয়েছে ১৩ মে ২০২৪</span>
    </div>


    {{-- script --}}

    <script src="{{ asset('public/frontend/js/masum4it.js') }}"></script>


</body>

</html>
