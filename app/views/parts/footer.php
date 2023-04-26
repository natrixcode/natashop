<?php
use wfm\View;
/** @var $this View */
?>
<footer>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <h4><?php __('tpl_f_details'); ?></h4>
                    <ul class="list-unstyled">
                        <li><a href="#"><?php __('tpl_f_main'); ?></a></li>
                        <li><a href="#"><?php __('tpl_f_about_shop'); ?></a></li>
                        <li><a href="#"><?php __('tpl_f_pay_delivery'); ?></a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4><?php __('tpl_f_schedule'); ?></h4>
                    <ul class="list-unstyled">
                        <li><?php __('tpl_f_address'); ?></li>
                        <li><?php __('tpl_f_wdays'); ?></li>
                        <li><?php __('tpl_f_breaks'); ?></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4><?php __('tpl_f_contacts'); ?></h4>
                    <ul class="list-unstyled">
                        <li><a href="tel:5551234567">xxx-xxx-xx-xx</a></li>
                        <li><a href="tel:5551234567">xxx-xxx-xx-xx</a></li>
                        <li><a href="tel:5551234567">xxx-xxx-xx-xx</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4><?php __('tpl_f_socials'); ?></h4>
                    <div class="footer-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<button id="top">
    <i class="fas fa-angle-double-up"></i>
</button>

<div class="modal fade" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php __('tpl_cart_title'); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-cart-content">
                
            </div>
        </div>
    </div>
</div>


<!-- <?php $this->getDbLogs();?> -->
<script>
    const PATH = '<?= PATH ?>';
</script>
<script src="<?= PATH ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="<?= PATH ?>/public/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= PATH ?>/public/assets/js/main.js"></script>

</body>
</html>
