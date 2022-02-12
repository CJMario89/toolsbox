@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/exchangeRateConvert.css')}}">
@endsection

@section('content')
    <div class="container">
        <div class="tool">
            <div class="block blockFrom">
                <div class="optionContainer">
                @if(config('app.locale') == 'zh-TW')
                    <div class="borderLR">
                        <div class="option borderTB twd">{{__('exchangeRateConvert.twd')}}</div>
                    </div>
                    <div class="borderLR borderLRHover">
                        <div class="option borderTB usd borderTBHover">{{__('exchangeRateConvert.usd')}}</div>
                    </div>
                    <div class="borderLR">
                        <div class="option borderTB jpy">{{__('exchangeRateConvert.jpy')}}</div>
                    </div>
                @else
                    <div class="borderLR">
                        <div class="option borderTB usd">{{__('exchangeRateConvert.usd')}}</div>
                    </div>
                    <div class="borderLR borderLRHover">
                        <div class="option borderTB gbp borderTBHover">{{__('exchangeRateConvert.gbp')}}</div>
                    </div>
                    <div class="borderLR">
                        <div class="option borderTB jpy">{{__('exchangeRateConvert.jpy')}}</div>
                    </div>
                @endif
                    <div class="borderLR">
                        <div class="otherContainer borderTB">
                            <div class="otherOptionSelected">
                                {{__('exchangeRateConvert.else')}}
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div class="otherOptionCategory">
                                    {{__('exchangeRateConvert.fiatMoney')}}
                                </div>
                                <div class="otherOption eur">
                                    {{__('exchangeRateConvert.eur')}}
                                </div>
                                @if(config('app.locale') == 'zh-TW')
                                    <div class="otherOption gbp">
                                        {{__('exchangeRateConvert.gbp')}}
                                    </div>
                                @else
                                    <div class="otherOption twd">
                                        {{__('exchangeRateConvert.twd')}}
                                    </div>
                                @endif
                                <div class="otherOption krw">
                                    {{__('exchangeRateConvert.krw')}}
                                </div>
                                <div class="otherOption cny">
                                    {{__('exchangeRateConvert.cny')}}
                                </div>
                                <div class="otherOption hkd">
                                    {{__('exchangeRateConvert.hkd')}}
                                </div>
                                <div class="otherOption vnd">
                                    {{__('exchangeRateConvert.vnd')}}
                                </div>
                                <div class="otherOption cad">
                                    {{__('exchangeRateConvert.cad')}}
                                </div>
                                <div class="otherOption aud">
                                    {{__('exchangeRateConvert.aud')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('exchangeRateConvert.cryptoCurrency')}}
                                </div>
                                <div class="otherOption btc">
                                    {{__('exchangeRateConvert.btc')}}
                                </div>
                                <div class="otherOption bnb">
                                    {{__('exchangeRateConvert.bnb')}}
                                </div>
                                <div class="otherOption eth">
                                    {{__('exchangeRateConvert.eth')}}
                                </div>
                                <div class="otherOption ltc">
                                    {{__('exchangeRateConvert.ltc')}}
                                </div>
                                <div class="otherOption usdt">
                                    {{__('exchangeRateConvert.usdt')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result from" value="1">
                    @if(config('app.locale') == 'zh-TW')
                        <div class="selectedOption">{{__('exchangeRateConvert.usd')}}</div>
                    @else
                        <div class="selectedOption">{{__('exchangeRateConvert.gbp')}}</div>
                    @endif
                </div>
            </div>
            <div class="transfer">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </div>
            <div class="block blockTo">
                <div class="optionContainer">
                    @if(config('app.locale') == 'zh-TW')
                        <div class="borderLR borderLRHover">
                            <div class="option borderTB twd borderTBHover">{{__('exchangeRateConvert.twd')}}</div>
                        </div>
                        <div class="borderLR">
                            <div class="option borderTB usd">{{__('exchangeRateConvert.usd')}}</div>
                        </div>
                        <div class="borderLR">
                            <div class="option borderTB jpy">{{__('exchangeRateConvert.jpy')}}</div>
                        </div>
                    @else
                        <div class="borderLR borderLRHover">
                            <div class="option borderTB usd borderTBHover">{{__('exchangeRateConvert.usd')}}</div>
                        </div>
                        <div class="borderLR">
                            <div class="option borderTB gbp">{{__('exchangeRateConvert.gbp')}}</div>
                        </div>
                        <div class="borderLR">
                            <div class="option borderTB jpy">{{__('exchangeRateConvert.jpy')}}</div>
                        </div>
                    @endif
                    <div class="borderLR">
                        <div class="otherContainer borderTB">
                            <div class="otherOptionSelected">
                                {{__('exchangeRateConvert.else')}}
                            </div>
                            <svg id="chevron-down" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                                <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                            </svg>
                            <div class="otherOptionContainer">
                                <div class="otherOptionCategory">
                                    {{__('exchangeRateConvert.fiatMoney')}}
                                </div>
                                <div class="otherOption eur">
                                    {{__('exchangeRateConvert.eur')}}
                                </div>
                                @if(config('app.locale') == 'zh-TW')
                                    <div class="otherOption gbp">
                                        {{__('exchangeRateConvert.gbp')}}
                                    </div>
                                @else
                                    <div class="otherOption twd">
                                        {{__('exchangeRateConvert.twd')}}
                                    </div>
                                @endif
                                <div class="otherOption krw">
                                    {{__('exchangeRateConvert.krw')}}
                                </div>
                                <div class="otherOption cny">
                                    {{__('exchangeRateConvert.cny')}}
                                </div>
                                <div class="otherOption hkd">
                                    {{__('exchangeRateConvert.hkd')}}
                                </div>
                                <div class="otherOption vnd">
                                    {{__('exchangeRateConvert.vnd')}}
                                </div>
                                <div class="otherOption cad">
                                    {{__('exchangeRateConvert.cad')}}
                                </div>
                                <div class="otherOption aud">
                                    {{__('exchangeRateConvert.aud')}}
                                </div>
                                <div class="otherOptionCategory">
                                    {{__('exchangeRateConvert.cryptoCurrency')}}
                                </div>
                                <div class="otherOption btc">
                                    {{__('exchangeRateConvert.btc')}}
                                </div>
                                <div class="otherOption bnb">
                                    {{__('exchangeRateConvert.bnb')}}
                                </div>
                                <div class="otherOption eth">
                                    {{__('exchangeRateConvert.eth')}}
                                </div>
                                <div class="otherOption ltc">
                                    {{__('exchangeRateConvert.ltc')}}
                                </div>
                                <div class="otherOption usdt">
                                    {{__('exchangeRateConvert.usdt')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resultContainer">
                    <input type="text" class="result to" value="1">
                    @if(config('app.locale') == 'zh-TW')
                        <div class="selectedOption">{{__('exchangeRateConvert.twd')}}</div>
                    @else
                        <div class="selectedOption">{{__('exchangeRateConvert.usd')}}</div>
                    @endif
                </div>
            </div>
            <div class="date">
            </div>
        </div>
         <div class="title">
            {{__('exchangeRateConvert.exchangeRateConvert')}}
        </div>

        <div class="description">
            {{__('exchangeRateConvert.dailyUpdate')}}
        </div>
    </div>
@endsection

@section('js')
    @include('js.exchangeRateConvert')
@endsection