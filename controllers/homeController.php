<?php
/**
 * Description of HomeController
 *
 * @author junior
 */
class homeController extends controller {
    
    public function index(){
        $fotos = new fotos();
        $dados['fotos'] = $fotos->getFotos();
        $this->loadTemplate("home", $dados);
    }
}
