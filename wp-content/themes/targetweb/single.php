<?php get_header(); ?>

 


  <div class="container ">



    <div class="container">



<!-- Je crée une boucle pour rendre dynamique l'affichage des contenus -->

<?php

if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
?>


            <div class="card shadow-sm">
              
              <div class="card-img-top text-center" >
                <?php 
              if (has_post_thumbnail()){
                the_post_thumbnail( 'medium_large' );
              }           
              ?>

              </div>
            

              <div class="card-body">
                <!-- ajout des fonction native php pour dynamiser le titre , l'auteur du post , et la date  -->
                    <h1 class="card-title"><?php the_title(); ?></h1>
                        <h6 class="card-subtitle mb-2 text-muted"> Auteur : <?php the_author() ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_date('Y-m-d') ?> </h6>
                            



                <p class="card-text">
                  <?php the_content(); ?>
                </p>
              </div>
            </div>
  

<?php
    endwhile;
else :
    _e( 'Sorry test , no posts matched your criteria.', 'textdomain' );
endif;

?>



        
   
    </div>


  

  </div><!-- /.container -->


<?php get_footer() ?>