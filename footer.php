
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/bin/materialize.js"></script>
<script src="js/jquery.konami.min.js"></script>
<script>
    (function($){
        $(function(){

            $('.button-collapse').sideNav();

        }); // end of document ready
    })(jQuery); // end of jQuery name space

    var s = {
        "background": "url('http://jack.osullivan.codes/img/evan.jpg') no-repeat 50% 50% fixed"
    }
    var t = {
        "visibility": "hidden"
    }

    $( window ).konami({
        cheat: function() {
            $("body").css(s);
            $(".content").css(t);
        }
    });
</script>

</body>
</html>q