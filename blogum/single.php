<?php get_header(); ?>

<div id="content">

    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
            <div class="post_meta">
                <div class="post_data">
                    <div class="post_date"><?php the_time(__('d-m-Y')) ?></div>
                    <div class="post_categories"><?php the_category(', '); ?></div>
                    <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f3a5f1a1354b657"></script>
<!-- AddThis Button END -->
                    <?php edit_post_link( __( 'Edit' ), '<div class="post_edit">', '</div>' ); ?>
                </div>
            </div>
            <div class="post_content">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <div class="post_tags clear">
                    <?php
                        if (get_the_tag_list()) {
                            echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
                        }
                    ?>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php comments_template(); ?>

<?php get_footer(); ?>
