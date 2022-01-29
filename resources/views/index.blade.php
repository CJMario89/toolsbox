@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
    <div class="temp">
        temp
    </div>
@endsection

@section('js')
    @include('js.index')
@endsection