@extends('layouts.app')
@section('main_content')
<div class="flex items-center justify-center ">

    <div class="mx-auto w-full  p-9 mt-5 mb-3 bg-white">


        @if ($errors->any())
        <div class="bg-danger/25 text-red-500  text-sm rounded-md p-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('page_update',$page->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3">
                    <div class="mb-5">
                        <label for="page_name" class="mb-3 block text-base font-medium text-[#07074D]">
                            Page name
                        </label>
                        <input type="text" name="page_name" id="page_name"
                            value="{{ old('page_name', $page->page_name) }}" placeholder="Write Home Card name"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            required />

                        @error('page_name')
                        <div class=" text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3">
                    <div class="mb-5">
                        <label for="page_details" class="mb-3 block text-base font-medium text-[#07074D]">
                            Page details
                        </label>
                        <textarea rows="6" id="page_details" name="page_details" placeholder="Default textarea"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">{{old('page_details',$page->page_details)}}</textarea>

                        @error('page_details')
                        <div class=" text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label for="status" class="mb-3 block text-base font-medium text-[#07074D]">
                        স্ট্যাটাস
                    </label>
                    <select id="status" name="status"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        required>

                        <option value="1" {{ old('status')=='1' ? 'selected' : '' }}>Active
                        </option>
                        <option value="0" {{ old('status')=='0' ? 'selected' : '' }}>
                            Inactive</option>



                    </select>
                    @error('status')
                    <div class=" text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <button
                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                    type="submit">
                    Submit
                </button>
            </div>



        </form>
    </div>
</div>
@endsection