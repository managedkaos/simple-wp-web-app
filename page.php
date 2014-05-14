<?php get_header(); ?>

<div class="container">
    <div class="blog-header" style="margin-top: 80px;">
    </div>
    <div class="row">
        <div class="col-lg-offset-2 col-sm-8 blog-main">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="blog-post" id="post-<?php the_ID(); ?>">
                        <h2 class="blog-post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <p class="blog-post-meta">
                            <?php the_author(); ?></a> | <?php the_date(); ?>
                            <?php if (current_user_can('edit_posts')) { edit_post_link('Edit',' | '); } ?>
                        </p>
                    <?php the_content(); ?>
                    </div>
                    <?php
                endwhile;
            else:
                ?>
                <p><?php _e('Sorry, nothing matched what you were looking for.'); ?></p>
<?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>