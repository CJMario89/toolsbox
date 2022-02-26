@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/JsonToCsv.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.1/papaparse.min.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <textarea class="inputBlock from" type="text" placeholder='{{__('JsonToCsv.input')}}&#10;{{__("JsonToCsv.example")}}&#10;[{"name":"mario","age":24,"birthday":[8,9]},{"name":"marie","age":8,"birthday":[1,12]}]'></textarea>
            <div class="middlePanel">
                <div class="or">
                    {{__('JsonToCsv.or')}}
                </div>
                <label class="uploadFile">
                    {{__('JsonToCsv.uploadFile')}}
                    <input type="file" accept=".csv">
                </label>
                {{-- <div class="or">
                    {{__('JsonToCsv.or')}}
                </div>
                <input class="https" type="text" placeholder="https://"> --}}
            </div>
            <div class="convertOption">
                <div class="convertOptionCheckbox">
                    <label class="parseType">
                        <input type="checkbox">
                        <span>{{__('JsonToCsv.parseType')}}</span>
                    </label>
                    <label class="headerKey">
                        <input type="checkbox" checked>
                        <span>{{__('JsonToCsv.headerKey')}}</span>
                    </label>
                </div>
                <label class="quoteChar">
                    {{__("JsonToCsv.quoteChar")}}
                    <div id="cBrackets" class="borderLR borderLRHover quoteType">
                        <div class="otherContainer borderTB borderTBHover">
                            <div class="otherOptionSelected">
                                { }
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div id="cBrackets" class="otherOption">
                                    { }
                                </div>
                                <div id="sBrackets" class="otherOption">
                                    [ ]
                                </div>
                                <div id="dQuote" class="otherOption">
                                    " "
                                </div>
                                <div id="Quote" class="otherOption">
                                    ' '
                                </div>
                                <div id="none" class="otherOption">
                                    {{__('JsonToCsv.none')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
            </div>
            <textarea class="inputBlock to" type="text" readonly></textarea>
            <div class="bottomPanel">
                <div class="download">
                    {{__('JsonToCsv.download')}}
                </div>
                <div class="copy">
                    {{__('JsonToCsv.copy')}}
                </div>
            </div>
        </div>
         <div class="title">
            {{__('JsonToCsv.JsonToCsv')}}
        </div>
        <div class="description">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{__('JsonToCsv.description')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.JsonToCsv')
@endsection