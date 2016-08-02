<?php 
$alc_post_meta = alc_post_meta($post);

$hp = $alc_post_meta['alc_membership_harbor_pilot'];
$name = $alc_post_meta['alc_holders_primary_name'];
$email = $alc_post_meta['alc_holders_primary_email'];
$phone = $alc_post_meta['alc_holders_primary_phone'];
$contacts = $alc_post_meta['alc_holders_other_contacts'];
$last_pay = $alc_post_meta['alc_membership_last_payment_date'];
?>

<section class="alc-private">

<?php if ( ! empty($hp) ) : ?>
  <strong>Harbor Pilot:</strong> <?php echo $hp; ?><br>
<?php endif; ?>

<?php if ( ! empty($last_pay) ) : ?>
  <strong>Latest Payment:</strong> <?php echo $last_pay; ?><br>
<?php endif; ?>

<?php if ( ! empty($name) ) : ?>
  <strong>Primary Contact:</strong> <?php echo $name; ?><br>
<?php endif; ?>

<?php if ( ! empty($phone) ) : ?>
  <strong>Primary Phone:</strong> <?php echo $phone; ?><br>
<?php endif; ?>

<?php if ( ! empty($email) ) : ?>
  <strong>Primary Email:</strong> <?php echo $email; ?><br>
<?php endif; ?>

<?php if ( ! empty($contacts) ) : 
  $contacts = explode(',', $contacts); ?>
  <strong>Team Contact</strong><br>
  <ul>
    <?php foreach ($contacts as $contact) {
      echo '<li>' . implode(' &mdash; ', explode('|', $contact)) . '</li>';
    } ?>
  </ul>
<?php endif; ?>
</section>
