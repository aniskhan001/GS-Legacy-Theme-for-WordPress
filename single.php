<?php //The Template for displaying all single posts. ?>

<?php get_header(); ?>

<div id="content" role="main">
    <div id="gs-sidebar">
        <?php if (dynamic_sidebar('main_sidebar')) : else : endif; ?>
    </div>

    <div id="writing">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <small><?php the_time('n/j/y') ?> </small>
            <div class="entry">
                <?php the_content(); ?>
            </div>
            <!-- <p class="postmetadata">
            <?php// the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php //the_category(', ') ?> | <?php //edit_post_link('Edit', '', ' | '); ?>  <?php //comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
            </p> -->
        </div>
        <?php endwhile; endif; ?>

        <div class="gs-comment">
            <?php if(get_comments_number() > 0) : ?>
                <h3 class="reply-header"><a href="#comments"><span>All Replies</span></a></h3>
            <?php endif; ?>

            <?php comments_template(); ?>
        </div>
    </div>
</div><!-- #content -->

<?php get_footer(); ?>