@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/positionalConvert.css')}}">
@endsection

@section('content')
    <div class="container">
       

        <div class="tool">
            <div class="block">
                <div class="optionContainer">
                    <div class="borderLR">
                        <div class="option borderTB">二進位</div>
                    </div>
                    <div class="borderLR">
                        <div class="option borderTB">十進位</div>
                    </div>
                    <div class="borderLR">
                        <div class="option borderTB">十六進位</div>
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
                                <div class="otherOption">
                                    四進位
                                </div>
                                <div class="otherOption">
                                    六進位
                                </div>
                                <div class="otherOption">
                                    八進位
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result from" value="1">
                    <div class="selectedOption">十進位</div>
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
                        <div class="option borderTB">二進位</div>
                    </div>
                    <div class="borderLR">
                        <div class="option borderTB">十進位</div>
                    </div>
                    <div class="borderLR">
                        <div class="option borderTB">十六進位</div>
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
                                <div class="otherOption">
                                    四進位
                                </div>
                                <div class="otherOption">
                                    六進位
                                </div>
                                <div class="otherOption">
                                    八進位
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result to" value="1">
                    <div class="selectedOption">十進位</div>
                </div>
            </div>
        </div>
         <div class="title">
            進位轉換
        </div>

        <div class="description">
        </div>
    </div>
@endsection

@section('js')
    @include('js.positionalConvert')
@endsection