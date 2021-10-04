<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainPage extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
            $this->load->model('main_model');
            
    }
	public function index()
	{
        $data['css_links']='frontend/includes/css-links-main';
        $data['js_links']='frontend/includes/js-links-main';
        $data['footer']='frontend/includes/footer';
        $data['menu']='frontend/includes/main-menu';
		$this->load->view('frontend/index',$data);
	}
   
	
    public function about_us()
	{
        $data['css_links']='frontend/includes/css-links';
        $data['js_links']='frontend/includes/js-links';
        $data['footer']='frontend/includes/footer';
        $data['menu']='frontend/includes/menu';
		$this->load->view('frontend/about-us',$data);
	}

    public function careers(){
      
            $data['css_links']='frontend/includes/css-links';
            $data['js_links']='frontend/includes/js-links';
            $data['footer']='frontend/includes/footer';
            $data['menu']='frontend/includes/menu';
    		$this->load->view('frontend/careers',$data);
        }

    public function validate_careers(){
         $this->form_validation->set_rules('departments', 'Functinal Area', 'trim|required');
         $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
         $this->form_validation->set_rules('total_experience', 'Total Experience', 'trim|required');
         $this->form_validation->set_rules('name', 'Name', 'trim|required'); 
         $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required'); 
         //$this->form_validation->set_rules('resume', 'resume', 'trim|required'); 
         if (empty($_FILES['resume']['name']))
         {
             $this->form_validation->set_rules('resume', 'Resume', 'required');
         }
         if ($this->form_validation->run() == FALSE)
         { 
             $array = array(
                 'error'   => true,
                 'departments_error' => form_error('departments'),
                'name_error' => form_error('name'),
                'email_error' => form_error('email'),
                'mobile_error' => form_error('mobile'),
                'total_experience_error' => form_error('total_experience'),
                 'resume_error' => form_error('resume'),
                );
         }else{
            //print_r($_FILES);
            $name =  $this->input->post('name');
            $mobile = $this->input->post('mobile');
            $email = $this->input->post('email');
            $departments = $this->input->post('departments');
            $total_experience = $this->input->post('total_experience');
           

            


               
            
            $sourcePath = $_FILES['resume']['tmp_name'];
            $ext = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);
            $targetPath = "assets/resumes/".$name."_".$mobile.".".$ext;
            move_uploaded_file($sourcePath,$targetPath);
            
            $emaildata = array(
                'name'=> $name,
                'email'=> $email,
                'mobile'=> $mobile,
                'departments'=> $departments,
                'total_experience'=> $total_experience,
                'resume' => $targetPath
            );

            $query = $this->main_model->insert_careers($emaildata);

            // $this->email->from('info@satyadevapharma.com', 'SatyaDeva');
            // $this->email->to('karthikreddyn2311@gmail.com');
            // $this->email->set_mailtype("html");
            // $body = $this->load->view('admin/email',$emaildata,TRUE);
            // $this->load->library('email');
            // $this->email->subject('Resume Details');
            // $this->email->attach($targetPath);
            // $this->email->message($body);
            //$this->email->print_debugger(array('headers'));
           // if ($this->email->send()) {
                $array = array(
                    'success'=> true,
                    'message'=>'Your Details Successfully Completed. Our Team will contact you soon'
                    );
           // }else{
                
           // }
        }
        echo json_encode($array);

    }

            
        
    public function product_list(){
        $data['css_links']='frontend/includes/css-links';
        $data['js_links']='frontend/includes/js-links';
        $data['footer']='frontend/includes/footer';
        $data['menu']='frontend/includes/menu';
		$this->load->view('frontend/product-list',$data);
    }
    public function infrastructure(){
        $data['css_links']='frontend/includes/css-links';
        $data['js_links']='frontend/includes/js-links';
        $data['footer']='frontend/includes/footer';
        $data['menu']='frontend/includes/menu';
		$this->load->view('frontend/infrastructure',$data);
    }
    public function business_development(){
        $data['css_links']='frontend/includes/css-links';
        $data['js_links']='frontend/includes/js-links';
        $data['footer']='frontend/includes/footer';
        $data['menu']='frontend/includes/menu';
		$this->load->view('frontend/business-development',$data);
    }

    public function contact(){
        $data['css_links']='frontend/includes/css-links';
        $data['js_links']='frontend/includes/js-links';
        $data['footer']='frontend/includes/footer';
        $data['menu']='frontend/includes/menu';
        $this->load->view('frontend/contact',$data);
    }

    public function validate_contact(){
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required'); 
        if ($this->form_validation->run() == FALSE)
        { 
            $array = array(
                'error'   => true,
                'name_error' => form_error('name'),
                'email_error' => form_error('email'),
                'phone_error' => form_error('phone'),
                'message_error' => form_error('message')
               );
        }else{
           
            $name =  $this->input->post('name');
            $emaildata = array(
                'name'=> $name,
                'email'=> $this->input->post('email'),
                'phone'=> $this->input->post('phone'),
                'message'=> $this->input->post('message'),
            );   
            $this->email->from('info@satyadevapharma.com', 'SatyaDeva');
            $this->email->to('karthikreddyn2311@gmail.com');
            $this->email->set_mailtype("html");
            $body = $this->load->view('admin/contact-email',$emaildata,TRUE);
            $this->load->library('email');
            $this->email->subject('Contact Details');
            $this->email->message($body);
            $this->email->print_debugger(array('headers'));
            if ($this->email->send()) {
                $array = array(
                    'success'=> true,
                    'message'=>'Your Details Successfully Completed. Our Team will contact you soon'
                    );
            }else{
                
            }
        }
        echo json_encode($array);

    }


