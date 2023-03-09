<?php
class M_local extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function get_data_db2($table)
    {
        $db2 = $this->load->database('lokal', TRUE);
        return $db2->get($table);
    }

    public function simpan_data_db2($table, $data)
    {
        $db2 = $this->load->database('lokal', TRUE);
        $db2->insert($table, $data);
    }
}
