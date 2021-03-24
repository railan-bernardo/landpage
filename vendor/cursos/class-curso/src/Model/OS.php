<?php

namespace Curso\Model;

use \Curso\DB\Sql;
use \Curso\Model;

class OS extends Model{

public static function listAll()
{
	$sql = new Sql();

	return $sql->select('SELECT * FROM tb_services a INNER JOIN tb_client_os b INNER JOIN tb_os_service c INNER JOIN tb_stock d ON d.id_stock = c.id_stock ON b.id_os_client = c.id_os_client ON a.id_services = c.id_services');
}

  
  public function save()
  {

  $sql = new Sql();

  $results = $sql->select('CALL sp_os_service_save(:id_os_service, :id_os_client, :id_services, :id_stock, :stage_os, :clerk, :customer_report, :amount_qtd_os, :found_defect, :responsible_technician, :end_date)', [
	":id_os_service"=>$this->getid_os_service(),
	":id_os_client"=>$this->getid_os_client(),
  ":id_services"=>$this->getid_services(),
  ":id_stock"=>$this->getid_stock(),
	":stage_os"=>$this->getstage_os(),
	":clerk"=>$this->getclerk(),
  ":customer_report"=>$this->getcustomer_report(),
  ":amount_qtd_os"=>$this->getamount_qtd_os(),
  ":found_defect"=>$this->getfound_defect(),
  ":responsible_technician"=>$this->getresponsible_technician(),
  ":end_date"=>$this->getend_date()
]);

  $this->setData($results[0]);

  }

  public function get($idos)
  {

$sql = new Sql();

$results = $sql->select("SELECT * FROM tb_services a INNER JOIN tb_client_os b INNER JOIN tb_os_service c INNER JOIN tb_stock d ON d.id_stock = c.id_stock ON b.id_os_client = c.id_os_client ON a.id_services = c.id_services WHERE id_os_service = :idos",[
	":idos"=>$idos
]);

$this->setData($results[0]);

  }

  public function delete()
  {
  	$sql = new Sql();

  	$sql->query("CALL sp_os_delete(:id_os_service)",[
  		":id_os_service"=>$this->getid_os_service()
  	]);
  }

  public static function getPage($page = 1, $itemsPerPage = 10)
     {
 
         $start = ($page - 1) * $itemsPerPage;
 
         $sql = new Sql();
 
         $results = $sql->select("
             SELECT SQL_CALC_FOUND_ROWS *
             FROM tb_services a
              INNER JOIN tb_client_os b
               INNER JOIN tb_os_service c
                INNER JOIN tb_stock d 
                ON d.id_stock = c.id_stock 
                ON b.id_os_client = c.id_os_client 
                ON a.id_services = c.id_services
                
             LIMIT $start, $itemsPerPage;
         ");
 
         $resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");
 
         return [
             'data'=>$results,
             'total'=>(int)$resultTotal[0]["nrtotal"],
             'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
         ];
 
     }

      //search com paginação
public static function getPageSearch($search, $page = 1, $itemsPerPage = 10){

        $start = ($page - 1) * $itemsPerPage;

        $sql = new Sql();

       $results = $sql->select("SELECT SQL_CALC_FOUND_ROWS * FROM tb_services a INNER JOIN tb_client_os b INNER JOIN tb_os_service c INNER JOIN tb_stock d ON d.id_stock = c.id_stock ON b.id_os_client = c.id_os_client ON a.id_services = c.id_services WHERE first_name LIKE :first_name OR nr_imei LIKE :nr_imei OR clerk LIKE :clerk OR name_city LIKE :name_city OR responsible_technician LIKE :responsible_technician ORDER BY first_name LIMIT $start, $itemsPerPage", [
             ":first_name"=>"%". $search . "%",
             ":nr_imei"=>"%". $search . "%",
             ":clerk"=>"%". $search . "%",
             ":name_city"=>"%". $search . "%",
             ":responsible_technician"=>"%". $search . "%"
            ]);

        $resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

        return [
            'data'=>$results,
            'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
        ];

	 }
	 public function setPhotoOn()
	 {
		
	 
			 $file = $_FILES['osimageon'];
	 
			 
	 
			 $uploadDir = "uploader";
	 
			 if(!is_dir($uploadDir)){
				 mkdir($uploadDir);
			 }
			 var_dump($file);
			  if(move_uploaded_file($file["tmp_name"], $uploadDir . DIRECTORY_SEPARATOR . $file["name"])){
			 	
				
			//  }else{
			// 	 throw new \Exception("NПлкo foi possivel realizar o Upload");
			  }
		 
	 }

	 public function setPhotoTwo()
	 {
		
	 
			 $file = $_FILES['osimagetwo'];
	 
			 
	 
			 $uploadDir = "uploader";
	 
			 if(!is_dir($uploadDir)){
				 mkdir($uploadDir);
			 }
			 var_dump($file);
			  if(move_uploaded_file($file["tmp_name"], $uploadDir . DIRECTORY_SEPARATOR . $file["name"])){
			 
				
			//  }else{
			// 	 throw new \Exception("NПлкo foi possivel realizar o Upload");
			  }
		 
	 }
  

//   public function setPhoto(){
	
// 	$upload = new Image("storage", "images");
// 	$files = $_FILES;
// 	$filess = $_FILES;

// 	if(!empty($files['osimageon'])){
// 		$images = $files['osimageon'];

// 		for($i = 0; $i < count($images["type"]); $i++){
// 			foreach(array_keys($images) as $key){
// 				$imageFiles[$i][$key] = $images[$key][$i];
// 			}
// 		}

// 		foreach($imageFiles as $file){
// 			$id = $this->getidos();
// 			if(empty($file['type'])){
// 				echo "Selecione uma imagem valida";
// 			}else if(!in_array($file['type'], $upload::isAllowed())){
// 				echo "O arquivo {$file['name']} nПлкo Пл▒ uma imagem valida!";
// 		    }else{
				
// 				$uploaded = $upload->upload($file, pathinfo($file['name'], PATHINFO_FILENAME));

// 			}
// 		}
	

// 		}

// 		if(!empty($filess['osimagetwo'])){
// 			$imagess = $filess['osimagetwo'];
	
// 			for($i = 0; $i < count($imagess["type"]); $i++){
// 				foreach(array_keys($imagess) as $key){
// 					$imageFiless[$i][$key] = $imagess[$key][$i];
// 				}
// 			}
	
// 			foreach($imageFiless as $filee){
// 				$id = $this->getidos();
// 				if(empty($filee['type'])){
// 					echo "Selecione uma imagem valida";
// 				}else if(!in_array($filee['type'], $upload::isAllowed())){
// 					echo "O arquivo {$filee['name']} nПлкo Пл▒ uma imagem valida!";
// 				}else{
					
// 					$uploaded = $upload->upload($filee, pathinfo($filee['name'], PATHINFO_FILENAME));
	
// 				}
// 			}
		
	
// 			}
		
// 	}



}
?>