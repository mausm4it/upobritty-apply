@extends('frontend.layouts.app')
@section('main_content')


<div class="container mx-auto mt-8 px-6">
    <div class="bg-white rounded-lg shadow-md p-6">

        <h1 class="text-2xl font-semibold text-gray-800 text-center">{{$page->page_name}}</h1>

        <div class="mt-4 text-gray-700">
            <p>{!! $page->page_details !!}</p>
        </div>
    </div>
</div>

@endsection