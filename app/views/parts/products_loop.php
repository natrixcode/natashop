<?php

/** @var $products array */

?>


<?php foreach ($products as $product): ?>     
    <div class="card pt-4">
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
        <a href="product/<?= $product['slug']?>"><img src="<?= $product['img'] ?>" alt=""></a>
    </div>
    <div class="card__content mb-4">
    <h4><a href="product/<?= $product['slug']?>"><?= $product['title']?></a></h4>
        <p><?= $product['exerpt']?></p>
        <div class="product-bottom-details d-flex justify-content-between">
                    <div class="product-price">
                        <?php if ($product['old_price']): ?>
                            <small>$<?= $product['old_price'] ?></small>
                        <?php endif; ?>
                        $<?= $product['price'] ?></div>
                    <div class="product-links">
                        <a href="#"><i class="fas fa-shopping-cart"></i></a>
                        <a href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>

    </div>
  </div>
</div>
<?php endforeach; ?>