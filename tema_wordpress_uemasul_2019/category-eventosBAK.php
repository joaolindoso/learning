<?php get_header(); ?>

<div class="container">
    <div class="wrap">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php $i=1; ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                        <span style="display: inline;"><?php the_date()?> - <?php the_time()?> - </span> <span> <?php the_title(); ?></span>
                    </a>
                  </h4>
                </div>
                <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                     <div class="row">
                           <div class="col-md-6">
                               <?php the_post_thumbnail('medium'); ?>
                           </div>
                           <div class="col-md-6">
                               
                               <a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a>
                           </div>
                       </div>
                      
                  </div>
                </div>
              </div>


            <?php $i++; endwhile; else: ?>

                <p>Please fill out some questions.</p>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div><!--end of the accordion wrap-->
    </div><!-- wrapper-->
</div>

<?php get_footer(); ?>
