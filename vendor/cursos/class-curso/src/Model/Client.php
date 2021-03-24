<?php

namespace Curso\Model;

use \Curso\DB\Sql;
use \Curso\Model;

class Client extends Model{

    public static function listClient()
    {
        $sql = new Sql();

       return  $sql->select("SELECT * FROM tb_client_os ORDER BY dtregister DESC");
    }

    public static function listOneClient($id)
    {
        $sql = new Sql();

       return $sql->select("SELECT * FROM tb_client_os WHERE id_os_client = '$id'");
    }

    public function save()
    {
  
    $sql = new Sql();
  
    $results = $sql->select('CALL sp_client_os_save(:id_os_client, :first_name, :nr_cpf, :nr_phone, :name_city, :neighborhood)', [
      ":id_os_client"=>$this->getid_os_client(),
      ":first_name"=>$this->getfirst_name(),
      ":nr_cpf"=>$this->getnr_cpf(),
      ":nr_phone"=>$this->getnr_phone(),
      ":name_city"=>$this->getname_city(),
      ":neighborhood"=>$this->getneighborhood()

  ]);
  
    $this->setData($results[0]);
  
    }
    
    public static function listSimulator()
    {
        $sql = new Sql();
        
       return $sql->select("SELECT * FROM tb_simulator ORDER BY dtregister DESC");
    }
    
    public function get($idsimulator)
    {
        $sql = new Sql();
        
        $results = $sql->select("SELECT * FROM tb_simulator WHERE idsimulator = :idsimulator",[
            ":idsimulator"=>$idsimulator
            ]);
            
            $this->setData($results[0]);
    }
    
        public function delete()
    {
        $sql = new Sql();
        
        $sql->select("DELETE FROM tb_simulator WHERE idsimulator = :idsimulator",[
            ":idsimulator"=>$this->getidsimulator()
            ]);
    
    }
    
    public static function getPage($page = 1, $itemPerPage = 10)
    {
        $start = ($page -1) * $itemPerPage;
        
        $sql = new Sql();
        
        $results = $sql->select("SELECT SQL_CALC_FOUND_ROWS *
          FROM tb_simulator
          ORDER BY desname
          LIMIT $start, $itemPerPage
        ");
        
        $resultsTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal");
        
        return [
            'data'=>$results,
            'total'=>(int)$resultsTotal[0]['nrtotal'],
            'pages'=>ceil($resultsTotal[0]['nrtotal'] / $itemPerPage)
            ];
    }
    
        public static function getSearchPage($search, $page = 1, $itemPerPage = 10)
    {
        $start = ($page -1) * $itemPerPage;
        
        $sql = new Sql();
        
        $results = $sql->select("SELECT SQL_CALC_FOUND_ROWS * FROM
          tb_simulator
          WHERE desname LIKE :desname OR descity LIKE :descity OR desstate LIKE :desstate
          ORDER BY desname
          LIMIT $start, $itemPerPage
        ",[
          ":desname"=>"%".$search ."%",
          ":descity"=>"%".$search ."%", 
          ":desstate"=>"%".$search ."%", 
        ]);
        
        $resultsTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal");
        
        return [
            'data'=>$results,
            'total'=>(int)$resultsTotal[0]['nrtotal'],
            'pages'=>ceil($resultsTotal[0]['nrtotal'] / $itemPerPage)
            ];
    }

}

?>