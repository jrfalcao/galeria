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
        //var_dump($_FILES) ;
        //die();
        if (isset($_FILES["arquivo"]['tmp_name']) && !empty($_FILES["arquivo"]['tmp_name'])) {
            $titulo = $_FILES["arquivo"]['name'];
            $url = md5($_FILES["arquivo"]['name'].time().  rand(0, 9999));
            switch ($_FILES["arquivo"]['type']) {
                case 'image/jpeg':
                    $url .= '.jpg';
                    break;

                case 'image/png':
                    $url .= '.png';
                    break;
            }
            $destino = "assets/img/galeria/$url";
            move_uploaded_file($_FILES["arquivo"]['tmp_name'], $destino);
            $sql = $this->db->prepare("INSERT INTO fotos SET titulo=?, url=?");
            $sql->execute([$titulo, $url]);
        }
    }

}
