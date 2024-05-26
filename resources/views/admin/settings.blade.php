@extends('layouts.app')
@section('main_content')
<div class="w-full m-7">
    <h1 class="text-center text-2xl mb-5 text-green-600 mt-5">Logo and Icon</h1>
    <div class="flex justify-items-center  mb-6 ">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <img width="150" src="{{asset('storage/app/'.$settings->logo)}}" alt="{{$settings->site_name}}">
        </div>
        <div class="w-full md:w-1/2 px-3">
            <img width="150" src="{{asset('storage/app/'.$settings->icon)}}" alt="{{$settings->site_name}}">
        </div>
    </div>


    <form class="m-9" action="{{route('logo_upload', $settings->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="flex flex-wrap -mx-3 mb-6 ">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Logo
                </label>
                <input name="logo"
                    class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    type="file">

            </div>
            <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Icon
                </label>
                <input name="icon"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="file">
            </div>

            <div class="w-full md:w-1/3 mt-7">
                <button type="submit"
                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Submit
                </button>
            </div>
        </div>

    </form>




    <h1 class="text-center text-2xl mb-5 text-green-600 mt-5">Site Name and Footer name</h1>
    <div class="flex justify-items-center  mb-6 ">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <h3>{{$settings->site_name}}</h3>
        </div>
        <div class="w-full md:w-1/2 px-3">
            <h3>{{$settings->footer_name}}</h3>
        </div>
    </div>


    <form class="m-9" action="{{route('siteName_upload', $settings->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="flex flex-wrap -mx-3 mb-6 ">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Site Name
                </label>
                <input name="site_name"
                    class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    type="text">

            </div>
            <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Footer name
                </label>
                <input name="footer_name"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="text">
            </div>

            <div class="w-full md:w-1/3 mt-7">
                <button type="submit"
                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Submit
                </button>
            </div>
        </div>

    </form>

    

</div>

@endsection