<?php 
$alc_post_meta = alc_post_meta($post);

$title = $alc_post_meta['alc_membership_active'];
$address = $alc_post_meta['alc_profile_address'];
$age_range = $alc_post_meta['alc_profile_age_range'];
?>

<style>
  .alc-title {
    background-color: #761B20;
    color: #EBA5A9;
    padding: 1em 2em;
  }
  .alc-title .entry-title { color: white; }
</style>

<section class="alc-title">
<?php get_template_part( 'partials/entry', 'title' ); ?>
<?php if ( ! empty($address) ) : ?>
  <h2 class="alc-address"><small><?php echo $address ?></small></h2>
<?php endif; ?>
<?php if ( ! empty($age_range) ) : ?>
  <h3 class="alc-address">Enrolling: <?php echo $age_range ?></h2>
<?php endif; ?>
</section>