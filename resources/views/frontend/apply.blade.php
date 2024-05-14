@extends('frontend.layouts.app')
@section('main_content')
    <div class="flex items-center justify-center ">
        <!-- Author: FormBold Team -->
        <div class="mx-auto w-full  p-9 mt-5 mb-3 bg-white">
            <h1 class="text-center mb-7 text-2xl">উপবৃত্তির জন্য আবেদন</h1>
            <form>
                <p class="border-b-2 border-blue-600 inline-flex mb-5">আবেদনকারীর তথ্যঃ</p>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর নাম (বাংলা)
                            </label>
                            <input type="text" name="name_bangla" id="name_bangla" placeholder="আপনার নাম লিখুন বাংলায়"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর নাম (ইংরেজি)
                            </label>
                            <input type="text" name="name_english" id="name_english"
                                placeholder="আপনার নাম লিখুন ইংরেজিতে"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>

                <p>আবেদনকারীর ঠিকানাঃ</p>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                        বিভাগ
                                    </label>
                                    <select id="country" name="country"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="">আপনার বিভাগ নির্চাবন করুন</option>

                                        @foreach ($divisions as $item)
                                            <option value="{{ $item->id }}">{{ $item->bn_name }}</option>
                                        @endforeach

                                        <!-- Add more countries as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                        জেলা
                                    </label>
                                    <select id="country" name="country"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="">আপনার জেলা নির্চাবন করুন</option>

                                        @foreach ($divisions as $item)
                                            <option value="{{ $item->id }}">{{ $item->bn_name }}</option>
                                        @endforeach

                                        <!-- Add more countries as needed -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                        থানা
                                    </label>
                                    <select id="country" name="country"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="">আপনার থানা নির্চাবন করুন</option>

                                        @foreach ($divisions as $item)
                                            <option value="{{ $item->id }}">{{ $item->bn_name }}</option>
                                        @endforeach

                                        <!-- Add more countries as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                        ইউনিয়ন/এলাকা
                                    </label>
                                    <select id="country" name="country"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                        <option value="">আপনার ইউনিয়ন/এলাকা নির্চাবন করুন</option>

                                        @foreach ($divisions as $item)
                                            <option value="{{ $item->id }}">{{ $item->bn_name }}</option>
                                        @endforeach

                                        <!-- Add more countries as needed -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর শিক্ষাগত যোগ্যতা
                            </label>
                            <select id="country" name="country"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required>
                                <option value="">আবেদনকারীর শিক্ষাগত যোগ্যতা নির্চাবন করুন</option>


                                <option value="">এস এস সি</option>
                                <option value="">এইচ এস সি</option>
                                <option value="">অনার্স</option>


                                <!-- Add more countries as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর অবিভাবকের শিক্ষাগত যোগ্যতা
                            </label>
                            <input type="text" name="name_english" id="name_english"
                                placeholder=" আবেদনকারীর অবিভাবকের শিক্ষাগত যোগ্যতা লিখুন"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>


                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর লিঙ্গ
                            </label>
                            <div class="flex items-center space-x-6">
                                <div class="flex items-center">
                                    <input type="radio" name="radio1" id="radioButton1" class="h-5 w-5" />
                                    <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                        পুরুষ
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="radio1" id="radioButton2" class="h-5 w-5" />
                                    <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                        নারী
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="radio1" id="radioButton2" class="h-5 w-5" />
                                    <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                        উভয়
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">



                        <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর পড়াশুনা কে বহন করে ?
                            </label>
                            <div class="flex items-center space-x-6">
                                <div class="flex items-center">
                                    <input type="radio" name="radio1" id="radioButton1" class="h-5 w-5" />
                                    <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                        বাবা
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="radio1" id="radioButton2" class="h-5 w-5" />
                                    <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                        মা
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="radio1" id="radioButton2" class="h-5 w-5" />
                                    <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                        অবিভাবক
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারী কি বাংলাদেশের ক্ষুদ্র নৃ-গোষ্ঠীর অন্তর্ভুক্ত ?
                            </label>
                            <div class="flex items-center space-x-6">
                                <div class="flex items-center">
                                    <input type="radio" name="radio1" id="radioButton1" class="h-5 w-5" />
                                    <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                        হ্যাঁ
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="radio1" id="radioButton2" class="h-5 w-5" />
                                    <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                        না
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <div>
                                <label for="radioButton2" class="pl-3 text-base font-medium text-red-600">
                                    হ্যাঁ হলে নৃ-গোষ্ঠীর নাম লিখুন
                                </label>
                                <input type="text" name="name_bangla" id="name_bangla"
                                    placeholder="নৃ-গোষ্ঠীর নাম লিখুন"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />


                            </div>
                        </div>
                    </div>
                </div>



                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label class="mb-3 block text-base font-medium text-[#07074D]">
                                        আবেদনকারী শিক্ষার্থী মুক্তিযোদ্ধা পরিবারের সন্তান ( মুক্তিযোদ্ধার নাতি/নাতনী ) ?
                                    </label>
                                    <div class="flex items-center space-x-6">
                                        <div class="flex items-center">
                                            <input type="radio" name="radio1" id="radioButton1" class="h-5 w-5" />
                                            <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                                না
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <input type="radio" name="radio1" id="radioButton2" class="h-5 w-5" />
                                            <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                                হ্যাঁ
                                            </label>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <div>
                                        <label for="radioButton2" class="pl-3 text-base font-medium text-red-600 ">
                                            হ্যাঁ হলে প্রমাণ পত্র আপলোড করুন
                                        </label>
                                        <input type="file" name="name_bangla" id="name_bangla"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />


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
                                        <label for="radioButton2" class="pl-3 text-base font-medium text-red-600 ">
                                            হ্যাঁ হলে মুক্তিযোদ্ধার নাম লিখুন
                                        </label>
                                        <input type="text" name="name_bangla" id="name_bangla"
                                            placeholder="মুক্তিযোদ্ধার নাম লিখুন"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />


                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <div>
                                        <label for="radioButton2" class="pl-3 text-base font-medium text-red-600 text-xs">
                                            হ্যাঁ হলে মুক্তিযোদ্ধার সাথে আবেদনকারীর সম্পর্ক লিখুন
                                        </label>
                                        <input type="text" name="name_bangla" id="name_bangla"
                                            placeholder="মুক্তিযোদ্ধার সম্পর্ক লিখুন"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>









                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                জন্ম তারিখ
                            </label>
                            <input type="date" name="date" id="date"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">
                                জন্ম নিবন্ধন সনদ নম্বর (১৭ ডিজিট)
                            </label>
                            <input
                                class="w-full  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                type="number" name="guest" placeholder="আপনার  জন্ম নিবন্ধন সনদ নম্বর দিন"
                                id="limitedInput" oninput="limitLength(this)" />
                        </div>
                    </div>

                </div>



                <p class="border-b-2 border-blue-600 inline-flex">আবেদনকারীর পিতা-মাতার তথ্যঃ</p>

                <div class="-mx-3 flex flex-wrap mt-5">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর পিতার নাম (বাংলা)
                            </label>
                            <input type="text" name="name_bangla" id="name_bangla"
                                placeholder="আবেদনকারীর পিতার নাম লিখুন বাংলায়"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর পিতার নাম (ইংরেজি)
                            </label>
                            <input type="text" name="name_english" id="name_english"
                                placeholder="আবেদনকারীর পিতার নাম লিখুন ইংরেজিতে"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর মাতার নাম (বাংলা)
                            </label>
                            <input type="text" name="name_bangla" id="limitedInput" oninput="limitLength(this)"
                                placeholder=" আবেদনকারীর মাতার লিখুন বাংলায়"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর মাতার নাম (ইংরেজি)
                            </label>
                            <input type="text" name="name_english" id="limitedInput" oninput="limitLength(this)"
                                placeholder="আবেদনকারীর মাতার নাম লিখুন ইংরেজিতে"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর পিতার পরিচয় পত্র নম্বর (১০ কিংবা ১৭ ডিজিট)
                            </label>
                            <input type="text" name="name_bangla" id="name_bangla"
                                placeholder=" আবেদনকারীর পিতার পরিচয় পত্র নম্বর লিখুন"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                আবেদনকারীর মাতার পরিচয় পত্র নম্বর (১০ কিংবা ১৭ ডিজিট)
                            </label>
                            <input type="text" name="name_english" id="name_english"
                                placeholder="আবেদনকারীর মাতার পরিচয় পত্র নম্বর  লিখুন"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>

                <p class="border-b-2 border-blue-600 inline-flex mb-5 mt-5">অবিভাবকের তথ্যঃ</p>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                অবিভাবকের নাম
                            </label>
                            <input type="text" name="name_bangla" id="limitedInput" oninput="limitLength(this)"
                                placeholder="  অবিভাবকের নাম লিখুন"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                অবিভাবকের পরিচয় পত্র নম্বর (১০ কিংবা ১৭ ডিজিট)
                            </label>
                            <input type="text" name="name_english" id="name_english"
                                placeholder="অবিভাবকের পরিচয় পত্র নম্বর  লিখুন"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="mb-5">
                        <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                            অবিভাবকের ঠিকানাঃ
                        </label>
                        <textarea
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
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
