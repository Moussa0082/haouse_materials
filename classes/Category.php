<?php
/**
 * Category Class
 * Created by PhpStorm.
 * User: Moussa Bane
 * Date: 17/10/2022
 * Time: 12:10 AM
 */
?>
<?php
$filePath = realpath(dirname(__FILE__));
include_once $filePath.'/../lib/Database.php';
include_once $filePath.'/../helpers/Formate.php';

    class Category
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Formate();
        }

        /**
         * @param $catagory
         */
        public function addCategory($catagory)
        {
            if (empty($catagory))
            {
                echo "<div class='alert alert-danger alert-dismissable'>
                          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                          <strong>Warning !</strong> Vueiller remplir ce champ.
                      </div>";
            }
            else
            {
                $category = $this->fm->validation($catagory);
                $catagory = mysqli_real_escape_string($this->db->link, $category);

                $query = "INSERT INTO ecom_category(catname) VALUES ('$catagory')";
                $this->db->insert($query);

                echo "<div class='alert alert-success alert-dismissable'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success! </strong>"; echo $catagory; echo " Inserer succès.";
                echo "</div>";
            }
        }

        /**
         * @return bool
         */
        public function allCategory()
        {
            $query = "SELECT * FROM ecom_category ORDER BY id";
            return $this->db->select($query);
        }

        /**
         * @param $id
         * @return bool
         */
        public function categoryById($id)
        {
            $query = "SELECT * FROM ecom_category WHERE id = '$id'";
            return $this->db->select($query);
        }

        public function updateCategory($id, $value)
        {
            if (empty($value))
            {
                echo "<div class='alert alert-danger alert-dismissable'>
                          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                          <strong>Warning !</strong> Vueiller remplir ce champ.
                      </div>";
            }
            else
            {
                $value = $this->fm->validation($value);
                $value = mysqli_real_escape_string($this->db->link, $value);


                $updateQuery = "UPDATE ecom_category SET catname = '$value' WHERE id = '$id'";
                $this->db->update($updateQuery);
                echo "<div class='alert alert-success alert-dismissable'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success! </strong>"; echo $value; echo " Modifier avec succès.";
                echo "</div>";
            }
        }


        public function deleteCategoryById($id)
        {
            $this->db->delete("DELETE FROM ecom_category WHERE id = '$id'");
            echo "<div class='alert alert-success alert-dismissable'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success! </strong> Supprimer avec succès.";
            echo "</div>";
        }

    }//Main Class
?>