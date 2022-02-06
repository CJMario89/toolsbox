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
    
</script> 