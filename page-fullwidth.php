


 
<?php 

 
/*************************************************************/
/*Template name: Full Width Page  */
/*************************************************************/

get_header(); ?>

    

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">

        <div class="col-md-12">
           <?php if(have_posts() ) : while(have_posts()) : the_post(); ?>

              <div class="page-header">
                <h1><?php the_title(); ?></h1>
              </div>
              <?php the_content(); ?>

           <?php endwhile;else: ?>

           <div class="page-header">
             <h1>No Content Yet !</h1>
           </div>

           <p>No content has been published yet!</p>
  
           <?php endif; ?>

        </div> 

      </div>

<?php get_footer(); ?>      