<?php

use \Curso\Model\Contract;
use \Curso\Model\User;

function encurtarTexto($texto,$tamPermitido) {
    if (strlen($texto) > $tamPermitido) 
       echo substr($texto, 0, $tamPermitido) . "";
    else
       echo $texto;
  }

  function fomatDate($date){
   return date('d/m/Y', strtotime($date));
  }

  function getUserName()
{

	$user = User::getFromSession();

	return $user->getdesperson();

}

  function getUserEmail()
{

	$user = User::getFromSession();

	return $user->getdesemail();

}

function getTotal()
{
    if(isset($_GET['consultant'])){
        return $_GET['consultant'];
    }
}



function getUserPhoto()
{

	$user = User::getFromSession();

	return $user->getdesphoto();

}

function getUserId()
{

	$user = User::getFromSession();

	return $user->getidperson();

}

function formatPrice($price)
{
    return number_format($price, 2, ',','.');
}

function formatDocument($document)
{
    $sub = substr($document, 0, 3);
    $subm = substr($document, 3, 3);
    $subn = substr($document, 6, 3);
    $leng = substr($document, 9, strlen($document));

    if(strlen($document) > 11){
        return $document;
    }else{
        echo $sub . '.' . $subm . '.'. $subn . '-'.$leng;
    }



}

function dateTime($dateCurrent)
{
   
date_default_timezone_set('America/Sao_Paulo');
$datatime =  date('Y-m-d H:i:s');
$dateCurrents = $dateCurrent;
 
$date_time  = new DateTime($dateCurrents);
$diff       = $date_time->diff( new DateTime($datatime));

$horas = $diff->h + ($diff->days * 24);
$s = $diff->i + ($diff->days * 24);

if($horas < 1){
     echo " {$s} minutos ";
}else{
    echo " {$horas} Hora(s)";
}


}

?>