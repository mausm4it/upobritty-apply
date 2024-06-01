@extends('frontend.layouts.app')
@section('main_content')
<div class="bg-gray-100 flex items-center justify-center p-5">
    <div class="bg-light-brown-100 w-full max-w-5xl mx-4 p-6 rounded-lg shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <img src="{{asset('storage/app/'.$settings->logo)}}" alt="Company Logo" class="h-12">
            <span class="text-gray-600">Notice Date: <strong>{{
                    \Carbon\Carbon::parse($notice->created_at)->format('d F Y') }}</strong></span>
        </div>
        <h2 class="text-2xl font-bold text-center mb-2">{{$notice->notice}}</h2>
        <p class="text-gray-800 mb-4">
            {!! $notice->content !!}
        </p>


    </div>

    <style>
        .bg-light-brown-100 {
            background-color: #f5e0c1;
            /* Light brown color */
        }
    </style>
</div>
@endsection