<div class="cart content-wrapper">
    <h1>Panier</h1>
    <form action="index.php?controller=user&task=update" method="post">
        <table>
            <thead>
            <tr>
                <td colspan="2">Produit</td>
                <td>Prix</td>
                <td>Quantité</td>
                <td>Total</td>
            </tr>
            </thead>
            <tbody>
            <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">Votre panier est vide</td>
                </tr>
            <?php else: ?>
                <?php foreach ($products as $product): ?> // Boucle qui affiche tout les articles présent dans le panier
                    <tr>
                        <td class="img">
                            <a href="index.php?controller=product&task=show&id=<?=$product['id_product']?>">
                                <img src="img/<?=$product['picture']?>" width="50" height="50" alt="<?=$product['name']?>">
                            </a>

                        </td>
                        <td>
                            <a href="index.php?controller=product&task=show&id=<?=$product['id_product']?>"><?=$product['name']?></a>
                            <br>
                            <a href="index.php?controller=user&task=remove&id=<?=$product['id_product']?>" class="remove">Supprimer</a>
                        </td>
                        <td class="price"><?=$product['price']?>&euro;</td>
                        <td class="quantity">
                            <input type="number" name="quantity-<?=$product['id_product']?>" value="<?=$products_in_cart[$product['id_product']]?>" min="1" max="<?=$product['stock']?>" placeholder="Quantité" required>
                        </td>
                        <td class="price"><?=$product['price'] * $products_in_cart[$product['id_product']]?>&euro;</td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Total</span>
            <span class="price"><?=$subtotal?>&euro;</span>
        </div>
        <div class="buttons">
            <input type="submit" value="Mettre à jour" name="update">
            <input type="submit" value="Commander" name="order">
        </div>
    </form>
</div>
