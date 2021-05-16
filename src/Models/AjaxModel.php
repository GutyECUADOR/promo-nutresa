<?php namespace App\Models;

class ajaxModel extends conexion  {
    
    public function __construct() {
        parent::__construct();
    }

    public function verify_code(object $usuario) {
        $nombreUpper = strtoupper($usuario->nombre);
        try{
            $this->instancia->beginTransaction();  
            $query = " 
           
                INSERT INTO usuarios (nombre, correo, telefono, codigo) 
                values (:nombre, :correo, :telefono, :codigo)
          
            ";  

            $stmt = $this->instancia->prepare($query); 
            /* $stmt->bindParam(':telefono_exist', $usuario->telefono); 
            $stmt->bindParam(':telefono_select', $usuario->telefono);  */

            $stmt->bindParam(':nombre', $nombreUpper); 
            $stmt->bindParam(':correo', $usuario->correo); 
            $stmt->bindParam(':telefono', $usuario->telefono); 
            $stmt->bindParam(':codigo', $usuario->codigo); 


           
            $stmt->execute();

            $commit = $this->instancia->commit();
            return array('status' => 'success', 'message' => 'Registro correcto, ya puede unirse el evento en Vivo.', 'commit'=>$commit);
            
        }catch(\PDOException $exception){
            $this->instancia->rollBack();
            switch ($exception->getCode ()) {
                case '23000':
                    return array('status' => 'error', 'message' => 'El número de documento de identidad ya está registrado. ', 'mensajeEx' => $exception->getMessage(), 'errorCode' => $exception->getCode () );
                    break;
                
                default:
                    return array('status' => 'error', 'message' => 'No se pudo registrar en la base de datos, reintente.', 'mensajeEx' => $exception->getMessage(), 'errorCode' => $exception->getCode () );
                    break;
            }
            
        }
   
    }

    
}



   
    
