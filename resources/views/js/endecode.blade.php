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
        if(e.target.closest(".borderLR").classList.contains("encode")){
            document.querySelector(".decode").classList.remove("borderLRHover");
            document.querySelector(".decode").querySelector(".borderTB").classList.remove("borderTBHover");
        }else{
            document.querySelector(".encode").classList.remove("borderLRHover");
            document.querySelector(".encode").querySelector(".borderTB").classList.remove("borderTBHover");
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
    

    function convertUnit(value, method, code) {
        if(method == 'base64'){
            try{
                if(code == 'encode'){
                    return Base64.encode(value);
                }else if(code == 'decode'){
                    return Base64.decode(value);
                }
            }catch(e){
                addWrongTag();
                return '';
            }   
        }else if(method == 'url'){
            if(code == "encode"){
                return encodeURI(value);
            }else if(code == 'decode'){
                return decodeURI(value);
            }
        }else if(method == 'html'){
            if(code == "encode"){
                return htmlencode(value);
            }else if(code == 'decode'){
                return htmldecode(value);
            }
        }
    }

    function htmlencode(s){
        var div = document.createElement('div');
        div.appendChild(document.createTextNode(s));
        return div.innerHTML;
    }
    function htmldecode(s){
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
    var code = document.querySelectorAll('.borderLRHover')[1].id;
    var flag = 0;
    var carry = 0;


    //init

    from.addEventListener("input", function(e){inputChange(1, e)});

    function inputChange(arg, e){
        from.closest(".tool").classList.remove("wrongInput");
        method = document.querySelector(".otherContainer").id;
        code = document.querySelectorAll('.borderTBHover')[1].id;
        if(arg == 1){
            if(flag == 0){
                input.removeAttribute("placeholder");
                flag = 1;
            }
            to.value = convertUnit(from.value, method, code);
        }else if(arg == 2){
            if(flag == 1){
                to.value = convertUnit(from.value, method, code);
            }
        }else if(arg == 3){
            if(flag == 1){
                to.value = convertUnit(from.value, method, code);
            }
        }
    }

</script>