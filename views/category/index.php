<!-- open .page-box -->
<section class="page-box p-top-50">
    <!-- open .contain -->
    <div class="contain">
        <h3><span><?= $catName ?></span></h3>

        <?php foreach($arr as $k => $v): ?>
            <article class="goods__item">
                <!-- open .goods__item--img -->
                <div class="goods__item--img">
                    <a href="#">
                        <img src="<?= wp_get_attachment_image_url($k) ?>" alt="" />
                    </a>
                </div>
                <!-- close .goods__item--img -->
                <!-- open .goods__item--info -->
                <div class="goods__item--info">
                    <!-- open .goods__item--line -->
                    <?php foreach($v as $p): ?>
                        <?php $post = get_post($p); ?>
                        <div class="goods__item--line">
                            <a href="<?= $post->guid ?>"><span id="title_<?= $post->ID ?>"><?= $post->post_title ?></span></a>
                            <!-- open .goods__item--info--options -->
                            <?php if ( get_post_meta($post->ID, 'size', true) ) : ?>
                            <div class="goods__item--info--options">
                                <small><?= get_post_meta($post->ID, 'container', true) ?></small>
                                <small><?= get_post_meta($post->ID, 'size', true) ?></small>
                            </div>
                            <?php endif ?>
                            <?php if ( get_post_meta($post->ID, 'format', true) ) : ?>
                            <div class="goods__item--info--options">
                                <small>Формат: </small>
                                <small><?= get_post_meta($post->ID, 'format', true) ?></small>
                            </div>
                            <?php endif ?>
                            <!-- close .goods__item--info--options -->
                            <!-- open .goods__item--price -->
                            <div class="goods__item--price">
                                <h4><span id="price_<?= $post->ID ?>"><?= get_post_meta($post->ID, 'price', true) ?></span> р.</h4>
                                <div class="goods__item--pricebox">
                                    <p><span id="count_<?= $post->ID ?>" class="count-prod">1</span> шт.</p>
                                    <!-- open .goods__item--pricebox--controls -->
                                    <div class="goods__item--pricebox--controls">
                                        <a href="#" class="plus">+</a>
                                        <a href="#" class="minus">-</a>
                                    </div>
                                    <!-- close .goods__item--pricebox--controls -->

                                </div>
                            </div>
                            <!-- close .goods__item--price -->

                            <a href="#" post_id="<?= $post->ID ?>" class="goods__item--tobasket add_to_basket">добавить в корзину</a>
                        </div>
                    <?php endforeach; ?>
                    <!-- close .goods__item--line -->
                </div>
                <!-- close .goods__item--info -->
            </article>
        <?php endforeach; ?>

    </div>
    <!-- close .contain -->
</section>
<!-- close .page-box -->