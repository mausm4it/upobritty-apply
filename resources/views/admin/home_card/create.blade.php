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

        <form action="{{route('home_card_create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="border border-blue-300 rounded-lg p-5 mb-5">
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3">
                        <div class="mb-5">
                            <label for="card_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                Home Card name
                            </label>
                            <input type="text" name="card_name" id="card_name" value="{{ old('card_name') }}"
                                placeholder="Write Home Card name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required />

                            @error('card_name')
                            <div class=" text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

            </div>


            <div class="border border-blue-300 rounded-lg p-5 mb-5">
                <p class="border-b-2 border-blue-600 inline-flex mb-5 mt-5">Home Card Image</p>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Home Card Image (300*300)
                                </label>
                                <input onchange="ProfileImage(event)" value="{{ old('card_image') }}"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    type="file" name="card_image" accept="image/*" required>
                                @error('card_image')
                                <div class="text-red-500">Image Required 300*300 size with PNG or JPG Formate</div>
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