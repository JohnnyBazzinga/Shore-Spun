    	<!-- jquery js -->
		<script type="text/javascript" src="assets/js/vendor/jquery-3.2.1.min.js"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!-- carousel js -->
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<!-- counterup js -->
	<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
	<!-- waypoints js -->
	<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
	<!-- wow js -->
	<script type="text/javascript" src="assets/js/wow.js"></script>
	<!-- imagesloaded js -->
	<script type="text/javascript" src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- venobox js -->
	<script type="text/javascript" src="assets/css/venobox/venobox.js"></script>
	<!-- ajax mail js -->
	<script type="text/javascript" src="assets/js/ajax-mail.js"></script>
	<!--  animated-text js -->
	<script type="text/javascript" src="assets/js/animated-text.js"></script>
	<!-- venobox min js -->
	<script type="text/javascript" src="assets/css/venobox/venobox.min.js"></script>
	<!-- isotope js -->
	<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
	<!-- jquery nivo slider pack js -->
	<script type="text/javascript" src="assets/js/jquery.nivo.slider.pack.js"></script>
	<!-- jquery meanmenu js -->
	<script type="text/javascript" src="assets/js/jquery.meanmenu.js"></script>
	<!-- jquery scrollup js -->
	<script type="text/javascript" src="assets/js/jquery.scrollUp.js"></script>
	<!-- theme js -->
	<script type="text/javascript" src="assets/js/theme.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
$(document).ready(function() {
    $('a[href*=\\#]').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop : $(this.hash).offset().top
        }, 500);
    });
});
    $('#submitEn').button();

    $('#submitEn').click(function(){

    $('#submitEn').button('loading');

    /* perform processing then reset button when done */
    setTimeout(function() {
        $('#submitEn').button('reset');
    }, 20000);


    });
				</script>

<script type='text/javascript' src='https://velikorodnov.com/wordpress/flatastic/classic/wp-content/themes/flatastic/admin/framework/assets/js/front.js?ver=1' id='flatastic-front-mod-js'></script>
</html>
