<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 23.07.2019
 * Time: 19:19
 */

class NastyaApi
{
    public $tokens;
public $token;
public $action;
public function __construct($token, $action)
{$this->tokens=['dimon','Nastya', 'roma','danil','slava','max'];
    $this->token=$token;
$this->action=$action;
}

public function check_token()
{
   return in_array($this->token, $this->tokens);

}
public  function returnResponse()
{
    switch ($this->action){
        case 'getCars':
          return   $this->actionGetCars();
            break;
        case 'getCountries':
            return  $this->actionGetCountries();
            break;
        case 'getPlayers':
            return   $this->actionGetPlayers();
            break;
        case 'getDrags':
            return  $this->actionGetDrags();
            break;
    }
}

 function actionGetPlayers(){
     return['1'=>'Pit Sumpras', '2'=>'Rafael Nadal', '3'=>'Roger Federer'];

}

 function actionGetCars(){
     return['1'=>'Lada Sedan', '2'=>'Volkswagen Polo', '3'=>'Audio A8'];

 }

function actionGetCountries(){
    return['1'=>'Ukaraine', '2'=>'USA', '3'=>'Germany'];

}

 function actionGetDrags(){
     return['1'=>'Конопля', '2'=>'Амфетамин', '3'=>' Сегареты'];

 }

}