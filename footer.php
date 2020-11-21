        <footer id="Footer" class="clearfix">
            <div class="widgets_wrapper">
                <div class="container">
                    <div class="column one">
                        <aside class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper"><img style="width: 10%;" class="scale-with-grid" src="images/logo/foodtruck-02.png">
                                    </div>
                                </div>
                                <hr class="no_line" style="margin:0 auto 40px">
                                <div class="column one-third">
                                    <div style="text-align: center;">
                                        <h5>CONTACT US</h5>
                                        <p>
                                            <a href="mailto:hi@badaburger.rf.gd/">hi@badaburger.rf.gd</a>
                                            <br> +1 234 5678 90
                                        </p>
                                    </div>
                                </div>
                                <div class="column one-third">
                                    <div style="text-align: center;">
                                        <h5>ADDRESS</h5>
                                        <p>
                                            Somewhere on Earth
                                        </p>
                                    </div>
                                </div>
                                <div class="column one-third">
                                    <h5 style="text-align: center;"> VISIT OUR SOCIAL MEDIA</h5>
                                    <p style="font-size: 35px; text-align: center">
                                        <a style="color: #fff;" href="#"><i class="icon-twitter-circled"></i></a><a style="color: #fff;" href="#"><i class="icon-facebook-circled"></i></a><a style="color: #fff;" href="#"><i class="icon-skype-circled"></i></a>
                                    </p>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" class="button button_js" href><i class="icon-up-open-big"></i></a>
                        <div class="copyright">
                            &copy; 2020 Bada Burger
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="Side_slide" class="right dark" data-width="250">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="extras">
            <div class="extras-wrapper"></div>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>


    <!-- JS -->
    <script src="js/jquery-2.1.4.min.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/translate3d.js"></script>
    <script src="js/scripts.js"></script>


    <script src="plugins/rs-plugin-6.custom/js/revolution.tools.min.js"></script>
    <script src="plugins/rs-plugin-6.custom/js/rs6.min.js"></script>


	<script>
	var revapi1, tpj;
		jQuery(function() {
			tpj = jQuery;
			if (tpj("#rev_slider_1_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_1_1");
			} else {
				revapi1 = tpj("#rev_slider_1_1").show().revolution({
					sliderType :"hero",
					sliderLayout :"fullscreen",
					visibilityLevels :"1240,1240,778,778",
					gridwidth :"1240,1240,778,778",
					gridheight :"900,900,960,960",
					minHeight :"",
					spinner :"spinner7",
					spinnerclr :"#ffc000",
					editorheight :"900,768,960,720",
					responsiveLevels :"1240,1240,778,778",
					disableProgressBar :"on",
					navigation : {
						onHoverStop : false
					},
					fallbacks : {
						allowHTML5AutoPlayOnAndroid : true
					},
				});
			}
		});
	</script>

</body>

</html>