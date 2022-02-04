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



    function convertBase(value, from_base, to_base) {
        var range = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+/'.split('');
        var from_range = range.slice(0, from_base);
        var to_range = range.slice(0, to_base);
        
        var dec_value = value.split('').reverse().reduce(function (carry, digit, index) {
            if (from_range.indexOf(digit) === -1){
                if(flag == 'from'){
                    from.closest(".resultContainer").classList.add("wrongInput");
                }else{
                    to.closest(".resultContainer").classList.add("wrongInput");
                }
            }else{
                return carry += from_range.indexOf(digit) * (Math.pow(from_base, index));
            }
        }, 0);
        
        var new_value = '';
        while (dec_value > 0) {
          new_value = to_range[dec_value % to_base] + new_value;
          dec_value = (dec_value - (dec_value % to_base)) / to_base;
        }
        return new_value || '#';
      }

    var from = document.querySelector(".from");
    var to = document.querySelector(".to");
    var flag = 'from';
    var fromBase = Number(document.querySelectorAll(".borderTBHover")[0].id.slice(0, -4));
    var toBase = Number(document.querySelectorAll(".borderTBHover")[1].id.slice(0, -4));


    //init
    document.getElementById("10pofr").classList.add("borderTBHover");
    document.getElementById("10pofr").closest(".borderLR").classList.add("borderLRHover");
    document.getElementById("2poto").classList.add("borderTBHover");
    document.getElementById("2poto").closest(".borderLR").classList.add("borderLRHover");
    document.querySelectorAll(".selectedOption")[0].innerHTML = document.getElementById("10pofr").innerHTML;
    document.querySelectorAll(".selectedOption")[1].innerHTML = document.getElementById("2poto").innerHTML;

    to.value = convertBase(from.value, fromBase, toBase);


    from.addEventListener("input", function(e){inputChange(1, e)});
    to.addEventListener("input", function(e){inputChange(2, e)});

    function inputChange(arg, e){//1, 2, 3 1:from input 2 to input 3 option selected
        from.closest(".resultContainer").classList.remove("wrongInput");
        to.closest(".resultContainer").classList.remove("wrongInput");
        fromBase = Number(document.querySelectorAll(".borderTBHover")[0].id.slice(0, -4));
        toBase = Number(document.querySelectorAll(".borderTBHover")[1].id.slice(0, -4));
        if(arg == 1){
            flag = 'from';
            to.value = convertBase(from.value, fromBase, toBase);
        }else if(arg == 2){
            flag = 'to';
            from.value = convertBase(to.value, toBase, fromBase);
        }else if(arg == 3){
            flag = 'from';
            to.value = convertBase(from.value, fromBase, toBase);
        }
    }

</script>