<?php 
  
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {
          public function __construct()
          {
              parent::__construct();
              //Do your magic here
              $this->load->library(['ion_auth', 'form_validation']);
              $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
              $this->load->model('ReportModel');

            //   $this->lang->load('form','dari');
            $this->lang->load(['form','auth'],'dari');

              $this->load->library('toastr');
              
            if (!$this->ion_auth->logged_in())
            {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
            }
              
          }

            public function index()
            {
              

                $data['page']='Admin/dasboard';

                //  sum of  Naturalmytr
               $data['natural_mytr']= $this->ReportModel->sum_data('incident','Naturalmartyr');
               $data['unatural']= $this->ReportModel->sum_data('incident','Unnatural');
               $data['natural_injured']= $this->ReportModel->sum_data('incident','Naturalinjured');
               $data['unnatural_injured']= $this->ReportModel->sum_data('incident','Unnaturalinjured');
               $data['Male']= $this->ReportModel->sum_data('incident','Male');
               $data['Female']= $this->ReportModel->sum_data('incident','Female');
               $data['Child']= $this->ReportModel->sum_data('incident','Child');
               $data['totaldamage']= $this->ReportModel->sum_data('incident','Totaldamage');
               $data['partialdamage']= $this->ReportModel->sum_data('incident','Partialdamage');
               $data['trees']= $this->ReportModel->sum_data('incident','Trees');
               $data['mosques']= $this->ReportModel->sum_data('incident','Mosques');
               $data['office']= $this->ReportModel->sum_data('incident','Office');
               $data['bridge']= $this->ReportModel->sum_data('incident','Bridge');
               $data['road']= $this->ReportModel->sum_data('incident','Road');
               $data['agriculturalland']= $this->ReportModel->sum_data('incident','Agriculturalland');
               $data['livestock']= $this->ReportModel->sum_data('incident','Livestock');
               $data['regressive']= $this->ReportModel->sum_data('incident','Regressive');
               $data['displaced']= $this->ReportModel->sum_data('incident','Displaced');
              $this->load->view('common/template',$data);
          
            }

      //  Show Report List and also fetch province
        public function Reports(){

            $data['page']= "Admin/reports_vw";

            $data['provinces']=$this->ReportModel->get_record('province');

            $this->load->view('common/template',$data);


        }
        
       //  get all distric
       
        public function fetch_distric(){

        $province_code = $this->input->post('province_code');
        if($province_code){

        echo $this->ReportModel->get_distric($province_code);

        }

        }


        public function fetch_village(){

            $distric_code = $this->input->post('distric_code');

            if($distric_code){

                echo $this->ReportModel->get_village($distric_code);
            }
        }

        function add_report(){

           extract($_POST);
           $id= $this->input->post('Id');
            $data = array(
            'ProvinceCode'=>$province,

            'DistricCode'=> $distric,

            'VillageID'=>$village,

            'Kinds_Disaster'=>$Kinds_Disaster,

            'Date'=>$date,

             'Naturalmartyr' =>$Naturalmartyr,
             'Unnatural'=>$Unnatural,
             'Naturalinjured'=>$Naturalinjured,
             'Unnaturalinjured'=>$Unnaturalinjured,
             'Male' =>$Male,
             'Female' =>$Female,
             'Child' => $Child,
             'Totaldamage'=>$Totaldamage,
             'Partialdamage'=>$Partialdamage,

             'Mosques' => $Mosques,
             'Office' =>  $Office,
             'Trees' =>   $Trees,
             'Livestock' => $Livestock,

            'Agriculturalland' => $Agriculturalland,
            'Bridge'=>$Bridge,
            'Road' => $Road,
            'Displaced' => $Displaced,
            'Regressive' => $Regressive,
            'Info' => $Info

            );

            if($id==''){
             
             $result=$this->ReportModel->add('incident',$data);
             

             $this->toastr->success('Your Reportt was created successfully');

            return redirect('Admin/Reports');
            }

            else{
                $this->ReportModel->update('incident',$data,'Id',$id);

                $this->toastr->success('Your Report was updated successfully');
                return redirect('Admin/Reports');
            }
            
            if($result){
                echo "Success";

              
            }

            else{

                echo "Failde";
            }
        
        }
        public function fetch_report_list(){
             
            $province = $this->input->get('province');
            $distric = $this->input->get('distric');
            $kinds_disaster =$this->input->get('kinds_disaster');
            $date =$this->input->get('date');
            $take = $this->input->get('take');
            $skip = $this->input->get('skip');
            $list=$this->ReportModel->get_report($take,$skip,$province,$distric,$kinds_disaster,$date);
            $total = count($list);
            echo "{\"total\":" . $total . ",\"data\":" . json_encode($list) . "}";

          
        }


        //  Delete Record

        public function delete_record(){
            
            $Id= $this->input->post('Id');

            $delete= $this->ReportModel->delete('incident',$Id);
            if($delete){
                
                $this->toastr->success('Your Report was Deleted ');

                return redirect('Admin/Reports');

            }
        }


        function ExportExcel(){
          
            $province = $this->input->get('province');
            $distric = $this->input->get('distric');
            $kinds_disaster =$this->input->get('kinds_disaster');
            $date =$this->input->get('date');
            $take = $this->input->get('take');
            $skip = $this->input->get('skip');
            $this->load->library('PHPExcel');
            $object = new PHPExcel();

            // $object
            // ->getActiveSheet()
            // ->getStyle('A1')
            // ->getFill()
            // ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
            // ->getStartColor()
            // ->setRGB('#D3D3D3'); //i.e,colorcode=D3D3D3
          $object->setActiveSheetIndex(0);


        
        $table_columns = array($this->lang->line('province'),$this->lang->line('district'),

        $this->lang->line('village'),$this->lang->line('kinds_disaster'),$this->lang->line('date'),
        $this->lang->line('Naturalmartyr'),$this->lang->line('Unnatural'),$this->lang->line('Naturalinjured'),
        $this->lang->line('Unnaturalinjured'),$this->lang->line('Male'),$this->lang->line('Female'),$this->lang->line('Child'),
        $this->lang->line('Totaldamage'),$this->lang->line('Partialdamage'),$this->lang->line('Mosques'),
        $this->lang->line('Office'),$this->lang->line('Trees'),$this->lang->line('Livestock'),$this->lang->line('Agriculturalland'),
        $this->lang->line('Bridge'),$this->lang->line('Road'),$this->lang->line('Displaced'),$this->lang->line('Regressive'),
        $this->lang->line('Info')
            );

    $column = 0;
    
  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }
  

  
  $list=$this->ReportModel->excel_report($take,$skip,$province,$distric,$kinds_disaster,$date);
  
 
            
            
            
            
//   $report_data = $this->ReportModel->all_report();
 
  $excel_row = 2;


  
  foreach($list as $row)
  {
      

   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->ProvinceDrName);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->DistrictDrName);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->VillageDrName);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->Kinds_Disaster);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->Date);
   $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->Naturalmartyr);
   $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->Unnatural);
   $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->Naturalinjured);
   $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->Unnaturalinjured);
   $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->Male);
   $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->Female);
   $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->Child);
   $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->Totaldamage);
   $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->Partialdamage);
   $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->Mosques);
   $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->Office);
   $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->Tress);
   $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->Livestock);
   $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->Agriculturalland);
   $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->Bridge);
   $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->Road);
   $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->Displaced);
   $object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->Regressive);
   $object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->Info);

   $excel_row++;
  }

 
  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');

  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="Report Data.xlsx"');
  ob_end_clean();
  $object_writer->save('php://output');
  
}

