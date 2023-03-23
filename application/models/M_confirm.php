<?php
class M_confirm extends CI_Model
{

    public function confirm_kikc($date)
    {
        return $this->db->query("UPDATE prod.work_order_dyeing set wod_status = '3' WHERE wod_date = '$date'");
    }

    public function confirm_wow($date)
    {
        return $this->db->query("UPDATE prod.work_order_weaving set wow_status = '3' WHERE wow_date = '$date'");
    }

    public function confirm_kikc_between($start, $end)
    {
        return $this->db->query("UPDATE prod.work_order_dyeing set wod_status = '3' WHERE wod_date BETWEEN '$start' AND '$end'");
    }
}
