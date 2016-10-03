<?php
/*
Template Name: Contact Us
*/
get_header('grey');
?>
<div id="app">
  <div id="capabilities" class="content-area">
    <main id="main" class="site-main" role="main">

      <div id="map" class="contact--map"></div>

			<?php
			while ( have_posts() ) :
				the_post();

        $company_name = get_field('company_name');
        $address = get_field('address');
        $googleMapsUrl = get_field('google_maps_url');
        $phone_number = get_field('phone_number');
        $phone_extensions = get_field('phone_extensions');
        $fax_number = get_field('fax_number');
      ?>

      <section class="section-md">
				<div class="container">
					<h3 class="section-title">Contact Us</h3>
					<div class="row">
					  <div class="col-xs-10 col-sm-4 col-md-3">
              <h3 class="text-brand-dark-blue text-bold">Address</h3>
              <p class="contact--address-name"><?php echo $company_name; ?></p>
              <a class="contact--address" href="<?php echo $googleMapsUrl; ?>">
                <address><p>
                  <?php echo $address; ?>
                </p></address>
              </a>
					  </div>
					  <div class="remove-horizontal-padding-sm col-xs-10 col-sm-4 col-md-3 col-md-offset-1">
              <h3 class="text-brand-dark-blue text-bold">Phone Number</h3>
              <a href="tel:<?php echo $phone_number; ?>" class="text-brand-mid-blue">
                <div class="contact--number text-thin"><?php echo $phone_number; ?></div>
              </a>
              <address><p>
                <?php echo $phone_extensions; ?>
              </p></address>
					  </div>
					  <div class="col-xs-10 col-sm-4 col-md-3 col-md-offset-1">
              <h3 class="text-brand-dark-blue text-bold">Fax Number</h3>
              <div class="mt0 contact--number text-thin"><?php echo $fax_number; ?></div>
					  </div>
					</div>
				</div>
			</section>

      <section id="contact" class="section-md bg-cool-light-grey">
				<div class="container">
					<h3 class="section-title">Send us a message</h3>
          <?php echo do_shortcode( '[contact-form-7 id="114" title="Contact Form"]' ); ?>
				</div>
			</section>

    <?php endwhile; ?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<?php
get_footer();
