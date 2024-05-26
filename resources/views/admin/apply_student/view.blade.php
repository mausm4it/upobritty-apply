@extends('layouts.app')
@section('main_content')

<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Student Application
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="index.html">Dashboard /</a>
                </li>
                <li class="font-medium text-primary">Student Application</li>
            </ol>
        </nav>
    </div>




    <div id="content"
        class="mb-10 rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">


        <div class="p-4 sm:p-6 xl:p-9 mb-9 ">
            <div class="flex mb-9">
                <div class="w-1/3  h-12 mb-9">
                    <img class="border border-green-500" width="150"
                        src="{{asset('storage/app/'.$student_apply->profile_picture)}}"
                        alt="{{$student_apply->bangla_name}}">
                </div>

                <div class="w-1/3  h-12  mb-9">
                    <h3 class="text-center"> upobritty.com </h3>
                    <h1 class="text-2xl text-center">Application's Copy</h1>
                </div>
                <div class="w-1/3  h-12 mb-9">
                    <h4 class="mb-3 text-xl font-bold text-black dark:text-white">
                        {{$student_apply->bangla_name}}
                    </h4>
                    <a href="#" class="block"><span class="font-medium text-black dark:text-white">Email:</span>
                        <span class="__cf_email__"
                            data-cfemail="cfaca0a1bbaeacbb8faab7aea2bfa3aae1aca0a2">{{$student_apply->email}}</span></a>
                    <span class="mt-1.5 block"><span class="font-medium text-black dark:text-white">Phone Number:</span>
                        {{$student_apply->phone_number}}</span>
                    <span class="mt-1.5 block mb-5"><span class="font-medium text-black dark:text-white">User ID:</span>
                        {{$student_apply->users()->first()->user_id}}</span>
                </div>
            </div>






            <div
                class="my-7.5 grid grid-cols-1 border border-stroke dark:border-strokedark xsm:grid-cols-2 sm:grid-cols-4 mt-9 pt-9">
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
                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    জন্ম নিবন্ধন নাম্বার
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->birth_date_number}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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


                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    জাতীয় পরিচয়পত্র নাম্বার
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->national_id_number}}
                                </h5>
                            </div>
                        </div>


                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    ধর্ম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->religion}}
                                </h5>
                            </div>
                        </div>


                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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


                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    বৈবাহিক অবস্থা
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->marital_status}}
                                </h5>
                            </div>
                        </div>

                        @if ($student_apply->marital_status == "বিবাহিত")

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    স্ত্রী/স্বামীর নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->partner_name}}
                                </h5>
                            </div>
                        </div>


                        @endif

                        @if ($student_apply->minorities == "হ্যাঁ")
                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    ক্ষুদ্র নৃ-গোষ্ঠীর নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->minorities_name}}
                                </h5>
                            </div>
                        </div>
                        @endif


                        @if ($student_apply->freedom_fighter == "হ্যাঁ")
                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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


                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    প্রমাণ পত্র
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->freedom_fighter_document}}
                                </h5>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    আবেদনকারীর সম্পর্ক
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->freedom_fighter_relation}}
                                </h5>
                            </div>
                        </div>


                        @endif







                    </div>
                </div>
            </div>
            <p>আবেদনকারীর ঠিকানাঃ</p>

            <div class="border border-stroke dark:border-strokedark">
                <div class="max-w-full overflow-x-auto">
                    <div class="min-w-[670px]">
                        <!-- table header start -->
                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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


            <p>আবেদনকারীর শিক্ষাগত যোগ্যতাঃ</p>
            <div class="border border-stroke dark:border-strokedark">
                <div class="max-w-full overflow-x-auto">
                    <div class="min-w-[670px]">
                        <!-- table header start -->
                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    পরিক্ষার নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->exam_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    বোর্ড
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->board_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    বিষয়
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->subject}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    রেজাল্ট
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->result_type}} {{$student_apply->result}}
                                </h5>
                            </div>
                        </div>


                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    পাশের সন
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->passing_year}}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <p>ব্যাক্তিগত তথ্যঃ</p>
            <div class="border border-stroke dark:border-strokedark">
                <div class="max-w-full overflow-x-auto">
                    <div class="min-w-[670px]">
                        <!-- table header start -->
                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    পিতার নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->father_bangla_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    Father's Name
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->father_english_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    মাতার নাম
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->mother_bangla_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    Mother's Name
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->mother_english_name}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    বাবার জাতীয় পরিচয়পত্র নাম্বার
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->father_national_id_number}}
                                </h5>
                            </div>
                        </div>


                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    মায়ের জাতীয় পরিচয়পত্র নাম্বার
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->mother_national_id_number}}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <p>অভিভাবকের তথ্যঃ</p>
            <div class="border border-stroke dark:border-strokedark">
                <div class="max-w-full overflow-x-auto">
                    <div class="min-w-[670px]">
                        <!-- table header start -->
                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    অভিভাবক
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->guardian}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    অভিভাবকের জাতীয় পরিচয়পত্র নাম্বার
                                </h5>
                            </div>

                            <div class="col-span-6">
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$student_apply->guardian_name_national_id_number}}
                                </h5>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 border-b border-stroke py-3.5 pl-5 pr-6 dark:border-strokedark">
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
        </div>

    </div>

</div>
@endsection