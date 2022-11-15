<?php
    class Landing {
        public function __construct(){}
        public function index(){            
            require_once "views/roles/business/header.php";
            require_once "views/business/index.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function iniciar_sesion(){            
            require_once "views/roles/business/header.php";
            require_once "views/business/iniciar_sesion.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function crear_usuario(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/usuarios/usuarios.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function olvido_contraseña(){            
            require_once "views/roles/business/header.php";
            require_once "views/business/olvidocontra.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function mision(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mision_vision/mision.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function vision(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mision_vision/vision.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function historia(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mision_vision/historia.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function proyecto(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/proyecto.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function contactanos(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/contactanos/contactanos.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function dashboard(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/dashboard/dashboard.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function activos(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/activos_noactivos/activos.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function no_activos(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/activos_noactivos/no_activos.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function empleados(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/empleados/empleados.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function beneficiarios(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/beneficiarios/beneficiarios.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function crear_rol(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/crear_rol/crear_rol.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function movimiento(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/movimiento.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function usuarios(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/usuarios/usuarios.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function inventario(){            
            require_once "views/roles/business/header.php";
            // require_once "views/modules/mov_otra_proyec/movimiento.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function dotacion(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/empleados/dotacion.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function nuevochile(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/registronc.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function buenavista(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/registrobn.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function santacecilia(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/registrosc.view.php";            
            require_once "views/roles/business/footer.php";
        }
        public function semillas(){            
            require_once "views/roles/business/header.php";
            require_once "views/modules/mov_otra_proyec/registrosemi.view.php";            
            require_once "views/roles/business/footer.php";
        }
        
    }
?>