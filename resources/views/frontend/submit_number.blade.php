@extends('frontend.layouts.app')
@section('main_content')
<!-- Alerts Item -->
@if (session('apply_student'))

<div
    class="flex w-full border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] px-7 py-8 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-9">
    <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399]">
        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
                fill="white" stroke="white"></path>
        </svg>
    </div>
    <div class="w-full">
        <h5 class="mb-3 font-bold text-success">
            যে নাম্বারে উপবৃত্তির টাকা গ্রহন করতে চাচ্ছেন সেই নাম্বারটি দিন।
        </h5>
        <h4 class="text-red-600">অবশ্যই বিকাশ নাম্বার হতে হবে
        </h4>


        <form class="max-w-sm mx-auto" action="{{route('payment_info_input')}}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="info" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">টাকা গ্রহন এর
                    নাম্বার</label>
                <input type="text" id="info" name="info"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="টাকা গ্রহন এর
                    নাম্বার লিখুন" required />
            </div>


            <input type="hidden" id="apply_student_id" name="apply_student_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ session('apply_student') }}" />

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>



    </div>
</div>
@endif
@endsection