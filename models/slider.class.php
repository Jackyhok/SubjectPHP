<?php 

    require_once("/database/db.class.php");

    class Category{
        public $cateID;
        public $categoryName;

        public function __construct($cate_name)
        {
            # code...
            $this->categoryName = $cate_name;
        }

        public static function list_category()
        {
            # code...
            $db  = new Db();
            $sql = "SELECT * FROM category";
            $result = $db->select_to_array($sql);
            return $result;
        }
    }

?>