<nav
    class="bg-white text-black p-4 flex justify-between items-center sticky top-0 z-50 shadow-lg rounded border-t-2 border-r-2 border-l-2 border-green-500">
    <div>
        <a href="#" class="font-bold text-lg"><img src="{{ asset('public/frontend/logo/upbriity logo.svg') }}"
                class="h-10" alt="Upobritty Logo" /></a>
    </div>
    <div class="hidden md:block"> <!-- Hide on small screens -->
        <ul class="flex space-x-4">
            <li><a href="#" class="hover:text-gray-400">হোম</a></li>
            <li><a href="#" class="hover:text-gray-400">আমাদের সম্পর্কে</a></li>
            <li><a href="#" class="hover:text-gray-400">নোটিশ বোর্ড</a></li>
            <li><a href="#" class="hover:text-gray-400">আমাদের সাথে যোগাযোগ</a></li>
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
        <li><a href="#" class="hover:text-gray-400">আমাদের সম্পর্কে</a></li>
        <hr>
        <li><a href="#" class="hover:text-gray-400">নোটিশ বোর্ড</a></li>
        <hr>
        <li><a href="#" class="hover:text-gray-400">আমাদের সাথে যোগাযোগ</a></li>
    </ul>
</div>
