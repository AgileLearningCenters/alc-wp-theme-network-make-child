<?php 
$alc_post_meta = alc_post_meta($post);

$url = $alc_post_meta['alc_map_info_cta'];
$label = $alc_post_meta['alc_map_info_cta_label'];
?>

<style>
  .alc-cta {
    background-color: #F8C433;
    line-height: 2;
    padding: 1em;
    text-align:center;
  }

  .alc-cta .ttfmake-button {
    font-size: 1.5em;
  }
</style>

<section class="alc-cta">
  The <?php echo get_the_title() ?> says:<br>
  <a class="ttfmake-button" href="<?php echo $url ?>"><?php echo $label ?></a>
</section>
