<script>
    var input = document.querySelector("textarea");
    input.focus();

    var otherOptions = document.querySelectorAll(".otherOption");
    for(var i = 0; i < otherOptions.length; i++){
        otherOptions[i].addEventListener("click", function(e){
            e.target.closest(".otherContainer").querySelector(".otherOptionSelected").innerHTML = e.target.closest(".otherOption").innerHTML;
            e.target.closest(".otherContainer").id = e.target.id;
            closeOtherOptionContainer(e);
            inputChange(2, e);
            e.stopPropagation();
        });
    }


    var otherContainers = document.querySelectorAll(".otherContainer");
    for(var i = 0; i < otherContainers.length; i++){
        otherContainers[i].addEventListener("click", showOtherOptionContainer);
    }

    function showOtherOptionContainer(e){
        e.target.closest(".borderLR").querySelector(".otherOptionContainer").classList.add("showOtherOptionContainer");
    }
    function closeOtherOptionContainer(e){
        e.target.closest(".borderLR").querySelector(".otherOptionContainer").classList.remove("showOtherOptionContainer");
    }
    

    document.addEventListener("click", function(e){
        if(!e.target.closest(".otherContainer")){
            closeAllOtherOptionContainer();
        }
    });

    function closeAllOtherOptionContainer(){
        var otherOptionContainers = document.querySelectorAll(".otherOptionContainer");
        for(var i = 0; i < otherOptionContainers.length; i++){
            otherOptionContainers[i].classList.remove("showOtherOptionContainer");
        }
    }
    

    function convertUnit(value, method, secret) {
        if(method == 'hmacmd5'){
            return CryptoJS.HmacMD5(value, secret);
        }else if(method == 'hmacsha1'){
            return CryptoJS.HmacSHA1(value, secret);
        }else if(method == 'hmacsha256'){
            return CryptoJS.HmacSHA256(value, secret);
        }else if(method == 'hmacsha224'){
            return CryptoJS.HmacSHA224(value, secret);
        }else if(method == 'hmacsha512'){
            return CryptoJS.HmacSHA512(value, secret);
        }else if(method == 'hmacsha384'){
            return CryptoJS.HmacSHA384(value, secret);
        }else if(method == 'hmacsha3'){
            return CryptoJS.HmacSHA3(value, secret);
        }else if(method == 'hmacripemd160'){
            return CryptoJS.HmacRIPEMD160(value, secret);
        }
    }

    function htmlencrypt(value){
        var div = document.createElement('div');
        div.appendChild(document.createTextNode(value));
        return div.innerHTML;
    }
    function htmldecrypt(value){
        var div = document.createElement('div');
        div.innerHTML = value;
        return div.innerText || div.textContent;
    }

    function addWrongTag(){
        from.closest(".tool").classList.add("wrongInput");
    }

    var from = document.querySelector(".from");
    var to = document.querySelector(".to");
    var method = document.querySelector(".otherContainer").id;
    var flag = 0;
    var carry = 0;
    var key = document.querySelector(".key");

    key.addEventListener("input", function(e){inputChange(1,e)});

    //init

    from.addEventListener("input", function(e){inputChange(1, e)});

    function inputChange(arg, e){
        from.closest(".tool").classList.remove("wrongInput");
        method = document.querySelector(".otherContainer").id;
        if(arg == 1){
            if(flag == 0){
                input.removeAttribute("placeholder");
                key.removeAttribute("placeholder");
                flag = 1;
            }
            to.value = convertUnit(from.value, method, key.value);
        }else if(arg == 2){
            if(flag == 1){
                to.value = convertUnit(from.value, method, key.value);
            }
        }
    }


</script>