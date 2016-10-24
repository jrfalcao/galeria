<?php

/**
 * Description of fotos
 *
 * @author junior
 */
class fotos extends model {

    public function getFotos() {
        $array = array();

        $sql = "select * from fotos Order by id desc";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function salvarFotos() {
        if (isset($_FILES["arquivo"]['tmp_name']) && !empty($_FILES["arquivo"]['tmp_name'])) {
            $titulo = addslashes(filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS));//$_POST['titulo']
            echo $titulo;
            die();
            $url = md5($_FILES["arquivo"]['name'].time().rand(0, 9999));
            switch ($_FILES["arquivo"]['type']) {
                case 'image/jpeg':
                    $url .= '.jpg';
                    break;

                case 'image/png':
                    $url .= '.png';
                    break;
            }
            move_uploaded_file($_FILES["arquivo"]['tmp_name'], "assets/img/galeria/$url");
            $sql = $this->db->prepare("INSERT INTO fotos SET titulo=?, url=?");
            $sql->execute([$titulo, $url]);
        }
    }

}
