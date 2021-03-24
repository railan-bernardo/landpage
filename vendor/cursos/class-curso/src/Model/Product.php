<?php

namespace Curso\Model;

use \Curso\DB\Sql;
use \Curso\Model;

class Product extends Model{

    public static function listProduct()
    {
        $sql = new Sql();

       return  $sql->select("SELECT * FROM tb_services ORDER BY dtregister DESC");
    }

    public function save()
    {
  
    $sql = new Sql();
  
    $results = $sql->select('CALL sp_services_save(:id_stock, :name_product, :product_brand, :product_model, :nr_imei)', [
      ":id_stock"=>$this->getid_stock(),
      ":name_product"=>$this->getname_product(),
      ":product_brand"=>$this->getproduct_brand(),
      ":product_model"=>$this->getproduct_model(),
      ":nr_imei"=>$this->getnr_imei()

  ]);
  
    $this->setData($results[0]);
  
    }

}

?>