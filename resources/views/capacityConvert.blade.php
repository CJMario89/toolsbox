@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/capacityConvert.css')}}">
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <div class="block">
                <div class="optionContainer">
                    <div class="borderLR borderLRHover">
                        <div id="1fr" class="option borderTB borderTBHover">
                            {{__('capacityConvert.cubicMeter')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div id="1000fr" class="option borderTB">
                            {{__('capacityConvert.liter')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div id="1000000fr" class="option borderTB">
                            {{__('capacityConvert.cubicCentimeter')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div class="otherContainer borderTB">
                            <div class="otherOptionSelected">
                                    {{__('capacityConvert.else')}}
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div class="otherOptionCategory">
                                        {{__('capacityConvert.BritishImperialUnit')}}
                                </div>
                                <div id="6.11fr" class="otherOption">
                                    {{__('capacityConvert.barrel')}}
                                </div>
                                 <div id="219.97fr" class="otherOption">
                                    {{__('capacityConvert.gallon')}}
                                </div>
                                <div id="879.88fr" class="otherOption">
                                    {{__('capacityConvert.quart')}}
                                </div>
                                <div id="1759.75fr" class="otherOption">
                                    {{__('capacityConvert.pint')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('capacityConvert.metric')}}
                                </div>
                                <div id="0.000000001fr" class="otherOption">
                                    {{__('capacityConvert.cubicKilometer')}}
                                </div>
                                <div id="1fr" class="otherOption">
                                    {{__('capacityConvert.cubicMeter')}}
                                </div>
                                <div id="10fr" class="otherOption">
                                    {{__('capacityConvert.hectoliter')}}
                                </div>
                                <div id="1000fr" class="otherOption">
                                    {{__('capacityConvert.liter')}}
                                </div>
                                <div id="1000000fr" class="otherOption">
                                    {{__('capacityConvert.cubicCentimeter')}}
                                </div>
                                <div id="1000000fr" class="otherOption">
                                    {{__('capacityConvert.milliliter')}}
                                </div>
                                <div id="1000000000fr" class="otherOption">
                                    {{__('capacityConvert.cubicMillimeter')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('capacityConvert.USLiquidMeasure')}}
                                </div>
                                <div id="1.31fr" class="otherOption">
                                    {{__('capacityConvert.cubicYard')}}
                                </div>
                                <div id="6.29fr" class="otherOption">
                                    {{__('capacityConvert.barrel')}}
                                </div>
                                <div id="35.31fr" class="otherOption">
                                    {{__('capacityConvert.cubicFoot')}}
                                </div>
                                <div id="264.17fr" class="otherOption">
                                    {{__('capacityConvert.gallon')}}
                                </div>
                                <div id="1056.69fr" class="otherOption">
                                    {{__('capacityConvert.quart')}}
                                </div>
                                <div id="2113.38fr" class="otherOption">
                                    {{__('capacityConvert.pint')}}
                                </div>
                                <div id="61023.76fr" class="otherOption">
                                    {{__('capacityConvert.cubicInch')}}
                                </div>
                                <div id="270512.2fr" class="otherOption">
                                    {{__('capacityConvert.fluidDram')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('capacityConvert.USDryMeasure')}}
                                </div>
                                <div id="8.65fr" class="otherOption">
                                    {{__('capacityConvert.barrel')}}
                                </div>
                                <div id="227.02fr" class="otherOption">
                                    {{__('capacityConvert.gallon')}}
                                </div>
                                <div id="908.08fr" class="otherOption">
                                    {{__('capacityConvert.quart')}}
                                </div>
                                <div id="1816.17fr" class="otherOption">
                                    {{__('capacityConvert.pint')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('capacityConvert.cookingMetric')}}
                                </div>
                                <div id="66666.67fr" class="otherOption">
                                    {{__('capacityConvert.tablespoon')}}
                                </div>
                                <div id="200000fr" class="otherOption">
                                    {{__('capacityConvert.teaspoon')}}
                                </div>
                                <div id="1000000fr" class="otherOption">
                                    {{__('capacityConvert.spiceMeasure')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('capacityConvert.cookingUS')}}
                                </div>
                                <div id="4226.75fr" class="otherOption">
                                    {{__('capacityConvert.cup')}}
                                </div>
                                <div id="67628.03fr" class="otherOption">
                                    {{__('capacityConvert.tablespoon')}}
                                </div>
                                <div id="202884.1fr" class="otherOption">
                                    {{__('capacityConvert.teaspoon')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result from" value="1">
                    <div class="selectedOption">
                        {{__('capacityConvert.cubicMeter')}}
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
                            {{__('capacityConvert.cubicMeter')}}
                        </div>
                    </div>
                    <div class="borderLR borderLRHover">
                        <div id="1000to" class="option borderTB borderTBHover">
                            {{__('capacityConvert.liter')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div id="1000000to" class="option borderTB">
                            {{__('capacityConvert.cubicCentimeter')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div class="otherContainer borderTB">
                            <div class="otherOptionSelected">
                                    {{__('capacityConvert.else')}}
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div class="otherOptionCategory">
                                        {{__('capacityConvert.BritishImperialUnit')}}
                                </div>
                                <div id="6.11to" class="otherOption">
                                    {{__('capacityConvert.barrel')}}
                                </div>
                                 <div id="219.97to" class="otherOption">
                                    {{__('capacityConvert.gallon')}}
                                </div>
                                <div id="879.88to" class="otherOption">
                                    {{__('capacityConvert.quart')}}
                                </div>
                                <div id="1759.75to" class="otherOption">
                                    {{__('capacityConvert.pint')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('capacityConvert.metric')}}
                                </div>
                                <div id="0.000000001to" class="otherOption">
                                    {{__('capacityConvert.cubicKilometer')}}
                                </div>
                                <div id="1to" class="otherOption">
                                    {{__('capacityConvert.cubicMeter')}}
                                </div>
                                <div id="10to" class="otherOption">
                                    {{__('capacityConvert.hectoliter')}}
                                </div>
                                <div id="1000to" class="otherOption">
                                    {{__('capacityConvert.liter')}}
                                </div>
                                <div id="1000000to" class="otherOption">
                                    {{__('capacityConvert.cubicCentimeter')}}
                                </div>
                                <div id="1000000to" class="otherOption">
                                    {{__('capacityConvert.milliliter')}}
                                </div>
                                <div id="1000000000to" class="otherOption">
                                    {{__('capacityConvert.cubicMillimeter')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('capacityConvert.USLiquidMeasure')}}
                                </div>
                                <div id="1.31to" class="otherOption">
                                    {{__('capacityConvert.cubicYard')}}
                                </div>
                                <div id="6.29to" class="otherOption">
                                    {{__('capacityConvert.barrel')}}
                                </div>
                                <div id="35.31to" class="otherOption">
                                    {{__('capacityConvert.cubicFoot')}}
                                </div>
                                <div id="264.17to" class="otherOption">
                                    {{__('capacityConvert.gallon')}}
                                </div>
                                <div id="1056.69to" class="otherOption">
                                    {{__('capacityConvert.quart')}}
                                </div>
                                <div id="2113.38to" class="otherOption">
                                    {{__('capacityConvert.pint')}}
                                </div>
                                <div id="61023.76to" class="otherOption">
                                    {{__('capacityConvert.cubicInch')}}
                                </div>
                                <div id="270512.2to" class="otherOption">
                                    {{__('capacityConvert.fluidDram')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('capacityConvert.USDryMeasure')}}
                                </div>
                                <div id="8.65to" class="otherOption">
                                    {{__('capacityConvert.barrel')}}
                                </div>
                                <div id="227.02to" class="otherOption">
                                    {{__('capacityConvert.gallon')}}
                                </div>
                                <div id="908.08to" class="otherOption">
                                    {{__('capacityConvert.quart')}}
                                </div>
                                <div id="1816.17to" class="otherOption">
                                    {{__('capacityConvert.pint')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('capacityConvert.cookingMetric')}}
                                </div>
                                <div id="66666.67to" class="otherOption">
                                    {{__('capacityConvert.tablespoon')}}
                                </div>
                                <div id="200000to" class="otherOption">
                                    {{__('capacityConvert.teaspoon')}}
                                </div>
                                <div id="1000000to" class="otherOption">
                                    {{__('capacityConvert.spiceMeasure')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('capacityConvert.cookingUS')}}
                                </div>
                                <div id="4226.75to" class="otherOption">
                                    {{__('capacityConvert.cup')}}
                                </div>
                                <div id="67628.03to" class="otherOption">
                                    {{__('capacityConvert.tablespoon')}}
                                </div>
                                <div id="202884.1to" class="otherOption">
                                    {{__('capacityConvert.teaspoon')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result to" value="1">
                    <div class="selectedOption">
                        {{__('capacityConvert.liter')}}
                    </div>
                </div>
            </div>
        </div>
         <div class="title">
            {{__('capacityConvert.capacityConvert')}}
        </div>

        <div class="description">
            {{__('capacityConvert.description')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.capacityConvert')
@endsection