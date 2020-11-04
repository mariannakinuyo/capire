<?php get_header(); ?>



<section class="container-fluid">
  <div class="row bg-grey">
    <div class="col-md-6 offset-md-3">
      <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
    </div>
  </div>
</section>

<section class="container home mt-md-5">
  <div class="row">
    <div class="col-md-10 offset-md-1">

      <?php
        $rows = get_field('carousel_principal', 43);
        if( $rows ) {
      ?>
        <div class="carousel hero-slide" data-flickity='{ "freeScroll": true }'>
        <?php
          foreach( $rows as $row ) {
            $post_principal = $row['post_carousel_principal'];
            $title = get_the_title( $post_principal->ID );
            $link = get_permalink( $post_principal->ID );
            $thumb = get_the_post_thumbnail_url( $post_principal->ID, 'full');
            $categoria = get_the_category( $post_principal->ID )[0]->name ;
        ?>
          <div class="carousel-cell">
            <a href="<?php echo $link ?>">
              <div class="row">
                <div class="col-md-8">
                  <div class="bg-img img-hero-slide" style="background-image: url(<?php echo $thumb ?>)"></div>
                </div>
                <div class="col-md-4">
                  <p class="hero-slide-cat"><?php echo $categoria ?></p>
                  <h3><?php echo $title ?></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nec feugiat in fermentum posuere urna. Duis ultricies lacus sed</p>
                </div>
              </div>
            </a>
          </div>

        <?php
        wp_reset_postdata();
          }
        ?>
        </div>
      <?php
        }
      ?>

    </div>
  </div>
</section>



