@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/hmacHash.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/crypto-js@4.0.0/crypto-js.js"></script>
    <embed class="license" src="https://cdn.jsdelivr.net/npm/crypto-js@4.0.0/LICENSE">
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <div class="inputBlockContainer">
                <textarea class="inputBlock from" type="text" placeholder="輸入"></textarea>
                <textarea class="key" type="text" placeholder="密鑰"></textarea>
            </div>
            <div class="borderLR borderLRHover method">
                <div id="hmacsha256" class="otherContainer borderTB borderTBHover">
                    <div class="otherOptionSelected">
                        Hmac-sha256
                    </div>
                    <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                        <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                    </svg>
                    <div class="otherOptionContainer">
                        <div id="hmacmd5" class="otherOption">
                            Hmac-md5
                        </div>
                        <div id="hmacsha1" class="otherOption">
                            Hmac-sha1
                        </div>
                        <div id="hmacsha256" class="otherOption">
                            Hmac-sha256
                        </div>
                        <div id="hmacsha224" class="otherOption">
                            Hmac-sha224
                        </div>
                        <div id="hmacsha512" class="otherOption">
                            Hmac-sha512
                        </div>
                        <div id="hmacsha384" class="otherOption">
                            Hmac-sha384
                        </div>
                        <div id="hmacsha3" class="otherOption">
                            Hmac-sha3
                        </div>
                        <div id="hmacripemd160" class="otherOption">
                            Hmac-ripemd160
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg>
            <textarea class="inputBlock to" type="text" placeholder="結果" readonly></textarea>
        </div>
         <div class="title">
            Hmac雜湊(Hmac-hash)
        </div>

        <div class="description">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;雜湊是一種單向不可逆的函式，常用於保護儲存於資料庫的密碼，藉由雜湊使密碼變成另一串有關連的字串，儲存於資料庫，因為函式不可逆，所以有人看到了資料庫的密碼也沒事。
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;根據雜湊方式及雜湊值長度有不同的選項。
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hmac透過雙方共享密鑰，使用相同的算法能得出只有雙方能算出的相同結果，常用於身份驗證，簽名(ex. AWS signature)等。
        </div>
    </div>
@endsection

@section('js')
    @include('js.hmacHash')
@endsection