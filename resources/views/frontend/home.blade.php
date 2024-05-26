@extends('frontend.layouts.app')
@section('main_content')
<div class="m-5">
    <h1 class="text-3xl font-bold mb-4 ">
        {{$settings->site_name}} এ আপনাকে স্বাগতম</h1>
    <p>উপবৃত্তি এর জন্য আবেদন করুন এখনই</p>
</div>


<div class="flex flex-wrap mb-4">

    @foreach ($home_cards as $item)
    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/3 p-4">
        <div class="bg-gray-200 p-4 rounded-lg flex flex-col items-center justify-center">
            <!-- Card Content 1 -->
            <h2 class="text-lg font-bold text-left mb-4">{{$item->card_name}}</h2>
            <img src="{{ asset('storage/app/'.$item->card_image) }}" alt="Card Image 1" class="w-full rounded-lg mb-4">
            <a href="{{ route('apply-for-uporitty-view') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                আবেদন করুন
            </a>
        </div>
    </div>
    @endforeach

</div>


@endsection