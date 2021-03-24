<?php

namespace Curso\Model;

use \Curso\DB\Sql;
use \Curso\Model;

class Stock extends Model {

    public function listStock()
    {
        $sql = new Sql();

       return $sql->select("SELECT * FROM tb_stock ORDER BY dtregister DESC");
    }


    public function save()
    {
        $sql = new Sql();

        $results = $sql->select("CALL sp_stock_save(:id_stock, :service_name, :service_price, :supplier_price, :cost_price,
        :product_compatibility, :amount_qtd, :image_a, :image_b)",[
            ":id_stock"=>$this->getid_stock(),
            ":service_name"=>$this->getservice_name(),
            ":service_price"=>$this->getservice_price(),
            ":supplier_price"=>$this->getsupplier_price(),
            ":cost_price"=>$this->getcost_price(),
            ":product_compatibility"=>$this->getproduct_compatibility(),
            ":amount_qtd"=>$this->getamount_qtd(),
            ":image_a"=>$this->getimage_a(),
            ":image_b"=>$this->getimage_b()
        ]);

        $this->setData($results[0]);
    }

    public function get($id)
    {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_stock WHERE id_stock = :id_stock",[
            ":id_stock"=>$id
        ]);

        $this->setData($results[0]);
    }

    public function delete()
    {
        $sql = new Sql();
  
        $sql->query("CALL sp_stock_delete(:id_stock)",[
            ":id_stock"=>$this->getid_stock()
        ]);
    }

    public function setPhotoOn()
    {
       
    
            $file = $_FILES['file_a'];
    
            
    
            $uploadDir = "uploader";
    
            if(!is_dir($uploadDir)){
                mkdir($uploadDir);
            }
            var_dump($file);
             if(move_uploaded_file($file["tmp_name"], $uploadDir . DIRECTORY_SEPARATOR . $file["name"])){
                
               
           //  }else{
           // 	 throw new \Exception("Não foi possivel realizar o Upload");
             }
        
    }

    public function setPhotoTwo()
    {
       
    
            $file = $_FILES['file_b'];
    
            
    
            $uploadDir = "uploader";
    
            if(!is_dir($uploadDir)){
                mkdir($uploadDir);
            }
            var_dump($file);
             if(move_uploaded_file($file["tmp_name"], $uploadDir . DIRECTORY_SEPARATOR . $file["name"])){
            
               
           //  }else{
           // 	 throw new \Exception("Não foi possivel realizar o Upload");
             }
        
    }

}

?>