<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
            $this->load->model('admin_model');
    }

	public function login()
	{
        
        $data = array();
        $this->load->view('admin/login',$data);
       
	}
    public function validate_user(){
        $userid = $this->session->userdata('userid');
        if($userid){
            return true;
        }else{
            redirect('admin/login');
        }
    }
    public function validatelogin(){

           
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$que=$this->db->query("select * from users where email='".$email."' and password='$password'");
			$row = $que->num_rows();
            $result = $que->row();
            
            $newdata = array(
                'username' => $result->name,
                'useremail' => $result->email,
                'userid' => $result->id
            );
            $this->session->set_userdata($newdata);
			if($row)
			{
			    redirect('admin/dashboard');
			}
			else
			{
		        $data['error']="<h3 style='color:red'>Invalid login details</h3>";
                redirect('admin/login');
			}	
    }

    public function dashboard(){
        $userid = $this->session->userdata('userid');
        //echo $userid;exit;
        if($userid){
            $data['careers'] = $this->admin_model->career_count();
            //print_r($data['careers']);exit;
            //$data['contacts'] = $this->admin_model->contact_count();
            $data['css_links']='admin/includes/css-links';
            $data['js_links']='admin/includes/js-links';
            $data['header']='admin/includes/header';
            $data['sidemenu']='admin/includes/sidemenu';
            $data['footer']='admin/includes/footer';
            
            $this->load->view('admin/dashboard',$data);
        }else{
            redirect('admin/login');
        }
       
    }
    public function view_careers(){
        $userid = $this->session->userdata('userid');
        if($userid){
        $data['careers'] = $this->admin_model->get_careers();
        $data['css_links']='admin/includes/css-links';
        $data['js_links']='admin/includes/js-links';
        $data['header']='admin/includes/header';
        $data['sidemenu']='admin/includes/sidemenu';
        $data['footer']='admin/includes/footer';
        
		$this->load->view('admin/view-careers',$data);
        }else{
            redirect('admin/login');
        }
    }
    public function view_products(){
     
        $data['products'] = $this->admin_model->get_products();
        $data['css_links']='admin/includes/css-links';
        $data['js_links']='admin/includes/js-links';
        $data['header']='admin/includes/header';
        $data['sidemenu']='admin/includes/sidemenu';
        $data['footer']='admin/includes/footer';
        
		$this->load->view('admin/view-products',$data);
    }
    public function add_product(){
        $this->form_validation->set_rules('chemical_name', 'Chemical Name of the Product', 'trim|required');
        $this->form_validation->set_rules('product_code', 'Product Code', 'trim|required');
        $this->form_validation->set_rules('cas_number', 'CAS Number', 'trim|required');
        $this->form_validation->set_rules('api_name', 'Name of the API', 'trim|required'); 
        if (empty($_FILES['structure']['name']))
         {
             $this->form_validation->set_rules('structure', 'Structure', 'required');
         }
        if ($this->form_validation->run() == FALSE)
        {
            $data['css_links']='admin/includes/css-links';
            $data['js_links']='admin/includes/js-links';
            $data['header']='admin/includes/header';
            $data['sidemenu']='admin/includes/sidemenu';
            $data['footer']='admin/includes/footer';
            $this->load->view('admin/add-product',$data);
        }else{
            $path = 'assets/backend/images/products';
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 20000;
            $config['max_width'] = 1500;
            $config['max_height'] = 1500;
            $this->load->library('upload', $config);
            $this->upload->do_upload('structure');
            $upload_data = $this->upload->data();
            $full_path = base_url().$path.'/'.$upload_data['file_name'];
            $data = array(
                'chemical_name'=> $this->input->post('chemical_name'),
                'product_code'=>$this->input->post('product_code'),
                'cas_number'=> $this->input->post('cas_number'),
                'api_name'=> $this->input->post('api_name'),
                'structure'=> $full_path
            );
            $query = $this->admin_model->add_product($data);
            if($query){
                redirect('admin/view-products');
            }
        }
        
		
    }

    public function edit_product($id){
        $this->form_validation->set_rules('chemical_name', 'Chemical Name of the Product', 'trim|required');
        $this->form_validation->set_rules('product_code', 'Product Code', 'trim|required');
        $this->form_validation->set_rules('cas_number', 'CAS Number', 'trim|required');
        $this->form_validation->set_rules('api_name', 'Name of the API', 'trim|required'); 
        // if (empty($_FILES['structure']['name']))
        //  {
        //      $this->form_validation->set_rules('structure', 'Structure', 'required');
        //  }
        if ($this->form_validation->run() == FALSE)
        {
            $data['product'] = $this->admin_model->get_product_single($id);
            //print_r($data['product']);exit;
            $data['css_links']='admin/includes/css-links';
            $data['js_links']='admin/includes/js-links';
            $data['header']='admin/includes/header';
            $data['sidemenu']='admin/includes/sidemenu';
            $data['footer']='admin/includes/footer';
            $this->load->view('admin/edit-product',$data);
        }else{
            if($_FILES['structure']['name']!="")
            {
                $path = 'assets/backend/images/products';
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 20000;
                $config['max_width'] = 1500;
                $config['max_height'] = 1500;
                $this->load->library('upload', $config);
                $this->upload->do_upload('structure');
                $upload_data = $this->upload->data();
                $full_path = base_url().$path.'/'.$upload_data['file_name'];
            }else{
                $full_path = $this->input->post('structure_edit');
            }

            $data = array(
                'chemical_name'=> $this->input->post('chemical_name'),
                'product_code'=>$this->input->post('product_code'),
                'cas_number'=> $this->input->post('cas_number'),
                'api_name'=> $this->input->post('api_name'),
                'structure'=> $full_path
            );
            $query = $this->admin_model->edit_product($data,$id);
            if($query){
                redirect('admin/view-products');
            }
        }
        
		
    }
    public function delete_career($id){
       $this->admin_model->delete_career($id);
      
    }
    public function logout(){
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    redirect('admin/login');
      
     }
}
