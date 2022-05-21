<?php
/*
* Admin_restaurant_list
* Admin_approval_company
* @author Nantasiri Saiwaew 62160093
* @Create Date 2564-08-08
*/
defined('BASEPATH') or exit('No direct script access allowed');
include_once dirname(__FILE__) . '/../../DCS_controller.php';
class Admin_restaurant_list extends DCS_controller
{
  /*
  * @author Nantasiri Saiwaew 62160093
  */
  public function __construct()
  {
    parent::__construct();
    $this->load->library('email');
    $this->load->library('pagination');
    $this->load->model('Company/M_dcs_company', 'mdcc');
  }

  /*
  * index
  * call function in Dcs_controller
  * @input - 
  * @output -
  * @author Kasama Donwong 62160074
  * @Create Date 2564-08-08
  * @Update Date -
  */
  public function index()
  {
    $this->show_data_list();
  }

  /*
  * show_data_consider
  * get all data company consider and show table
  * @input -
  * @output -
  * @author Kasama Donwong 62160074
  * @Create Date 2564-08-08
  * @Update Date -
  */
  public function show_data_list()
  {
    $_SESSION['tab_number'] = 10; //set tab number in topbar_admin.php
    $this->output_admin('admin/manage_company/manage_restaurant/v_list_restaurant', null, null);
  }


}