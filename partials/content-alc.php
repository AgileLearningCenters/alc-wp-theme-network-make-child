<?php
/**
 * @package Make
 */

// $alc_post_meta = alc_post_meta();


// Header
ob_start();
get_template_part( 'partials/alc', 'meta-top' );
get_template_part( 'partials/alc', 'title' );
get_template_part( 'partials/alc', 'meta-before-content' );
if( is_user_logged_in() ) {
    get_template_part( 'partials/alc', 'meta-private' );
}
get_template_part( 'partials/alc', 'cta' );
get_template_part( 'partials/alc', 'map' );
get_template_part( 'partials/alc', 'exchange' );
$entry_header = trim( ob_get_clean() );

// // Footer
ob_start();
get_template_part( 'partials/entry', 'sharing' );
$entry_footer = trim( ob_get_clean() );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( $entry_header ) : ?>
    <header class="entry-header">
        <?php echo $entry_header; ?>
    </header>
    <?php endif; ?>

    <div class="entry-content">
        <?php get_template_part( 'partials/entry', 'content' ); ?>
        <?php get_template_part( 'partials/entry', 'pagination' ); ?>
    </div>

    <?php if ( $entry_footer ) : ?>
    <footer class="entry-footer">
        <?php echo $entry_footer; ?>
    </footer>
    <?php endif; ?>
</article>
