<?php
/**
 * Description of HomeController
 *
 * @author junior
 */
class homeController extends controller {
    
    public function index(){
        $fotos = new fotos();
        if($_REQUEST)
            $fotos->salvarFotos();
        $dados['fotos'] = $fotos->getFotos();
        $this->loadTemplate("home", $dados);
    }
    
}
