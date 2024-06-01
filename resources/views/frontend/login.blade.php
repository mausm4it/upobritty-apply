@extends('frontend.layouts.app')
@section('main_content')
<style>
    .animate-fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }
</style>

<div class="bg-gray-100 flex items-center justify-center ">
    <div class="w-full max-w-lg">
        <form method="POST" action="{{ route('user_login') }}"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 animate-fade-in">
            @csrf
            <h2 class="text-center text-2xl font-bold mb-4">Login</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="user_id">
                    User ID
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="user_id" name="user_id" type="text" placeholder="User ID">
                @error('user_id')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" name="password" type="password" placeholder="**********">
                @error('password')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Log In
                </button>

            </div>
        </form>
    </div>
</div>

@endsection