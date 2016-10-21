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
        var_dump($_FILES);
        /*
        $titulo = $_FILES['name'];
        $url = $_FILES['name'];

        if (is_array($foto) && count($foto) > 0 ) {
            $sql = $this->db->prepare("INSERT INTO fotos SET titulo=?, url=?");
            $sql->execute([$titulo, $url]);
        }S
         */
    }

}
