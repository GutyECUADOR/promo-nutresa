<?php
use App\Controllers\ajaxController;
use Dotenv\Dotenv;

@ob_start();
date_default_timezone_set('America/Lima');
header('Content-Type: application/json');

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

require_once '../vendor/autoload.php';

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

class ajax{
  private $ajaxController;
   
    public function __construct() {
      $this->ajaxController = new ajaxController();
    }

    public function verify_code(string $code) {
      return $this->ajaxController->verify_code($code);
    }

   
}

  /* Cuerpo del API */

  try{
    $ajax = new ajax(); //Instancia que controla las acciones

    if (isset($_GET["action"])) {
      $HTTPaction = $_GET["action"];
    }else{
      throw new Exception("Solicitud sin action");
      
    }
    
    switch ($HTTPaction) {

      case 'verify_code':
        $respuesta = $ajax->verify_code();
        $rawdata = array('status' => 'success', 'message' => 'respuesta correcta', 'data'=> $respuesta);
        echo json_encode($rawdata);

      break;

      default:
          $rawdata = array('status' => 'error', 'message' =>'El API no ha podido responder la solicitud, revise el tipo de action');
          echo json_encode($rawdata);
      break;
    }
    
  } catch (Exception $ex) {
    //Return error message
    $rawdata = array();
    $rawdata['status'] = "error";
    $rawdata['message'] = $ex->getMessage();
    echo json_encode($rawdata);
  }


