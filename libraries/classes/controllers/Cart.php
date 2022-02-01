<?php

namespace Controllers;

class Cart extends Controller
{

    protected $modelName = "cart";

    /**
     * Ajoute un produit du panier
     *
     * @return void
     */

    public function add()
    {
        $id_product = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); // Récupération de l'id dans l'url
        $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_FLOAT); // Récupération de la quantité

        if($id_product && $quantity > 0)
        {
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) { // Produit dans le panier ?
                if (array_key_exists($id_product, $_SESSION['cart'])) {

                    // Le produit est déjà dans le panier, mise à jour la quantité
                    $_SESSION['cart'][$id_product] += $quantity;
                } else {

                    // Le produit n'est pas dans le panier, ajout du produit au panier
                    $_SESSION['cart'][$id_product] = $quantity;
                }
            } else {
                // Il n'y a aucun produit dans le panier, création d'un tableau ayant pour clef valeur l'id du produit et sa quantité
                // Le tableau est sauvegardé dans la session
                $_SESSION['cart'] = array($id_product => $quantity);
            }
        }
        // Affichage du panier actualiser
        $this->model->show_cart();
    }

    /**
     * Supprime un produit du panier
     *
     * @return void
     */

    public function remove() : void
    {
        // Vérfie si l'id du produit à supprimer est bien dans le panier
        if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['id']])) {
            // Supprime le produit du panier
            unset($_SESSION['cart'][$_GET['id']]);
        }
        // Affichage du panier actualiser
        $this->show_cart();
    }

    /**
     * Mets à jour la quantité d'un ou plusieurs produit dans le panier
     *
     * @return void
     */

    public function update()
    {

        if (isset($_POST['update']) && isset($_SESSION['cart']) ) {
            // Loop through the post data so we can update the quantities for every product in cart
            foreach ($_POST as $k => $v) {
                if (strpos($k, 'quantity') !== false && is_numeric($v)) {
                    $id = str_replace('quantity-', '', $k);
                    $quantity = (int)$v;
                    // Always do checks and validation
                    if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                        // Update new quantity
                        $_SESSION['cart'][$id] = $quantity;
                    }
                }
            }
            $this->show_cart();
            die;
        }

        if(isset($_POST['order']) && isset($_SESSION['logged_in']))
        {
            $pageTitle = "Passer commande";
            \Renderer::render("user/order", compact('pageTitle'));
        } else {
            $_SESSION['order'] = true;
            \Http::redirect("index.php?controller=user&task=open&path=user/login&pageTitle=Connexion");
        }

        // Update product quantities in cart if the user clicks the "Update" button on the shopping cart page

    }




}