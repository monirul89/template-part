<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since The Moms Embroidery 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <div class="entry-meta">
            <span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
            <span class="author vcard"><?php the_author(); ?></span>
            <span class="meta-sep"> | </span>
            <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'your-theme'); ?></span>
            <span class="entry-date"><?php the_time(get_option('date_format')); ?></span>

        </div>     <!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="post-thumbnail">
        <?php the_post_thumbnail('post-thumbnails'); ?>
    </div><!-- .post-thumbnail -->

    <div class="entry-content">
        <?php
        the_content();
        ?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->
