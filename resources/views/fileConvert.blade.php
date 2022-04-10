@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/fileConvert.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/base64.min.js"></script>
    <title>{{__('fileConvert.fileConvert')}}</title>
    <meta name="description" content="{{__('fileConvert.description')}}"/>
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <label class="file">
                {{__('fileConvert.dragHere')}}
                <input type="file" accept=".pdf,.doc,.docx,.odf" style="display:none;" multiple>
            </label>
            <div class="fileFormatContainer">
                <div id="pdf" class="formatSelected">
                    PDF
                </div>
                <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                    <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                </svg>
                <div class="otherFormat">
                    <div id="pdf" class="format">PDF</div>
                    <div id="docx" class="format">DOCX</div>
                    <div id="odf" class="format">ODF</div>
                </div>
            </div>
            <div class="upload">
                {{__('fileConvert.upload')}}
            </div>
            <div class="download">
                {{__('fileConvert.download')}}
            </div>
            <div class="hint">
            </div>
            <div class="loading">
            </div>
            <div class="progress">
            </div>
            <div class="convertedFile">
            </div>
        </div>
         <div class="title">
            {{__('fileConvert.fileConvert')}}
        </div>

        <div class="description">
            {{__('fileConvert.description')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.fileConvert')
    <embed class="license" src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/LICENSE.md">
@endsection