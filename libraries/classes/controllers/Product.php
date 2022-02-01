<?php

namespace Controllers;

class Product extends Controller
{
    protected $modelName = "product";

    public function index()
    {

        $products = $this->model->findAll('createAt DESC');
        $total_products = count($products);
        $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;


        $pageTitle = "Accueil";
        \Renderer::render("products/index", compact('products', 'pageTitle', 'total_products', 'num_items_in_cart' ));
    }

    public function show()
    {
        /**
         * 1. Récupération du param "id" et vérification de celui-ci
         */
        // On part du principe qu'on ne possède pas de param "id"
        $id_product = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

        // On peut désormais décider : erreur ou pas ?!
        if (!$id_product) {
            die("Vous devez préciser un paramètre `id` dans l'URL !");
        }

        /**
         * 3. Récupération de l'article en question
         * On va ici utiliser une requête préparée car elle inclue une variable qui provient de l'utilisateur : Ne faites
         * jamais confiance à ce connard d'utilisateur ! :D
         */
        $products = $this->model->find($id_product);

        /**
         * 5. On affiche 
         */
        $pageTitle = $products['name'];

        \Renderer::render("products/show", compact('pageTitle', 'products', 'id_product', 'num_items_in_cart'));
    }

    public function recently_added()
    {
        $query = $this->pdo->prepare('SELECT * FROM product ORDER BY createAt DESC LIMIT 4');
        $query->execute();
        $recently_added_products = $query->fetchAll();
        $pageTitle = "Accueil";
        $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

        \Renderer::render("products/home", compact('pageTitle', 'recently_added_products', 'num_items_in_cart'));

    }

    public function sorted()
    {


        $id_category = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $products = $this->model->sort($id_category);
        $total_products = count($products);
        $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

        /**
         * 2. Affichage
         */
        $pageTitle = "Accueil";
        \Renderer::render("products/index", compact('products', 'pageTitle', 'total_products', 'num_items_in_cart' ));
    }

    public function searched()
    {
        $productName = filter_input(INPUT_GET, 'name', FILTER_VALIDATE_INT);
        $products = $this->model->search();
        $total_products = 1;
        if($products == ""){
            $total_products = 0;
            exit;
        }

        $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

        /**
         * 2. Affichage
         */
        $pageTitle = "Accueil";
        \Renderer::render("products/index", compact('products', 'pageTitle', 'total_products', 'num_items_in_cart' ));
    }


}
