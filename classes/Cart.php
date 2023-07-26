<?php
/**
 * Cart Class
 * User: Moussa Bane
 * Date: 17/10/2022
 * Time: 1:56 AM
 */
?>
<?php
$filePath = realpath(dirname(__FILE__));
include_once $filePath.'/../lib/Database.php';
include_once $filePath.'/../helpers/Formate.php';

    class Cart
    {
        private $db;
        private $fm;

        /**
         * Cart constructor.
         */
        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Formate();
        }

        /**
         * @param $quantity
         * @param $id
         */
        // public function addToCart($quantity, $id)
        // {
        //     $sid = session_id();
        //     $result = $this->db->select("SELECT * FROM ecom_product WHERE proid = '$id' ");
        //     $product = $result->fetch_assoc();

        //     $proName = $product['proname'];
        //     $price   = $product['price'];
        //     $image   = $product['image'];

        //     $check = $this->db->select("SELECT * FROM ecom_cart WHERE proid = '$id' AND sid = '$sid' ");

        //     if ($check)
        //     {
        //         echo "<div class='alert alert-danger alert-dismissable'>
        //                   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        //                   <strong>Attention !</strong> Le produit est déjà ajouté.
        //               </div>";
        //     }
        //     else
        //     {
        //         $insert = $this->db->insert("INSERT INTO ecom_cart(sid, proid, proname, price, quantity, image) VALUES ('$sid', '$id','$proName','$price','$quantity','$image')");

        //         if ($insert)
        //         {
        //             echo "<script>window.location = 'cart.php'</script>";
        //         }
        //         else
        //         {
        //             echo "<script>window.location = 'single.php'</script>";
        //         }
        //     }
        // }
        //         public function addToCart($quantity, $id)
        // {
        // // Démarrer la session session_start(); 

        //     // Vérifier si l'utilisateur est connecté
        //     if (isset($_SESSION['user_id'])) {
        //         // Si l'utilisateur est connecté, appelez la fonction mergeCarts pour transférer les produits du panier temporaire vers le panier associé à son compte
        //         $this->mergeCarts($_SESSION['user_id']);
        //     }

        //     // Les étapes suivantes restent les mêmes que votre fonction d'origine
        //     $sid = session_id();
        //     $result = $this->db->select("SELECT * FROM ecom_product WHERE proid = '$id' ");
        //     $product = $result->fetch_assoc();

        //     $proName = $product['proname'];
        //     $price   = $product['price'];
        //     $image   = $product['image'];

        //     $check = $this->db->select("SELECT * FROM ecom_cart WHERE proid = '$id' AND sid = '$sid' ");

        //     if ($check)
        //     {
        //         echo "<div class='alert alert-danger alert-dismissable'>
        //                 <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        //                 <strong>Alerte !</strong> Le produit est déjà ajouté.
        //             </div>";
        //     }
        //     else
        //     {
        //         $insert = $this->db->insert("INSERT INTO ecom_cart(sid, proid, proname, price, quantity, image) VALUES ('$sid', '$id','$proName','$price','$quantity','$image')");

        //         if ($insert)
        //         {
        //             echo "<script>window.location = 'cart.php'</script>";
        //         }
        //         else
        //         {
        //             echo "<script>window.location = 'single.php'</script>";
        //         }
        //     }
        // }

        // Fonction pour nettoyer le panier temporaire lorsque de nouveaux utilisateurs se connectent
        public function clearTempCart()
        {
            if (!isset($_SESSION['temp_cart'])) {
                $_SESSION['temp_cart'] = array();
            }
        }

        // Appeler la fonction clearTempCart() au début de chaque page où vous gérez les utilisateurs non connectés


    public function addToCart($quantity, $id)
    {
        session_start(); // Démarrer la session

        // Vérifier si le panier temporaire existe et s'il est vide depuis plus de 4 heures
        if (isset($_SESSION['temp_cart']) && isset($_SESSION['last_activity'])) {
            $inactiveDuration = 4 * 60 * 60; // 4 heures en secondes
            $currentTime = time();
            $lastActivityTime = $_SESSION['last_activity'];

            // Vider le panier si le temps inactif dépasse 4 heures
            if (($currentTime - $lastActivityTime) > $inactiveDuration) {
                unset($_SESSION['temp_cart']);
            }
        }

    // Mettre à jour le timestamp de dernière activité
    $_SESSION['last_activity'] = time();

    // Reste du code pour ajouter le produit au panier temporaire, comme dans la fonction d'origine
    $sid = session_id();
    $result = $this->db->select("SELECT * FROM ecom_product WHERE proid = '$id' ");
    $product = $result->fetch_assoc();

    $proName = $product['proname'];
    $price   = $product['price'];
    $image   = $product['image'];

    $check = $this->db->select("SELECT * FROM ecom_cart WHERE proid = '$id' AND sid = '$sid' ");

    if ($check) {
        echo "<div class='alert alert-danger alert-dismissable'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>Attention !</strong> Le produit est déjà ajouté.
              </div>";
    } else {
        $insert = $this->db->insert("INSERT INTO ecom_cart(sid, proid, proname, price, quantity, image) VALUES ('$sid', '$id','$proName','$price','$quantity','$image')");

        if ($insert) {
            echo "<script>window.location = 'cart.php'</script>";
        } else {
            echo "<script>window.location = 'single.php'</script>";
        }
    }
}


