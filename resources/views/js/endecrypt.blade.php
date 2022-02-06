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

    var options = document.querySelectorAll(".option");
    for(var i = 0; i < options.length; i++){
        options[i].addEventListener("click", selectOption);
    }


    function selectOption(e){
        if(e.target.closest(".borderLR").classList.contains("encrypt")){
            document.querySelector(".decrypt").classList.remove("borderLRHover");
            document.querySelector(".decrypt").querySelector(".borderTB").classList.remove("borderTBHover");
        }else{
            document.querySelector(".encrypt").classList.remove("borderLRHover");
            document.querySelector(".encrypt").querySelector(".borderTB").classList.remove("borderTBHover");
        }
        var borderLR = e.target.closest(".borderLR");
        borderLR.classList.add("borderLRHover");
        borderLR.querySelector(".borderTB").classList.add("borderTBHover");
        inputChange(3, e);
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
    

    function convertUnit(value, method, code, password) {
        if(method == 'AES'){
            if(code == 'encrypt'){
                return CryptoJS.AES.encrypt(value, password).toString();
            }else{
                return CryptoJS.AES.decrypt(value, password).toString(CryptoJS.enc.Utf8);
            }
        }else if(method == 'TripleDES'){
            if(code == 'encrypt'){
                return CryptoJS.TripleDES.encrypt(value, password).toString();
            }else{
                return CryptoJS.TripleDES.decrypt(value, password).toString(CryptoJS.enc.Utf8);
            }
        }else if(method == 'RC4'){
            if(code == 'encrypt'){
                return CryptoJS.RC4.encrypt(value, password).toString();
            }else{
                return CryptoJS.RC4.decrypt(value, password).toString(CryptoJS.enc.Utf8);
            }
        }else if(method == 'Rabbit'){
            if(code == 'encrypt'){
                return CryptoJS.Rabbit.encrypt(value, password).toString();
            }else{
                return CryptoJS.Rabbit.decrypt(value, password).toString(CryptoJS.enc.Utf8);
            }
        }else if(method == 'RabbitLegacy'){
            if(code == 'encrypt'){
                return CryptoJS.RabbitLegacy.encrypt(value, password).toString();
            }else{
                return CryptoJS.RabbitLegacy.decrypt(value, password).toString(CryptoJS.enc.Utf8);
            }
        }
    }

    function htmlencrypt(s){
        var div = document.createElement('div');
        div.appendChild(document.createTextNode(s));
        return div.innerHTML;
    }
    function htmldecrypt(s){
        var div = document.createElement('div');
        div.innerHTML = s;
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

    key.addEventListener("input", function(e){inputChange(1, e)});

    //init

    from.addEventListener("input", function(e){inputChange(1, e)});

    function inputChange(arg, e){
        from.closest(".tool").classList.remove("wrongInput");
        method = document.querySelector(".otherContainer").id;
        code = document.querySelectorAll('.borderTBHover')[1].id;
        if(arg == 1){
            if(flag == 0){
                input.removeAttribute("placeholder");
                key.removeAttribute("placeholder");
                flag = 1;
            }
            to.value = convertUnit(from.value, method, code, key.value);
        }else if(arg == 2){
            if(flag == 1){
                to.value = convertUnit(from.value, method, code, key.value);
            }
        }else if(arg == 3){
            if(flag == 1){
                to.value = convertUnit(from.value, method, code, key.value);
            }
        }
    }


</script>