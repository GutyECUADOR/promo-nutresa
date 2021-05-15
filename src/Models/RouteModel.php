<?php namespace App\Models;

class RouteModel {
    
    public function actionCatcherModel($action){
        switch ($action) {
            case 'bienvenidos':
                $contenido = "views/modulos/bienvenidosView.php";
                break;

            case 'adivinaquien':
                $contenido = "views/modulos/adivinaquienView.php";
                break;
                
            default:
                $contenido = "views/modulos/bienvenidosView.php";
                break;
        }
        
       
        return $contenido;
        
    }
}
