@extends('frontend.layouts.app')
@section('main_content')


<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">



    <div class="bg-gray-100 flex items-center justify-center">
        <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-4 text-center">
                <h2 class="text-xl font-bold mb-2">User ID: {{Auth::user()->user_id}}</h2>

                <p class="text-gray-700 mb-4">Application Date: {{
                    \Carbon\Carbon::parse($student_apply->created_at)->format('d F Y') }}
                </p>

                <table class="min-w-full leading-normal">
                    <tbody>
                        <tr>
                            <td class="px-5 py-2 border-b border-blue-200 bg-white text-md">
                                <p class="text-blue-500 whitespace-no-wrap">Application Status</p>
                            </td>
                            <td class="px-5 py-2 border-b border-blue-200 bg-white text-md">
                                <p class="text-blue-500 whitespace-no-wrap">{{$student_apply->status}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-2 border-b border-green-200 bg-white text-md">
                                <p class="text-green-500 whitespace-no-wrap">Payment Status</p>
                            </td>
                            <td class="px-5 py-2 border-b border-green-200 bg-white text-md">
                                <p class="text-green-500 whitespace-no-wrap">{{$student_apply->payment_status}}</p>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
@endsection