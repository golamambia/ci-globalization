<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class globalpages extends CI_Controller {
  public function __construct()
	{
		parent::__construct();
		$this->load->model(['AuthModel']);
		$this->load->database();
		$this->load->helper(['security', 'url']);
		$this->load->library(['form_validation','user_agent','session','email']);

  }
    public function index(){
        $this->load->view('main/layout/head');
        $this->load->view('main/layout/header');
        $this->load->view('main/index');
        $this->load->view('main/layout/todaysection');
        $this->load->view('main/layout/footer');   
     }
   public function service(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/service');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
     } 
   public function globaleorservices(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/global-employer-of-record-services');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
     }
   public function internationalpeoservice(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/international-peo-service');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
    }
   public function globaltalentacquisition(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/global-talent-acquisition');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
     }
   public function globalprojectmanagementservice(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/global-project-management-service');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
     } 
   public function  globalpayroll(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/global-payroll');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
    }
   public function hrandcompliancemanagementservice(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/hr-and-compliance-management-service');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
    }
   public function multijurisdictionalservice(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/multijurisdictional-service');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
    }
   public function ourglobalreach(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/our-global-reach');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
    }
   public function aboutus(){
       $this->load->view('main/layout/head');
       $this->load->view('main/layout/header');
       $this->load->view('main/about-us');
       $this->load->view('main/layout/todaysection');
       $this->load->view('main/layout/footer');  
    }
   public function ourapproach(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/our-approach');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer'); 
    }
   public function leadership(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/leadership');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');   
    }
   public function whyworkwithus(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/why-work-with-us');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');  
    }
   public function blog (){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/blog');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer'); 
     }
   public function careers(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/why-work-with-us');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
     }
   public function contactus(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/contact-us');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
    }
   public function uspayroll(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/us-payroll');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');  
    }
   public function locateus(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/locate-us');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
    }
   public function settingupsubsidiaryinus(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/setting-up-subsidiary-in-us');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');  
    }
   public function uscompensationandbenefits(){
    $this->load->view('main/layout/head');
    $this->load->view('main/layout/header');
    $this->load->view('main/us-compensation-and-benefits');
    $this->load->view('main/layout/todaysection');
    $this->load->view('main/layout/footer');
    }
   public function usemployerofrecord(){
        $this->load->view('main/layout/head');
        $this->load->view('main/layout/header');
        $this->load->view('main/us-employer-of-record');
        $this->load->view('main/layout/todaysection');
        $this->load->view('main/layout/footer');
    }
   public function usvisaandworkpermit(){
            $this->load->view('main/layout/head');
            $this->load->view('main/layout/header');
            $this->load->view('main/us-visa-and-work-permit');
            $this->load->view('main/layout/todaysection');
            $this->load->view('main/layout/footer');
            }
   public function workenquires(){
                $this->load->view('main/layout/head');
                $this->load->view('main/layout/header');
                $this->load->view('main/work-enquires');
                $this->load->view('main/layout/todaysection');
                $this->load->view('main/layout/footer');
                }
    

}


?>