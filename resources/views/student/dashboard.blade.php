@extends('frontend.layouts.app')
@section('main_content')
<h2>{{Auth::user()->name}}</h2>
@endsection