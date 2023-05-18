<?php
/** @var $this \wfm\View */
/** @var $category array */
/** @var $products array */
/** @var $total int */
/** @var $pagination object */
/** @var $breadcrumbs string */
?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-2">
            <?= $breadcrumbs ?>
        </ol>
    </nav>
</div>

<div class="container py-3">
    <div class="row">

        <div class="col-lg-12 category-content">
            <h3 class="section-title"><?= $category['title'] ?></h3>

            <?php if (!empty($category['content'])): ?>
                <div class="category-desc">
                    <?= $category['content'] ?>
                </div>
                <hr>
            <?php endif; ?>

            <?php if ($pagination->countPages > 1 || count($products) > 1): ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="input-sort"><?php __('category_view_sort'); ?>:</label>
                            <select class="form-select" id="input-sort">
                                <option selected=""><?php __('category_view_sort_by_default'); ?></option>

                                <option value="sort=title_asc" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'title_asc') echo 'selected' ?>><?php __('category_view_sort_title_asc'); ?></option>

                                <option value="sort=title_desc" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'title_desc') echo 'selected' ?>><?php __('category_view_sort_title_desc'); ?></option>

                                <option value="sort=price_asc" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'price_asc') echo 'selected' ?>><?php __('category_view_sort_price_asc'); ?></option>

                                <option value="sort=price_desc" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'price_desc') echo 'selected' ?>><?php __('category_view_sort_price_desc'); ?></option>
                            </select>
                        </div>
                    </div>
                
            <?php endif; ?>


            <?php if ($pagination->countPages > 1 || count($products) > 1): ?>
            <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="input-sort"><?php __('category_view_sort_show'); ?>:</label>
                        <select class="form-select" id="input-pagination">
                        <option value="pagination=<?php echo $pagination->default_perpage; ?>" <?php if (!isset($_GET['pagination']) || $_GET['pagination'] == $pagination->default_perpage) {echo 'selected';} ?>>
                            <?php echo $pagination->default_perpage; ?></option>
                            <option value="pagination=15" <?php if (isset($_GET['pagination']) && $_GET['pagination'] == 15) { echo 'selected';} ?>>15</option>
                            <option value="pagination=25" <?php if (isset($_GET['pagination']) && $_GET['pagination'] == 25) { echo 'selected';} ?>>25</option>
                            <option value="pagination=50" <?php if (isset($_GET['pagination']) && $_GET['pagination'] == 50) { echo 'selected';} ?>>50</option>
                            <option value="pagination=75" <?php if (isset($_GET['pagination']) && $_GET['pagination'] == 75) { echo 'selected';} ?>>75</option>
                            <option value="pagination=100" <?php if (isset($_GET['pagination']) && $_GET['pagination'] == 100) { echo 'selected';} ?>>100</option>
                        </select>
                    </div>
                </div>
            </div>
            <?php endif; ?>
    </div>


            <div class="row">
                <?php if (!empty($products)): ?>
                    <?php $this->getPart('parts/products_loop', compact('products')); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <?= count($products) ?>
                                <?php __('tpl_total_pagination'); ?>
                                <?= $total ?>
                            </p>
                            <?php if ($pagination->countPages > 1): ?>
                                <?= $pagination ?>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php else: ?>
                    <p><?php __('category_view_no_products'); ?></p>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>
