<?php
class M_garment extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function update_no_bukti($table, $data, $where)
    {
        $db3 = $this->load->database('patrun', TRUE);
        return $db3->update($table, $data, $where);
    }

    public function update_nobukti($no_bukti1, $no_bukti2)
    {
        $db3 = $this->load->database('patrun', TRUE);
        $query = $db3->query("UPDATE kebut_patrun SET no_bukti = '$no_bukti2' WHERE no_bukti = '$no_bukti1'");
        return $query;
    }
}
