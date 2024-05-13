@extends('frontend.layouts.app')
@section('main_content')
    <div class="flex items-center justify-center ">
        <!-- Author: FormBold Team -->
        <div class="mx-auto w-full  p-9 mt-5 mb-3 bg-white">
            <h1 class="text-center mb-7 text-2xl">উপবৃত্তির জন্য আবেদন</h1>
            <form>
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

                <p>ঠিকানা</p>
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
                                        <option value="">Select your country</option>
                                        <option value="us">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ca">Canada</option>
                                        <!-- Add more countries as needed -->
                                    </select>
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
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                        আবেদনকারীর নাম (বাংলা)
                                    </label>
                                    <input type="text" name="name_bangla" id="name_bangla"
                                        placeholder="আপনার নাম লিখুন বাংলায়"
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
                    </div>
                </div>
                <div class="mb-5">
                    <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">
                        How many guest are you bringing?
                    </label>
                    <input type="number" name="guest" id="guest" placeholder="5" min="0"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                Date
                            </label>
                            <input type="date" name="date" id="date"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                Time
                            </label>
                            <input type="time" name="time" id="time"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <label class="mb-3 block text-base font-medium text-[#07074D]">
                        Are you coming to the event?
                    </label>
                    <div class="flex items-center space-x-6">
                        <div class="flex items-center">
                            <input type="radio" name="radio1" id="radioButton1" class="h-5 w-5" />
                            <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                Yes
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="radio1" id="radioButton2" class="h-5 w-5" />
                            <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                No
                            </label>
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
