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

        <form action="{{ route('apply-uporitty') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="border border-yellow-300 rounded-lg p-5 mb-5">

                <p class="border-b-2 border-yellow-400 inline-flex mb-5 text-center">আবেদনকারীর তথ্যঃ</p>



                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="bangla_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর নাম (বাংলা)
                            </label>
                            <input type="text" name="bangla_name" id="bangla_name"
                                value="{{ old('bangla_name', $student_apply->bangla_name) }}"
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
                            <input type="text" name="engish_name" id="engish_name"
                                value="{{ old('engish_name', $student_apply->engish_name) }}"
                                placeholder="আপনার নাম লিখুন ইংরেজিতে"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />
                            @error('engish_name')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap mt-5">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="father_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর পিতার নাম (বাংলা)
                            </label>
                            <input type="text" name="father_name" id="father_name"
                                value="{{ old('father_name', $student_apply->father_name) }}"
                                placeholder="আবেদনকারীর পিতার নাম লিখুন বাংলায়"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />
                            @error('father_name')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="mother_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর মাতার নাম (বাংলা)
                            </label>


                            <input type="text" name="mother_name" id="mother_name"
                                value="{{ old('mother_name', $student_apply->mother_name) }}"
                                oninput="limitLength(this)" placeholder="আবেদনকারীর মাতার নাম লিখুন ইংরেজিতে"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />

                            @error('mother_name')
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
                            <input type="date" name="birth_date" id="birth_date"
                                value="{{ old('birth_date', $student_apply->birth_date) }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />
                            @error('birth_date')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="nid_number" class="mb-3 block text-base font-medium text-[#07074D]">
                                জন্ম নিবন্ধন সনদ নম্বর / জাতীয় পরিচয় পত্র নম্বর
                            </label>
                            <input
                                class="w-full  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                type="number" name="nid_number" placeholder="আপনার  জন্ম নিবন্ধন সনদ নম্বর দিন"
                                value="{{ old('nid_number', $student_apply->nid_number) }}" id="nid_number"
                                oninput="limitLength(this)" required />
                            @error('nid_number')
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
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                লিঙ্গ
                            </label>
                            <select id="gender" name="gender"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required>
                                <option value="">আপনার লিঙ্গ নির্বাচন করুন</option>
                                <option value="পুরুষ" {{ old('gender', $student_apply->gender)=='পুরুষ' ?
                                    'selected' : '' }}>পুরুষ</option>
                                <option value="নারী" {{ old('gender', $student_apply->gender)=='নারী' ? 'selected'
                                    : '' }}>নারী</option>
                                <option value="উভয়" {{ old('gender', $student_apply->gender)=='উভয়' ? 'selected' :
                                    '' }}>উভয়</option>


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
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                মোবাইল নম্বর
                            </label>
                            <input type="tel" name="phone_number" placeholder="আপনার মোবাইল নম্বর লিখুন" minlength="9"
                                value="{{ old('phone_number', $student_apply->phone_number) }}"
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
                                চাষযোগ্য জমির পরিমান (একর/শতাংশ)
                            </label>
                            <input type="number" name="land" placeholder="আপনার চাষযোগ্য জমির পরিমান (একর/শতাংশ) লিখুন"
                                minlength="9" value="{{ old('land', $student_apply->land) }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />
                            @error('land')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

            </div>
            {{-- picture --}}
            <div class="border border-yellow-300 rounded-lg p-5 mb-5">
                <p class="border-b-2 border-yellow-400 inline-flex mb-5 mt-5">ছবি</p>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                    আবেদনকারীর ছবি [পাসপোর্ট সাইজ 591x709 pixels (2.5x3 cm at 600 DPI)]
                                </label>
                                <input onchange="ProfileImage(event)"
                                    value="{{ old('profile_picture', $student_apply->profile_picture) }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    type="file" name="profile_picture" accept="image/*" required>
                                @error('profile_picture')
                                <div class="text-red-500">Image Required 300*300 size with PNG or JPG Formate</div>
                                @enderror



                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">

                                <img id="profilePreview" src="#" alt="profilePreview"
                                    style="display:none; max-width: 100%; max-height: 150px;">


                            </div>
                        </div>
                    </div>
                </div>

            </div>



            {{-- education --}}
            <div class="border border-yellow-300 rounded-lg p-5 mb-5">
                <p class="border-b-2 border-yellow-400 inline-flex mb-5 text-center"> আবেদনকারী বর্তমানে অধ্যয়নরতঃ </p>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="exam_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        শ্রেণী / বর্ষ
                                    </label>
                                    <select id="exam_name" name="exam_name"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="মাধ্যমিক/সমমান" {{ old('exam_name', $student_apply->
                                            exam_name)=='মাধ্যমিক/সমমান'
                                            ? 'selected' : '' }}>
                                            মাধ্যমিক/সমমান</option>
                                        <option value="উচ্চমাধ্যমিক/সমমান" {{ old('exam_name', $student_apply->
                                            exam_name)=='উচ্চমাধ্যমিক/সমমান'
                                            ? 'selected' : '' }}>
                                            উচ্চমাধ্যমিক/সমমান</option>
                                        <option value="স্নাতক/সমমান" {{ old('exam_name', $student_apply->
                                            exam_name)=='স্নাতক/সমমান' ? 'selected'
                                            : '' }}>
                                            স্নাতক/সমমান</option>
                                    </select>

                                    @error('exam_name')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                {{-- <div class="mb-5">
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
                                </div> --}}

                                <div class="mb-5">
                                    <label for="class_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        শ্রেণীর নাম
                                    </label>

                                    <input type="text" name="class_name" id="class_name" placeholder="শ্রেণীর নাম লিখুন"
                                        value="{{ old('class_name', $student_apply->class_name) }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required />


                                    @error('class_name')
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
                                        value="{{ old('roll', $student_apply->roll) }}"
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
                                        গ্রুপ/সাবজেক্ট (যদি থাকে)
                                    </label>
                                    <input type="text" name="subject" id="subject"
                                        value="{{ old('subject', $student_apply->subject) }}"
                                        placeholder="গ্রুপ/সাবজেক্ট লিখুন"
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
                    <div class="w-full px-3">
                        <div class="-mx-3 flex flex-wrap">

                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="institute_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        বর্তমানে অধ্যয়নরত প্রতিষ্ঠানের নাম
                                    </label>

                                    <input type="text" name="institute_name" id="institute_name"
                                        placeholder="বর্তমানে অধ্যয়নরত প্রতিষ্ঠানের নাম লিখুন"
                                        value="{{ old('institute_name', $student_apply->institute_name) }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required />


                                    @error('institute_name')
                                    <div class=" text-red-500">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="prottoyon_potro"
                                        class="mb-3 block text-base font-medium text-red-500 text-xs">
                                        বর্তমানে অধ্যয়নরত প্রতিষ্ঠানের প্রধান শিক্ষক/অধ্যক্ষ/ডিপার্টপেন্ট প্রধান এর কাছ
                                        থেকে নেয়া প্রত্যয়ন পত্র
                                    </label>
                                    <input onchange="ProttoyonImage(event)" value="{{ old('prottoyon_potro') }}"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        type="file" name="prottoyon_potro"
                                        value="{{old('prottoyon_potro', $student_apply->prottoyon_potro)}}" required>
                                    @error('prottoyon_potro')
                                    <div class="text-red-500">{{$message}}</div>
                                    @enderror
                                    <img id="prottoyonPreview" src="#" alt="profilePreview"
                                        style="display:none; max-width: 100%; max-height: 150px;">


                                </div>
                            </div>
                            {{-- <div class="w-full px-3 sm:w-1/2">
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
                            </div> --}}

                        </div>
                    </div>

                    {{-- <div class="w-full px-3 sm:w-1/2">
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
                    </div> --}}
                </div>

            </div>
            {{-- address --}}
            <div class="border border-yellow-300 rounded-lg p-5 mb-5">
                <p class="border-b-2 border-yellow-400 inline-flex mb-5 text-center">আবেদনকারীর ঠিকানাঃ</p>
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

                                    <input type="text" name="division" id="division"
                                        value="{{ old('division', $student_apply->division) }}"
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
                                    <input type="text" name="district" id="district"
                                        value="{{ old('district', $student_apply->district) }}"
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
                                    <input type="text" name="thana" id="thana"
                                        value="{{ old('thana', $student_apply->thana) }}"
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

                                    <input type="text" name="union" id="union"
                                        value="{{ old('union', $student_apply->union) }}"
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
                        <textarea name="home_no" value="{{ old('home_no', $student_apply->home_no) }}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">{{ old('home_no') }}</textarea>

                        @error('home_no')
                        <div class=" text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>



            <div class="border border-blue-300 rounded-lg p-5 mb-5 ">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" id="guardianCheckbox" class="form-checkbox h-5 w-5 text-blue-600 mr-2">
                    পড়াশোনা কি অন্য কেউ বহন করে?
                    <span class="text-xs text-red-500">(হ্যাঁ হলে টিক মার্ক দিয়ে তথ্য পূরণ করুন)</span>
                </label>
                <div id="guardianForm" class="hidden">
                    <p class="border-b-2 border-blue-600 inline-flex mb-5 mt-5">অভিভাবকের তথ্যঃ</p>
                    <div class="-mx-3 flex flex-wrap">

                        <div class="w-full px-3 sm:w-1/2">


                            <div class="mb-5">
                                <label for="guardian_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                    অভিভাবকের নাম
                                </label>
                                <input type="text" name="guardian_name" id="guardian_name"
                                    value="{{ old('guardian_name', $student_apply->guardian_name) }}"
                                    oninput="limitLength(this)" placeholder="  অভিভাবকের নাম লিখুন"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />


                                @error('guardian_name')
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
                                    value="{{ old('guardian_education', $student_apply->guardian_education) }}"
                                    placeholder="অভিভাবকের শিক্ষাগত যোগ্যতা লিখুন"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />

                                @error('guardian_education')
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
                            <textarea name="guardian_address"
                                value="{{ old('guardian_address', $student_apply->guardian_address) }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">{{ old('guardian_address') }}</textarea>

                            @error('guardian_address')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>

            <div class="border border-blue-300 rounded-lg p-5 mb-5 ">
                <label>কোটাঃ <span class="text-xs text-red-500">(যদি থাকে টিক দিয়ে তথ্য দিন। ভুল তথ্য দিলে আবেদন পত্র
                        বাতিল করা হবে।)</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" id="freedomFighterCheckbox" class="form-checkbox h-5 w-5 text-blue-600 mr-2">

                    <span>মুক্তিযোদ্ধার পরিবারের সন্তান (নাতি কিংবা ছেলে)</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" id="minoritiesCheckbox" class="form-checkbox h-5 w-5 text-blue-600 mr-2">

                    <span>ক্ষুদ্র-নৃগোষ্ঠী</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" id="otizomCheckbox" class="form-checkbox h-5 w-5 text-blue-600 mr-2">

                    <span>শারীরিক প্রতিবন্ধী</span>
                </label>
                <div id="freedomFighterForm" class="hidden">
                    <p class="border-b-2 border-blue-600 inline-flex mb-5 mt-5">মুক্তিযোদ্ধার তথ্যঃ</p>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="-mx-3 flex flex-wrap">

                                <div class="w-full px-3">
                                    <div class="mb-5">
                                        <div>
                                            <label for="freedom_fighter_document" class="pl-3 text-base font-medium ">
                                                প্রমাণ পত্র আপলোড করুন
                                            </label>
                                            <input type="file" name="freedom_fighter_document"
                                                value="{{ old('freedom_fighter_document', $student_apply->freedom_fighter_document) }}"
                                                id="freedom_fighter_document"
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
                                            <label for="freedom_fighter_name" class="pl-3 text-base font-medium ">
                                                মুক্তিযোদ্ধার নাম লিখুন
                                            </label>
                                            <input type="text" name="freedom_fighter_name" id="freedom_fighter_name"
                                                value="{{ old('freedom_fighter_name', $student_apply->freedom_fighter_name) }}"
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
                                                class="pl-3 text-base font-medium text-xs">
                                                মুক্তিযোদ্ধার সাথে আবেদনকারীর সম্পর্ক লিখুন
                                            </label>
                                            <input type="text" name="freedom_fighter_relation"
                                                value="{{ old('freedom_fighter_relation', $student_apply->freedom_fighter_relation) }}"
                                                id="freedom_fighter_relation" placeholder="মুক্তিযোদ্ধার সম্পর্ক লিখুন"
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

                <div id="minoritiesForm" class="hidden">
                    <p class="border-b-2 border-blue-600 inline-flex mb-5 mt-5">ক্ষুদ্র-নৃগোষ্ঠীর তথ্যঃ</p>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="-mx-3 flex flex-wrap">

                                <div class="w-full px-3">
                                    <div class="mb-5">
                                        <div>
                                            <label for="minorities_document" class="pl-3 text-base font-medium ">
                                                প্রমাণ পত্র আপলোড করুন
                                            </label>
                                            <input type="file" name="minorities_document"
                                                value="{{ old('minorities_document', $student_apply->minorities_document) }}"
                                                id="minorities_document"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                            @error('minorities_document')
                                            <div class=" text-red-500">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-3 sm:w-1/2">
                            <div class="-mx-3 flex flex-wrap">
                                <div class="w-full px-3">
                                    <div class="mb-5">

                                        <div>
                                            <label for="minorities_name" class="pl-3 text-base font-medium ">
                                                ক্ষুদ্র-নৃগোষ্ঠীর নাম লিখুন
                                            </label>
                                            <input type="text" name="minorities_name" id="minorities_name"
                                                value="{{ old('minorities_name', $student_apply->minorities_name) }}"
                                                placeholder="ক্ষুদ্র-নৃগোষ্ঠীর নাম লিখুন"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                            @error('minorities_name')
                                            <div class=" text-red-500">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div id="otizomForm" class="hidden">
                    <p class="border-b-2 border-blue-600 inline-flex mb-5 mt-5">শারীরিক প্রতিবন্ধীর তথ্যঃ</p>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="-mx-3 flex flex-wrap">

                                <div class="w-full px-3">
                                    <div class="mb-5">
                                        <div>
                                            <label for="otizom_document" class="pl-3 text-base font-medium ">
                                                প্রমাণ পত্র আপলোড করুন
                                            </label>
                                            <input type="file" name="otizom_document"
                                                value="{{ old('otizom_document', $student_apply->otizom_document) }}"
                                                id="otizom_document"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                            @error('otizom_document')
                                            <div class=" text-red-500">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full px-3 sm:w-1/2">
                            <div class="-mx-3 flex flex-wrap">
                                <div class="w-full px-3">
                                    <div class="mb-5">

                                        <div>
                                            <label for="otizom_name" class="pl-3 text-base font-medium ">
                                                কি ধরনের প্রতিবন্ধী তা লিখুন
                                            </label>
                                            <input type="text" name="otizom_name" id="otizom_name"
                                                value="{{ old('otizom_name', $student_apply->otizom_name) }}"
                                                placeholder="কি ধরনের প্রতিবন্ধী তা লিখুন"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                            @error('otizom_name')
                                            <div class=" text-red-500">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

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
                                <option value="pending" {{ old('status', $student_apply->status)=='pending' ? 'selected'
                                    :
                                    '' }}>pending
                                </option>
                                <option value="reject" {{ old('status', $student_apply->status)=='reject' ? 'selected' :
                                    '' }}>
                                    reject</option>
                                <option value="accept" {{ old('status', $student_apply->status)=='accept' ? 'selected' :
                                    '' }}>
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
                                <option value="pending" {{ old('payment_status', $student_apply->
                                    payment_status)=='pending' ?
                                    'selected' : '' }}>pending
                                </option>
                                <option value="reject" {{ old('payment_status', $student_apply->
                                    payment_status)=='reject' ?
                                    'selected' : '' }}>
                                    reject</option>
                                <option value="paid" {{ old('payment_status', $student_apply->payment_status)=='paid' ?
                                    'selected'
                                    : '' }}>
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