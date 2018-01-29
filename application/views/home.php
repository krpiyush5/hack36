<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="<?=base_url()?>home/assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h3 id ='random_quote'>Story</h3>
							<!-- <p class="major">A (modular, highly tweakable) responsive one-page template designed by <a href="https://github.com/as3eem">HTML5 UP</a> and released for free under the <a href="https://github.com/kpiyushit">Creative Commons</a>.</p> -->
							<ul class="actions vertical">
								<li><input type="submit" value="Register" class="button big wide smooth-scroll-middle">
							<ul class="actions vertical">
								<li><a href="#first" class="button big wide smooth-scroll-middle">Get Started</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="<?=base_url()?>home/images/banner.jpg" alt="" />
						</div>
					</section>

				

		 <!-- Scripts --> 
			<script src="<?=base_url()?>home/assets/js/jquery.min.js"></script>
			<script src="<?=base_url()?>home/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?=base_url()?>home/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?=base_url()?>home/assets/js/skel.min.js"></script>
			<script src="<?=base_url()?>home/assets/js/util.js"></script>
			<!-- <script src="<?=base_url()?>home/assets/js/main.js"></script> -->

			<script type="text/javascript">
			function randomQuote() {
        	$.ajax({
            url: "https://api.forismatic.com/api/1.0/?",
            dataType: "jsonp",
            data: "method=getQuote&format=jsonp&lang=en&jsonp=?",
            success: function( response ) {
                $("#random_quote").html("<p id='random_quote' class='lead text-center'>" +
                    response.quoteText + "<br/>&dash; " + response.quoteAuthor + " &dash;</p>");
                $("#tweet").attr("href", "https://twitter.com/home/?status=" + response.quoteText +
                    ' (' + response.quoteAuthor + ')');
            }
        });
    }

    $(function() {
        randomQuote();
    });

    $("button").click(function(){
        randomQuote();
    });
			</script>
	</body>
</html>