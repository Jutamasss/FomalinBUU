<?php
/*
* M_dcs_event
* get data event
* @author Naaka punparich 62160082
* @Create Date 2564-09-16
*/
defined('BASEPATH') or exit('No direct script access allowed');
include_once "Da_dcs_restaurant.php";
class M_dcs_restaurant extends Da_dcs_restaurant
{
    /*
    * @author Naaka Punparich 62160082
    */
    public function __construct()
    {
        parent::__construct();
    }

    /*
    * get_all
    * get data form dcs event
    * @input -
    * @output -
    * @author Naaka punparich 62160082
    * @Create Date 2564-09-16
    */
    function get_all()
    {
        $sql = "SELECT * 
              from dcs_restaurant";
        $query = $this->db->query($sql);
        return $query;
    }

        /*
    *get_all_data
    *get data event&entrepreneur&company form database
    *@input $limit, $start, $number_status
    *@output entrepreneur data & company data & event data
    *@author Kasama Donwong 62160074
    *@Create Date 2564-09-24
    */
    function get_all_data_s()
    {
        $this->db->select('*');
        $this->db->from('dcs_restaurant');
        $this->db->join('dcs_entrepreneur', 'dcs_entrepreneur.ent_id = dcs_restaurant.res_ent_id', 'left');
        $query = $this->db->get();
        return $query->result();
    }
        /*
    * get_pro_cat
    * get data promotion 
    * @input -
    * @output -
    * @author Chutipon Thermsirisuksin 62160081
    * @Create Date 2564-10-02
    * @Update -
    */
    public function get_all_data()
    {
        $sql = "SELECT * FROM dcs_restaurant AS res
        LEFT JOIN {$this->db_name}.dcs_entrepreneur AS ent
        ON res.res_ent_id = ent.ent_id";
        return $this->db->query($sql);
    }
  
}
