<script>

    var whyToolsbox = document.querySelector(".whyToolsbox");
    var why = document.querySelector(".why");
    var what = document.querySelector(".what");
    whyToolsbox.addEventListener("click", function(){
        why.classList.add("showWhy");
        what.classList.add("hideWhat");
    });


    window.addEventListener("click", function(e){
        if(!e.target.closest(".whyToolsbox")){
            why.classList.remove("showWhy");
            what.classList.remove("hideWhat");
        }
    });
    if(window.innerWidth < 768){
        window.addEventListener("tochstart", function(e){
        if(!e.target.closest(".whyToolsbox")){
            why.classList.remove("showWhy");
            what.classList.remove("hideWhat");
        }
    });
    }
    
</script> 