<section class="container-fluid bg-grey">
  <div class="container">
    <div class="row mt-5">
      <div class="col-12">
        <h3>Navegue por regiões</h3>
      </div>

      <div class="col-reg">
        <div class="box-reg">
          <div class="bg-img img-reg-home" style="background-image: url(https://via.placeholder.com/560x365)">
          <span class="cat-reg">categoria</span>
          </div>
          <span>categoria</span>
          <span>20/12/2020</span>
          <h5>titulo lorem ipsum dolor amet</h5>
        </div>
      </div>

      <div class="col-reg">
        <div class="box-reg">
          <div class="bg-img img-reg-home" style="background-image: url(https://via.placeholder.com/560x365)">
          <span class="cat-reg">categoria</span>
          </div>
          <span>categoria</span>
          <span>20/12/2020</span>
          <h5>titulo lorem ipsum dolor amet</h5>
        </div>
      </div>

      <div class="col-reg">
        <div class="box-reg">
          <div class="bg-img img-reg-home" style="background-image: url(https://via.placeholder.com/560x365)">
          <span class="cat-reg">categoria</span>
          </div>
          <span>categoria</span>
          <span>20/12/2020</span>
          <h5>titulo lorem ipsum dolor amet</h5>
        </div>
      </div>

      <div class="col-reg">
        <div class="box-reg">
          <div class="bg-img img-reg-home" style="background-image: url(https://via.placeholder.com/560x365)">
          <span class="cat-reg">categoria</span>
          </div>
          <span>categoria</span>
          <span>20/12/2020</span>
          <h5>titulo lorem ipsum dolor amet</h5>
        </div>
      </div>

      <div class="col-reg">
        <div class="box-reg">
          <div class="bg-img img-reg-home" style="background-image: url(https://via.placeholder.com/560x365)">
          <span class="cat-reg">categoria</span>
          </div>
          <span>categoria</span>
          <span>20/12/2020</span>
          <h5>titulo lorem ipsum dolor amet</h5>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="container">
  <div class="row">
    <div class="offset-md-1 col-md-10">
      <div class="row">

        <div class="col-md-4">
          <div class="box-cats-home">
            <span>categoria</span>
            <span>20/12/2020</span>
            <div class="bg-img img-cats-home" style="background-image: url(https://via.placeholder.com/560x365)"></div>
            <h4>titulo lorem ipsum dolor amet</h4>
            <p>Purus faucibus ornare suspendisse sed. Et netus et malesuada fames ac turpis egestas. Arcu vitae elementum.</p>
          </div>      
        </div>

        <div class="col-md-4">
          <div class="box-cats-home">
            <span>categoria</span>
            <span>20/12/2020</span>
            <div class="bg-img img-cats-home" style="background-image: url(https://via.placeholder.com/560x365)"></div>
            <h4>titulo lorem ipsum dolor amet</h4>
            <p>Purus faucibus ornare suspendisse sed. Et netus et malesuada fames ac turpis egestas. Arcu vitae elementum.</p>
          </div>      
        </div>

        <div class="col-md-4">
          <h5>LEIA MAIS</h5>
        
          <div class="more-home">
            <h4>Purus faucibus ornare suspendisse sed</h4>
          </div>
          <div class="more-home">
            <h4>Tortor consequat id porta nibh venenatis cras sed felis</h4>
          </div>
          <div class="more-home">
            <h4>Purus faucibus ornare suspendisse sed</h4>
          </div>
          <div class="more-home">
            <h4>Tortor consequat id porta nibh venenatis cras sed felis</h4>
          </div>
        </div>

        <div class="col-md-4">
          <div class="box-cats-home">
            <span>categoria</span>
            <span>20/12/2020</span>
            <div class="bg-img img-cats-home" style="background-image: url(https://via.placeholder.com/560x365)"></div>
            <h4>titulo lorem ipsum dolor amet</h4>
            <p>Purus faucibus ornare suspendisse sed. Et netus et malesuada fames ac turpis egestas. Arcu vitae elementum.</p>
          </div>      
        </div>

        <div class="col-md-4">
          <div class="box-cats-home">
            <span>categoria</span>
            <span>20/12/2020</span>
            <div class="bg-img img-cats-home" style="background-image: url(https://via.placeholder.com/560x365)"></div>
            <h4>titulo lorem ipsum dolor amet</h4>
            <p>Purus faucibus ornare suspendisse sed. Et netus et malesuada fames ac turpis egestas. Arcu vitae elementum.</p>
          </div>      
        </div>

        <div class="col-md-4">
          <div class="box-cats-home">
            <span>categoria</span>
            <span>20/12/2020</span>
            <div class="bg-img img-cats-home" style="background-image: url(https://via.placeholder.com/560x365)"></div>
            <h4>titulo lorem ipsum dolor amet</h4>
            <p>Purus faucibus ornare suspendisse sed. Et netus et malesuada fames ac turpis egestas. Arcu vitae elementum.</p>
          </div>      
        </div>


      </div>
    </div>
  </div>
</section>



<section class="container">
  <div class="row">
    <div class="offset-md-2 col-md-8">
      
      <h3>Assista</h3>

      <div class="carousel" data-flickity='{ "freeScroll": true }'>

        <div class="carousel-cell slide-video">
          <div class="bg-img slide-video-home" style="background-image: url(http://localhost:8000/wp-content/uploads/2020/10/architecture-buildings-city-fog-373965-scaled.jpg)"></div>
          <h3>titulo lorem lorem lorem</h3>
        </div>

        <div class="carousel-cell slide-video">
          <div class="bg-img slide-video-home" style="background-image: url(https://via.placeholder.com/560x365)"></div>
          <h3>titulo lorem lorem lorem</h3>
        </div>

      </div>


    </div>
  </div>
</section>

<section class="container mt-5">
  <div class="row">
    <div class="offset-md-1 col-md-10 bg-grey">
      <div class="newsletter-home">

      newsletter
      </div>
    </div>
  </div>
</section>

<section class="container-fluid bg-grey mt-5">
  <div class="row">
    <div class="offset-lg-3 col-lg-6">
        <h2>Sit amet massa vitae tortor faucibus ornare faucibus condimentum.</h2>
        <button>paypall</button>
    </div>
  </div>
</section>


<?php get_footer(); ?>
