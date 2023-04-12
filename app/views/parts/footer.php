<?php
use wfm\View;
/** @var $this View */
?>
<footer>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <h4>Details</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Main</a></li>
                        <li><a href="#">About shop</a></li>
                        <li><a href="#">Payment & delivery</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4>Work schedule</h4>
                    <ul class="list-unstyled">
                        <li>Fulton St.</li>
                        <li>Mon-Wed: 9:00 - 18:00</li>
                        <li>Without breaks</li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4>Contacts</h4>
                    <ul class="list-unstyled">
                        <li><a href="tel:5551234567">xxx-xxx-xx-xx</a></li>
                        <li><a href="tel:5551234567">xxx-xxx-xx-xx</a></li>
                        <li><a href="tel:5551234567">xxx-xxx-xx-xx</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4>Social medias</h4>
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
                <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table text-start">
                    <thead>
                    <tr>
                        <th scope="col">Photos</th>
                        <th scope="col">Products</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <a href="#"><img src="<?= PATH ?>/assets/img/products/apple_cinema_30.jpg" alt=""></a>
                        </td>
                        <td><a href="#">Apple cinema</a></td>
                        <td>1</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#"><img src="<?= PATH ?>/assets/img/products/canon_eos_5d_1.jpg" alt=""></a>
                        </td>
                        <td><a href="#">Canon EOS</a></td>
                        <td>1</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#"><img src="<?= PATH ?>/assets/img/products/hp_1.jpg" alt=""></a>
                        </td>
                        <td><a href="#">HP</a></td>
                        <td>1</td>
                        <td>100</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger ripple" data-bs-dismiss="modal">Continue shopping</button>
                <button type="button" class="btn btn-primary">Submit order</button>
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
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/main.js"></script>

</body>
</html>
