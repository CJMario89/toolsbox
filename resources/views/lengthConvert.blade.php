@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/lengthConvert.css')}}">
    <title>{{__('lengthConvert.lengthConvert')}}</title>
    <meta name="description" content="{{__('lengthConvert.description')}}"/>
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <div class="block">
                <div class="optionContainer">
                    <div class="borderLR borderLRHover">
                        <div id="1fr" class="option borderTB borderTBHover">
                            {{__('lengthConvert.meter')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div id="3.28fr" class="option borderTB">
                            {{__('lengthConvert.foot')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div id="39.37fr" class="option borderTB">
                            {{__('lengthConvert.inch')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div class="otherContainer borderTB">
                            <div class="otherOptionSelected">
                                {{__('lengthConvert.else')}}
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div class="otherOptionCategory">
                                    {{__('lengthConvert.britishAmerican')}}
                                </div>
                                <div id="0.000621fr" class="otherOption">
                                    {{__('lengthConvert.mile')}}
                                </div>
                                 <div id="0.19884fr" class="otherOption">
                                    {{__('lengthConvert.rod')}}
                                </div>
                                <div id="0.55fr" class="otherOption">
                                    {{__('lengthConvert.fathom')}}
                                </div>
                                <div id="1.09fr" class="otherOption">
                                    {{__('lengthConvert.yard')}}
                                </div>
                                <div id="3.28fr" class="otherOption">
                                    {{__('lengthConvert.foot')}}
                                </div>
                                <div id="39.37fr" class="otherOption">
                                    {{__('lengthConvert.inch')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('lengthConvert.metric')}}
                                </div>
                                <div id="0.001fr" class="otherOption">
                                    {{__('lengthConvert.kilometer')}}
                                </div>
                                <div id="1fr" class="otherOption">
                                    {{__('lengthConvert.meter')}}
                                </div>
                                <div id="100fr" class="otherOption">
                                    {{__('lengthConvert.centimeter')}}
                                </div>
                                <div id="1000fr" class="otherOption">
                                    {{__('lengthConvert.millimeter')}}
                                </div>
                                <div id="1000000fr" class="otherOption">
                                    {{__('lengthConvert.micrometer')}}
                                </div>
                                <div id="1000000000fr" class="otherOption">
                                    {{__('lengthConvert.nanometer')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('lengthConvert.else')}}
                                </div>
                                <div id="0.005fr" class="otherOption">
                                    {{__('lengthConvert.tang')}}
                                </div>
                                <div id="3.03fr" class="otherOption">
                                    {{__('lengthConvert.zhang')}}
                                </div>
                                <div id="0.303fr" class="otherOption">
                                    {{__('lengthConvert.chi')}}
                                </div>
                                <div id="0.0303fr" class="otherOption">
                                    {{__('lengthConvert.tsun')}}
                                </div>
                                <div id="0.0303fr" class="otherOption">
                                    {{__('lengthConvert.fen')}}
                                </div>
                                <div id="0.00054fr" class="otherOption">
                                    {{__('lengthConvert.nauticalMile')}}
                                </div>
                                <div id="10000000000fr" class="otherOption">
                                    {{__('lengthConvert.angstrom')}}
                                </div>
                                <div id="352.77fr" class="otherOption">
                                    {{__('lengthConvert.point')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result from" value="1">
                    <div class="selectedOption">
                        {{__('lengthConvert.meter')}}
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
                            {{__('lengthConvert.meter')}}
                        </div>
                    </div>
                    <div class="borderLR borderLRHover">
                        <div id="3.28to" class="option borderTB borderTBHover">
                            {{__('lengthConvert.foot')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div id="39.37to" class="option borderTB">
                            {{__('lengthConvert.inch')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div class="otherContainer borderTB">
                            <div class="otherOptionSelected">
                                {{__('lengthConvert.else')}}
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div class="otherOptionCategory">
                                    {{__('lengthConvert.britishAmerican')}}
                                </div>
                                <div id="0.000621to" class="otherOption">
                                    {{__('lengthConvert.mile')}}
                                </div>
                                 <div id="0.19884to" class="otherOption">
                                    {{__('lengthConvert.rod')}}
                                </div>
                                <div id="0.55to" class="otherOption">
                                    {{__('lengthConvert.fathom')}}
                                </div>
                                <div id="1.09to" class="otherOption">
                                    {{__('lengthConvert.yard')}}
                                </div>
                                <div id="3.28to" class="otherOption">
                                    {{__('lengthConvert.foot')}}
                                </div>
                                <div id="39.37to" class="otherOption">
                                    {{__('lengthConvert.inch')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('lengthConvert.metric')}}
                                </div>
                                <div id="0.001to" class="otherOption">
                                    {{__('lengthConvert.kilometer')}}
                                </div>
                                <div id="1to" class="otherOption">
                                    {{__('lengthConvert.meter')}}
                                </div>
                                <div id="100to" class="otherOption">
                                    {{__('lengthConvert.centimeter')}}
                                </div>
                                <div id="1000to" class="otherOption">
                                    {{__('lengthConvert.millimeter')}}
                                </div>
                                <div id="1000000to" class="otherOption">
                                    {{__('lengthConvert.micrometer')}}
                                </div>
                                <div id="1000000000to" class="otherOption">
                                    {{__('lengthConvert.nanometer')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('lengthConvert.else')}}
                                </div>
                                <div id="0.005to" class="otherOption">
                                    {{__('lengthConvert.tang')}}
                                </div>
                                <div id="3.03to" class="otherOption">
                                    {{__('lengthConvert.zhang')}}
                                </div>
                                <div id="0.303to" class="otherOption">
                                    {{__('lengthConvert.chi')}}
                                </div>
                                <div id="0.0303to" class="otherOption">
                                    {{__('lengthConvert.tsun')}}
                                </div>
                                <div id="0.0303to" class="otherOption">
                                    {{__('lengthConvert.fen')}}
                                </div>
                                <div id="0.00054to" class="otherOption">
                                    {{__('lengthConvert.nauticalMile')}}
                                </div>
                                <div id="10000000000to" class="otherOption">
                                    {{__('lengthConvert.angstrom')}}
                                </div>
                                <div id="352.77to" class="otherOption">
                                    {{__('lengthConvert.point')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result to" value="1">
                    <div class="selectedOption">
                        {{__('lengthConvert.foot')}}
                    </div>
                </div>
            </div>
        </div>
         <div class="title">
            {{__('lengthConvert.lengthConvert')}}
        </div>

        <div class="description">
            {{__('lengthConvert.description')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.lengthConvert')
@endsection