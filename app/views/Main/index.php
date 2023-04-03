<?php

use wfm\Controller;

?>

<!-- 
<div class="intro">
    <img src="<?php echo PATH ?>/public/assets/images/1.jpg" alt="">
</div> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans&display=swap');

    body {
        background-color: #212121;
        color: #f1f1f1;
        font-family: "DM Sans";
    }
    .card {
  width: 190px;
  height: 274px;
  background: white;
  padding: .4em;
  border-radius: 6px;
}

.card-image {
  background-color: rgb(236, 236, 236);
  width: 100%;
  height: 60%;
  border-radius: 6px 6px 0 0;
}

img {
    width: 100%;
    height: 100%;
    border-radius: 6px 6px 0 0;
}

.card-image:hover {
  transform: scale(0.98);
}

.category {
  text-transform: uppercase;
  font-size: 0.7em;
  font-weight: 600;
  color: rgb(63, 121, 230);
  padding: 10px 7px 0;
}

.category:hover {
  cursor: pointer;
}

.heading {
  font-weight: 600;
  color: rgb(88, 87, 87);
  padding: 7px;
}

.price {
  font-weight: 600;
  color: rgb(63, 121, 230);
  padding: 7px;
}

.heading:hover {
  cursor: pointer;
}

.author {
  color: gray;
  font-weight: 400;
  font-size: 11px;
  padding-top: 20px;
}

.name {
  font-weight: 600;
}

.name:hover {
  cursor: pointer;
}
    </style>
<section>
<div class="container">
        <div class="col d-flex justify-content-center mt-3">
            <h2 class="section-title">New products</h2>
        </div>
        <div class="row justify-content-center" style="gap: 4%;">
        <?php
        for ($i=0; $i<10; $i++): ?>

        <div class="card mt-4">
        <div class="card-image"><img src="/public/assets/images/product1.webp"></div>
        <div class="category"> Product </div>
        <div class="heading"> Product description </div>
        <div class="price"> $10.99 </div>
</div>
        <?php endfor ?>
    </div><!-- /row -->
</div><!-- /container -->
</section>