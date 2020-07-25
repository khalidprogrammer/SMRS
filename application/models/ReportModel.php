<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportModel extends CI_Model {


	//  Add Report

	function add($table_name,$data)
	{
		$this->db->insert($table_name, $data);
 		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}
	function update($table_name,$data,$db_field,$value)
	{
		$this->db->where($db_field,$value);
     	$result = $this->db->update($table_name, $data);
   		return  $result;
	}

//  End Add Report


//  Delete Report
	function delete ($table,$db_field){
		
	    $this->db->where('Id', $db_field)->delete($table);
		
	}

//  End Delete Report
      


//  Get all data from database
	function get_record($table_name){
          
    $this->db->select('*')->from($table_name);

    $query = $this->db->get();
 
     return $query->result_array();
	}

//  End Data


//  get all record from distric table with id provincode
	function get_distric($province_code){

   $this->db->where('ProvinceCode', $province_code);
	$this->db->order_by('DistrictDrName', 'ASC');
	$query = $this->db->get('district');
	$output = '<option value="">--لطفا انتخاب نمائید</option>';
	foreach($query->result() as $row)
	{
	$output .= '<option value="'.$row->DistrictCode.'">'.$row->DistrictDrName.'</option>';
	}
	return $output;
	
	}


	function get_village($distric_code){

    $this->db->where('DistrictCode', $distric_code);
	$this->db->order_by('VillageDrName', 'ASC');
	$query = $this->db->get('village');
	$output = '<option value="">--لطفا انتخاب نمائید</option>';
	foreach($query->result() as $row)
	{
	$output .= '<option value="'.$row->VillageID.'">'.$row->VillageDrName.'</option>';
	}
	return $output;
	
	}

	function get_report($take,$skip,$province = NULL , $distric = NULL ,$kinds_disaster = NULL, $date = NULL){
		$this->db->select('*');    
		$this->db->from('incident');
	
		if($province != ''){
			$this->db->like('province.ProvinceCode',$province);
		}
		if($distric != ''){
			$this->db->like('district.DistrictCode',$distric);
		}

		if($kinds_disaster !=''){
			$this->db->like('Kinds_Disaster',$kinds_disaster);
		}

		if($date != ''){
			$this->db->like('date',$date);
		}
		$this->db->join('province', 'incident.ProvinceCode = province.ProvinceCode','inner');
		$this->db->join('district', 'incident.DistricCode = district.DistrictCode','inner');
		$this->db->join('village', 'incident.VillageID =village.VillageID','inner');

		
		$this->db->limit($take,$skip);
		
		$query = $this->db->get();
		
	
		return $query->result();
	}


	function excel_report($take,$skip,$province , $distric  ,$kinds_disaster, $date){

		extract($_GET);
       
		$this->db->select('*');    
		$this->db->from('incident');
		if($province != ''){
			$this->db->like('province.ProvinceCode',$province);
		}
		if($distric != ''){
			$this->db->like('district.DistrictCode',$distric);
		}

		if($kinds_disaster !=''){
			$this->db->like('Kinds_Disaster',$kinds_disaster);
		}

		if($date != ''){
			$this->db->like('date',$date);
		}
		$this->db->join('province', 'incident.ProvinceCode = province.ProvinceCode','inner');
		$this->db->join('district', 'incident.DistricCode = district.DistrictCode','inner');
		$this->db->join('village', 'incident.VillageID =village.VillageID','inner');

        $this->db->limit($take,$skip);
		
		$query = $this->db->get();
		return $query->result();
	}


	//  Create a sum query for all 

	function sum_data($table_name,$db_field){

	$this->db->select_sum($db_field);

	$query =$this->db->get($table_name);

	return $query->result();
	


	}


	

	

}

/* End of file ReportModel.php */
/* Location: ./application/models/ReportModel.php */