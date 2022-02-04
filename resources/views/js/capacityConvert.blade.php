//<script>
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




      var from = document.querySelector(".from");
      var to = document.querySelector(".to");
      from.addEventListener("input", function(){
          to.value = convertBase(from.value, 10, 3);
      });

//</script>