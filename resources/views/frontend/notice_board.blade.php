@extends('frontend.layouts.app')
@section('main_content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 m-9">
    @foreach ($notices as $item)
    <a href="{{route('notice_view', $item->id)}}">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-semibold mb-2">{{$item->notice}}</h3>
            <p class="text-gray-600">{{
                \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</p>
        </div>
    </a>

    @endforeach



</div>
@endsection