<?php

namespace Curso\Model;

use \Curso\DB\Sql;
use \Curso\Model;

class Contract extends Model{

    public static function listAll(){

        $sql = new Sql();

       return $sql->select("SELECT * FROM tb_contract  ORDER BY dtregister");

    }


    public function save(){

        $sql = new Sql();

       $results = $sql->select("CALL sp_contract_save(:idcontract, :desname, :desparent, :desemail, :nrcpf, :nrrg, :desbirthday, :descontractor, :descontractdate, :nrphone,
         :nrcellphone, :descity, :desstate, :neighborhood, :desadress, :deszipcode, :desstart, :desconsultant, :descourse, :desperiod, :desgarant)", [
            ":idcontract"=>$this->getidcontract(),
            ":desname"=>$this->getdesname(),
            ":desparent"=>$this->getdesparent(),
            ":desemail"=>$this->getdesemail(),
            ":nrcpf"=>$this->getnrcpf(),
            ":nrrg"=>$this->getnrrg(),
            ":desbirthday"=>$this->getdesbirthday(),
            ":descontractor"=>$this->getdescontractor(),
            ":descontractdate"=>$this->getdescontractdate(),
            ":nrphone"=>$this->getnrphone(),
            ":nrcellphone"=>$this->getnrcellphone(),
            ":descity"=>$this->getdescity(),
            ":desstate"=>$this->getdesstate(),
            ":neighborhood"=>$this->getneighborhood(),
            ":desadress"=>$this->getdesadress(),
            ":deszipcode"=>$this->getdeszipcode(),
            ":desstart"=>$this->getdesstart(),
            ":desconsultant"=>$this->getdesconsultant(),
            ":descourse"=>$this->getdescourse(),
            ":desperiod"=>$this->getdesperiod(),
            ":desgarant"=>$this->getdesgarant()
         ]);

         $this->setData($results[0]);

    }

    public function get($idcontract){
     
        $sql = new Sql();
    
        $results = $sql->select("SELECT * FROM tb_contract  WHERE idcontract = :idcontract", array(
            ":idcontract"=>$idcontract
        ));
    
        $this->setData($results[0]);
     }

     public function delete(){

        $sql = new Sql();

        $sql->query("CALL sp_contract_delete(:idcontract)",[
            ":idcontract"=>$this->getidcontract()
        ]);

     }
     
     public static function getPage($page = 1, $itemsPerPage = 10)
     {
 
         $start = ($page - 1) * $itemsPerPage;
 
         $sql = new Sql();
 
         $results = $sql->select("
             SELECT SQL_CALC_FOUND_ROWS *
             FROM tb_contract 
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
    
     public static function getPageSearch($search, $page = 1, $itemsPerPage = 10){

        $start = ($page - 1) * $itemsPerPage;

        $sql = new Sql();

       $results = $sql->select("SELECT SQL_CALC_FOUND_ROWS  * FROM tb_contract WHERE desname LIKE :desname
       OR descity LIKE :descity OR desperiod LIKE :desperiod ORDER BY desname LIMIT $start, $itemsPerPage",[
            ":desname"=>'%'. $search .'%',
            ":descity"=>'%'. $search .'%',
            ":desperiod"=>'%'. $search .'%'
        ]);

        $resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

        return [
            'data'=>$results,
            'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itemsPerPage)
        ];

     }

}



?>