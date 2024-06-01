<nav
    class="bg-white text-black p-4 flex justify-between items-center sticky top-0 z-50 shadow-lg rounded border-t-2 border-r-2 border-l-2 border-green-500">
    <div>
        <a href="{{route('home')}}" class="font-bold text-lg"><img src="{{ asset('storage/app/'.$settings->logo) }}"
                class="h-10" alt="Upobritty Logo" /></a>
    </div>
    <div class="hidden md:block">
        <!-- Hide on small screens -->
        <ul class="flex space-x-4">
            <li><a href="{{route('home')}}" class="hover:text-gray-400">হোম</a></li>
            <li><a href="{{route('download_application')}}" class="hover:text-gray-400">ডাউনলোড অ্যাপ্লিকেশন</a></li>
            <li><a href="{{route('application_status')}}" class="hover:text-gray-400">আবেদনপত্রের বর্তমান অবস্থা</a>
            </li>

            @foreach ($pages as $page)
            <li><a href="#" class="hover:text-gray-400">{{$page->page_name}}</a></li>
            @endforeach




            <li><a href="{{route('notice_board_list')}}" class="hover:text-green-700">নোটিশ বোর্ড</a></li>


        </ul>
    </div>
    <!-- Mobile menu button -->
    <div class="md:hidden">
        <button id="mobile-menu-button" class="text-black hover:text-gray-400 focus:outline-none ">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                </path>
            </svg>
        </button>
    </div>
</nav>
<!-- Mobile menu -->
<div id="mobile-menu" class="md:hidden hidden bg-white text-black p-4 fixed shadow-lg">
    <ul class="flex flex-col space-y-2">
        <li><a href="#" class="hover:text-gray-400">হোম</a></li>
        <hr>
        @foreach ($pages as $page)
        <li><a href="#" class="hover:text-gray-400">{{$page->page_name}}</a></li>
        <hr>
        @endforeach

        @role('student')

        <li><a href="{{route('student_dashboard')}}" class="hover:text-green-700">ড্যাশবোর্ড</a></li>
        @else
        <li><a href="{{route('login')}}" class="hover:text-red-600">লগ ইন</a></li>
        @endrole
        <hr>
    </ul>
</div>