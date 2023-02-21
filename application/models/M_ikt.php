<?php
class M_ikt extends CI_Model
{
    public function get_ikt()
    {
        return $this->db->query("SELECT
        wow.id,
        wow.wow_no,
        wow.wow_date,
        wow.pattern_no,
        wow.prd_id,
        wow.length,
        wow.wow_status,
        ipm.prd_code 
    FROM
        prod.work_order_weaving wow	
    JOIN 
        im_prd_master ipm on ipm.id = wow.prd_id 
    WHERE
        pattern_no like '%DSN%'
    order by
        wow_date desc");
    }

    public function detail_ikt($wow)
    {
        return $this->db->query("SELECT
        wow.id,
        wow.wow_no,
        wow.wow_date,
        wow.pattern_no,
        wow.prd_id,
        wow.length,
        wow.wow_status,
        wow.qty,
        wow.kd_patrun,
        wow.pjg_lusi,
        wow.pjg_pakan,
        ipm.prd_code,
        ipm2.motive_name 
    FROM prod.work_order_weaving wow	
    JOIN im_prd_master ipm on ipm.id = wow.prd_id
    JOIN im_prd_motive ipm2 on ipm2.id = wow.motive_id 
    WHERE
        pattern_no like '%DSN%' AND wow.wow_no = '$wow'");
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
