@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/ExcelToPDF.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/base64.min.js"></script>
    <title>{{__('ExcelToPDF.ExcelToPDF')}}</title>
    <meta name="description" content="{{__('ExcelToPDF.description')}}"/>
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <label class="file">
                {{__('ExcelToPDF.dragHere')}}
                <input type="file" accept=".xls, .xlsx" style="display:none;" multiple>
            </label>
            <div class="upload">
                {{__('ExcelToPDF.upload')}}
            </div>
            <div class="download">
                {{__('ExcelToPDF.download')}}
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
            {{__('ExcelToPDF.ExcelToPDF')}}
        </div>

        <div class="description">
            {{__('ExcelToPDF.description')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.ExcelToPDF')
    <embed class="license" src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/LICENSE.md">
@endsection