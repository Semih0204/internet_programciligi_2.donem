<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$this->load->model("Product_Category_Model");
		$items = $this->Product_Category_Model->getAll();

		$viewData = new stdClass();
		$viewData->items = $items;
		$this->load->view("Dashboard_v", $viewData);
	}
}
