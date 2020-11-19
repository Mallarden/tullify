			<!-- footer -->
		
			<section class="seventh-section">
			<div class="container">

				<h2 class="pb-4 text-center"><strong>Kontakta oss!</strong></h2>
				<? echo do_shortcode( '[wpforms id="285" title="false" description="false"]' ); ?>
		</div>
			</section>
			<footer class="footer" role="contentinfo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white2.png" alt="Logo" class="logo-img">
				<div class="row footer-container">
					<div class="col-lg-3 side-col">
						<b>
							<p style="color:#1FC2C2; font-size:1.2em; margin-bottom: 0.5rem;">Adress</p>
						</b>
						<ul>
							<li>Tullify AB</li>
							<li>Paternostergatan 12, vån 6</li>
							<li>414 67 Göteborg</li>
							<li>Sverige</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<div class="icon-wrapper d-flex">
							<a href="" target="_blank"><i class="fa fa-facebook-f"></i></a>
							<a href="" target="_blank"><i class="fa fa-instagram"></i></a>
							<a href="" target="_blank"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="col-lg-3 side-col">
						<b>
							<p style="color:#1FC2C2; font-size:1.2em; margin-bottom: 0.5rem;">Kontaktinformation</p>
						</b>
						<ul>
							<li>+46 76-890 12 56</li>
							<li>info@tullify.se</li>
						</ul>
					</div>
				</div>
				<p class="copyright mt-3" style="color:#1FC2C2;">
				All rights reserved Tullify AB
			</p>
			</footer>
			<!-- /footer -->
			</div>
			<!-- /wrapper -->

			<?php wp_footer(); ?>

			<!-- analytics -->
			<script>
				(function (f, i, r, e, s, h, l) {
					i['GoogleAnalyticsObject'] = s;
					f[s] = f[s] || function () {
						(f[s].q = f[s].q || []).push(arguments)
					}, f[s].l = 1 * new Date();
					h = i.createElement(r),
						l = i.getElementsByTagName(r)[0];
					h.async = 1;
					h.src = e;
					l.parentNode.insertBefore(h, l)
				})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
				ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
				ga('send', 'pageview');
			</script>

			</body>

			</html>

		