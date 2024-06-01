<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Upobritty
    </title>
    <link rel="icon" type="image/png" href="{{ asset('storage/app/'.$settings->icon) }}">
    <link href="{{ asset('public/backend/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/masum4it.css') }}" rel="stylesheet">
    <script src="{{ asset('public/backend/masum4it.js') }}" nonce="d9eb3e08-fe3f-44b4-a2d7-731a27731580"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('public/frontend/css/masum4it.css') }}">
    <script src="https://kit.fontawesome.com/df01d4c991.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <style>
        .loader {
            border-top-color: #3498db;
            animation: spin 1s infinite linear;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>

</head>

<body
    x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">
    <div x-show="loaded"
        x-init="window.addEventListener('DOMContentLoaded', () => { setTimeout(() => loaded = false, 500) })"
        class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black ">
        <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent">
        </div>
    </div>

    <div class="flex h-screen overflow-hidden noto-serif-bengali-700">
        @include('layouts.sidebar')

        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">

            @include('layouts.navigation')
            @include('admin.alert.index')

            <main>
                @yield('main_content')
            </main>

        </div>

    </div>
    <script defer src="{{ asset('public/backend/bundle.js') }}"></script>
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

function ProttoyonImage(event) {
const input = event.target;
const preview = document.getElementById('prottoyonPreview');

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


        //Gurdian Toggle Form Show Hide
        document.getElementById('guardianCheckbox').addEventListener('change', function() {
        var form = document.getElementById('guardianForm');
        if (this.checked) {
        form.classList.remove('hidden');
        } else {
        form.classList.add('hidden');
        }
        });
        
        
        
        //freedomFighter Toggle Form Show Hide
        document.getElementById('freedomFighterCheckbox').addEventListener('change', function() {
        var form = document.getElementById('freedomFighterForm');
        if (this.checked) {
        form.classList.remove('hidden');
        } else {
        form.classList.add('hidden');
        }
        });
        
        
        //minorities Toggle Form Show Hide
        document.getElementById('minoritiesCheckbox').addEventListener('change', function() {
        var form = document.getElementById('minoritiesForm');
        if (this.checked) {
        form.classList.remove('hidden');
        } else {
        form.classList.add('hidden');
        }
        });
        
        //otizom Toggle Form Show Hide
        document.getElementById('otizomCheckbox').addEventListener('change', function() {
        var form = document.getElementById('otizomForm');
        if (this.checked) {
        form.classList.remove('hidden');
        } else {
        form.classList.add('hidden');
        }
        });



        //payment status show/hide

 

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
        document.getElementById('download-btn').addEventListener('click', function () {
        // Show the loader
        document.getElementById('loader').classList.remove('hidden');
        
        // Define the element that needs to be converted to PDF
        const element = document.getElementById('content');
        
        // Options for the PDF generation
        const opt = {
        margin: 0.5,
        filename: 'my_application.pdf',
        image: { type: 'jpeg', quality: 1 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
        };
        
        // Use html2pdf to convert the element to PDF
        html2pdf().from(element).set(opt).save().then(() => {
        // Hide the loader once the PDF has been generated and download starts
        document.getElementById('loader').classList.add('hidden');
        }).catch((error) => {
        console.error('PDF generation error:', error);
        // Hide the loader if an error occurs
        document.getElementById('loader').classList.add('hidden');
        });
        });
    </script>

</body>

</html>