// Transférer le panier temporaire vers la table ecom_cart de l'utilisateur connecté
public function mergeCarts($sid)
{
    // Récupérer les produits du panier temporaire
    if (isset($_SESSION['temp_cart'])) {
        $tempCartProducts = $_SESSION['temp_cart'];

        // Parcours des produits du panier temporaire et insertion dans la table ecom_cart associée à l'ID de l'utilisateur connecté
        foreach ($tempCartProducts as $product) {
            $quantity = $product['quantity'];
            $id = $product['id'];
            $name = $product['name'];
            $price = $product['price'];
            $image = $product['image'];

            // Utilisez une requête INSERT pour insérer le produit dans la table ecom_cart associée à l'ID de l'utilisateur connecté
            $insertQuery = "INSERT INTO ecom_cart(sid, proid, proname, price, quantity, image) VALUES ('$sid', '$id', '$name', '$price', '$quantity', '$image')";

            // Exécutez la requête INSERT
            $this->db->insert($insertQuery);
        }

        // Une fois que les produits ont été transférés avec succès, vous pouvez vider le panier temporaire
        unset($_SESSION['temp_cart']);
    }
}



       

        public function clearCartAfterLogout()
        {
            session_start(); // Démarrer la session si elle n'a pas été démarrée ailleurs

            // Supprimer la variable de session "cart" pour vider le panier
            unset($_SESSION['cart']);
        }

        

        public function clearCartForNewUser()
        {
            // session_start(); // Démarrer la session si elle n'a pas été démarrée ailleurs

            // Vérifier si l'utilisateur a une session existante
            if (session_id() === '') {
                // Nouvel utilisateur sans session, vider le panier
                $this->clearCartAfterLogout();
            }
        }

        // Ajouter un produit temporairement au panier
        function addToCartTemp($quantity, $id, $name, $price, $image)
        {
            if (!isset($_SESSION['temp_cart'])) {
                $_SESSION['temp_cart'] = array();
            }

            $product = array(
                'quantity' => $quantity,
                'id' => $id,
                'name' => $name,
                'price' => $price,
                'image' => $image
            );

            // Ajouter le produit au panier temporaire
            $_SESSION['temp_cart'][] = $product;
        }

        




        /**
         * @return bool
         */
        public function allProductBySessionId()
        {
            // session_start(); // Démarrer la session si elle n'a pas été démarrée ailleurs

            // Vérifier si l'utilisateur est déconnecté (session ID vide)
            if (session_id() === '') {
                $this->clearCartAfterLogout();
                return null; // Si l'utilisateur est déconnecté, retourner null pour indiquer un panier vide
            }
        
            $session = session_id();
            return $this->db->select("SELECT * FROM ecom_cart WHERE sid = '$session' ");
        }

        /**
         * @param $id
         */
        public function delCartById($id)
        {
            $this->db->delete("DELETE FROM ecom_cart WHERE cartid = '$id' ");

            echo "<div class='alert alert-success alert-dismissable'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success! </strong> Supprimer avec succès.";
            echo "</div>";
        }

        public function updateQuantity($cartId, $quantity)
        {
            $session = session_id();
            $this->db->update("UPDATE ecom_cart SET quantity = '$quantity' WHERE sid = '$session' AND cartid = '$cartId' ");

            echo "<div class='alert alert-success alert-dismissable'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success! </strong> Modifier avec succès.";
            echo "</div>";
        }

        /**
         * @return bool
         */
        public function allProduct()
        {
            $session = session_id();
            return $this->db->select("SELECT * FROM ecom_cart WHERE sid = '$session' LIMIT 8");
        }

        /**
         * @return bool
         */
        public function deleteCart()
        {
            $session = session_id();
            $this->db->delete("DELETE FROM ecom_cart WHERE sid = '$session'");
        }

//         public function clearCartForNewUser()
// {
//     session_start();
//     session_unset(); // Supprime toutes les variables de session
//     session_destroy(); // Détruit la session complètement
// }


        /**
         * @param $userId
         * @return bool
         */
        public function getOrderedProductByUserId($userId)
        {
            return $this->db->select("SELECT * FROM ecom_customer_order WHERE customerid = '$userId' ");
        }

        public function removeOrderedProductById($id)
        {
            $this->db->delete("DELETE FROM ecom_customer_order WHERE id = '$id' ");
        }
    }//Main Class
?>