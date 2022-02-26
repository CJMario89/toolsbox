<script>
    if('{{Session::has("locale")}}' == '1'){
        document.documentElement.lang = "{{Session::get('locale')}}";
    }else{
        document.documentElement.lang = navigator.language;
    }
</script>