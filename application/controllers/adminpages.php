<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class adminpages extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model(['AuthModel']);
		$this->load->database();
		$this->load->helper(['security', 'url']);
		$this->load->library(['form_validation','user_agent','session','email']);
        if(!$this->session->userdata('is_logged_in')){
            redirect('index');
      }
	}
    public function index(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/layout/footer');  
    }
    public function edit_main_page(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_main_page');
        $this->load->view('admin/layout/footer');  
    }
    public function edit_services_page(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_service_page');
        $this->load->view('admin/layout/footer');  
    }
    public function edit_globalreach_page(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_globalreach_page');
        $this->load->view('admin/layout/footer');  
    }
    public function edit_about_page(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_about_page');
        $this->load->view('admin/layout/footer');  
    }
    public function edit_carrer_page(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_carrer_page');
        $this->load->view('admin/layout/footer');  
    }
    public function edit_contact_us(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_contact_us');
        $this->load->view('admin/layout/footer');  
    }
    public function global_eor(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_global_eor');
        $this->load->view('admin/layout/footer');  
    }
    public function global_peo(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_peo');
        $this->load->view('admin/layout/footer');  
    }
    public function global_talent(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_global_talent');
        $this->load->view('admin/layout/footer');  
    }
    public function global_project(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_global_project');
        $this->load->view('admin/layout/footer');  
    }
    public function global_payroll(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_global_payroll');
        $this->load->view('admin/layout/footer');  
    }
    public function global_hr(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_global_hr');
        $this->load->view('admin/layout/footer');  
    }
    public function global_billing(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_global_billing');
        $this->load->view('admin/layout/footer');  
    }
    public function global_mobility(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_global_mobility');
        $this->load->view('admin/layout/footer');  
    }
    public function edit_all_about_page(){
        $this->load->view('admin/layout/head');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/edit_all_about_page');
        $this->load->view('admin/layout/footer');  
    }
    
    
    
    
    public function logo_upload(){
        $config['upload_path'] = 'assets/img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_pic')) 
		{
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('admin/edit_main_page', $error);
        } 
		else 
		{
            $url = $this->upload->data();
            $colom = $this->input->post('table_filed');
           $data[$colom] = 'assets/img/'.$url['file_name'];
           $table= $this->input->post('table');
           $redirect= $this->input->post('redirect');
            $this->AuthModel->update_data($data ,$table);
            if($redirect==""){
		    redirect('main-page');
            }else{
		    redirect($redirect);

            }	
        }
    }
    public function update_banner_text(){
        $data['banner_heading'] = $this->input->post('heading');
        $data['banner_content'] = $this->input->post('content');
        $table= "banner_section";
            $this->AuthModel->update_data($data ,$table);
            redirect('main-page');	
    }
    public function update_service_text(){
        $data['service_heading'] = $this->input->post('heading');
        $data['service_content'] = $this->input->post('content');
        $table= "banner_section";
            $this->AuthModel->update_data($data ,$table);
            redirect('main-page');	
    }
    public function update_about_text(){
        $data['about_us_content'] = $this->input->post('content');
        $table= "banner_section";
            $this->AuthModel->update_data($data ,$table);
            redirect('main-page');	
    }
    public function update_today_text(){
        $data['today_content'] = $this->input->post('content');
        $table= "banner_section";
            $this->AuthModel->update_data($data ,$table);
            redirect('main-page');	
    }
    public function update_address_text(){
        $data['address'] = $this->input->post('address');
        $data['email'] = $this->input->post('email');
        $data['contact'] = $this->input->post('contact');
        $table= "header_section";
            $this->AuthModel->update_data($data ,$table);
            redirect('main-page');	
    }
    public function add_service(){
        $config['upload_path'] = 'assets/img/service-pages-images/service-image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_pic')) 
		{
            $error = array('error' => $this->upload->display_errors());

            redirect('error-page',$error);	
        } 
		else 
		{
            $url = $this->upload->data();
            $colom = $this->input->post('table_filed');
           $path= 'assets/img/service-pages-images/service-image/'.$url['file_name'];
           $name= $this->input->post('name');
           $content= $this->input->post('content');
           $readmore= $this->input->post('readmore');
           
           $table= 'our_services';
            $this->AuthModel->addservice($path,$name,$content,$readmore ,$table);
		    redirect('main-page');	
        }
    }

