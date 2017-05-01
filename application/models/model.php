<?php
class model extends CI_Model   {

    function select_all_studenti($table) {
        $this->db->order_by('Priezvisko')->select('*')
            ->from($table)
            ->join('Pohlavie',' Student.Pohlavie_idPohlavie = Pohlavie.idPohlavie')
            ->join('Zaujem',' Student.Zaujem_idZaujem = Zaujem.idZaujem')  ;

        return $this->db->get();
    }

}
?>
