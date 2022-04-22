
<meta charset="utf-8">
<meta http-equiv="X-UA-compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/animate.css"/>
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="css/head.css" rel="stylesheet" type="text/css"/>
<link href="css/dash.css" rel="stylesheet" type="text/css"/> 
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/wow.min.js"></script>
<script>
              wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
</script>
<!----------------mega menu--------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
   <!--- <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
    <!-- JS -->
    <script src="js/vendor/modernizr-2.8.3.min.min.js"></script>
    <script>
        window.Modernizr || document.write('<script src="js/vendor/modernizr-2.8.3.min.js"><\/script>')
    </script>
<!---------dash board-------------------------------------->
<script>
$(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
});   
    
</script>
    	
	