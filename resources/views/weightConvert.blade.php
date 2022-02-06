@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/weightConvert.css')}}">
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <div class="block">
                <div class="optionContainer">
                    <div class="borderLR borderLRHover">
                        <div id="1fr" class="option borderTB borderTBHover">公斤(kg)</div>
                    </div>
                    <div class="borderLR">
                        <div id="2.2fr" class="option borderTB">磅(lb)</div>
                    </div>
                    <div class="borderLR">
                        <div id="26.45547fr" class="option borderTB">兩(十錢)</div>
                    </div>
                    <div class="borderLR">
                        <div class="otherContainer borderTB">
                            <div class="otherOptionSelected">
                                其他
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div class="otherOptionCategory">
                                    英制
                                </div>
                                <div id="0.000984fr" class="otherOption">
                                    英噸
                                </div>
                                <div id="35.2739619fr" class="otherOption">
                                    盎司(oz)
                                </div>
                                <div id="564.38fr" class="otherOption">
                                    打蘭(dr)
                                </div>
                                <div id="15432.36fr" class="otherOption">
                                    格令(gr)
                                </div>
                                <div class="otherOptionCategory">
                                    公制
                                </div>
                                <div id="0.001fr" class="otherOption">
                                    公噸(t)
                                </div>
                                <div id="1000fr" class="otherOption">
                                    公克(g)
                                </div>
                                <div id="1000000fr" class="otherOption">
                                    毫克(mg)
                                </div>
                                <div id="1000000000fr" class="otherOption">
                                    微克(µg)
                                </div>
                                <div class="otherOptionCategory">
                                    古東亞
                                </div>
                                <div id="0.0165346fr" class="otherOption">
                                    擔
                                </div>
                                <div id="1.65346fr" class="otherOption">
                                    斤
                                </div>
                                <div id="264.5547fr" class="otherOption">
                                    錢
                                </div>
                                <div id="2645.547fr" class="otherOption">
                                    分
                                </div>
                                <div id="26455.47fr" class="otherOption">
                                    釐
                                </div>
                                <div id="264554.7fr" class="otherOption">
                                    毫
                                </div>
                                <div id="2645547fr" class="otherOption">
                                    絲
                                </div>
                                <div class="otherOptionCategory">
                                    其他
                                </div>
                                <div id="0.6fr" class="otherOption">
                                    台斤
                                </div>
                                <div id="5000fr" class="otherOption">
                                    克拉
                                </div>
                                <div id="0.01fr" class="otherOption">
                                    千牛頓(kN)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result from" value="1">
                    <div class="selectedOption">公斤(kg)</div>
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
                        <div id="1to" class="option borderTB">公斤(kg)</div>
                    </div>
                    <div class="borderLR borderLRHover">
                        <div id="2.2to" class="option borderTB borderTBHover">磅(lb)</div>
                    </div>
                    <div class="borderLR">
                        <div id="26.45547to" class="option borderTB">兩(十錢)</div>
                    </div>
                    <div class="borderLR">
                        <div class="otherContainer borderTB">
                            <div class="otherOptionSelected">
                                其他
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div class="otherOptionCategory">
                                    英制
                                </div>
                                <div id="0.000984to" class="otherOption">
                                    英噸
                                </div>
                                <div id="35.2739619to" class="otherOption">
                                    盎司(oz)
                                </div>
                                <div id="564.38to" class="otherOption">
                                    打蘭(dr)
                                </div>
                                <div id="15432.36to" class="otherOption">
                                    格令(gr)
                                </div>
                                <div class="otherOptionCategory">
                                    公制
                                </div>
                                <div id="0.001to" class="otherOption">
                                    公噸(t)
                                </div>
                                <div id="1000to" class="otherOption">
                                    公克(g)
                                </div>
                                <div id="1000000to" class="otherOption">
                                    毫克(mg)
                                </div>
                                <div id="1000000000to" class="otherOption">
                                    微克(µg)
                                </div>
                                <div class="otherOptionCategory">
                                    古東亞
                                </div>
                                <div id="0.0165346to" class="otherOption">
                                    擔
                                </div>
                                <div id="1.65346to" class="otherOption">
                                    斤
                                </div>
                                <div id="264.5547to" class="otherOption">
                                    錢
                                </div>
                                <div id="2645.547to" class="otherOption">
                                    分
                                </div>
                                <div id="26455.47to" class="otherOption">
                                    釐
                                </div>
                                <div id="264554.7to" class="otherOption">
                                    毫
                                </div>
                                <div id="2645547to" class="otherOption">
                                    絲
                                </div>
                                <div class="otherOptionCategory">
                                    其他
                                </div>
                                <div id="0.6to" class="otherOption">
                                    台斤
                                </div>
                                <div id="5000to" class="otherOption">
                                    克拉
                                </div>
                                <div id="0.01to" class="otherOption">
                                    千牛頓(kN)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result to" value="1">
                    <div class="selectedOption">磅(lb)</div>
                </div>
            </div>
        </div>
         <div class="title">
            重量換算
        </div>

        <div class="description">
            公制、英制、東亞古制
        </div>
    </div>
@endsection

@section('js')
    @include('js.weightConvert')
@endsection