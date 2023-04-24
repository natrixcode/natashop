<div class="modal-body">
    <?php if (!empty($_SESSION['cart'])): ?>
    <div class="table-responsive cart-table">
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
                            <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                <tr>
                    <td>
                        <a href="product/<?= $item['slug'] ?>"><img src="<?= PATH . $item['img'] ?>" alt=""></a>
                    </td>
                        <td><a href="product/<?= $item['slug'] ?><?= $item['title'] ?>">Apple cinema</a></td>
                        <td><?= $item['qty'] ?></td>
                        <td><?= $item['price'] ?></td>
                </tr>
                <?php endforeach; ?>
                        </tbody>
        </table>
    </div>
    <?php else: ?>
        <h4 class="text-start">Empty cart</h4>
    <?php endif; ?>
</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger ripple" data-bs-dismiss="modal">Continue shopping</button>
                <?php if (!empty($_SESSION['cart'])): ?>
                <button type="button" class="btn btn-primary">Submit order</button>
                <button type="button" class="btn btn-danger">Clear cart</button>
                <?php endif; ?>
            </div>