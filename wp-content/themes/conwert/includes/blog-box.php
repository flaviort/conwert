<a href="<?php echo get_permalink() ?>" class="blog-box">
    
    <div class="image">
        
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="<?php echo get_the_title(); ?>">

        <p class="category">
            <?php foreach((get_the_category()) as $category){ echo $category->name; } ?>
        </p>

    </div>

    <p class="date">
        <?php echo get_the_date('j/m/Y') ?>
    </p>

    <p class="title">
        <?php echo get_the_title(); ?>
    </p>

    <p class="desc">
        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
    </p>

    <span class="button">
        Leia mais
    </span>

</a>