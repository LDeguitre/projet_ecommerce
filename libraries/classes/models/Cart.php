<?php

namespace Models;

class Cart extends Model
{
    public function show_cart()
    {
        $products = $this->model->product_in_cart();
        $products_in_cart = $_SESSION['cart'] ?? array();
        $subtotal = 0.00;
        $pageTitle = "Panier";
        $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

        foreach ($products as $product) {
            $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id_product']];
        }
        \Renderer::render("user/cart", compact('pageTitle', 'products', 'subtotal', 'products_in_cart', 'num_items_in_cart'));
    }

    public function product_in_cart(): array
    {
        $products_in_cart = $_SESSION['cart'] ?? array();
        $products = array();
        // If there are products in cart
        if ($products_in_cart) {
            // There are products in the cart so we need to select those products from the database
            // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
            $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
            $query = $this->pdo->prepare('SELECT * FROM product WHERE id_product IN (' . $array_to_question_marks . ')');
            // We only need the array keys, not the values, the keys are the id's of the products
            $query->execute(array_keys($products_in_cart));
            // Fetch the products from the database and return the result as an Array
            $products = $query->fetchAll();
        }
        return $products;
    }
}