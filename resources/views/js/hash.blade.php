<script>

    var input = document.querySelector("textarea");

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
    

    function convertUnit(value, method) {
        if(method == 'md5'){
            return CryptoJS.MD5(value);
        }else if(method == 'sha1'){
            return CryptoJS.SHA1(value);
        }else if(method == 'sha256'){
            return CryptoJS.SHA256(value);
        }else if(method == 'sha224'){
            return CryptoJS.SHA224(value);
        }else if(method == 'sha512'){
            return CryptoJS.SHA512(value);
        }else if(method == 'sha384'){
            return CryptoJS.SHA384(value);
        }else if(method == 'sha3'){
            return CryptoJS.SHA3(value);
        }else if(method == 'ripemd160'){
            return CryptoJS.RIPEMD160(value);         
        }
    }

    function addWrongTag(){
        from.closest(".from").classList.add("wrongInput");
    }

    var from = document.querySelector(".from");
    var to = document.querySelector(".to");
    var method = document.querySelector(".otherContainer").id;
    var flag = 0;
    var carry = 0;


    //init

    from.addEventListener("input", function(e){inputChange(1, e)});

    function inputChange(arg, e){
        from.closest(".from").classList.remove("wrongInput");
        method = document.querySelector(".borderTBHover").id;
        if(arg == 1){
            if(flag == 0){
                input.removeAttribute("placeholder");
                flag = 1;
            }
            to.value = convertUnit(from.value, method);
        }else if(arg == 2){
            if(flag == 1){
                to.value = convertUnit(from.value, method);
            }
        }
    }

</script>