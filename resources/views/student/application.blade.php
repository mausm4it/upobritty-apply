@extends('frontend.layouts.app')
@section('main_content')


<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">



    <button id="download-btn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-5">Download
        PDF</button>


    <!-- Loader element -->
    <div id="loader" class="hidden fixed inset-0 flex items-center justify-center bg-gray-100 bg-opacity-75">
        <div class="loader w-16 h-16 border-4 border-t-4 border-gray-200 rounded-full"></div>
    </div>


    <div id="content"
        class="mb-10 rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">


        <div class="p-4 sm:p-6 xl:p-9 mb-9 ">
            <div class="flex mb-9">
                <div class="w-1/3 h-12 mb-9">

                    <img style="height:150px;width:130px" class=" border border-green-500"
                        src="{{asset('storage/app/'.$student_apply->profile_picture)}}"
                        alt="{{$student_apply->bangla_name}}">
                </div>

                <div class="w-1/3 h-12  mb-9">
                    <h3 class="text-center"> upobritty.com </h3>
                    <h1 class="text-2xl text-center">Application's Copy</h1>
                </div>
                <div class="w-1/3 h-12  mb-9">
                    <h4 class="mb-3 text-xl font-bold text-black dark:text-white">
                        {{$student_apply->bangla_name}}
                    </h4>

                    <span class="mt-1.5 block"><span class="font-medium text-black dark:text-white">Phone Number:</span>
                        {{$student_apply->phone_number}}</span>
                    <span class="mt-1.5 block mb-5"><span class="font-medium text-black dark:text-white">User ID:</span>
                        {{$student_apply->users()->first()->user_id}}</span>
                </div>
            </div>






            <div class="my-7.5 grid grid-cols-1 xsm:grid-cols-2 sm:grid-cols-4 mt-9 pt-9">
                <div
                    class="border-b border-r border-stroke px-5 py-4 last:border-r-0 dark:border-strokedark sm:border-b-0">
                    <h5 class="mb-1.5 font-bold text-black dark:text-white">
                        Payment Status :
                    </h5>
                    <span class="text-sm font-medium"> {{$student_apply->payment_status}} </span>
                </div>

                <div
                    class="border-b border-stroke px-5 py-4 last:border-r-0 dark:border-strokedark sm:border-b-0 sm:border-r">
                    <h5 class="mb-1.5 font-bold text-black dark:text-white">
                        Application's Date :
                    </h5>
                    <span class="text-sm font-medium"> {{ $student_apply->created_at->format('d-m-Y') }} </span>
                </div>

                <div
                    class="border-b border-r border-stroke px-5 py-4 last:border-r-0 dark:border-strokedark xsm:border-b-0">
                    <h5 class="mb-1.5 font-bold text-black dark:text-white">
                        Application For :
                    </h5>
                    <span class="text-sm font-medium"> {{$student_apply->exam_name}} </span>
                </div>

                <div class="border-r border-stroke px-5 py-4 last:border-r-0 dark:border-strokedark">
                    <h5 class="mb-1.5 font-bold text-black dark:text-white">
                        Application Status :
                    </h5>
                    <span class="text-sm font-medium"> {{$student_apply->status}} </span>
                </div>
            </div>
            <p>আবেদনকারীর তথ্যঃ</p>
            <div class="border border-stroke dark:border-strokedark">
                <div class="max-w-full overflow-x-auto">
                    <div class="min-w-[670px]">
                        <!-- table header start -->
                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    Applicant's Name
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->engish_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    আবেদনকারীর নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->bangla_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    আবেদনকারীর পিতার নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->father_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    আবেদনকারীর মাতার নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->mother_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    জন্ম তারিখ
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->birth_date}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    জন্ম নিবন্ধন নাম্বার / জাতীয় পরিচয়পত্র নাম্বার
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->nid_number}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    জাতীয়তা
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->nationality}}
                                </h5>
                            </div>
                        </div>


                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    লিঙ্গ
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->gender}}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p>আবেদনকারীর ঠিকানাঃ</p>

            <div class="border border-stroke dark:border-strokedark">
                <div class="max-w-full overflow-x-auto">
                    <div class="min-w-[670px]">
                        <!-- table header start -->
                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    বিভাগ
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->division}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    জেলা
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->district}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    থানা/উপজেলা
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->thana}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    ইউনিয়ন/এলাকা
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->union}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    বাসা নং/বাড়ির নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->home_no}}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <p>আবেদনকারী বর্তমানে অধ্যয়নরতঃ</p>
            <div class="border border-stroke dark:border-strokedark">
                <div class="max-w-full overflow-x-auto">
                    <div class="min-w-[670px]">
                        <!-- table header start -->
                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    শ্রেণী / বর্ষ
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->exam_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    শ্রেণীর নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->class_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    রোল
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->roll}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    গ্রুপ/সাবজেক্ট
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->subject}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    প্রতিষ্ঠানের নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->institute_name}}
                                </h5>
                            </div>
                        </div>


                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    প্রত্যয়ন পত্র
                                </h5>
                            </div>

                            <div class="col-span-6">
                                @isset($student_apply->prottoyon_potro)
                                <h5 class="font-medium text-black dark:text-white">
                                    Submitted
                                </h5>
                                @endisset


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($student_apply->guardian_name)
            <p>অভিভাবকের তথ্যঃ</p>
            <div class="border border-stroke dark:border-strokedark">
                <div class="max-w-full overflow-x-auto">
                    <div class="min-w-[670px]">
                        <!-- table header start -->




                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    অভিভাবকের নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->guardian_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    অভিভাবকের শিক্ষাগত যোগ্যতা
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->guardian_education}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    অভিভাবকের ঠিকানা
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->guardian_address}}
                                </h5>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            @endif


            @if ($student_apply->minorities_name)
            <p>ক্ষুদ্র-নৃগোষ্ঠীর তথ্যঃ</p>
            <div class="border border-stroke dark:border-strokedark">
                <div class="max-w-full overflow-x-auto">
                    <div class="min-w-[670px]">
                        <!-- table header start -->






                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    ক্ষুদ্র-নৃগোষ্ঠীর নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->minorities_name}}
                                </h5>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
            @endif

            @if ($student_apply->freedom_fighter_name)
            <p>মুক্তিযোদ্ধার তথ্যঃ</p>
            <div class="border border-stroke dark:border-strokedark">
                <div class="max-w-full overflow-x-auto">
                    <div class="min-w-[670px]">
                        <!-- table header start -->




                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    মুক্তিযোদ্ধার নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->freedom_fighter_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    মুক্তিযোদ্ধার সাথে আবেদনকারীর সম্পর্ক
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->freedom_fighter_relation}}
                                </h5>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
            @endif


            @if ($student_apply->otizom_name)
            <p>ক্ষুদ্র-নৃগোষ্ঠীর তথ্যঃ</p>
            <div class="border border-stroke dark:border-strokedark">
                <div class="max-w-full overflow-x-auto">
                    <div class="min-w-[670px]">
                        <!-- table header start -->


                        <div class="grid grid-cols-12 border-b border-stroke py-1.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    কি ধরনের প্রতিবন্ধী
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->otizom_name}}
                                </h5>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
            @endif

        </div>

    </div>

</div>
@endsection