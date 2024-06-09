<footer class="bg-gray-900 text-white p-4 mb-9 rounded mx-auto">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
            <p class="text-center">&copy; {{ date('Y') }} {{$settings->footer_name}} </p>
            <span class="text-yellow-400 text-center"><a href="http://masum4it.pro">স্থাপত্যবিদ্যায়-
                    মাসুম
                    ফর আইটি</a></span>
            <ul class="flex space-x-4">
                <li><a href="{{route('home')}}" class="hover:text-gray-400">হোম</a></li>
                <li><a href="{{route('download_application')}}" class="hover:text-gray-400">ডাউনলোড অ্যাপ্লিকেশন</a>
                </li>
                <li><a href="{{route('application_status')}}" class="hover:text-gray-400">আবেদনপত্রের বর্তমান অবস্থা</a>
                </li>

                @foreach ($pages as $page)
                <li><a href="#" class="hover:text-gray-400">{{$page->page_name}}</a></li>
                @endforeach




                <li><a href="{{route('notice_board_list')}}" class="hover:text-green-700">নোটিশ বোর্ড</a></li>


            </ul>
        </div>
    </div>
</footer>