//     public function contact(){
//         $this->form_validation->set_rules('name', 'Name', 'trim|required');
//         $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
//         $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
//         $this->form_validation->set_rules('message', 'Message', 'trim|required');
//         // if (empty($_FILES['name']['email']['phone']['message']))
//         // {
//         //     $this->form_validation->set_rules('name','email','phone','message', 'required');
//         // }
//         if ($this->form_validation->run() == FALSE)
//         {
//         $data['css_links']='frontend/includes/css-links';
//         $data['js_links']='frontend/includes/js-links';
//         $data['footer']='frontend/includes/footer';
//         $data['menu']='frontend/includes/menu';
//         $this->load->view('frontend/contact',$data);
//     }else{
//         $name =  $this->input->post('name');
//          $emaildata = array(
//             'name'=> $name,
//             'name'=> $this->input->post('name'),
//             'email'=> $this->input->post('email'),
//             'phone'=> $this->input->post('phone'),
//             'message'=> $this->input->post('message'),
//                 );   
//     $this->email->from('info@satydevapharma.com', 'SatyaDeva');
//     $this->email->to('karthikreddyn2311@gmail.com');
//     $this->email->set_mailtype("html");
//     $body = $this->load->view('admin/contact-email',$emaildata,TRUE);
//     $this->load->library('email');
//     $this->email->subject('Contact Details');
//     $this->email->message($body);
//     if ($this->email->send()) {
//         $this->session->set_flashdata('message_name', 'Your Details Successfully Completed. Our Team will contact you soon');
//                 redirect('contact');
//    } else {
//        show_error($this->email->print_debugger());
//    }
// }
//     }
    
    public function reactions_handled(){
        $data['css_links']='frontend/includes/css-links';
        $data['js_links']='frontend/includes/js-links';
        $data['footer']='frontend/includes/footer';
        $data['menu']='frontend/includes/menu';
		$this->load->view('frontend/reactions-handled',$data);
    }
    public function contract_manufacturing(){
        $data['css_links']='frontend/includes/css-links';
        $data['js_links']='frontend/includes/js-links';
        $data['footer']='frontend/includes/footer';
        $data['menu']='frontend/includes/menu';
		$this->load->view('frontend/contract-manufacturing',$data);
    }
    public function research_development(){
        $data['css_links']='frontend/includes/css-links';
        $data['js_links']='frontend/includes/js-links';
        $data['footer']='frontend/includes/footer';
        $data['menu']='frontend/includes/menu';
		$this->load->view('frontend/research-development',$data);
    }
    public function environment_safety_standards(){
        $data['css_links']='frontend/includes/css-links';
        $data['js_links']='frontend/includes/js-links';
        $data['footer']='frontend/includes/footer';
        $data['menu']='frontend/includes/menu';
		$this->load->view('frontend/environment-safety-standards',$data);
    }
}
