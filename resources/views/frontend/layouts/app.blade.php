<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$settings->site_name}}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('public/frontend/css/masum4it.css') }}">
    <script src="https://kit.fontawesome.com/df01d4c991.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{ asset('storage/app/'.$settings->icon) }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .marquee {
            white-space: nowrap;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        .marquee-items {
            display: inline-block;
            padding: 1rem;
            animation: marquee 20s linear infinite;
        }
    </style>
</head>

<body class="bg-cover bg-center bg-no-repeat noto-serif-bengali-700"
    style="background-image: url('public/frontend/background/bg.jpg'); ">



    <div class="container mx-auto">
        @include('frontend.layouts.header')
        @yield('main_content')
        @include('frontend.layouts.footer')
    </div>


    <div class="w-full overflow-hidden marquee  shadow-lg bg-gray-900 text-yellow-500 border-t-4 border-green-500">
        <div class="marquee-items">
            @foreach ($notices as $notice)
            <span class="mx-4"><i class="fa-solid fa-circle-exclamation mr-2"></i>{{$notice->notice}}</span>
            @endforeach


        </div>
    </div>
    {{-- script --}}

    <script src="{{ asset('public/frontend/js/masum4it.js') }}"></script>
    <script>
        function limitLength(input) {
            if (input.value.length > 17) {
                input.value = input.value.slice(0, 17);
            }
        }

        function ProfileImage(event) {
            const input = event.target;
            const preview = document.getElementById('profilePreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'inline-block';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        }
    </script>


</body>

</html>