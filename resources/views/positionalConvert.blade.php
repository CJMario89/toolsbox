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
                        <div id="2pofr" class="option borderTB">
                            {{__('positionalConvert.binary')}}
                        </div>
                    </div>
                    <div class="borderLR borderLRHover">
                        <div id="10pofr" class="option borderTB borderTBHover">
                            {{__('positionalConvert.decimal')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div id="16pofr" class="option borderTB">
                            {{__('positionalConvert.hexadecimal')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div class="otherContainer borderTB">
                            <div class="otherOptionSelected">
                                {{__('positionalConvert.else')}}
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div id="64pofr" class="otherOption">
                                    {{__('positionalConvert.base64')}}
                                </div>
                                <div id="32pofr" class="otherOption">
                                    {{__('positionalConvert.base32')}}
                                </div>
                                <div id="3pofr" class="otherOption">
                                    {{__('positionalConvert.ternary')}}
                                </div>
                                <div id="4pofr" class="otherOption">
                                    {{__('positionalConvert.quaternary')}}
                                </div>
                                <div id="5pofr" class="otherOption">
                                    {{__('positionalConvert.quinary')}}
                                </div>
                                <div id="6pofr" class="otherOption">
                                    {{__('positionalConvert.senary')}}
                                </div>
                                <div id="7pofr" class="otherOption">
                                    {{__('positionalConvert.septenary')}}
                                </div>
                                <div id="8pofr" class="otherOption">
                                    {{__('positionalConvert.octal')}}
                                </div>
                                <div id="9pofr" class="otherOption">
                                    {{__('positionalConvert.nonary')}}
                                </div>
                                <div id="10pofr" class="otherOption">
                                    {{__('positionalConvert.decimal')}}
                                </div>
                                <div id="11pofr" class="otherOption">
                                    {{__('positionalConvert.undecimal')}}
                                </div>
                                <div id="12pofr" class="otherOption">
                                    {{__('positionalConvert.duodecimal')}}
                                </div>
                                <div id="13pofr" class="otherOption">
                                    {{__('positionalConvert.base13')}}
                                </div>
                                <div id="14pofr" class="otherOption">
                                    {{__('positionalConvert.duodecimal')}}
                                </div>
                                <div id="15pofr" class="otherOption">
                                    {{__('positionalConvert.base15')}}
                                </div>
                                <div id="17pofr" class="otherOption">
                                    {{__('positionalConvert.base17')}}
                                </div>
                                <div id="18pofr" class="otherOption">
                                    {{__('positionalConvert.base18')}}
                                </div>
                                <div id="19pofr" class="otherOption">
                                    {{__('positionalConvert.base19')}}
                                </div>
                                <div id="20pofr" class="otherOption">
                                    {{__('positionalConvert.vigesimal')}}
                                </div>
                                <div id="21pofr" class="otherOption">
                                    {{__('positionalConvert.base21')}}
                                </div>
                                <div id="22pofr" class="otherOption">
                                    {{__('positionalConvert.base22')}}
                                </div>
                                <div id="23pofr" class="otherOption">
                                    {{__('positionalConvert.base23')}}
                                </div>
                                <div id="24pofr" class="otherOption">
                                    {{__('positionalConvert.base24')}}
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
                    <div class="borderLR borderLRHover">
                        <div id="2poto" class="option borderTB  borderTBHover">
                            {{__('positionalConvert.binary')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div id="10poto" class="option borderTB">
                            {{__('positionalConvert.decimal')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div id="16poto" class="option borderTB">
                            {{__('positionalConvert.hexadecimal')}}
                        </div>
                    </div>
                    <div class="borderLR">
                        <div class="otherContainer borderTB">
                            <div class="otherOptionSelected">
                                {{__('positionalConvert.else')}}
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div id="64poto" class="otherOption">
                                    {{__('positionalConvert.base64')}}
                                </div>
                                <div id="32poto" class="otherOption">
                                    {{__('positionalConvert.base32')}}
                                </div>
                                <div id="3poto" class="otherOption">
                                    {{__('positionalConvert.ternary')}}
                                </div>
                                <div id="4poto" class="otherOption">
                                    {{__('positionalConvert.quaternary')}}
                                </div>
                                <div id="5poto" class="otherOption">
                                    {{__('positionalConvert.quinary')}}
                                </div>
                                <div id="6poto" class="otherOption">
                                    {{__('positionalConvert.senary')}}
                                </div>
                                <div id="7poto" class="otherOption">
                                    {{__('positionalConvert.septenary')}}
                                </div>
                                <div id="8poto" class="otherOption">
                                    {{__('positionalConvert.octal')}}
                                </div>
                                <div id="9poto" class="otherOption">
                                    {{__('positionalConvert.nonary')}}
                                </div>
                                <div id="10poto" class="otherOption">
                                    {{__('positionalConvert.decimal')}}
                                </div>
                                <div id="11poto" class="otherOption">
                                    {{__('positionalConvert.undecimal')}}
                                </div>
                                <div id="12poto" class="otherOption">
                                    {{__('positionalConvert.duodecimal')}}
                                </div>
                                <div id="13poto" class="otherOption">
                                    {{__('positionalConvert.base13')}}
                                </div>
                                <div id="14poto" class="otherOption">
                                    {{__('positionalConvert.duodecimal')}}
                                </div>
                                <div id="15poto" class="otherOption">
                                    {{__('positionalConvert.base15')}}
                                </div>
                                <div id="17poto" class="otherOption">
                                    {{__('positionalConvert.base17')}}
                                </div>
                                <div id="18poto" class="otherOption">
                                    {{__('positionalConvert.base18')}}
                                </div>
                                <div id="19poto" class="otherOption">
                                    {{__('positionalConvert.base19')}}
                                </div>
                                <div id="20poto" class="otherOption">
                                    {{__('positionalConvert.vigesimal')}}
                                </div>
                                <div id="21poto" class="otherOption">
                                    {{__('positionalConvert.base21')}}
                                </div>
                                <div id="22poto" class="otherOption">
                                    {{__('positionalConvert.base22')}}
                                </div>
                                <div id="23poto" class="otherOption">
                                    {{__('positionalConvert.base23')}}
                                </div>
                                <div id="24poto" class="otherOption">
                                    {{__('positionalConvert.base24')}}
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
            {{__('positionalConvert.positionalConvert')}}
        </div>

        <div class="description">
            {{__('positionalConvert.description')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.positionalConvert')
@endsection