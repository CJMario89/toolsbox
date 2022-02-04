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
                        <div id="2pofr" class="option borderTB">2進位</div>
                    </div>
                    <div class="borderLR">
                        <div id="10pofr" class="option borderTB borderTBHover">10進位</div>
                    </div>
                    <div class="borderLR">
                        <div id="16pofr" class="option borderTB">16進位</div>
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
                                <div id="64pofr" class="otherOption">
                                    64進位
                                </div>
                                <div id="32pofr" class="otherOption">
                                    32進位
                                </div>
                                <div id="3pofr" class="otherOption">
                                    3進位
                                </div>
                                <div id="4pofr" class="otherOption">
                                    4進位
                                </div>
                                <div id="5pofr" class="otherOption">
                                    5進位
                                </div>
                                <div id="6pofr" class="otherOption">
                                    6進位
                                </div>
                                <div id="7pofr" class="otherOption">
                                    7進位
                                </div>
                                <div id="8pofr" class="otherOption">
                                    8進位
                                </div>
                                <div id="9pofr" class="otherOption">
                                    9進位
                                </div>
                                <div id="10pofr" class="otherOption">
                                    10進位
                                </div>
                                <div id="11pofr" class="otherOption">
                                    11進位
                                </div>
                                <div id="12pofr" class="otherOption">
                                    12進位
                                </div>
                                <div id="13pofr" class="otherOption">
                                    13進位
                                </div>
                                <div id="14pofr" class="otherOption">
                                    14進位
                                </div>
                                <div id="15pofr" class="otherOption">
                                    15進位
                                </div>
                                <div id="17pofr" class="otherOption">
                                    17進位
                                </div>
                                <div id="18pofr" class="otherOption">
                                    18進位
                                </div>
                                <div id="19pofr" class="otherOption">
                                    19進位
                                </div>
                                <div id="20pofr" class="otherOption">
                                    20進位
                                </div>
                                <div id="21pofr" class="otherOption">
                                    21進位
                                </div>
                                <div id="22pofr" class="otherOption">
                                    22進位
                                </div>
                                <div id="23pofr" class="otherOption">
                                    23進位
                                </div>
                                <div id="24pofr" class="otherOption">
                                    24進位
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result from" value="2">
                    <div class="selectedOption"></div>
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
                        <div id="2poto" class="option borderTB borderTBHover">2進位</div>
                    </div>
                    <div class="borderLR">
                        <div id="10poto" class="option borderTB">10進位</div>
                    </div>
                    <div class="borderLR">
                        <div id="16poto" class="option borderTB">16進位</div>
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
                                <div id="64poto" class="otherOption">
                                    64進位
                                </div>
                                <div id="32poto" class="otherOption">
                                    32進位
                                </div>
                                <div id="3poto" class="otherOption">
                                    三進位
                                </div>
                                <div id="4poto" class="otherOption">
                                    四進位
                                </div>
                                <div id="5poto" class="otherOption">
                                    五進位
                                </div>
                                <div id="6poto" class="otherOption">
                                    六進位
                                </div>
                                <div id="7poto" class="otherOption">
                                    七進位
                                </div>
                                <div id="8poto" class="otherOption">
                                    八進位
                                </div>
                                <div id="9poto" class="otherOption">
                                    九進位
                                </div>
                                <div id="10poto" class="otherOption">
                                    十進位
                                </div>
                                <div id="11poto" class="otherOption">
                                    十一進位
                                </div>
                                <div id="12poto" class="otherOption">
                                    十二進位
                                </div>
                                <div id="13poto" class="otherOption">
                                    十三進位
                                </div>
                                <div id="14poto" class="otherOption">
                                    十四進位
                                </div>
                                <div id="15poto" class="otherOption">
                                    十五進位
                                </div>
                                <div id="17poto" class="otherOption">
                                    十七進位
                                </div>
                                <div id="18poto" class="otherOption">
                                    十八進位
                                </div>
                                <div id="19poto" class="otherOption">
                                    十九進位
                                </div>
                                <div id="20poto" class="otherOption">
                                    二十進位
                                </div>
                                <div id="21poto" class="otherOption">
                                    21進位
                                </div>
                                <div id="22poto" class="otherOption">
                                    22進位
                                </div>
                                <div id="23poto" class="otherOption">
                                    23進位
                                </div>
                                <div id="24poto" class="otherOption">
                                    24進位
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result to" value="">
                    <div class="selectedOption"></div>
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