/*------------------------SERVICE PAGES CODE ----------------------------------------*/

    public function service_image_upload(){
        $config['upload_path'] = 'assets/img/service-pages-images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_pic')) 
		{
            $error = array('error' => $this->upload->display_errors());

            redirect('error-page',$error);	
        } 
		else 
		{
            $url = $this->upload->data();
            $colom = $this->input->post('table_filed');
           $data[$colom] = 'assets/img/service-pages-images/'.$url['file_name'];
           $table= $this->input->post('table');
           $redirect= $this->input->post('redirect');
            $this->AuthModel->update_data($data ,$table);
		    redirect($redirect);	
        }
    }

    public function update_servicebanner_text(){
        $data['banner_top1_heading'] = $this->input->post('heading1');
        $data['banner_top2_heading'] = $this->input->post('heading2');
        $data['banner_top3_heading'] = $this->input->post('heading3');
        $table= $this->input->post('table');
        $redirect = $this->input->post('redirect');
        $this->AuthModel->update_data($data ,$table);
            redirect($redirect);	
    }
    public function update_servicesection_text(){
        $data['section2_heading'] = $this->input->post('heading');
        $data['section_content'] = $this->input->post('content');
        $table= $this->input->post('table');
        $redirect = $this->input->post('redirect');
            $this->AuthModel->update_data($data ,$table);
            redirect($redirect);	
    }

    public function update_fsidepannel_text(){
        $data['f_sidepanel_heading'] = $this->input->post('heading');
        $data['f_sidepanel_subheading'] = $this->input->post('subheading');
        $data['f_sidepanel_content'] = $this->input->post('content');
        $table= $this->input->post('table');
        $redirect = $this->input->post('redirect');
            $this->AuthModel->update_data($data ,$table);
            redirect($redirect);	
    }
    public function update_ssidepannel_text(){
        $data['s_sidepanel_heading'] = $this->input->post('heading');
        $data['s_sidepanel_subheading'] = $this->input->post('subheading');
        $data['s_sidepanel_content'] = $this->input->post('content');
        $table= $this->input->post('table');
        $redirect = $this->input->post('redirect');
            $this->AuthModel->update_data($data ,$table);
            redirect($redirect);	
    }
    public function update_tsidepannel_text(){
        $data['t_sidepanel_heading'] = $this->input->post('heading');
        $data['t_sidepanel_subheading'] = $this->input->post('subheading');
        $data['t_sidepanel_content'] = $this->input->post('content');
        $table= $this->input->post('table');
        $redirect = $this->input->post('redirect');
            $this->AuthModel->update_data($data ,$table);
            redirect($redirect);	
    }


/*------------------------contact us page CODE ----------------------------------------*/
public function update_cbanner_text(){
    $data['banner_heading'] = $this->input->post('heading');
    $data['banner_content'] = $this->input->post('content');
    $table= "contact_section";
        $this->AuthModel->update_data($data ,$table);
        redirect('contact-page');	
}

public function contact_us(){
    $data['name'] = $this->input->post('rd_request_name');
    $data['b_email'] = $this->input->post('rd_request_bemail');
    $data['contact_no'] = $this->input->post('rd_request_contact');
    $data['company_name'] = $this->input->post('rd_request_cname');
    $data['looking'] = $this->input->post('job-function');
    $data['locate'] = $this->input->post('job-locate');
    $data['help'] = $this->input->post('job-help');
    $data['message'] = $this->input->post('rd_request_message');
    $table= "user_contact_form";
        $this->AuthModel->addcontact($data ,$table);
        redirect('contact-us');	
}
public function subscribe(){
    $data['email'] = $this->input->post('email');
    $redirect= $this->input->post('url');
    
    $table= "subscribe";
        $this->AuthModel->addcontact($data ,$table);
        redirect('index');	
}
public function request(){
    $data['fname'] = $this->input->post('fname');
    $data['lname'] = $this->input->post('lname');
    $data['bemail'] = $this->input->post('bemail');
    $data['located'] = $this->input->post('located');
    $data['expand'] = $this->input->post('expand');
    $data['message'] = $this->input->post('message');
     $redirect=$this->input->post('url');
    $table= "request";
        $this->AuthModel->addcontact($data ,$table);
        redirect('our-global-reach');	
}
/*----------------------- global reach page CODE ----------------------------------------*/
public function update_globalbanner_text(){
    $data['banner_heading'] = $this->input->post('heading');
    $data['banner_content'] = $this->input->post('content');
    $table= "globalreach_section";
        $this->AuthModel->update_data($data ,$table);
        redirect('globalreach-page');	
}

public function update_globalabout_text(){
    $data['about_us_content'] = $this->input->post('content');
    $table= "globalreach_section";
        $this->AuthModel->update_data($data ,$table);
        redirect('globalreach-page');	
}
public function update_about_us(){
    $col= $this->input->post('col');
    $data[$col] = $this->input->post('heading');
    $table= $this->input->post('table');
    $redirect = $this->input->post('redirect');
        $this->AuthModel->update_data($data ,$table);
        redirect($redirect);	
}

}


?>