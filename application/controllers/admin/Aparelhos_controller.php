<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aparelhos_controller extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }


    public function index()
    {
        $data['page_title'] = 'All Registered Users';
        $data['users'] = $this->common_model->get_all_user();
        $data['country'] = $this->common_model->select('country');
        $data['count'] = $this->common_model->get_user_total();
        $data['main_content'] = $this->load->view('admin/user/users', $data, TRUE);
         $data = array();
        $data['aparelhos'] = $this->common_model->get_all_aparelhos();
        $this->load->view('admin/user/add_aparelhos',$data);
    }

    //-- add new aparelho
    public function add_aparelhos()
    {   
        if ($_POST) {

            $data = array(
                'id_aparelho' => $_POST['id_aparelho'],
                'descricao_aparelho' => $_POST['descricao_aparelho'],
                'codigo_aparelho' => $_POST['codigo_aparelho']
                
            );
                $user_id = $this->common_model->insert($data, 'aparelhos');
            
               
                $this->session->set_flashdata('msg', 'Aparelho adicionado com sucesso');
                redirect(base_url('admin/user/Aparelhos_controller'));
        }
    }

    public function all_user_list()
    {
	 	$data['page_title'] = 'All Registered Users';
        $data['users'] = $this->common_model->get_all_user();
        $data['country'] = $this->common_model->select('country');
        $data['count'] = $this->common_model->get_user_total();
        $data['main_content'] = $this->load->view('admin/user/users', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- update aparelhos info
    public function update($id)
    {
        if ($_POST) {

    $data = array(
                'id_aparelho' => $_POST['id_aparelho'],
                'descricao_aparelho' => $_POST['descricao_aparelho'],
                'codigo_aparelho' => $_POST['codigo_aparelho']
            );

            
            
            $this->common_model->edit_option_aparelho($data, $id, 'aparelhos');
            $this->session->set_flashdata('msg', 'aparelho Atualizado');
            redirect(base_url('admin/Aparelhos_controller'));

        }
		 $data = array();

        $data['aparelhos'] = $this->common_model->get_single_aparelho_info($id);
        $data['main_content'] = $this->load->view('admin/user/edit_aparelho', $data, TRUE);
		$data['page_title'] = 'Edit Users';
        $this->load->view('admin/index', $data);
        
    }

    
    //-- active user
    public function active($id) 
    {
        $data = array(
            'status' => 1
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $id,'user');
        $this->session->set_flashdata('msg', 'User active Successfully');
        redirect(base_url('admin/user/all_user_list'));
    }

    //-- deactive user
    public function deactive($id) 
    {
        $data = array(
            'status' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $id,'user');
        $this->session->set_flashdata('msg', 'User deactive Successfully');
        redirect(base_url('admin/user/all_user_list'));
    }

    //-- delete user
    public function delete($id)
    {
        $this->common_model->delete_aparelho($id,'aparelhos'); 
        $this->session->set_flashdata('msg', 'aparelho deletado com sucesso');
        redirect(base_url('admin/Aparelhos_controller'));
    }


    public function power()
    {   
		$data['page_title'] = 'Add User Role';
        $data['powers'] = $this->common_model->get_all_power('user_power');
        $data['main_content'] = $this->load->view('admin/user/user_power', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- add user power
    public function add_power()
    {   
        if (isset($_POST)) {
            $data = array(
                'name' => $_POST['name'],
                'power_id' => $_POST['power_id']
            );
            $data = $this->security->xss_clean($data);
            
            //-- check duplicate power id
            $power = $this->common_model->check_exist_power($_POST['power_id']);
            if (empty($power)) {
                $user_id = $this->common_model->insert($data, 'user_power');
                $this->session->set_flashdata('msg', 'Power added Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Power id already exist, try another one');
            }
            redirect(base_url('admin/user/power'));
        }
        
    }

    //--update user power
    public function update_power()
    {   
        if (isset($_POST)) {
            $data = array(
                'name' => $_POST['name']
            );
            $data = $this->security->xss_clean($data);
            
            $this->session->set_flashdata('msg', 'Power updated Successfully');
            $user_id = $this->common_model->edit_option($data, $_POST['id'], 'user_power');
            redirect(base_url('admin/user/power'));
        }
        
    }

    public function delete_power($id)
    {
        $this->common_model->delete($id,'user_power'); 
        $this->session->set_flashdata('msg', 'Power deleted Successfully');
        redirect(base_url('admin/user/power'));
    }


}