<footer class="bg-gray-900 text-white p-4 mb-9 rounded mx-auto">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
            <p class="text-center">&copy; {{ date('Y') }} {{$settings->footer_name}} </p>
            <span class="text-yellow-400 text-center"><a href="http://masum4it.pro">স্থাপত্যবিদ্যায়-
                    মাসুম
                    ফর আইটি</a></span>
            <ul class="flex flex-wrap justify-center space-x-4">
                <li><a href="{{route('home')}}" class="hover:text-gray-400">হোম</a></li>

                @foreach ($pages as $page)
                <li><a href="#" class="hover:text-gray-400">{{$page->page_name}}</a></li>
                @endforeach


                @role('student')

                <li><a href="{{route('student_dashboard')}}" class="hover:text-green-700">ড্যাশবোর্ড</a></li>
                @else
                <li><a href="{{route('login')}}" class="hover:text-red-600">লগ ইন</a></li>
                @endrole


            </ul>
        </div>
    </div>
</footer>