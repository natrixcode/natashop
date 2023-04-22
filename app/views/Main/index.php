
<?php 
    if (!empty($slides)): 
?>

<?php debug($_SESSION); ?>
<?php 

if (!empty($products)):

?>

    <div class="container-fluid my-carousel">

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"
             data-bs-interval="5000">
            <div class="carousel-indicators">
                <?php for ($i = 0; $i < count($slides); $i++): ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" <?php if ($i == 0) echo 'class="active"' ?> aria-current="true" aria-label="Slide <?= $i ?>"></button>
                <?php endfor; ?>
            </div>
            <div class="carousel-inner">
                <?php $i = 1; foreach ($slides as $slide): ?>
                <div class="carousel-item <?php if ($i == 1) echo 'active' ?>">
                    <img src="<?= $slide->img ?>" class="d-block w-100" alt="">
                </div>
                <?php $i++; endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

<?php endif; ?>

<section class="featured-products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title"><?php __('main_index_featured_products'); ?></h3>
            </div>

<!-- Products -->
              <?php $this->getPart('parts/products_loop', compact('products'));?>

</div>
    </div>
</section> 
<?php endif; ?>

<!-- 
<div class="card">
  <div class="tools">
    <div class="circle">
      <span class="red box"></span>
    </div>
    <div class="circle">
      <span class="yellow box"></span>
    </div>
    <div class="circle">
      <span class="green box"></span>
    </div>
  </div>
  <div class="card__content">
  <div class="product-tumb">
        <a href="product.html"><img src="/assets/img/products/iphone14.png" alt=""></a>
    </div>
    <div class="card__content">
    <h4><a href="product.html">Product</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum! 2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
    </div>
  </div>
</div>





<div class="card">
  <div class="tools">
    <div class="circle">
      <span class="red box"></span>
    </div>
    <div class="circle">
      <span class="yellow box"></span>
    </div>
    <div class="circle">
      <span class="green box"></span>
    </div>
  </div>
  <div class="card__content">
  <div class="product-tumb">
        <a href="product.html"><img src="/assets/img/products/airpods1.png" alt=""></a>
    </div>
    <div class="card__content">
    <h4><a href="product.html">Product</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum! 2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
    </div>
  </div>
</div>






<div class="card mt-4">
  <div class="tools">
    <div class="circle">
      <span class="red box"></span>
    </div>
    <div class="circle">
      <span class="yellow box"></span>
    </div>
    <div class="circle">
      <span class="green box"></span>
    </div>
  </div>
  <div class="card__content">
  <div class="product-tumb">
        <a href="product.html"><img src="/assets/img/products/airpodsmax1.png" alt=""></a>
    </div>
    <div class="card__content">
    <h4><a href="product.html">Product</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum! 2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
    </div>
  </div>
</div>





<div class="card mt-4">
  <div class="tools">
    <div class="circle">
      <span class="red box"></span>
    </div>
    <div class="circle">
      <span class="yellow box"></span>
    </div>
    <div class="circle">
      <span class="green box"></span>
    </div>
  </div>
  <div class="card__content">
  <div class="product-tumb">
        <a href="product.html"><img src="/assets/img/products/airpodsmax2.png" alt=""></a>
    </div>
    <div class="card__content">
    <h4><a href="product.html">Product</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum! 2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
    </div>
  </div>
</div>




<div class="card mt-4">
  <div class="tools">
    <div class="circle">
      <span class="red box"></span>
    </div>
    <div class="circle">
      <span class="yellow box"></span>
    </div>
    <div class="circle">
      <span class="green box"></span>
    </div>
  </div>
  <div class="card__content">
  <div class="product-tumb">
        <a href="product.html"><img src="/assets/img/products/macbook1.png" alt=""></a>
    </div>
    <div class="card__content">
    <h4><a href="product.html">Product</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum! 2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
    </div>
  </div>
</div>
-->


<!-- Cards ended -->



<!-- <section class="services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">Our advantages</h3>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <p class="text-center"><i class="fas fa-shipping-fast"></i></p>
                    <p>Title</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <p class="text-center"><i class="fas fa-cubes"></i></p>
                    <p>Title</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <p class="text-center"><i class="fas fa-hand-holding-usd"></i></p>
                    <p>Title</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <p class="text-center"><i class="fas fa-user-cog"></i></p>
                    <p>Title</p>
                </div>
            </div>

        </div>
    </div>
</section> -->
