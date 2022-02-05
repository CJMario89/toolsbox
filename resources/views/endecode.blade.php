@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/endecode.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/base64.min.js"></script>
    <embed class="license" src="https://cdn.jsdelivr.net/npm/js-base64@3.7.2/LICENSE.md">   
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <textarea class="inputBlock from" type="text" placeholder="輸入"></textarea>
            <div class="borderLR borderLRHover method">
                <div id="base64" class="otherContainer borderTB borderTBHover">
                    <div class="otherOptionSelected">
                        base64
                    </div>
                    <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                        <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                    </svg>
                    <div class="otherOptionContainer">
                        <div id="base64" class="otherOption">
                            base64
                        </div>
                        <div id="url" class="otherOption">
                            url
                        </div>
                        <div id="html" class="otherOption">
                            html
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg>
            <div class="borderLR encode borderLRHover">
                <div id="encode" class="option borderTB borderTBHover">編碼</div>
            </div>
            <div class="borderLR decode">
                <div id="decode" class="option borderTB">解碼</div>
            </div>
            <textarea class="inputBlock to" type="text" placeholder="結果" readonly></textarea>
        </div>
         <div class="title">
            編碼/解碼(encode/decode)
        </div>

        <div class="description">
        </div>
    </div>
@endsection

@section('js')
    @include('js.endecode')
@endsection