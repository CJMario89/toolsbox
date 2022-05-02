@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/WordToImage.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/base64.min.js"></script>
    <title>{{__('WordToImage.WordToImage')}}</title>
    <meta name="description" content="{{__('WordToImage.description')}}"/>
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <label class="file">
                {{__('WordToImage.dragHere')}}
                <input type="file" accept=".doc, .docx" style="display:none;" multiple>
            </label>
            <div class="fileFormatContainer">
                <div id="jpg" class="formatSelected">
                    JPG
                </div>
                <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                    <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                </svg>
                <div class="otherFormat">
                    <div id="jpg" class="format">JPG</div>
                    <div id="png" class="format">PNG</div>
                </div>
            </div>
            <div class="upload">
                {{__('WordToImage.upload')}}
            </div>
            <div class="download">
                {{__('WordToImage.download')}}
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
            {{__('WordToImage.WordToImage')}}
        </div>

        <div class="description">
            {{__('WordToImage.description')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.WordToImage')
    <embed class="license" src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/LICENSE.md">
@endsection