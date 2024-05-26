@extends('layouts.app')
@section('main_content')
<form class=" m-9" action="{{route('send-sms')}}" method="POST">
    @csrf
    {{-- <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="SenderId">
            SenderId
        </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="SenderId" name="SenderId" type="text" placeholder="SenderId">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="Message">
            Message
        </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="text" name="Message" placeholder="Message">
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="MobileNumbers">
            MobileNumbers
        </label>
        <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="MobileNumbers" name="MobileNumbers" type="text" placeholder="MobileNumbers">
    </div> --}}
    <div class="flex items-center justify-between">
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit">
            Send
        </button>
    </div>
</form>
{{--
<script>
    $(function () {
        $.ajax({
            type: "GET",
            url: "/send-sms",
            success: function (response) {
                console.log(response);
            },
            error: function (error) {
                console.error(error);
            }
        });
    });
</script> --}}
@endsection