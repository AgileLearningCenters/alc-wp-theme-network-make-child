<?php 
$membership = $alc_post_meta['alc_membership_active'];
$join_date = $alc_post_meta['alc_membership_join_date'];
?>

<section>
<?php if ($membership) : ?>
  <span class="alc-membership">Active Member</span>
<?php else: ?>
  <span class="alc-membership">Inactive Member</span>
<?php endif; ?>
<?php if ( ! empty($join_date) ) : ?>
  <span class="alc-join-date">Joined: <?php echo $join_date ?></span>
<?php endif; ?>
</section>