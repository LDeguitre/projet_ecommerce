<div class="featured">
    <h2>Avions</h2>
    <p>Pour voler vers d'autre cieux</p>
    <img src="img/homepage.jpg" >

</div>
<div class="recentlyadded content-wrapper">
    <h2>Produits récemment ajoutés</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
            <a href="index.php?controller=product&task=show&id=<?= $product['id_product'] ?>" class="product">
                <img src="img/<?=$product['picture']?>" width="200" height="200" alt="<?=$product['name']?>">
                <span class="name"><?=$product['name']?></span>
                <span class="price">
                <?=$product['price']?>&euro;
            </span>
            </a>
        <?php endforeach; ?>
    </div>
</div>