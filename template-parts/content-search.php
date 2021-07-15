<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

    <?php if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
            <?php twentysixteen_entry_meta(); ?>
            <?php
                edit_post_link(
                    sprintf(
                        /* translators: %s: Post title. */
                        __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
                        get_the_title()
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
            ?>
        </div><!-- .entry-meta -->

    <?php else : ?>
        <?php
            edit_post_link(
                sprintf(
                    /* translators: %s: Post title. */
                    __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
                    get_the_title()
                ),
                '<div class="entry-meta"><span class="edit-link">',
                '</span></div><!-- .entry-meta -->'
            );
        ?>
    <?php endif; ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<?php twentysixteen_excerpt(); ?>
</article><!-- #post-<?php the_ID(); ?> -->

