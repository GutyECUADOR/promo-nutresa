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
            
            case 'premios':
                $contenido = "views/modulos/premiosView.php";
                break;

            
            // La rockola Ganadora

            case 'larockolaganadora':
                $contenido = "views/modulos/larockolaganadoraView.php";
                break;
            
            case 'premios-rockola':
                $contenido = "views/modulos/premioslarockolaView.php";
                break;
        
            case 'evento-rockola':
                $contenido = "views/modulos/evento-rockolaView.php";
                break;
                
                
            default:
                $contenido = "views/modulos/bienvenidosView.php";
                break;
        }
        
       
        return $contenido;
        
    }
}
