@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/massConvert.css')}}">
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <div class="block">
                <div class="optionContainer">
                    <div class="borderLR borderLRHover">
                        <div id="1fr" class="option borderTB borderTBHover">
                            {{__('massConvert.kilogram')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div id="2.2fr" class="option borderTB">
                            {{__('massConvert.pound')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div id="1000fr" class="option borderTB">
                            {{__('massConvert.gram')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div class="otherContainer borderTB">
                            <div class="otherOptionSelected">
                                {{__('massConvert.else')}}
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div class="otherOptionCategory">
                                    {{__('massConvert.avoirdupoisUS')}}
                                </div>
                                <div id="0.000984fr" class="otherOption">
                                    {{__('massConvert.longfrn')}}
                                </div>
                                <div id="2.2fr" class="otherOption">
                                    {{__('massConvert.pound')}}
                                </div>
                                <div id="35.2739619fr" class="otherOption">
                                    {{__('massConvert.ounce')}}
                                </div>
                                <div id="564.38fr" class="otherOption">
                                    {{__('massConvert.dram')}}
                                </div>
                                <div id="15432.36fr" class="otherOption">
                                    {{__('massConvert.grain')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('massConvert.metric')}}
                                </div>
                                <div id="0.001fr" class="otherOption">
                                    {{__('massConvert.frn')}}
                                </div>
                                <div id="1fr" class="otherOption">
                                    {{__('massConvert.kilogram')}}
                                </div>
                                <div id="1000fr" class="otherOption">
                                    {{__('massConvert.gram')}}
                                </div>
                                <div id="1000000fr" class="otherOption">
                                    {{__('massConvert.milligram')}}
                                </div>
                                <div id="1000000000fr" class="otherOption">
                                    {{__('massConvert.microgram')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('massConvert.else')}}
                                </div>
                                <div id="0.6fr" class="otherOption">
                                    {{__('massConvert.tw-catty')}}
                                </div>
                                <div id="1.65346fr" class="otherOption">
                                    {{__('massConvert.china-catty')}}
                                </div>
                                <div id="26.45547fr" class="otherOption">
                                    {{__('massConvert.tw-tael')}}
                                </div>
                                <div id="264.5547fr" class="otherOption">
                                    {{__('massConvert.tw-mace')}}
                                </div>
                                <div id="2645.547fr" class="otherOption">
                                    {{__('massConvert.tw-cadareen')}}
                                </div>
                                <div id="5000fr" class="otherOption">
                                    {{__('massConvert.carat')}}
                                </div>
                                <div id="0.01fr" class="otherOption">
                                    {{__('massConvert.kilonewton')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result from" value="1">
                    <div class="selectedOption">
                        {{__('massConvert.kilogram')}}
                    </div>
                </div>
            </div>
            <div class="transfer">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </div>
            <div class="block">
                <div class="optionContainer">
                    <div class="borderLR">
                        <div id="1to" class="option borderTB">
                            {{__('massConvert.kilogram')}}
                        </div>
                    </div>
                    <div class="borderLR borderLRHover">
                        <div id="2.2to" class="option borderTB borderTBHover">
                            {{__('massConvert.pound')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div id="1000to" class="option borderTB">
                            {{__('massConvert.gram')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div class="otherContainer borderTB">
                            <div class="otherOptionSelected">
                                {{__('massConvert.else')}}
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div class="otherOptionCategory">
                                    {{__('massConvert.avoirdupoisUS')}}
                                </div>
                                <div id="0.000984to" class="otherOption">
                                    {{__('massConvert.longTon')}}
                                </div>
                                <div id="2.2to" class="otherOption">
                                    {{__('massConvert.pound')}}
                                </div>
                                <div id="35.2739619to" class="otherOption">
                                    {{__('massConvert.ounce')}}
                                </div>
                                <div id="564.38to" class="otherOption">
                                    {{__('massConvert.dram')}}
                                </div>
                                <div id="15432.36to" class="otherOption">
                                    {{__('massConvert.grain')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('massConvert.metric')}}
                                </div>
                                <div id="0.001to" class="otherOption">
                                    {{__('massConvert.ton')}}
                                </div>
                                <div id="1to" class="otherOption">
                                    {{__('massConvert.kilogram')}}
                                </div>
                                <div id="1000to" class="otherOption">
                                    {{__('massConvert.gram')}}
                                </div>
                                <div id="1000000to" class="otherOption">
                                    {{__('massConvert.milligram')}}
                                </div>
                                <div id="1000000000to" class="otherOption">
                                    {{__('massConvert.microgram')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('massConvert.else')}}
                                </div>
                                <div id="0.6to" class="otherOption">
                                    {{__('massConvert.tw-catty')}}
                                </div>
                                <div id="1.65346to" class="otherOption">
                                    {{__('massConvert.china-catty')}}
                                </div>
                                <div id="26.45547to" class="otherOption">
                                    {{__('massConvert.tw-tael')}}
                                </div>
                                <div id="264.5547to" class="otherOption">
                                    {{__('massConvert.tw-mace')}}
                                </div>
                                <div id="2645.547to" class="otherOption">
                                    {{__('massConvert.tw-cadareen')}}
                                </div>
                                <div id="5000to" class="otherOption">
                                    {{__('massConvert.carat')}}
                                </div>
                                <div id="0.01to" class="otherOption">
                                    {{__('massConvert.kilonewton')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result to">
                    <div class="selectedOption">
                        {{__('massConvert.pound')}}
                    </div>
                </div>
            </div>
        </div>
         <div class="title">
            {{__('massConvert.massConvert')}}
        </div>

        <div class="description">
            {{__('massConvert.description')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.massConvert')
@endsection