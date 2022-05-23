<?php
/*
* Da_dcs_restaurant
* Manage restaurant
* @author Nantasiri Saiwaew
* @Create Date 2565-05-22
*/
defined('BASEPATH') or exit('No direct script access allowed');
include_once dirname(__FILE__) . "/../DCS_model.php";
class Da_dcs_restaurant extends DCS_model
{

    public $res_id;
    public $res_code;
    public $res_name;
    public $res_description;
    public $res_type;
    public $res_lat;
    public $res_lon;
    public $res_ent_id;
    public $res_tel;
    public $res_location;
    public $res_cat_id;
    public $res_par_id;

    /*
    * @author  Nantasiri Saiwaew
    */
    public function __construct()
    {
        parent::__construct();
    }

}