<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OHIGH_v1.0
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="row">
			<div class="col-12 col-lg-6">
				<b>Om Kamerasikring</b>
					
						<p>Vi levere kvalitetsovervågning til lave priser. Vores motto er:</p>
						<p><strong>“Det er kun billigt – hvis det er mere værd”.</strong></p>
						<p>
							Vi modtager betaling via PayPal og Stipe:
						</p>

						<p>
							<a title="Saadan fungerer PayPal" href="#"><img src="https://www.paypalobjects.com/webstatic/mktg/logo-center/logo_PayPal_betalingsmuligheder_dk.jpg" alt="PayPal Acceptance Mark" border="0"></a></td>
						</p>
					
			</div>

			<div class="col-12 col-lg-6">
				<!-- <div class="col-6"> -->
				<p><b>KAMERASIKRING<br>
					</b>– en del af KOLLENSØ (CVR.Nr. 38452389)<br>
					Kollensøvej 8<br>
					3550 Slangerup</p>
				<!-- </div>
					<div class="col-6"> -->
				<p><strong>Kundesupport<br>
					</strong>Tel.: 40292221<br>
					Mail: support@kamerasikring.dk</p>
				<p>Mandag—fredag: 9:00–17:00<br>
					Lørdag &amp; søndag: Lukket</p>
				<!-- </div> -->
			</div>
			<div class="row"></div>
		</div>
		© Kamerasikring 2019 <span class="sep"> | </span> 
		<?php
		printf(esc_html__('Theme: %1$s by %2$s.', 'ohigh'), 'ohigh', '<a href="https://ohigh.dk">Ole Sandvang Høj</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>