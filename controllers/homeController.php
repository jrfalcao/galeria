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
    
    public function salvar() {
        var_dump($_FILES);
        die();
        $titulo = $_FILES['name'];
        $url = $_FILES['url'];
        $foto['titulo'] = $titulo;
        $foto['url'] = $url;
        var_dump($foto);
        $fotos = new fotos();
        $fotos->enviarFotos($foto);
    }
}
