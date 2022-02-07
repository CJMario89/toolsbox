<script>
    var cubicSvg = document.querySelector(".cubicSvg");
    if(window.innerWidth < 768){
        cubicSvg.addEventListener("touchmove", function(){
            cubicSvg.style.animationPlayState = "paused";
        });
        cubicSvg.addEventListener("touchstart", function(){
            cubicSvg.style.animationPlayState = "paused";
        });
        cubicSvg.addEventListener("touchend", function(){
            cubicSvg.style.animationPlayState = 'running';
        });
    }else{
        cubicSvg.addEventListener("mouseenter", function(){
            cubicSvg.style.animationPlayState = 'paused';
        });
        cubicSvg.addEventListener("mouseleave", function(){
            cubicSvg.style.animationPlayState = 'running';
        });
    }
    window.addEventListener("resize", function(){
        if(window.innerWidth < 768){
            cubicSvg.addEventListener("touchmove", function(){
                cubicSvg.style.animationPlayState = "paused";
            }, {passive:true});
            cubicSvg.addEventListener("touchstart", function(){
                cubicSvg.style.animationPlayState = "paused";
            }, {passive:true});
            cubicSvg.addEventListener("touchend", function(){
                cubicSvg.style.animationPlayState = 'running';
            }, {passive:true});
            cubicSvg.removeEventListener("mouseenter", function(){
                cubicSvg.style.animationPlayState = 'paused';
            }, {passive:true});
            cubicSvg.removeEventListener("mouseleave", function(){
                cubicSvg.style.animationPlayState = 'running';
            }, {passive:true});
        }else{
            cubicSvg.addEventListener("mouseenter", function(){
                cubicSvg.style.animationPlayState = 'paused';
            }, {passive:true});
            cubicSvg.addEventListener("mouseleave", function(){
                cubicSvg.style.animationPlayState = 'running';
            }, {passive:true});
            cubicSvg.removeEventListener("touchmove", function(){
                cubicSvg.style.animationPlayState = "paused";
            }, {passive:true});
            cubicSvg.removeEventListener("touchstart", function(){
                cubicSvg.style.animationPlayState = "paused";
            }, {passive:true});
            cubicSvg.removeEventListener("touchend", function(){
                cubicSvg.style.animationPlayState = 'running';
            }, {passive:true});
        }
    });

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