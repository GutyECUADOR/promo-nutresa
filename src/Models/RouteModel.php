<?php namespace App\Models;

class RouteModel {
    
    public function actionCatcherModel($action){
        switch ($action) {
            case 'bienvenidos':
                $contenido = "views/modulos/bienvenidosView.php";
                break;

            case 'mecanica-adivina-quien':
                $contenido = "views/modulos/adivinaquienView.php";
                break;

            case 'evento':
                $contenido = "views/modulos/eventoView.php";
                break;
                
            default:
                $contenido = "views/modulos/bienvenidosView.php";
                break;
        }
        
       
        return $contenido;
        
    }
}
