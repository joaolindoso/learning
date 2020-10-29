<div class="col-md-12">
    <form action="<?php bloginfo('url'); ?>" method="get">
        <select name="page_id" id="page_id">
            <?php

            global $post;
            $argmts = array( 'numberposts' => -1, 'category_name'=>'campus-imperatriz');
            $posts = get_posts($argmts);

            foreach( $posts as $post ) : setup_postdata($post); ?>

                <option value="<?php  echo $post->ID; ?>">
                    <?php the_title(); ?>
                </option>

            <?php endforeach; 
            wp_reset_query(); ?>

        </select>
        <input type="submit" name="submit" value="Selecionar" />
    </form>    

</div>