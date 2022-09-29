<?php
get_header();
?>

<article class ="content px-3 py-5 p-md-5">


<div class="container">
<div class="post mb-5">
    <div class="media">
        <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
        <div class="media-body">
            <h3 class="archive_title mb-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="meta mb-1"><span class="date_archive"><?php the_date(); ?></span>
            <div class="acrchive_intro"><?php the_excerpt(); ?></div>
            <span class="archive_comment"><a href="#comments"><i class='fas fa-comment'></i> <?php comments_number(); ?> </span>   </a></span><br>
            <a class="archive_more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
        </div><!--//media-body-->
    </div><!--//media-->
</div>
</div>
<?php
    the_posts_pagination();
?>
</div>
</article>
<?php
get_footer();
?>
