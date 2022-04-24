@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/PDFToWord.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/base64.min.js"></script>
    <title>{{__('PDFToWord.PDFToWord')}}</title>
    <meta name="description" content="{{__('PDFToWord.description')}}"/>
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <label class="file">
                {{__('PDFToWord.dragHere')}}
                <input type="file" accept=".pdf" style="display:none;" multiple>
            </label>
            <div class="upload">
                {{__('PDFToWord.upload')}}
            </div>
            <div class="download">
                {{__('PDFToWord.download')}}
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
            {{__('PDFToWord.PDFToWord')}}
        </div>

        <div class="description">
            {{__('PDFToWord.description')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.PDFToWord')
    <embed class="license" src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/LICENSE.md">
@endsection