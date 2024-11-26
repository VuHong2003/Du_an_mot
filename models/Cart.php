<?php
require '../connect/connect.php';

class Cart extends connect
{
    public function getAllCart()
    {
        $sql = 'SELECT 
                cart_items.cart_id as cart_id,
                cart_items.quantity as quantity,
                products.name AS product_name,
                products.images AS product_image,
                products_variants.price AS variant_price, 
                products_variants.sale_price AS variant_sale_price,
                variant_weights.weight AS variant_weight_name
        FROM cart_items
            LEFT JOIN products ON cart_items.product_id = products.id
            LEFT JOIN products_variants ON products_variants.id = products.id
            LEFT JOIN variant_weights ON products_variants.variant_weight_id = variant_weights.id

        WHERE cart_items.user_id = ?
        ';

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute($_SESSION['user']['id']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addToCart($user_id, $product_id, $variant_id, $quantity)
    {
        $sql = 'INSERT INTO cart_items(user_id, product_id, variant_id, quantity) values(?,?,?,?)';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$user_id, $product_id, $variant_id, $quantity]);
    }
}
