@extends('frontend.layouts.app')
@section('main_content')
    <div class="flex items-center justify-center ">

        <div class="mx-auto w-full  p-9 mt-5 mb-3 bg-white">
            <h1 class="text-center mb-7 text-2xl mt-5">উপবৃত্তির জন্য আবেদন</h1>

            @if ($errors->any())
                <div class="bg-danger/25 text-danger  text-sm rounded-md p-4" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form>
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
                                    <div class=" text-danger">{{ $message }}</div>
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
                                    <div class=" text-danger">{{ $message }}</div>
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
                                    <div class=" text-danger">{{ $message }}</div>
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
                                    <div class=" text-danger">{{ $message }}</div>
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
                                <select id="nationality" name="nationality" value="{{ old('nationality') }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    required>
                                    <option value="বাংলাদেশি">বাংলাদেশি</option>

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
                                    <div class=" text-danger">{{ $message }}</div>
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
                                <select id="religion" name="religion" value="{{ old('religion') }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    required>
                                    <option value="">আপনার ধর্ম নির্বাচন করুন</option>
                                    <option value="ইসলাম">ইসলাম</option>
                                    <option value="হিন্দু ধর্ম">হিন্দু ধর্ম</option>
                                    <option value="বৌদ্ধ ধর্ম">বৌদ্ধ ধর্ম</option>
                                    <option value="খ্রিস্টধর্ম">খ্রিস্টধর্ম</option>

                                </select>
                                @error('religion')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label class="mb-3 block text-base font-medium text-[#07074D]">
                                    লিঙ্গ
                                </label>
                                <select id="gender" name="gender" value="{{ old('gender') }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    required>
                                    <option value="">আপনার লিঙ্গ করুন</option>
                                    <option value="পুরুষ">পুরুষ</option>
                                    <option value="নারী">নারী</option>
                                    <option value="উভয়">উভয়</option>


                                </select>

                                @error('gender')
                                    <div class=" text-danger">{{ $message }}</div>
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
                                <select id="marital_status" name="marital_status" value="{{ old('marital_status') }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    required>
                                    <option value="">আপনার বৈবাহিক অবস্থা নির্বাচন করুন</option>
                                    <option value="অবিবাহিত">অবিবাহিত </option>
                                    <option value="বিবাহিত">বিবাহিত</option>


                                </select>

                                @error('marital_status')
                                    <div class=" text-danger">{{ $message }}</div>
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
                                    <div class=" text-danger">{{ $message }}</div>
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
                                <input type="phone_number" name="phone_number" placeholder="আপনার মোবাইল নম্বর লিখুন"
                                    value="{{ old('phone_number') }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    required />
                                @error('phone_number')
                                    <div class=" text-danger">{{ $message }}</div>
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
                                    <div class=" text-danger">{{ $message }}</div>
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
                                <select id="minorities" name="minorities" value="{{ old('minorities') }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    required>
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="হ্যাঁ">হ্যাঁ </option>
                                    <option value="না">না</option>


                                </select>
                                @error('minorities')
                                    <div class=" text-danger">{{ $message }}</div>
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
                                        <div class=" text-danger">{{ $message }}</div>
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
                                            <option value="হ্যাঁ">হ্যাঁ </option>
                                            <option value="না">না</option>
                                        </select>
                                        @error('freedom_fighter')
                                            <div class=" text-danger">{{ $message }}</div>
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
                                                value="{{ old('freedom_fighter_document') }}"
                                                id="freedom_fighter_document"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                            @error('freedom_fighter_document')
                                                <div class=" text-danger">{{ $message }}</div>
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
                                                <div class=" text-danger">{{ $message }}</div>
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
                                                value="{{ old('freedom_fighter_relation') }}"
                                                id="freedom_fighter_relation" placeholder="মুক্তিযোদ্ধার সম্পর্ক লিখুন"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                            @error('freedom_fighter_relation')
                                                <div class=" text-danger">{{ $message }}</div>
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
                                        <label for="division_id" class="mb-3 block text-base font-medium text-[#07074D]">
                                            বিভাগ
                                        </label>
                                        <select id="division_id" name="division_id" value="{{ old('division_id') }}"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            required>
                                            <option value="">আপনার বিভাগ নির্বাচন করুন</option>

                                            @foreach ($divisions as $item)
                                                <option value="{{ $item->id }}">{{ $item->bn_name }}</option>
                                            @endforeach


                                        </select>

                                        @error('division_id')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="district_id" class="mb-3 block text-base font-medium text-[#07074D]">
                                            জেলা
                                        </label>
                                        <select id="district_id" name="district_id" value="{{ old('district_id') }}"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            required>
                                            <option value="">আপনার জেলা নির্বাচন করুন</option>

                                            @foreach ($divisions as $item)
                                                <option value="{{ $item->id }}">{{ $item->bn_name }}</option>
                                            @endforeach


                                        </select>

                                        @error('district_id')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-3 sm:w-1/2">
                            <div class="-mx-3 flex flex-wrap">
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="thana_id" class="mb-3 block text-base font-medium text-[#07074D]">
                                            থানা
                                        </label>
                                        <select id="thana_id" name="thana_id" value="{{ old('thana_id') }}"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            required>
                                            <option value="">আপনার থানা নির্বাচন করুন</option>

                                            @foreach ($divisions as $item)
                                                <option value="{{ $item->id }}">{{ $item->bn_name }}</option>
                                            @endforeach


                                        </select>

                                        @error('thana_id')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="union_id" class="mb-3 block text-base font-medium text-[#07074D]">
                                            ইউনিয়ন/এলাকা
                                        </label>
                                        <select id="union_id" name="union_id" value="{{ old('union_id') }}"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            required>
                                            <option value="">আপনার ইউনিয়ন/এলাকা নির্বাচন করুন</option>

                                            @foreach ($divisions as $item)
                                                <option value="{{ $item->id }}">{{ $item->bn_name }}</option>
                                            @endforeach


                                        </select>
                                        @error('union_id')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="mb-5">
                            <label for="home_no" class="mb-3 block text-base font-medium text-[#07074D]">
                                বাড়ির নাম/ বাসা নং
                            </label>
                            <textarea name="home_no" value="{{ old('home_no') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            </textarea>

                            @error('home_no')
                                <div class=" text-danger">{{ $message }}</div>
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
                                        <select id="exam_name" name="exam_name" value="{{ old('exam_name') }}"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            required>
                                            <option value="এস.এস.সি/দাখিল/সমমান">এস.এস.সি/দাখিল/সমমান</option>
                                            <option value="এইচ.এস.সি/আলিম/সমমান">এইচ.এস.সি/আলিম/সমমান</option>
                                            <option value="অনার্স/ফাজিল/সমমান">অনার্স/ফাজিল/সমমান</option>
                                        </select>

                                        @error('exam_name')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="board_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                            বোর্ড
                                        </label>
                                        <select id="board_name" name="board_name" value="{{ old('board_name') }}"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            required>
                                            <option value="">শিক্ষা নির্বাচন করুন</option>
                                            <option value="যশোর">যশোর</option>
                                            <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                                            <option value="ঢাকা">ঢাকা</option>
                                            <option value="রাজশাহী">রাজশাহী</option>
                                            <option value="কুমিল্লা">কুমিল্লা</option>
                                            <option value="বরিশাল">বরিশাল</option>
                                            <option value="সিলেট">সিলেট</option>
                                            <option value="দিনাজপুর">দিনাজপুর</option>
                                            <option value="ময়মনসিংহ">ময়মনসিংহ</option>
                                            <option value="মাদ্রাসা">মাদ্রাসা</option>
                                            <option value="কারিগরি শিক্ষা">কারিগরি শিক্ষা</option>
                                        </select>
                                        @error('board_name')
                                            <div class=" text-danger">{{ $message }}</div>
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

                                        <input type="text" name="roll" id="roll" placeholder="রোল লিখুন"
                                            value="{{ old('roll') }}"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            required />


                                        @error('roll')
                                            <div class=" text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
                                            গ্রুপ/বিষয়
                                        </label>
                                        <input type="text" name="subject" id="subject"
                                            value="{{ old('subject') }}" placeholder="গ্রুপ/বিষয় লিখুন"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            required />

                                        @error('subject')
                                            <div class=" text-danger">{{ $message }}</div>
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
                                        <select id="result_type" name="result_type" value="{{ old('result_type') }}"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            required>
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="জি পি এ">জি পি এ (5.00 এর মধ্যে)</option>
                                            <option value="সি জি পি এ">সি জি পি এ (4.00 এর মধ্যে)</option>

                                        </select>

                                        @error('result_type')
                                            <div class=" text-danger">{{ $message }}</div>
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
                                            <div class=" text-danger">{{ $message }}</div>
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
                                            <div class=" text-danger">{{ $message }}</div>
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
                                    value="{{ old('father_bangla_name') }}"
                                    placeholder="আবেদনকারীর পিতার নাম লিখুন বাংলায়"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    required />
                                @error('father_bangla_name')
                                    <div class=" text-danger">{{ $message }}</div>
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
                                    <div class=" text-danger">{{ $message }}</div>
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
                                    <div class=" text-danger">{{ $message }}</div>
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
                                    <div class=" text-danger">{{ $message }}</div>
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
                                    <div class=" text-danger">{{ $message }}</div>
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
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>




                <div class="border border-blue-300 rounded-lg p-5 mb-5">
                    <p class="border-b-2 border-blue-600 inline-flex mb-5 mt-5">অবিভাবকের তথ্যঃ</p>
                    <div class="-mx-3 flex flex-wrap">

                        <div class="w-full px-3 sm:w-1/2">

                            <div class="mb-5">
                                <label class="mb-3 block text-base font-medium text-[#07074D]">
                                    আবেদনকারীর পড়াশুনা কে বহন করে ?
                                </label>
                                <select id="guardian" name="guardian" value="{{ old('guardian') }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    required>
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="হ্যাঁ">হ্যাঁ </option>
                                    <option value="না">না</option>
                                </select>

                                @error('guardian')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label class="mb-3 block text-base font-medium text-[#07074D]">
                                    অবিভাবকের শিক্ষাগত যোগ্যতা <span class="text-xs text-red-500">(না থাকলে নাই
                                        লিখুন)</span>
                                </label>
                                <input type="text" name="guardian_education" id="guardian_education"
                                    value="{{ old('guardian_education') }}"
                                    placeholder="অবিভাবকের শিক্ষাগত যোগ্যতা লিখুন"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                                @error('guardian_education')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror


                            </div>
                        </div>

                    </div>
                    <div class="-mx-3 flex flex-wrap">


                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="guardian_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                    অবিভাবকের নাম
                                </label>
                                <input type="text" name="guardian_name" id="guardian_name"
                                    value="{{ old('guardian_name') }}" oninput="limitLength(this)"
                                    placeholder="  অবিভাবকের নাম লিখুন"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />


                                @error('guardian_name')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="guardian_name_national_id_number"
                                    class="mb-3 block text-base font-medium text-[#07074D]">
                                    অবিভাবকের পরিচয় পত্র নম্বর (১০ কিংবা ১৭ ডিজিট)
                                </label>
                                <input type="text" name="guardian_name_national_id_number"
                                    id="guardian_name_national_id_number" placeholder="অবিভাবকের পরিচয় পত্র নম্বর  লিখুন"
                                    value="{{ old('guardian_name_national_id_number') }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                                @error('guardian_name_national_id_number')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                অবিভাবকের ঠিকানাঃ
                            </label>
                            <textarea name="guardian_address" value="{{ old('guardian_address') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>

                            @error('guardian_address')
                                <div class=" text-danger">{{ $message }}</div>
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
                                        <div class=" text-danger">{{ $message }}</div>
                                    @enderror
                                    <img id="profilePreview" src="#" alt="profilePreview"
                                        style="display:none; max-width: 100%; max-height: 150px;">


                                </div>
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
