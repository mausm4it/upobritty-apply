@extends('frontend.layouts.app')
@section('main_content')
<!-- Alerts Item -->
<meta name="csrf-token" content="{{ csrf_token() }}" />
@if ($apply_student)
<div
    class="flex w-full border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] px-7 py-8 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-9">
    <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399]">
        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
                fill="white" stroke="white"></path>
        </svg>
    </div>
    <div class="w-full text-center">
        <h5 class="mb-3 font-bold text-success">
            স্বাগতম {{ $apply_student->bangla_name }} ! আপনার এপ্লিকেশন এর জন্য পেমেন্ট করুন ।
        </h5>
        <h4 class="text-red-600">আপনার ইউজার আইডি ও পাসওয়ার্ড পেতে বিকাশের মাধ্যমে পেমেন্ট করুন ।
        </h4>

        <img class="mx-auto pl-2" width="150" src="{{asset('storage/app/logo/bkash.png')}}" alt="">

        <button
            class="border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[95%] px-5 py-4 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-9]">
            <a class="text-white" href="{{route('bkash-create-payment')}}">পেমেন্ট করতে ক্লিক করুন</a>
        </button>
    </div>
</div>
@endif
@endsection