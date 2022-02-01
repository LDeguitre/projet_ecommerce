

<div class="products content-wrapper">
    <h1>Produits</h1>
    <br>

    <div class="container horizontal">
        <form  id= "searchbox" method="post" action="index.php?controller=product&task=searched&name=<?$products['name']?>">
            <input style="height:30px;" name= "search" type= "text"  size= "25" placeholder= "rechercher... " />
            <input class= "button-submit" type="submit" value="" >
        </form>
        <div class="contenu">
            <a class="Avion" href="index.php?controller=product&task=sorted&id=1">Avion</a>
        </div>
        <div class="contenu">
            <a class="Hydravion" href="index.php?controller=product&task=sorted&id=3">Hydravion</a>
        </div>
        <div class="contenu">
            <a class="Helicopter" href="index.php?controller=product&task=sorted&id=2">Helicopter</a>
        </div>
        <div class="contenu">
            <a class="Drone" href="index.php?controller=product&task=sorted&id=4">Drone</a>
        </div>




    </div>
    <br>
    <br>



    <p><?=$total_products?> Produits</p>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
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


