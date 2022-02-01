<div class="product content-wrapper">
<img src="img/<?=$products['picture']?>" width="500" height="500" alt="<?=$products['name']?>">
<div>
    <h1 class="name"><?=$products['name']?></h1>
    <span class="price">
            <?=$products['price']?>&euro;
        </span>
    <form action="index.php?controller=user&task=add_to_cart&id=<?= $products["id_product"] ?>" method="post">
        <input type="number" name="quantity" value="1" min="1" max="<?=$products['stock']?>">
        <input type="submit" value="Ajouter au panier">
    </form>
    <div class="description">
        <?=$products['description']?>
    </div>
</div>
</div>

