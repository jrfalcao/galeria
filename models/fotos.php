<?php
/**
 * Description of fotos
 *
 * @author junior
 */
class fotos extends model{
    
    public function getFotos() {
        $array = array();
        
        $sql = "select * from fotos";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}