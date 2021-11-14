<?php get_header(); ?>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php bloginfo('template_directory') ?>/images/cook5.jpeg" width="500px" height="500px"  alt="Target Web">

      
      </div>
      <div class="carousel-item">
        <img src="<?php bloginfo('template_directory') ?>/images/cook4.jpeg" width="500px" height="500px"  alt="Target Web">

        
      </div>
      <div class="carousel-item">
        <img src="<?php bloginfo('template_directory') ?>/images/cook3.jpeg" width="500px" height="500px"  alt="Target Web">

     
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> 
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">



<?php
// Ici j'ai utilisé une requête personnalisée pour renvoyer les types de posts (articles)
 $query = new WP_Query( array( 'post_type' => 'recette' ) );
if ( $query->have_posts()) : 
    while ( $query->have_posts() ) : $query->the_post();
?>
        <div class="col">

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
                      <h6 class="card-subtitle mb-2 text-muted"> Auteur  : <?php the_author() ?></h6>
                       <h6 class="card-subtitle mb-2 text-muted"><?php the_date('Y-m-d') ?> </h6>
                          

              <p class="card-text">
                <?php the_excerpt(); ?>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="<?php the_permalink() ?>" class="btn btn-sm btn-outline-secondary">Voir</a>
                 
                </div>
                <small class="text-muted"><?php the_category() ?></small>
                
              </div>
            </div>
          </div>

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


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
<img src="<?php bloginfo('template_directory') ?>/images/cuisine_japon.jpg" width="500"   alt="Target Web">
      </div>
    </div>

    <hr class="featurette-divider">

   

  

   

   

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


<?php get_footer() ?>