@extends('layouts.app')
@section('main_content')
<div class="flex items-center justify-center ">

    <div class="mx-auto w-full  p-9 mt-5 mb-3 bg-white">
        <h1 class="text-center mb-7 text-2xl mt-5">উপবৃত্তির জন্য আবেদন</h1>

        @if ($errors->any())
        <div class="bg-danger/25 text-red-500  text-sm rounded-md p-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('create_student_apply') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="border border-blue-300 rounded-lg p-5 mb-5">

                <p class="border-b-2 border-blue-600 inline-flex mb-5 text-center">আবেদনকারীর তথ্যঃ</p>



                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="bangla_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর নাম (বাংলা)
                            </label>
                            <input type="text" name="bangla_name" id="bangla_name" value="{{ old('bangla_name') }}"
                                placeholder="আপনার নাম লিখুন বাংলায়"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />

                            @error('bangla_name')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="engish_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর নাম (ইংরেজি)
                            </label>
                            <input type="text" name="engish_name" id="engish_name" value="{{ old('engish_name') }}"
                                placeholder="আপনার নাম লিখুন ইংরেজিতে"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />
                            @error('engish_name')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="birth_date" class="mb-3 block text-base font-medium text-[#07074D]">
                                জন্ম তারিখ
                            </label>
                            <input type="date" name="birth_date" id="birth_date" value="{{ old('birth_date') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />
                            @error('birth_date')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="birth_date_number" class="mb-3 block text-base font-medium text-[#07074D]">
                                জন্ম নিবন্ধন সনদ নম্বর (১৭ ডিজিট)
                            </label>
                            <input
                                class="w-full  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                type="number" name="birth_date_number" placeholder="আপনার  জন্ম নিবন্ধন সনদ নম্বর দিন"
                                value="{{ old('birth_date_number') }}" id="birth_date_number"
                                oninput="limitLength(this)" required />
                            @error('birth_date_number')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="nationality" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর জাতীয়তা
                            </label>
                            <select id="nationality" name="nationality"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required>
                                <option value="বাংলাদেশি" {{ old('nationality')=='বাংলাদেশি' ? 'selected' : '' }}>
                                    বাংলাদেশি</option>

                            </select>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="national_id_number" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর জাতীয় পরিচয় পত্র নম্বর (১০ কিংবা ১৭ ডিজিট)
                            </label>
                            <input type="text" name="national_id_number" id="national_id_number"
                                value="{{ old('national_id_number') }}"
                                placeholder=" আবেদনকারীর জাতীয় পরিচয় পত্র নম্বর  লিখুন"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('national_id_number')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="religion" class="mb-3 block text-base font-medium text-[#07074D]">
                                ধর্ম
                            </label>
                            <select id="religion" name="religion"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required>
                                <option value="">আপনার ধর্ম নির্বাচন করুন</option>
                                <option value="ইসলাম" {{ old('religion')=='ইসলাম' ? 'selected' : '' }}>ইসলাম
                                </option>
                                <option value="হিন্দু ধর্ম" {{ old('religion')=='হিন্দু ধর্ম' ? 'selected' : '' }}>
                                    হিন্দু ধর্ম</option>
                                <option value="বৌদ্ধ ধর্ম" {{ old('religion')=='বৌদ্ধ ধর্ম' ? 'selected' : '' }}>
                                    বৌদ্ধ ধর্ম</option>
                                <option value="খ্রিস্টধর্ম" {{ old('religion')=='খ্রিস্টধর্ম' ? 'selected' : '' }}>
                                    খ্রিস্টধর্ম</option>

                            </select>
                            @error('religion')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                লিঙ্গ
                            </label>
                            <select id="gender" name="gender"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required>
                                <option value="">আপনার লিঙ্গ করুন</option>
                                <option value="পুরুষ" {{ old('gender')=='পুরুষ' ? 'selected' : '' }}>পুরুষ</option>
                                <option value="নারী" {{ old('gender')=='নারী' ? 'selected' : '' }}>নারী</option>
                                <option value="উভয়" {{ old('gender')=='উভয়' ? 'selected' : '' }}>উভয়</option>


                            </select>

                            @error('gender')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="marital_status" class="mb-3 block text-base font-medium text-[#07074D]">
                                বৈবাহিক অবস্থা
                            </label>
                            <select id="marital_status" name="marital_status"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required>
                                <option value="">আপনার বৈবাহিক অবস্থা নির্বাচন করুন</option>
                                <option value="অবিবাহিত" {{ old('marital_status')=='অবিবাহিত' ? 'selected' : '' }}>
                                    অবিবাহিত </option>
                                <option value="বিবাহিত" {{ old('marital_status')=='বিবাহিত' ? 'selected' : '' }}>
                                    বিবাহিত</option>


                            </select>

                            @error('marital_status')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-red-600">
                                বিবাহিত হলে স্ত্রী/স্বামীর নাম লিখুন
                            </label>
                            <input type="text" name="partner_name" placeholder=" স্ত্রীর নাম লিখুন"
                                value="{{ old('partner_name') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('partner_name')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>



                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                মোবাইল নম্বর
                            </label>
                            <input type="tel" name="phone_number" placeholder="আপনার মোবাইল নম্বর লিখুন" minlength="9"
                                value="{{ old('phone_number') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />
                            @error('phone_number')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                ইমেইল
                            </label>
                            <input type="email" name="email" placeholder="আপনার ইমেইল ঠিকানা লিখুন"
                                value="{{ old('email') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('email')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারী কি বাংলাদেশের ক্ষুদ্র নৃ-গোষ্ঠীর অন্তর্ভুক্ত ?
                            </label>
                            <select id="minorities" name="minorities"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required>
                                <option value="">নির্বাচন করুন</option>
                                <option value="হ্যাঁ" {{ old('minorities')=='হ্যাঁ' ? 'selected' : '' }}>হ্যাঁ
                                </option>
                                <option value="না" {{ old('minorities')=='না' ? 'selected' : '' }}>না</option>


                            </select>
                            @error('minorities')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <div>
                                <label for="radioButton2" class="pl-3 text-base font-medium text-red-600">
                                    হ্যাঁ হলে নৃ-গোষ্ঠীর নাম লিখুন
                                </label>
                                <input type="text" name="minorities_name" id="minorities_name"
                                    value="{{ old('minorities_name') }}" placeholder="নৃ-গোষ্ঠীর নাম লিখুন"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('minorities_name')
                                <div class=" text-red-500">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>
                    </div>
                </div>



                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="mb-3 block text-base font-medium text-[#07074D] text-xs">
                                        আবেদনকারী শিক্ষার্থী মুক্তিযোদ্ধা পরিবারের সন্তান ?
                                    </label>
                                    <select id="freedom_fighter" name="freedom_fighter"
                                        value="{{ old('freedom_fighter') }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="হ্যাঁ" {{ old('freedom_fighter')=='হ্যাঁ' ? 'selected' : '' }}>
                                            হ্যাঁ </option>
                                        <option value="না" {{ old('freedom_fighter')=='না' ? 'selected' : '' }}>
                                            না</option>
                                    </select>
                                    @error('freedom_fighter')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror


                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <div>
                                        <label for="freedom_fighter_document"
                                            class="pl-3 text-base font-medium text-red-600 ">
                                            হ্যাঁ হলে প্রমাণ পত্র আপলোড করুন
                                        </label>
                                        <input type="file" name="freedom_fighter_document"
                                            value="{{ old('freedom_fighter_document') }}" id="freedom_fighter_document"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        @error('freedom_fighter_document')
                                        <div class=" text-red-500">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">

                                    <div>
                                        <label for="freedom_fighter_name"
                                            class="pl-3 text-base font-medium text-red-600 ">
                                            হ্যাঁ হলে মুক্তিযোদ্ধার নাম লিখুন
                                        </label>
                                        <input type="text" name="freedom_fighter_name" id="freedom_fighter_name"
                                            value="{{ old('freedom_fighter_name') }}"
                                            placeholder="মুক্তিযোদ্ধার নাম লিখুন"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        @error('freedom_fighter_name')
                                        <div class=" text-red-500">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <div>
                                        <label for="freedom_fighter_relation"
                                            class="pl-3 text-base font-medium text-red-600 text-xs">
                                            হ্যাঁ হলে মুক্তিযোদ্ধার সাথে আবেদনকারীর সম্পর্ক লিখুন
                                        </label>
                                        <input type="text" name="freedom_fighter_relation"
                                            value="{{ old('freedom_fighter_relation') }}" id="freedom_fighter_relation"
                                            placeholder="মুক্তিযোদ্ধার সম্পর্ক লিখুন"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        @error('freedom_fighter_relation')
                                        <div class=" text-red-500">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







            </div>

            <div class="border border-blue-300 rounded-lg p-5 mb-5">
                <p class="border-b-2 border-blue-600 inline-flex mb-5 text-center">আবেদনকারীর ঠিকানাঃ</p>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="division" class="mb-3 block text-base font-medium text-[#07074D]">
                                        বিভাগ
                                    </label>
                                    {{-- <select id="division" name="division_id"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="">আপনার বিভাগ নির্বাচন করুন</option>

                                        @foreach ($divisions as $item)
                                        <option value="{{ $item->id }}" {{ old('division_id')==$item->bn_name ?
                                            'selected' : '' }}>
                                            {{ $item->bn_name }}</option>
                                        @endforeach


                                    </select> --}}

                                    <input type="text" name="division" id="division" value="{{ old('division') }}"
                                        placeholder="আপনার বিভাগের নাম লিখুন"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />


                                    @error('division')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="district" class="mb-3 block text-base font-medium text-[#07074D]">
                                        জেলা
                                    </label>
                                    {{-- <select id="district" name="district_id" value="{{ old('district_id') }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="">আপনার জেলা নির্বাচন করুন</option>

                                        @foreach ($districts as $item)
                                        <option value="{{ $item->id }}" {{ old('district_id')==$item->bn_name ?
                                            'selected' : '' }}>
                                            {{ $item->bn_name }}</option>
                                        @endforeach


                                    </select> --}}
                                    <input type="text" name="district" id="district" value="{{ old('district') }}"
                                        placeholder="আপনার জেলার নাম লিখুন"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                                    @error('district')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="thana" class="mb-3 block text-base font-medium text-[#07074D]">
                                        থানা
                                    </label>
                                    {{-- <select id="thana" name="thana_id" value="{{ old('thana_id') }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="">আপনার থানা নির্বাচন করুন</option>

                                        @foreach ($divisions as $item)
                                        <option value="{{ $item->id }}" {{ old('thana_id')==$item->bn_name ? 'selected'
                                            : '' }}>
                                            {{ $item->bn_name }}</option>
                                        @endforeach


                                    </select> --}}
                                    <input type="text" name="thana" id="thana" value="{{ old('thana') }}"
                                        placeholder="আপনার থানার নাম লিখুন"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                                    @error('thana')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="union" class="mb-3 block text-base font-medium text-[#07074D]">
                                        ইউনিয়ন/এলাকা
                                    </label>
                                    {{-- <select id="union" name="union_id" value="{{ old('union_id') }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="">আপনার ইউনিয়ন/এলাকা নির্বাচন করুন</option>

                                        @foreach ($divisions as $item)
                                        <option value="{{ $item->id }}" {{ old('union_id')==$item->bn_name ? 'selected'
                                            : '' }}>
                                            {{ $item->bn_name }}</option>
                                        @endforeach


                                    </select> --}}

                                    <input type="text" name="union" id="union" value="{{ old('union') }}"
                                        placeholder="আপনার ইউনিয়ন/এলাকার নাম লিখুন"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    @error('union')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- address script --}}


                <div class="w-full">
                    <div class="mb-5">
                        <label for="home_no" class="mb-3 block text-base font-medium text-[#07074D]">
                            বাড়ির নাম/ বাসা নং
                        </label>
                        <textarea name="home_no" value="{{ old('home_no') }}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">{{ old('home_no') }}</textarea>

                        @error('home_no')
                        <div class=" text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>









            </div>


            <div class="border border-blue-300 rounded-lg p-5 mb-5">
                <p class="border-b-2 border-blue-600 inline-flex mb-5 text-center"> আবেদনকারীর শিক্ষাগত যোগ্যতাঃ </p>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="exam_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        পরীক্ষা
                                    </label>
                                    <select id="exam_name" name="exam_name"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="এস.এস.সি/দাখিল/সমমান" {{ old('exam_name')=='এস.এস.সি/দাখিল/সমমান'
                                            ? 'selected' : '' }}>
                                            এস.এস.সি/দাখিল/সমমান</option>
                                        <option value="এইচ.এস.সি/আলিম/সমমান" {{ old('exam_name')=='এইচ.এস.সি/আলিম/সমমান'
                                            ? 'selected' : '' }}>
                                            এইচ.এস.সি/আলিম/সমমান</option>
                                        <option value="অনার্স/ফাজিল/সমমান" {{ old('exam_name')=='অনার্স/ফাজিল/সমমান'
                                            ? 'selected' : '' }}>
                                            অনার্স/ফাজিল/সমমান</option>
                                    </select>

                                    @error('exam_name')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="board_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        বোর্ড
                                    </label>
                                    <select id="board_name" name="board_name"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="">শিক্ষা নির্বাচন করুন</option>
                                        <option value="যশোর" {{ old('board_name')=='যশোর' ? 'selected' : '' }}>
                                            যশোর</option>
                                        <option value="চট্টগ্রাম" {{ old('board_name')=='চট্টগ্রাম' ? 'selected' : ''
                                            }}>চট্টগ্রাম</option>
                                        <option value="ঢাকা" {{ old('board_name')=='ঢাকা' ? 'selected' : '' }}>
                                            ঢাকা</option>
                                        <option value="রাজশাহী" {{ old('board_name')=='রাজশাহী' ? 'selected' : '' }}>
                                            রাজশাহী</option>
                                        <option value="কুমিল্লা" {{ old('board_name')=='কুমিল্লা' ? 'selected' : '' }}>
                                            কুমিল্লা</option>
                                        <option value="বরিশাল" {{ old('board_name')=='বরিশাল' ? 'selected' : '' }}>
                                            বরিশাল</option>
                                        <option value="সিলেট" {{ old('board_name')=='সিলেট' ? 'selected' : '' }}>
                                            সিলেট</option>
                                        <option value="দিনাজপুর" {{ old('board_name')=='দিনাজপুর' ? 'selected' : '' }}>
                                            দিনাজপুর</option>
                                        <option value="ময়মনসিংহ" {{ old('board_name')=='ময়মনসিংহ' ? 'selected' : '' }}>
                                            ময়মনসিংহ</option>
                                        <option value="মাদ্রাসা" {{ old('board_name')=='মাদ্রাসা' ? 'selected' : '' }}>
                                            মাদ্রাসা</option>
                                        <option value="কারিগরি শিক্ষা" {{ old('board_name')=='কারিগরি শিক্ষা'
                                            ? 'selected' : '' }}>কারিগরি
                                            শিক্ষা</option>
                                    </select>
                                    @error('board_name')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="roll" class="mb-3 block text-base font-medium text-[#07074D]">
                                        রোল
                                    </label>

                                    <input type="number" name="roll" id="roll" placeholder="রোল লিখুন"
                                        value="{{ old('roll') }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required />


                                    @error('roll')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                                        গ্রুপ/বিষয়
                                    </label>
                                    <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                                        placeholder="গ্রুপ/বিষয় লিখুন"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required />

                                    @error('subject')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="result_type" class="mb-3 block text-base font-medium text-[#07074D]">
                                        ফলাফল
                                    </label>
                                    <select id="result_type" name="result_type"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="জি পি এ" {{ old('result_type')=='জি পি এ' ? 'selected' : '' }}>জি
                                            পি এ (5.00 এর
                                            মধ্যে)</option>
                                        <option value="সি জি পি এ" {{ old('result_type')=='সি জি পি এ' ? 'selected' : ''
                                            }}>সি জি পি এ (4.00
                                            এর মধ্যে)</option>

                                    </select>

                                    @error('result_type')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="result" class="mb-3 block text-base font-medium text-[#07074D]">
                                        জি পি এ / সি জি পি এ
                                    </label>

                                    <input type="text" name="result" id="result" placeholder="ফলাফল লিখুন"
                                        value="{{ old('result') }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required />
                                    @error('result')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="passing_year" class="mb-3 block text-base font-medium text-[#07074D]">
                                        পাশ এর বছর
                                    </label>

                                    <input type="text" name="passing_year" id="passing_year"
                                        value="{{ old('passing_year') }}" placeholder="পাশ এর বছর লিখুন"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required />

                                    @error('passing_year')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror


                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>






            <div class="border border-blue-300 rounded-lg p-5 mb-5">
                <p class="border-b-2 border-blue-600 inline-flex">আবেদনকারীর পিতা-মাতার তথ্যঃ</p>

                <div class="-mx-3 flex flex-wrap mt-5">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="father_bangla_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর পিতার নাম (বাংলা)
                            </label>
                            <input type="text" name="father_bangla_name" id="father_bangla_name"
                                value="{{ old('father_bangla_name') }}" placeholder="আবেদনকারীর পিতার নাম লিখুন বাংলায়"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />
                            @error('father_bangla_name')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="father_english_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর পিতার নাম (ইংরেজি)
                            </label>
                            <input type="text" name="father_english_name" id="father_english_name"
                                value="{{ old('father_english_name') }}"
                                placeholder="আবেদনকারীর পিতার নাম লিখুন ইংরেজিতে"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />
                            @error('father_english_name')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="mother_bangla_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর মাতার নাম (বাংলা)
                            </label>


                            <input type="text" name="mother_bangla_name" id="mother_bangla_name"
                                value="{{ old('mother_bangla_name') }}" oninput="limitLength(this)"
                                placeholder="আবেদনকারীর মাতার নাম লিখুন ইংরেজিতে"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />

                            @error('mother_bangla_name')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="mother_english_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর মাতার নাম (ইংরেজি)
                            </label>
                            <input type="text" name="mother_english_name" id="mother_english_name"
                                value="{{ old('mother_english_name') }}" oninput="limitLength(this)"
                                placeholder=" আবেদনকারীর মাতার লিখুন বাংলায়"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />
                            @error('mother_english_name')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="father_national_id_number"
                                class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর পিতার পরিচয় পত্র নম্বর (১০ কিংবা ১৭ ডিজিট)
                            </label>
                            <input type="text" name="father_national_id_number" id="father_national_id_number"
                                value="{{ old('father_national_id_number') }}"
                                placeholder=" আবেদনকারীর পিতার পরিচয় পত্র নম্বর লিখুন"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />
                            @error('father_national_id_number')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="mother_national_id_number"
                                class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর মাতার পরিচয় পত্র নম্বর (১০ কিংবা ১৭ ডিজিট)
                            </label>
                            <input type="text" name="mother_national_id_number" id="mother_national_id_number"
                                value="{{ old('mother_national_id_number') }}"
                                placeholder="আবেদনকারীর মাতার পরিচয় পত্র নম্বর  লিখুন"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />

                            @error('mother_national_id_number')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>




            <div class="border border-blue-300 rounded-lg p-5 mb-5">
                <p class="border-b-2 border-blue-600 inline-flex mb-5 mt-5">অভিভাবকের তথ্যঃ</p>
                <div class="-mx-3 flex flex-wrap">

                    <div class="w-full px-3 sm:w-1/2">

                        <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর পড়াশুনা কে বহন করে ?
                            </label>
                            <select id="guardian" name="guardian"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required>
                                <option value="">নির্বাচন করুন</option>
                                <option value="বাবা" {{ old('guardian')=='বাবা' ? 'selected' : '' }}>বাবা
                                </option>
                                <option value="মা" {{ old('guardian')=='মা' ? 'selected' : '' }}>মা</option>
                                <option value="অন্য অভিভাবক" {{ old('guardian')=='অন্য অভিভাবক' ? 'selected' : '' }}>
                                    অন্য অভিভাবক</option>
                            </select>

                            @error('guardian')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                অভিভাবকের শিক্ষাগত যোগ্যতা <span class="text-xs text-red-500">(না থাকলে নাই
                                    লিখুন)</span>
                            </label>
                            <input type="text" name="guardian_education" id="guardian_education"
                                value="{{ old('guardian_education') }}" placeholder="অভিভাবকের শিক্ষাগত যোগ্যতা লিখুন"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                            @error('guardian_education')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror


                        </div>
                    </div>

                </div>
                <div class="-mx-3 flex flex-wrap">


                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="guardian_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                অভিভাবকের নাম
                            </label>
                            <input type="text" name="guardian_name" id="guardian_name"
                                value="{{ old('guardian_name') }}" oninput="limitLength(this)"
                                placeholder="  অভিভাবকের নাম লিখুন"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />


                            @error('guardian_name')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="guardian_name_national_id_number"
                                class="mb-3 block text-base font-medium text-[#07074D]">
                                অভিভাবকের পরিচয় পত্র নম্বর (১০ কিংবা ১৭ ডিজিট)
                            </label>
                            <input type="text" name="guardian_name_national_id_number"
                                id="guardian_name_national_id_number" placeholder="অভিভাবকের পরিচয় পত্র নম্বর  লিখুন"
                                value="{{ old('guardian_name_national_id_number') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                            @error('guardian_name_national_id_number')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="mb-5">
                        <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                            অভিভাবকের ঠিকানাঃ
                        </label>
                        <textarea name="guardian_address" value="{{ old('guardian_address') }}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">{{ old('guardian_address') }}</textarea>

                        @error('guardian_address')
                        <div class=" text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>



            <div class="border border-blue-300 rounded-lg p-5 mb-5">
                <p class="border-b-2 border-blue-600 inline-flex mb-5 mt-5">ছবি</p>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                    আবেদনকারীর ছবি (৩০০ x ৩০০ পিক্সেল)
                                </label>
                                <input onchange="ProfileImage(event)" value="{{ old('profile_picture') }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    type="file" name="profile_picture" accept="image/*" value="" required>
                                @error('profile_picture')
                                <div class="text-red-500">Image Required 300*300 size with PNG or JPG Formate</div>
                                @enderror
                                <img id="profilePreview" src="#" alt="profilePreview"
                                    style="display:none; max-width: 100%; max-height: 150px;">


                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="border border-blue-300 rounded-lg p-5 mb-5">
                <p class="border-b-2 border-blue-600 inline-flex mb-5 mt-5">স্ট্যাটাস</p>

                <div class="-mx-3 flex flex-wrap mt-5">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="status" class="mb-3 block text-base font-medium text-[#07074D]">
                                স্ট্যাটাস
                            </label>
                            <select id="status" name="status"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required>
                                <option value="">নির্বাচন করুন</option>
                                <option value="pending" {{ old('status')=='pending' ? 'selected' : '' }}>pending
                                </option>
                                <option value="reject" {{ old('status')=='reject' ? 'selected' : '' }}>
                                    reject</option>
                                <option value="accept" {{ old('status')=='accept' ? 'selected' : '' }}>
                                    accept</option>


                            </select>
                            @error('status')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="payment_status" class="mb-3 block text-base font-medium text-[#07074D]">
                                পেমেন্ট স্ট্যাটাস
                            </label>
                            <select id="payment_status" name="payment_status"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required>
                                <option value="">নির্বাচন করুন</option>
                                <option value="pending" {{ old('payment_status')=='pending' ? 'selected' : '' }}>pending
                                </option>
                                <option value="reject" {{ old('payment_status')=='reject' ? 'selected' : '' }}>
                                    reject</option>
                                <option value="paid" {{ old('payment_status')=='paid' ? 'selected' : '' }}>
                                    paid</option>


                            </select>
                            @error('status')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>



            <div>
                <button
                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection