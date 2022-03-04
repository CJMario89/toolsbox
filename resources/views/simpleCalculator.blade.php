@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/simpleCalculator.css')}}">
    <title>{{__('simpleCalculator.simpleCalculator')}}</title>
    <meta name="description" content="{{__('simpleCalculator.description')}}"/>
@endsection

@section('content')
    <div class="container">
       

        <div class="tool">
            <div class="calculator">
                <input class="input" type="text" value="0">
                <div class="buttonContainer">
                    <div class="button number n7">7</div>
                    <div class="button number n8">8</div>
                    <div class="button number n9">9</div>
                    <div class="button divide">÷</div>
                    <div class="button AC">AC</div>
                    <div class="button number n4">4</div>
                    <div class="button number n5">5</div>
                    <div class="button number n6">6</div>
                    <div class="button multiple">×</div>
                    <div class="button DEL">DEL</div>
                    <div class="button number n1">1</div>
                    <div class="button number n2">2</div>
                    <div class="button number n3">3</div>
                    <div class="button minus">-</div>
                    <div class="button remain">%</div>
                    <div class="button plusMinus">±</div>
                    <div class="button number n0">0</div>
                    <div class="button dot">.</div>
                    <div class="button plus">+</div>
                    <div class="button equal">=</div>
                </div>
            </div>
        </div>
         <div class="title">
            {{__('simpleCalculator.simpleCalculator')}}
        </div>

        <div class="description">
            {{__('simpleCalculator.description')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.simpleCalculator')
@endsection