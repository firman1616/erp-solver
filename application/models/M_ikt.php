<?php
class M_ikt extends CI_Model
{
    public function get_ikt()
    {
        return $this->db->query("SELECT * FROM prod.work_order_weaving WHERE pattern_no LIKE '%DSN%' ORDER BY wow_date DESC");
    }

    public function unlock($ikt)
    {
        return $this->db->query("UPDATE prod.work_order_weaving SET wow_status = '1' WHERE wow_no = '$ikt'");
    }

    public function lock($ikt)
    {
        return $this->db->query("UPDATE prod.work_order_weaving SET wow_status = '3' WHERE wow_no = '$ikt'");
    }
}
