@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/WordToPDF.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/base64.min.js"></script>
    <title>{{__('WordToPDF.WordToPDF')}}</title>
    <meta name="description" content="{{__('WordToPDF.description')}}"/>
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <label class="file">
                {{__('WordToPDF.dragHere')}}
                <input type="file" accept=".doc,.docx" style="display:none;" multiple>
            </label>
            <div class="upload">
                {{__('WordToPDF.upload')}}
            </div>
            <div class="download">
                {{__('WordToPDF.download')}}
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
            {{__('WordToPDF.WordToPDF')}}
        </div>

        <div class="description">
            {{__('WordToPDF.description')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.WordToPDF')
    <embed class="license" src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/LICENSE.md">
@endsection