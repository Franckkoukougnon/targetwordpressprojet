<?php get_header(); ?>

 


  <div class="container ">


    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<!-- Je crée une boucle pour rendre dynamique l'affichage des contenus -->

<?php

if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
?>
        <div class="col">
          <a href="<?php the_permalink() ?>">
            <div class="card shadow-sm">
              
              <div class="card-img-top" >
                <?php 
              if (has_post_thumbnail()){
                the_post_thumbnail( 'medium' );
              }           
              ?>

              </div>
            

              <div class="card-body">
                <!-- ajout des fonction native php pour dynamiser le titre , l'auteur du post , et la date  -->
                    <h5 class="card-title"><?php the_title(); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"> Auteur : <?php the_author() ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_date('Y-m-d') ?> </h6>
                            



                <p class="card-text">
                  <?php the_excerpt(  ); ?>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted"><?php the_category() ?></small>
                  
                </div>
              </div>
            </div>
          </a>
        </div>
<?php
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

?>



        
      </div>
    </div>
  </div>


  

  </div><!-- /.container -->


<?php get_footer() ?>