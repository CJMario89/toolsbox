@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/endecrypt.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/crypto-js@4.0.0/crypto-js.js"></script>
    <embed class="license" src="https://cdn.jsdelivr.net/npm/crypto-js@4.0.0/LICENSE">
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <div class="inputBlockContainer">
                <textarea class="inputBlock from" type="text" placeholder="輸入"></textarea>
                <textarea class="key" type="text" placeholder="密碼"></textarea>
            </div>
            <div class="borderLR borderLRHover method">
                <div id="AES" class="otherContainer borderTB borderTBHover">
                    <div class="otherOptionSelected">
                        AES
                    </div>
                    <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                        <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                    </svg>
                    <div class="otherOptionContainer">
                        <div id="AES" class="otherOption">
                            AES
                        </div>
                        <div id="TripleDES" class="otherOption">
                            TripleDES
                        </div>
                        <div id="RC4" class="otherOption">
                            RC4
                        </div>
                        <div id="Rabbit" class="otherOption">
                            Rabbit
                        </div>
                        <div id="RabbitLegacy" class="otherOption">
                            RabbitLegacy
                        </div>
                        {{-- <div id="evpkdf" class="otherOption">
                           evpkdf
                        </div> --}}
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg>
            <div class="borderLR encrypt borderLRHover">
                <div id="encrypt" class="option borderTB borderTBHover">加密</div>
            </div>
            <div class="borderLR decrypt">
                <div id="decrypt" class="option borderTB">解密</div>
            </div>
            <textarea class="inputBlock to" type="text" placeholder="結果" readonly></textarea>
        </div>
         <div class="title">
            加密/解密(encrypt/decrypt)
        </div>

        <div class="description">
        </div>
    </div>
@endsection

@section('js')
    @include('js.endecrypt')
@endsection