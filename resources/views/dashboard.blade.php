@extends('layouts.app')
@section('main_content')
<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
        <!-- Student Apply  Start -->
        <a href="{{route('apply_list')}}">
            <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                    <svg class="fill-current text-primary" width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.2875 0.506226H3.7125C2.75625 0.506226 1.96875 1.29373 1.96875 2.24998V15.75C1.96875 16.7062 2.75625 17.5219 3.74063 17.5219H14.3156C15.2719 17.5219 16.0875 16.7344 16.0875 15.75V2.24998C16.0313 1.29373 15.2438 0.506226 14.2875 0.506226ZM14.7656 15.75C14.7656 16.0312 14.5406 16.2562 14.2594 16.2562H3.7125C3.43125 16.2562 3.20625 16.0312 3.20625 15.75V2.24998C3.20625 1.96873 3.43125 1.74373 3.7125 1.74373H14.2875C14.5688 1.74373 14.7938 1.96873 14.7938 2.24998V15.75H14.7656Z"
                            fill=""></path>
                        <path
                            d="M12.7965 2.6156H9.73086C9.22461 2.6156 8.80273 3.03748 8.80273 3.54373V7.25623C8.80273 7.76248 9.22461 8.18435 9.73086 8.18435H12.7965C13.3027 8.18435 13.7246 7.76248 13.7246 7.25623V3.5156C13.6965 3.03748 13.3027 2.6156 12.7965 2.6156ZM12.4309 6.8906H10.0684V3.88123H12.4309V6.8906Z"
                            fill=""></path>
                        <path
                            d="M4.97773 4.35938H7.03086C7.36836 4.35938 7.67773 4.07812 7.67773 3.7125C7.67773 3.34687 7.39648 3.09375 7.03086 3.09375H4.94961C4.61211 3.09375 4.30273 3.375 4.30273 3.74063C4.30273 4.10625 4.61211 4.35938 4.97773 4.35938Z"
                            fill=""></path>
                        <path
                            d="M4.97773 7.9312H7.03086C7.36836 7.9312 7.67773 7.64995 7.67773 7.28433C7.67773 6.9187 7.39648 6.63745 7.03086 6.63745H4.94961C4.61211 6.63745 4.30273 6.9187 4.30273 7.28433C4.30273 7.64995 4.61211 7.9312 4.97773 7.9312Z"
                            fill=""></path>
                        <path
                            d="M13.0789 10.2374H4.97891C4.64141 10.2374 4.33203 10.5187 4.33203 10.8843C4.33203 11.2499 4.61328 11.5312 4.97891 11.5312H13.0789C13.4164 11.5312 13.7258 11.2499 13.7258 10.8843C13.7258 10.5187 13.4164 10.2374 13.0789 10.2374Z"
                            fill=""></path>
                        <path
                            d="M13.0789 13.8093H4.97891C4.64141 13.8093 4.33203 14.0906 4.33203 14.4562C4.33203 14.8218 4.61328 15.1031 4.97891 15.1031H13.0789C13.4164 15.1031 13.7258 14.8218 13.7258 14.4562C13.7258 14.0906 13.4164 13.8093 13.0789 13.8093Z"
                            fill=""></path>
                    </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-title-md font-bold text-black dark:text-white">
                            {{$total_apply}}
                        </h4>
                        <span class="text-sm font-medium">মোট অ্যাপ্লিকেশন</span>
                    </div>


                </div>
            </div>
        </a>

        <!--  Item End -->

        <!-- Student  Start -->
        <a href="{{route('students')}}">
            <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                    <svg class="fill-current text-primary" width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.0002 7.79065C11.0814 7.79065 12.7689 6.1594 12.7689 4.1344C12.7689 2.1094 11.0814 0.478149 9.0002 0.478149C6.91895 0.478149 5.23145 2.1094 5.23145 4.1344C5.23145 6.1594 6.91895 7.79065 9.0002 7.79065ZM9.0002 1.7719C10.3783 1.7719 11.5033 2.84065 11.5033 4.16252C11.5033 5.4844 10.3783 6.55315 9.0002 6.55315C7.62207 6.55315 6.49707 5.4844 6.49707 4.16252C6.49707 2.84065 7.62207 1.7719 9.0002 1.7719Z"
                            fill=""></path>
                        <path
                            d="M10.8283 9.05627H7.17207C4.16269 9.05627 1.71582 11.5313 1.71582 14.5406V16.875C1.71582 17.2125 1.99707 17.5219 2.3627 17.5219C2.72832 17.5219 3.00957 17.2407 3.00957 16.875V14.5406C3.00957 12.2344 4.89394 10.3219 7.22832 10.3219H10.8564C13.1627 10.3219 15.0752 12.2063 15.0752 14.5406V16.875C15.0752 17.2125 15.3564 17.5219 15.7221 17.5219C16.0877 17.5219 16.3689 17.2407 16.3689 16.875V14.5406C16.2846 11.5313 13.8377 9.05627 10.8283 9.05627Z"
                            fill=""></path>
                    </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-title-md font-bold text-black dark:text-white">
                            {{$total_student}}
                        </h4>
                        <span class="text-sm font-medium">মোট স্টুডেন্ট</span>
                    </div>


                </div>
            </div>
        </a>

        <!--  Item End -->

        <!-- Paid Apply list  Start -->

        <a href="{{route('paid_payment_apply_list')}}">
            <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                    <svg class="fill-current text-primary" width="18" height="19" viewBox="0 0 18 19" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_130_9787)">
                            <path
                                d="M15.8343 2.49902C15.8343 1.43027 14.9624 0.530273 13.8655 0.530273H4.13428C3.06553 0.530273 2.16553 1.40215 2.16553 2.49902V16.6178C2.16553 16.8428 2.30615 17.0678 2.50303 17.1803C2.6999 17.2928 2.95303 17.2646 3.1499 17.1521L4.55615 16.224L6.44053 17.4615C6.66553 17.6021 6.91865 17.6021 7.14365 17.4615L8.9999 16.224L10.8562 17.4615C10.9687 17.5459 11.0812 17.574 11.1937 17.574C11.3062 17.574 11.4468 17.5459 11.5312 17.4615L13.3874 16.224L14.7937 17.1803C14.9905 17.3209 15.2437 17.3209 15.4405 17.2084C15.6374 17.0959 15.778 16.8709 15.778 16.6459L15.8343 2.49902ZM14.0343 15.099C13.6687 14.8459 13.1905 14.8459 12.8249 15.099L11.2218 16.1678L9.61865 15.099C9.42178 14.9865 9.2249 14.9021 8.9999 14.9021C8.80303 14.9021 8.57803 14.9584 8.40928 15.099L6.80615 16.1678L5.20303 15.099C4.8374 14.8459 4.35928 14.8459 3.99365 15.099L3.45928 15.4365V2.49902C3.45928 2.10527 3.76865 1.7959 4.1624 1.7959H13.9218C14.3155 1.7959 14.6249 2.10527 14.6249 2.49902V15.4365L14.0343 15.099Z"
                                fill=""></path>
                            <path
                                d="M7.93106 3.79272H5.5123C5.1748 3.79272 4.89355 4.07397 4.89355 4.41147C4.89355 4.74897 5.1748 5.03022 5.5123 5.03022H7.93106C8.26856 5.03022 8.54981 4.74897 8.54981 4.41147C8.54981 4.07397 8.26856 3.79272 7.93106 3.79272Z"
                                fill=""></path>
                            <path
                                d="M12.347 3.79272H11.672C11.3345 3.79272 11.0532 4.07397 11.0532 4.41147C11.0532 4.74897 11.3345 5.03022 11.672 5.03022H12.347C12.6845 5.03022 12.9657 4.74897 12.9657 4.41147C12.9657 4.07397 12.6845 3.79272 12.347 3.79272Z"
                                fill=""></path>
                            <path
                                d="M5.5123 8.74275H7.05918C7.39668 8.74275 7.67793 8.4615 7.67793 8.124C7.67793 7.7865 7.39668 7.50525 7.05918 7.50525H5.5123C5.1748 7.50525 4.89355 7.7865 4.89355 8.124C4.89355 8.4615 5.14668 8.74275 5.5123 8.74275Z"
                                fill=""></path>
                            <path
                                d="M12.347 7.47717H11.672C11.3345 7.47717 11.0532 7.75842 11.0532 8.09592C11.0532 8.43342 11.3345 8.71467 11.672 8.71467H12.347C12.6845 8.71467 12.9657 8.43342 12.9657 8.09592C12.9657 7.75842 12.6845 7.47717 12.347 7.47717Z"
                                fill=""></path>
                            <path
                                d="M7.93106 11.1334H5.5123C5.1748 11.1334 4.89355 11.4147 4.89355 11.7522C4.89355 12.0897 5.1748 12.3709 5.5123 12.3709H7.93106C8.26856 12.3709 8.54981 12.0897 8.54981 11.7522C8.54981 11.4147 8.26856 11.1334 7.93106 11.1334Z"
                                fill=""></path>
                            <path
                                d="M12.347 11.1334H11.672C11.3345 11.1334 11.0532 11.4147 11.0532 11.7522C11.0532 12.0897 11.3345 12.3709 11.672 12.3709H12.347C12.6845 12.3709 12.9657 12.0897 12.9657 11.7522C12.9657 11.4147 12.6845 11.1334 12.347 11.1334Z"
                                fill=""></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_130_9787">
                                <rect width="18" height="18" fill="white" transform="translate(0 0.052124)"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-title-md font-bold text-black dark:text-white">
                            {{$total_paid_payment}}
                        </h4>
                        <span class="text-sm font-medium">মোট পেইড পেমেন্ট</span>
                    </div>


                </div>
            </div>
        </a>

        <!-- Item End -->

        <!-- Reject Item Start -->

        <a href="{{route('reject_apply_list')}}">
            <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                    <i style="width: 22" class="fa-solid fa-rectangle-xmark text-red-600"></i>
                </div>

                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-title-md font-bold text-black dark:text-white">
                            {{$total_reject_application}}
                        </h4>
                        <span class="text-sm font-medium">মোট বাতিল অ্যাপ্লিকেশন</span>
                    </div>


                </div>
            </div>
        </a>
        {{-- college_wise_list --}}
        <a href="{{route('college_wise_list')}}">
            <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                    <i style="width: 22" class="fa-solid fa-graduation-cap text-green-600"></i>
                </div>


                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-md font-bold text-black dark:text-white">
                            প্রতিষ্ঠান অনুযায়ী লিস্ট
                        </h4>

                    </div>


                </div>
            </div>
        </a>

        {{-- ssc_wise_list --}}
        <a href="{{route('ssc_wise_list')}}">
            <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                    <i style="width: 22" class="fa-solid fa-graduation-cap text-red-600"></i>
                </div>


                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-md font-bold text-black dark:text-white">
                            মাধ্যমিক
                        </h4>

                    </div>


                </div>
            </div>
        </a>


        {{-- hsc_wise_list --}}
        <a href="{{route('hsc_wise_list')}}">
            <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                    <i style="width: 22" class="fa-solid fa-graduation-cap text-blue-600"></i>
                </div>


                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-md font-bold text-black dark:text-white">
                            উচ্চ মাধ্যমিক
                        </h4>

                    </div>


                </div>
            </div>
        </a>



        {{-- honarce_wise_list --}}
        <a href="{{route('honarce_wise_list')}}">
            <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                    <i style="width: 22" class="fa-solid fa-graduation-cap text-yellow-600"></i>
                </div>


                <div class="mt-4 flex items-end justify-between">
                    <div>
                        <h4 class="text-md font-bold text-black dark:text-white">
                            স্নাতক
                        </h4>

                    </div>


                </div>
            </div>
        </a>

        <!-- Card Item End -->
    </div>


</div>
@endsection