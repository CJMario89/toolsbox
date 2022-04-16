<div class="navbar">
    <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
        </svg>
        <div class="logoText">
            <p>Toolsbox</p>
        </div>
    </div>
    <div class="locale">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
            <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
            <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
        </svg>
        <div id="zh-TW" class="selectedLanguage">
            {{__('navbar.language')}}
        </div>
        <svg id="chevron-down" class="chevron" width="14" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
            <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
        </svg>
        <div class="otherLanguageContainer">
            <div id="zh-TW" class="otherLanguage">
                繁體中文
            </div>
            <div id="en" class="otherLanguage">
                English
            </div>
        </div>
    </div>
    <div class="menuButton">
        {{__('navbar.menu')}}
    </div>
    <div class="menu">
        <div class="menuOptionContainer closeContainer">
            <div class="menuClose menuOption">
                <div class="optionText">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                        <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="menuOptionContainer">
            <div class="caculatorOption menuOption">
                <div class="optionText">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-spreadsheet" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1H4zm9 6h-3v2h3V7zm0 3h-3v2h3v-2zm0 3h-3v2h2a1 1 0 0 0 1-1v-1zm-4 2v-2H6v2h3zm-4 0v-2H3v1a1 1 0 0 0 1 1h1zm-2-3h2v-2H3v2zm0-3h2V7H3v2zm3-2v2h3V7H6zm3 3H6v2h3v-2z"/>
                    </svg>
                    {{__('navbar.calculator')}}
                </div>
                <div class="optionExpand">
                    <svg id="chevron-down" width="10" height="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                        <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                    </svg>
                </div>
            </div>
            <div class="menuSubOptionContainer">
                <div class="menuSubOption simpleCalculator">
                    <div class="subOptionText">
                        {{__('navbar.simpleCalculator')}}
                    </div>
                </div>
            </div>
        </div>
        <div class="menuOptionContainer">
            <div class="convertorOption menuOption">
                <div class="optionText">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
                    </svg>
                    {{__('navbar.convertTool')}}
                </div>
                <div class="optionExpand">
                    <svg id="chevron-down" width="10" height="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                        <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                    </svg>
                </div>
            </div>
            <div class="menuSubOptionContainer">
                <div class="menuSubOption lengthConvert">
                    <div class="subOptionText">
                        {{__('navbar.lengthConvert')}}
                    </div>
                </div>
                <div class="menuSubOption massConvert">
                    <div class="subOptionText">
                        {{__('navbar.massConvert')}}
                    </div>
                </div>
                <div class="menuSubOption capacityConvert">
                    <div class="subOptionText">
                        {{__('navbar.capacityConvert')}}
                    </div>
                </div>
                <div class="menuSubOption exchangeRateConvert">
                    <div class="subOptionText">
                        {{__('navbar.exchangeRateConvert')}}
                    </div>
                </div>
                <div class="menuSubOption  positionalConvert">
                    <div class="subOptionText">
                        {{__('navbar.positionalConvert')}}
                    </div>
                </div>
            </div>
        </div>
        <div class="menuOptionContainer">
            <div class="codeOption menuOption">
                <div class="optionText">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-terminal-split" viewBox="0 0 16 16">
                        <path d="M2.146 3.146a.5.5 0 0 1 .708 0l.823.824a.75.75 0 0 1 0 1.06l-.823.824a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708ZM4 6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1A.5.5 0 0 1 4 6Zm6.354-2.854a.5.5 0 0 0-.708.708l.647.646-.647.646a.5.5 0 1 0 .708.708l.823-.824a.75.75 0 0 0 0-1.06l-.823-.824ZM12 5.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1Z"/>
                        <path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3Zm2-1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h5.5V2H2Zm6.5 0v12H14a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H8.5Z"/>
                    </svg>
                    {{__('navbar.transcodeTool')}}
                </div>
                <div class="optionExpand">
                    <svg id="chevron-down" width="10" height="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                        <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                    </svg>
                </div>
            </div>
            <div class="menuSubOptionContainer">
                <div class="menuSubOption hash">
                    <div class="subOptionText">
                        {{__('navbar.hash')}}
                    </div>
                </div>
                <div class="menuSubOption hmacHash">
                    <div class="subOptionText">
                        {{__('navbar.Hmac-hash')}}
                    </div>
                </div>
                <div class="menuSubOption endecrypt">
                    <div class="subOptionText">
                        {{__('navbar.endecrypt')}}
                    </div>
                </div>
                <div class="menuSubOption endecode">
                    <div class="subOptionText">
                        {{__('navbar.endecode')}}
                    </div>
                </div>
            </div>
        </div>
        <div class="menuOptionContainer">
            <div class="formatConvertOption menuOption">
                <div class="optionText">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                        <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                        <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                    </svg>
                    {{__('navbar.formatConvert')}}
                </div>
                <div class="optionExpand">
                    <svg id="chevron-down" width="10" height="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentcolor">
                        <path d="M1 12 L16 26 L31 12 L27 8 L16 18 L5 8 z "></path>
                    </svg>
                </div>
            </div>
            <div class="menuSubOptionContainer">
                <div class="menuSubOption CsvToJson">
                    <div class="subOptionText">
                        {{__('navbar.CsvToJson')}}
                    </div>
                </div>
                <div class="menuSubOption JsonToCsv">
                    <div class="subOptionText">
                        {{__('navbar.JsonToCsv')}}
                    </div>
                </div>
                <div class="menuSubOption fileConvert" style="display:none;">
                    <div class="subOptionText">
                        {{__('navbar.fileConvert')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



