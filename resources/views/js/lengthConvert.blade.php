<script>
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


    var options = document.querySelectorAll(".option");
    for(var i = 0; i < options.length; i++){
        options[i].addEventListener("click", selectOption);
    }
    var otherOptions = document.querySelectorAll(".otherOption");
    for(var i = 0; i < otherOptions.length; i++){
        otherOptions[i].addEventListener("click", function(e){
            clearSelectedOption(e);
            closeOtherOptionContainer(e);
            e.target.closest(".otherContainer").querySelector(".otherOptionSelected").innerHTML = e.target.closest(".otherOption").innerHTML;
            e.target.closest(".otherContainer").id = e.target.id;
            selectOption(e);
            e.stopPropagation();
        });
    }

    function selectOption(e){
        clearSelectedOption(e);
        var borderLR = e.target.closest(".borderLR");
        borderLR.classList.add("borderLRHover");
        borderLR.querySelector(".borderTB").classList.add("borderTBHover");
        if(borderLR.querySelector(".option")){
            e.target.closest(".block").querySelector(".selectedOption").innerHTML = borderLR.querySelector(".option").innerHTML;
        }else if(borderLR.querySelector(".otherOption")){
            e.target.closest(".block").querySelector(".selectedOption").innerHTML = e.target.closest(".otherOption").innerHTML;
        }
        inputChange(3, e);
    }

    function clearSelectedOption(e){
        var borderLRs = e.target.closest(".optionContainer").querySelectorAll(".borderLR");
        for(var i = 0; i < borderLRs.length; i++){
            borderLRs[i].classList.remove("borderLRHover");
            borderLRs[i].querySelector(".borderTB").classList.remove("borderTBHover");
        }
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



    function convertUnit(value, from_unit, to_unit) {
        var regex = /[^0-9.]/;
        var regex2 = /x 10\^*/;
        if(regex.test(value) && !regex2.test(value)){
            addWrongTag();
            return '#';
        }else if(regex2.test(value)){
                regex = /[^0-9.-]/;
                value = value.replace(/ x 10/, '');
                const notificationNum = value.split('^');
                if(notificationNum.length == 2){
                    if(regex.test(notificationNum[0]) || regex.test(notificationNum[1])){
                        addWrongTag();
                        return '#';
                    }else{
                        var value = Number(notificationNum[0]);
                        var exp = Number(notificationNum[1]);
                        if(exp > 10){
                            carry = exp - 10;
                            exp = 10;
                        }else if(exp < -6){
                            carry = exp + 6;
                            exp = -6;
                        }
                        if(exp > 0){
                            for(var i = 0; i < exp; i++){
                                value = value * 10;
                            }
                            return convertUnit(value, from_unit, to_unit);
                        }else{
                            for(var i = 0; i < -exp; i++){
                                value = value / 10;
                            }
                            return convertUnit(value, from_unit, to_unit);
                        }
                    }
                }else{
                    addWrongTag();
                    return '#';
                }
        }else{
            var result = (value / from_unit) * to_unit;
            if(result >= 10000){
                result = result.toExponential().replace(/e\+?/, ' x 10^');
                var e = ' x 10^';
                if(result.indexOf(e) > 7){
                    if(carry != 0){
                        var temp1 = result.slice(0, 7);
                        var temp2 = result.slice((result.indexOf(e) + 6));
                        temp2 = Number(temp2) + carry;
                        carry = 0;
                        result = temp1 + ' x 10^' + temp2;
                        return result;
                    }else{
                        var temp1 = result.slice(0, 7);
                        var temp2 = result.slice((result.indexOf(e)));
                        result = temp1 + temp2;
                        return result;
                    }
                }else{
                    if(carry != 0){
                        var expNum = Number(result.slice((result.indexOf(e) + 6))) + carry;
                        var temp = result.split('^');
                        result = temp[0] + '^' + expNum;
                        carry = 0;
                    }
                    return result;
                }
            }else if(result <= 0.00001 && result != 0 && result != ""){
                result = result.toExponential().replace(/e\+?/, ' x 10^');
                var e = ' x 10^';
                if(result.indexOf(e) > 7){
                    if(carry != 0){
                        var temp1 = result.slice(0, 7);
                        var temp2 = result.slice((result.indexOf(e) + 6));
                        temp2 = Number(temp2) + carry;
                        carry = 0;
                        result = temp1 + ' x 10^' + temp2;
                        return result;
                    }else{
                        var temp1 = result.slice(0, 7);
                        var temp2 = result.slice((result.indexOf(e)));
                        result = temp1 + temp2;
                        return result;
                    }
                }else{
                    if(carry != 0){
                        var expNum = Number(result.slice((result.indexOf(e) + 6))) + carry;
                        var temp = result.split('^');
                        result = temp[0] + '^' + expNum;
                        carry = 0;
                    }
                    return result;
                }
            }else{
                if(result.toString().length > 7){
                    return Number(result.toFixed(7));
                }else{
                    return result;
                }
            }
        }
    }

    function addWrongTag(){
        if(flag == 'from'){
            from.closest(".resultContainer").classList.add("wrongInput");
        }else{
            to.closest(".resultContainer").classList.add("wrongInput");
        }
    }

    var from = document.querySelector(".from");
    var to = document.querySelector(".to");
    var flag = 'from';
    var fromUnit = Number(document.querySelectorAll(".borderTBHover")[0].id.slice(0, -2));
    var toUnit = Number(document.querySelectorAll(".borderTBHover")[1].id.slice(0, -2));
    var carry = 0;


    //init
    document.getElementById("1fr").classList.add("borderTBHover");
    document.getElementById("1fr").closest(".borderLR").classList.add("borderLRHover");
    document.getElementById("3.28to").classList.add("borderTBHover");
    document.getElementById("3.28to").closest(".borderLR").classList.add("borderLRHover");
    document.querySelectorAll(".selectedOption")[0].innerHTML = document.getElementById("1fr").innerHTML;
    document.querySelectorAll(".selectedOption")[1].innerHTML = document.getElementById("3.28to").innerHTML;

    to.value = convertUnit(from.value, fromUnit, toUnit);


    from.addEventListener("input", function(e){inputChange(1, e)});
    to.addEventListener("input", function(e){inputChange(2, e)});

    function inputChange(arg, e){//1, 2, 3 1:from input 2 to input 3 option selected
        from.closest(".resultContainer").classList.remove("wrongInput");
        to.closest(".resultContainer").classList.remove("wrongInput");
        fromUnit = Number(document.querySelectorAll(".borderTBHover")[0].id.slice(0, -2));
        toUnit = Number(document.querySelectorAll(".borderTBHover")[1].id.slice(0, -2));
        if(arg == 1){
            flag = 'from';
            to.value = convertUnit(from.value, fromUnit, toUnit);
        }else if(arg == 2){
            flag = 'to';
            from.value = convertUnit(to.value, toUnit, fromUnit);
        }else if(arg == 3){
            flag = 'from';
            to.value = convertUnit(from.value, fromUnit, toUnit);
        }
    }

</script>