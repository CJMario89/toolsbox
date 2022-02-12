<script>
//show option
    var closeSubOptionTimeout;
    var menu = document.querySelector(".menu");
    var menuButton = document.querySelector(".menuButton");
    var menuClose = document.querySelector(".menuClose");
    if(menuButton){
        menuButton.addEventListener("click", function(){
            menu.classList.add("showMenu");
        });
    }
    if(menuClose){
        menuClose.addEventListener("click", function(){
            menu.classList.remove("showMenu");
        });
    }
    var menuOptions = document.querySelectorAll(".menuOption");
    var menuSubOptionContainers = document.querySelectorAll(".menuSubOptionContainer");
    for(var i = 0; i < menuOptions.length; i++){
        if(i != 0){
            menuOptions[i].addEventListener("click", openSubOption);
            menuOptions[i].addEventListener("mouseenter", openSubOption);
            menuOptions[i].addEventListener("mouseleave", closeSubOption);
        }
    }
    for(var i = 0; i < menuSubOptionContainers.length; i++){
        menuSubOptionContainers[i].addEventListener("mouseenter", keepSubOptionOpen);
        menuSubOptionContainers[i].addEventListener("mouseleave", closeSubOption);
        
    }
    function openSubOption(e){
        closeOtherOption();
        keepSubOptionOpen();
        if(window.innerWidth > 768){
            desktopOpenSubOption(e);
        }else{
            mobileOpenSubOption(e);
        }

    }

    function mobileOpenSubOption(e){
        var menuSubOptionContainer = e.target.closest(".menuOptionContainer").querySelector(".menuSubOptionContainer");
        if(menuSubOptionContainer.clientHeight == 0){
            var menuSubOptionContainer = e.target.closest(".menuOptionContainer").querySelector(".menuSubOptionContainer");
            menuSubOptionContainer.classList.add("showMobileSubOption");
            e.target.closest(".menuOptionContainer").querySelector(".optionExpand").classList.add("chevronRotate");
            menuSubOptionContainer.style.height = menuSubOptionContainer.querySelectorAll(".menuSubOption").length * 40 + "px";
        }else{
            var menuSubOptionContainer = e.target.closest(".menuOptionContainer").querySelector(".menuSubOptionContainer");
            menuSubOptionContainer.classList.remove("showMobileSubOption");
            e.target.closest(".menuOptionContainer").querySelector(".optionExpand").classList.remove("chevronRotate");
            menuSubOptionContainer.style.height = "0px";
        }
    }
    function desktopOpenSubOption(e){
        e.target.closest(".menuOption").classList.add("menuOptionHover");
        var menuSubOptionContainer = e.target.closest(".menuOptionContainer").querySelector(".menuSubOptionContainer");
        var menuSubOptionContainer = e.target.closest(".menuOptionContainer").querySelector(".menuSubOptionContainer");
        menuSubOptionContainer.classList.add("showDesktopSubOption");
        document.addEventListener("click", clickCloseSubOption);
    }

    function clickCloseSubOption(e){
        if(!e.target.closest(".menuOptionContainer")){
            closeOtherOption();
        }
    }

    window.addEventListener("resize", function(){
        var menuSubOptionContainers = document.querySelectorAll(".menuSubOptionContainer");
        for(var i = 0; i < menuSubOptionContainers.length; i++){
            menuSubOptionContainers[i].classList.remove("showDesktopSubOption");
            menuSubOptionContainers[i].classList.remove("showMobileSubOption");
            menuSubOptionContainers[i].style.height = "0px";
        }
        var optionExpands = document.querySelectorAll(".optionExpand");
        for(var i = 0; i < optionExpands.length; i++){
            optionExpands[i].classList.remove("chevronRotate");
        }
        menu.classList.remove("showMenu");
    });

    function closeOtherOption(){
        var menuOptions = document.querySelectorAll(".menuOption");
        var menuSubOptionContainers = document.querySelectorAll(".menuSubOptionContainer");
        for(var i = 0; i < menuSubOptionContainers.length; i++){
            menuSubOptionContainers[i].classList.remove("showDesktopSubOption");
            menuSubOptionContainers[i].classList.remove("showMobileSubOption");
            menuSubOptionContainers[i].style.height = "0px";
        }
        for(var i = 0; i < menuOptions.length; i++){
            menuOptions[i].classList.remove("menuOptionHover");
        }
        var optionExpands = document.querySelectorAll(".optionExpand");
        for(var i = 0; i < optionExpands.length; i++){
            optionExpands[i].classList.remove("chevronRotate");
        }
        if(window.innerWidth > 768){
            window.removeEventListener("click", clickCloseSubOption);
        }
    }

    function closeSubOption(e){
        var menuSubOptionContainer = e.target.closest(".menuOptionContainer").querySelector(".menuSubOptionContainer");
        var menuOption = e.target.closest(".menuOptionContainer").querySelector(".menuOption");
        closeSubOptionTimeout = setTimeout(function(){
            menuSubOptionContainer.classList.remove("showDesktopSubOption");
            menuSubOptionContainer.classList.remove("showMobileSubOption");
            menuSubOptionContainer.style.height = "0px";
        }, 300);
        menuOption.classList.remove("menuOptionHover");
    }

    function keepSubOptionOpen(){
        clearTimeout(closeSubOptionTimeout);
    }

    //locale
    var language = document.documentElement.lang;

    var locale = document.querySelector(".locale");
    var languageTimeout;
    locale.addEventListener("mouseenter", function(){
        clearTimeout(languageTimeout);
        document.querySelector(".otherLanguageContainer").classList.add("showOtherLanguageContainer");
        document.querySelector(".chevron").classList.add("chevronRotate");
    });
    locale.addEventListener("click", function(){
        document.querySelector(".otherLanguageContainer").classList.add("showOtherLanguageContainer");
        document.querySelector(".chevron").classList.add("chevronRotate");
        window.addEventListener("click", function(e){
            if(!e.target.closest(".locale")){
                document.querySelector(".otherLanguageContainer").classList.remove("showOtherLanguageContainer");
                document.querySelector(".chevron").classList.remove("chevronRotate");
            }
        });
    });
    locale.addEventListener("mouseleave", function(){
        languageTimeout = setTimeout(
            function(){
                document.querySelector(".otherLanguageContainer").classList.remove("showOtherLanguageContainer");
                document.querySelector(".chevron").classList.remove("chevronRotate");
            }, 300);
    });

    if(window.innerWidth < 768){
        document.querySelector(".selectedLanguage").innerHTML = "";
    }

    var otherLanguages = document.querySelectorAll(".otherLanguage");
    for(var i = 0; i < otherLanguages.length; i++){
        otherLanguages[i].addEventListener("click", function(e){
            window.location = "{{url('setLocale')}}/" + e.target.id;
        });
    }



    //tool link
    var logo = document.querySelector(".logo");
    logo.addEventListener("click", function(){
        if(window.location.href != ("{{url('')}}" + "/")){
            window.location = "{{url('')}}";
        }
    });

    var simpleCalculator = document.querySelector(".simpleCalculator");
    simpleCalculator.addEventListener("click", function(e){
        window.location = "{{url('simpleCalculator')}}";
        e.stopPropagation();
    });

    var positionalConvert = document.querySelector(".positionalConvert");
    positionalConvert.addEventListener("click", function(e){
        window.location = "{{url('positionalConvert')}}";
        e.stopPropagation();
    });

    var lengthConvert = document.querySelector(".lengthConvert");
    lengthConvert.addEventListener("click", function(e){
        window.location = "{{url('lengthConvert')}}";
        e.stopPropagation();
    });

    var weightConvert = document.querySelector(".weightConvert");
    weightConvert.addEventListener("click", function(e){
        window.location = "{{url('weightConvert')}}";
        e.stopPropagation();
    });

    var exchangeRateConvert = document.querySelector(".exchangeRateConvert");
    exchangeRateConvert.addEventListener("click", function(e){
        window.location = "{{url('exchangeRateConvert')}}";
        e.stopPropagation();
    });

    var hash = document.querySelector(".hash");
    hash.addEventListener("click", function(e){
        window.location = "{{url('hash')}}";
        e.stopPropagation();
    });

    var hash = document.querySelector(".hmacHash");
    hash.addEventListener("click", function(e){
        window.location = "{{url('hmacHash')}}";
        e.stopPropagation();
    });

    var endecode = document.querySelector(".endecode");
    endecode.addEventListener("click", function(e){
        window.location = "{{url('endecode')}}";
        e.stopPropagation();
    });

    var endecrypt = document.querySelector(".endecrypt");
    endecrypt.addEventListener("click", function(e){
        window.location = "{{url('endecrypt')}}";
        e.stopPropagation();
    });


</script>