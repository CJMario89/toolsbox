@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/lengthConvert.css')}}">
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <div class="block">
                <div class="optionContainer">
                    <div class="borderLR borderLRHover">
                        <div id="1fr" class="option borderTB borderTBHover">公尺(m)</div>
                    </div>
                    <div class="borderLR">
                        <div id="3.28fr" class="option borderTB">英呎(ft)</div>
                    </div>
                    <div class="borderLR">
                        <div id="3.03fr" class="option borderTB">丈(十尺)</div>
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
                                <div id="0.000621fr" class="otherOption">
                                    英里(mi)
                                </div>
                                 <div id="0.19884fr" class="otherOption">
                                    桿 (rd)
                                </div>
                                <div id="0.55fr" class="otherOption">
                                    噚
                                </div>
                                <div id="1.09fr" class="otherOption">
                                    碼(yd)
                                </div>
                                <div id="3.28fr" class="otherOption">
                                    英呎(ft)
                                </div>
                                <div id="39.37fr" class="otherOption">
                                    英吋(in)
                                </div>
                                <div class="otherOptionCategory">
                                    公制
                                </div>
                                <div id="0.001fr" class="otherOption">
                                    公里(km)
                                </div>
                                <div id="1fr" class="otherOption">
                                    公尺(m)
                                </div>
                                <div id="100fr" class="otherOption">
                                    公分(cm)
                                </div>
                                <div id="1000fr" class="otherOption">
                                    毫米(mm)
                                </div>
                                <div id="1000000fr" class="otherOption">
                                    微米(µm)
                                </div>
                                <div id="1000000000fr" class="otherOption">
                                    奈米(nm)
                                </div>
                                <div class="otherOptionCategory">
                                    古東亞
                                </div>
                                <div id="0.005fr" class="otherOption">
                                    堂
                                </div>
                                <div id="3.03fr" class="otherOption">
                                    丈
                                </div>
                                <div id="0.303fr" class="otherOption">
                                    咫
                                </div>
                                <div id="0.0303fr" class="otherOption">
                                    寸
                                </div>
                                <div id="0.0303fr" class="otherOption">
                                    分
                                </div>
                                <div class="otherOptionCategory">
                                    其他
                                </div>
                                <div id="0.00054fr" class="otherOption">
                                    海里
                                </div>
                                <div id="10000000000fr" class="otherOption">
                                    埃米(Å)
                                </div>
                                <div id="352.77fr" class="otherOption">
                                    點(pt)
                                </div>
                                <div id="4512fr" class="otherOption">
                                    派卡(pc)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result from" value="1">
                    <div class="selectedOption">公尺(m)</div>
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
                        <div id="1to" class="option borderTB">公尺(m)</div>
                    </div>
                    <div class="borderLR borderLRHover">
                        <div id="3.28to" class="option borderTB borderTBHover">英呎(ft)</div>
                    </div>
                    <div class="borderLR">
                        <div id="3.03to" class="option borderTB">丈(十尺)</div>
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
                                <div id="0.000621to" class="otherOption">
                                    英里(mi)
                                </div>
                                 <div id="0.19884to" class="otherOption">
                                    桿 (rd)
                                </div>
                                <div id="0.55to" class="otherOption">
                                    噚
                                </div>
                                <div id="1.09to" class="otherOption">
                                    碼(yd)
                                </div>
                                <div id="3.28to" class="otherOption">
                                    英呎(ft)
                                </div>
                                <div id="39.37to" class="otherOption">
                                    英吋(in)
                                </div>
                                <div class="otherOptionCategory">
                                    公制
                                </div>
                                <div id="0.001to" class="otherOption">
                                    公里(km)
                                </div>
                                <div id="1to" class="otherOption">
                                    公尺(m)
                                </div>
                                <div id="100to" class="otherOption">
                                    公分(cm)
                                </div>
                                <div id="1000to" class="otherOption">
                                    毫米(mm)
                                </div>
                                <div id="1000000to" class="otherOption">
                                    微米(µm)
                                </div>
                                <div id="1000000000to" class="otherOption">
                                    奈米(nm)
                                </div>
                                <div class="otherOptionCategory">
                                    古東亞
                                </div>
                                <div id="0.005to" class="otherOption">
                                    堂
                                </div>
                                <div id="3.03to" class="otherOption">
                                    丈
                                </div>
                                <div id="0.303to" class="otherOption">
                                    咫
                                </div>
                                <div id="0.0303to" class="otherOption">
                                    寸
                                </div>
                                <div id="0.0303to" class="otherOption">
                                    分
                                </div>
                                <div class="otherOptionCategory">
                                    其他
                                </div>
                                <div id="0.00054to" class="otherOption">
                                    海里
                                </div>
                                <div id="10000000000to" class="otherOption">
                                    埃米(Å)
                                </div>
                                <div id="352.77to" class="otherOption">
                                    點(pt)
                                </div>
                                <div id="4512to" class="otherOption">
                                    派卡(pc)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result to" value="1">
                    <div class="selectedOption">英呎(ft)</div>
                </div>
            </div>
        </div>
         <div class="title">
            長度換算
        </div>

        <div class="description">
            公制、英制、東亞古制
        </div>
    </div>
@endsection

@section('js')
    @include('js.lengthConvert')
@endsection