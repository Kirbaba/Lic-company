<section class="products">
    <!-- open .block-title -->
    <h2 class="block_title"><span>ПРОДУКЦИЯ</span></h2>
    <!-- close .block-title -->
    <!-- open .contain -->
    <div class="contain">
        <!-- open .products__box -->
        <div class="products__box">
            <?php foreach($list as $l): ?>
            <!-- open .products__item -->
            <div class="products__item">
                <!-- open .products__item--img -->
                <div class="products__item--img">
                    <img src="<?= z_taxonomy_image_url($l->term_id) ?>" alt="" />
                </div>
                <!-- close .products__item--img -->
                <!-- open .products__item--desc -->
                <div class="products__item--desc">
                    <p><?= $l->name ?></p>
                    <a href="/menu/<?= $l->category_nicename ?>">подробнее</a>
                </div>
                <!-- close .products__item--desc -->
            </div>
            <!-- close .products__item -->
            <?php endforeach; ?>
        </div>
        <!-- close .products__box -->
    </div>
    <!-- close .contain -->
</section>