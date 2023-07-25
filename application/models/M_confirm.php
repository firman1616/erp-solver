<?php
class M_confirm extends CI_Model
{

    public function confirm_kikc($date)
    {
        return $this->db->query("UPDATE prod.work_order_dyeing set wod_status = '3', confirmed_by = '387' WHERE wod_date = '$date'");
    }

    public function confirm_wow($date)
    {
        return $this->db->query("UPDATE prod.work_order_weaving set wow_status = '3', confirmed_by = '387' WHERE wow_date = '$date'");
    }

    public function confirm_kikc_between($start, $end)
    {
        return $this->db->query("UPDATE prod.work_order_dyeing set wod_status = '3', confirmed_by = '387' WHERE wod_date BETWEEN '$start' AND '$end'");
    }

    public function confirm_wop_between($start, $end)
    {
        return $this->db->query("UPDATE prod.work_order_preparatory set wop_status = '3', confirmed_by = '387' WHERE wop_date BETWEEN '$start' AND '$end'");
    }

    function update_status_wop($status, $trans_no)
    {
        return $this->db->query("UPDATE prod.work_order_preparatory SET wop_status = '$status' WHERE wop_no = '$trans_no'");
    }
}
