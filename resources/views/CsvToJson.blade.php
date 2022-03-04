@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/CsvToJson.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.1/papaparse.min.js"></script>
    <title>{{__('CsvToJson.CsvToJson')}}</title>
    <meta name="description" content="{{__('CsvToJson.description')}}"/>
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <textarea class="inputBlock from" type="text" placeholder="{{__('CsvToJson.input')}}&#10;&nbsp;{{__("CsvToJson.example")}}&#10;name,age,birthday&#10;mario,24,{8,9}&#10;marrie,22,{1,12}"></textarea>
            <div class="middlePanel">
                <div class="or">
                    {{__('CsvToJson.or')}}
                </div>
                <label class="uploadFile">
                    {{__('CsvToJson.uploadFile')}}
                    <input type="file" accept=".csv">
                </label>
                {{-- <div class="or">
                    {{__('CsvToJson.or')}}
                </div>
                <input class="https" type="text" placeholder="https://"> --}}
            </div>
            <div class="convertOption">
                <div class="convertOptionCheckbox">
                    <label class="parseType">
                        <input type="checkbox">
                        <span>{{__('CsvToJson.parseType')}}</span>
                    </label>
                    <label class="headerKey">
                        <input type="checkbox" checked>
                        <span>{{__('CsvToJson.headerKey')}}</span>
                    </label>
                </div>
                <label class="quoteChar">
                    {{__("CsvToJson.quoteChar")}}
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
                                    {{__('CsvToJson.none')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
            </div>
            <textarea class="inputBlock to" type="text" placeholder='{{__("CsvToJson.result")}}&#10;&nbsp;{{__("CsvToJson.example")}}&#10;' readonly></textarea>
            <div class="bottomPanel">
                <div class="download">
                    {{__('CsvToJson.download')}}
                </div>
                <div class="copy">
                    {{__('CsvToJson.copy')}}
                </div>
            </div>
        </div>
         <div class="title">
            {{__('CsvToJson.CsvToJson')}}
        </div>
        <div class="description">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{__('CsvToJson.description')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.CsvToJson')
@endsection