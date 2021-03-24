<?php

namespace Curso\Model;

use \Curso\DB\Sql;
use Curso\Model;
class Stating extends Model{

    public static function statingUser(){

        $sql = new Sql();

       return $sql->select("SELECT  COUNT(*) AS users FROM tb_users");

    }

    public static function statingStudant(){

        $sql = new Sql();

       return $sql->select("SELECT  COUNT(*) AS studant FROM tb_aluno");

    }

    public static function statingConsultantd($id){

        $sql = new Sql();

       return $sql->select("SELECT COUNT(MONTH(dtregister))  AS consultantd from tb_aluno WHERE idperson = '$id' AND MONTH(dtregister) LIKE MONTH(CURRENT_DATE())");

    }

    public static function getStage($stage){

        $sql = new Sql();

        return $sql->select("SELECT COUNT(*) AS stages FROM tb_aluno  WHERE desstage = '$stage'");
    }

    public static function getMonth(){

        $sql = new Sql();
    
       return $sql->select("SELECT * FROM tb_aluno WHERE dtregister");
    
    }
    
        public static function getGoogle()
    {
        $sql = new Sql();

        return $sql->select("SELECT COUNT(countlead) AS nrleads FROM tb_aluno WHERE countlead = '5'");
    }
    
        public static function getPageA($page = 1, $itemsPerPage = 10)
     {
 
         $start = ($page - 1) * $itemsPerPage;
 
         $sql = new Sql();
 
         $results = $sql->select("
             SELECT SQL_CALC_FOUND_ROWS *
             FROM tb_aluno WHERE desstage = '1'
             
             LIMIT $start, $itemsPerPage;
         ");
 
         $resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");
 
         return [
             'data'=>$results,
             'total'=>(int)$resultTotal[0]["nrtotal"],
             'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
         ];
 
     }

     public static function getPageB($page = 1, $itemsPerPage = 10)
     {
 
         $start = ($page - 1) * $itemsPerPage;
 
         $sql = new Sql();
 
         $results = $sql->select("
             SELECT SQL_CALC_FOUND_ROWS *
             FROM tb_aluno WHERE desstage = '2'
             ORDER BY desaluno ASC 
             LIMIT $start, $itemsPerPage;
         ");
 
         $resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");
 
         return [
             'data'=>$results,
             'total'=>(int)$resultTotal[0]["nrtotal"],
             'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
         ];
 
     }

     public static function getPageC($page = 1, $itemsPerPage = 10)
     {
 
         $start = ($page - 1) * $itemsPerPage;
 
         $sql = new Sql();
 
         $results = $sql->select("
             SELECT SQL_CALC_FOUND_ROWS *
             FROM tb_aluno WHERE desstage = '3'
             ORDER BY desaluno ASC 
             LIMIT $start, $itemsPerPage;
         ");
 
         $resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");
 
         return [
             'data'=>$results,
             'total'=>(int)$resultTotal[0]["nrtotal"],
             'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
         ];
 
     }
     
      public static function getPageSearch($search, $page = 1, $itemsPerPage = 10){

        $start = ($page - 1) * $itemsPerPage;

        $sql = new Sql();

       $results = $sql->select("SELECT SQL_CALC_FOUND_ROWS  * FROM tb_aluno WHERE desaluno LIKE :desaluno
       OR descity LIKE :descity OR desturno LIKE :desturno OR dtregister LIKE :dt ORDER BY desaluno LIMIT $start, $itemsPerPage",[
            ":desaluno"=>'%'. $search .'%',
            ":descity"=>'%'. $search .'%',
            ":desturno"=>'%'. $search .'%',
            ":dt"=>'%'. $search .'%'
        ]);

        $resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

        return [
            'data'=>$results,
            'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
        ];

     }

     public function countContract($consultant)
     {
         $sql = new Sql();

         return $sql->select('SELECT COUNT(*) AS total FROM tb_contract WHERE desconsultant LIKE :consultant',[
             ':consultant'=>'%'.$consultant.'%'
         ]);

     }

     public static function dateNow()
     {
         $sql = new Sql();

         return $sql->select('SELECT * FROM tb_contract WHERE DAY(desbirthday) = DAY(now()) AND month(desbirthday) = month(now())');
     }

     public function dropout($idaluno)
     {
         $sql = new Sql();

       $result =  $sql->query("UPDATE tb_aluno SET desstage = '0' WHERE idaluno = :IDALUNO",[
             ":IDALUNO"=>$idaluno
         ]);


     }
}

?>