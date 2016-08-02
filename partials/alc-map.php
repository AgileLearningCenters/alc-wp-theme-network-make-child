<?php 
$alc_post_meta = alc_post_meta($post);

$on_map = $alc_post_meta['alc_map_info_on_map'];
$name = $alc_post_meta['alc_map_info_name'];
$desc = $alc_post_meta['alc_map_info_description'];
$contact = $alc_post_meta['alc_map_info_contact_name'];
$email = $alc_post_meta['alc_map_info_contact_email'];
$phone = $alc_post_meta['alc_map_info_contact_phone'];
?>

<style>
  .alc-map {
    background-color: #4AAFDC;
    color: #000;
    padding: 1em;
  }
</style>

<section class="alc-map">
  <?php if ( ! empty($desc) ) : ?>
    <p><?php echo $desc; ?></p>
  <?php endif; ?>
  <?php if ( ! empty($contact) ) : ?>
    <h2><?php echo $contact; ?></h2>
  <?php endif; ?>
  <?php if ( ! empty($email) ) : ?>
    <strong>Email:</strong> <?php echo $email; ?>
  <?php endif; ?>
  <?php if ( ! empty($phone) ) : ?>
    <strong>Phone:</strong> <?php echo $phone; ?>
  <?php endif; ?>
</section>