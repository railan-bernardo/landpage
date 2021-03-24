<?php

namespace Curso\Model;

use \Curso\DB\Sql;

class Sales {

     public static function getPage($page = 1, $itemsPerPage = 10)
     {
 
         $start = ($page - 1) * $itemsPerPage;
 
         $sql = new Sql();
 
         $results = $sql->select("
             SELECT SQL_CALC_FOUND_ROWS *
             FROM tb_aluno 
             ORDER BY dtregister DESC 
             LIMIT $start, $itemsPerPage;
         ");
 
         $resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");
 
         return [
             'data'=>$results,
             'total'=>(int)$resultTotal[0]["nrtotal"],
             'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
         ];
 
     }
    
    
public static function mySales($idperson)
{
	$sql = new Sql();

	return $sql->select("SELECT * FROM tb_aluno WHERE idperson = :idperson",[
		":idperson"=>$idperson
	]);

	//$this->setData($results[0]);
}

 public function get($iduser){
     
    $sql = new Sql();

    $results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) WHERE a.iduser = :iduser", array(
        ":iduser"=>$iduser
    ));

    $this->setData($results[0]);
 }

}

?>