@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/hash.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/crypto-js@4.0.0/crypto-js.js"></script>   
@endsection

@section('content')
    <div class="container">
       

        <div class="tool">
            
        </div>
         <div class="title">
            hash
        </div>

        <div class="description">
        </div>
    </div>
@endsection

@section('js')
    @include('js.hash')
@endsection