public function change_password()
{
    $this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
    $this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[new_confirm]');
    $this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

    if (!$this->ion_auth->logged_in())
    {
        redirect('auth/login', 'refresh');
    }

    $user = $this->ion_auth->user()->row();

    if ($this->form_validation->run() === FALSE)
    {
        // display the form
        // set the flash data error message if there is one
        $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

        $this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
        $this->data['old_password'] = [
            'name' => 'old',
            'id' => 'old',
            'type' => 'password',
            'class'=>'form-control'
        ];
        $this->data['new_password'] = [
            'name' => 'new',
            'id' => 'new',
            'type' => 'password',
            'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
            'class'=>'form-control'
        ];
        $this->data['new_password_confirm'] = [
            'name' => 'new_confirm',
            'id' => 'new_confirm',
            'type' => 'password',
            'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
            'class'=>'form-control'
        ];
        $this->data['user_id'] = [
            'name' => 'user_id',
            'id' => 'user_id',
            'type' => 'hidden',
            'value' => $user->id,
        ];

       $this->data['page']="Admin/change_password";
    $this->load->view('common/template',$this->data);


        // render
        // $this->_render_page('auth' . DIRECTORY_SEPARATOR . 'change_password', $this->data);
    }
    else
    {
        $identity = $this->session->userdata('identity');

        $change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

        if ($change)
        {
            //if the password was successfully changed
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            $this->logout();
        }
        else
        {
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect('Admin/change_password', 'refresh');
        }
    }
}

	function NumMaleFemaleData(){
          
        $row = $this->ReportModel->sum_data_charts();
      

        if(!empty($row->TotalMale) || !empty($row->TotalFemale) || !empty($row->TotalChild) || !empty($row->TotalDeath))
        {
            $totalnum = [
            	[$this->lang->line('Male'), (int) $row->TotalMale],
                [$this->lang->line('Female'), (int) $row->TotalFemale],
                [$this->lang->line('Child'),(int) $row->TotalChild],
                [$this->lang->line('Naturalmartyr'),(int) $row->TotalDeath],
                [$this->lang->line('Naturalinjured'),(int) $row->TotalInjured],
                [$this->lang->line('Totaldamage'),(int) $row->TotalDamage],
                [$this->lang->line('Office'),(int) $row->TotalOffice],
                [$this->lang->line('Mosques'),(int) $row->TotalMosques],
                [$this->lang->line('Bridge'),(int) $row->TotalBridge],
                [$this->lang->line('Road'),(int) $row->TotalRoad],
                [$this->lang->line('Livestock'),(int) $row->TotalLivestock],
            ];
          

           
        } else { $totalnum[] = ''; }

       

        echo json_encode($totalnum);
       


    }
      

    
    }
    
    /* End of file Admin.php */
    /* Location: ./application/controllers/Admin.php */



 ?>
