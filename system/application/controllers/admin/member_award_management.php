<?php

class Score_badge_management extends Controller {

	function Score_badge_management()
	{
		parent::Controller();	
        $this->load->model('Score_badge_management_model');
     }
	
	function index()
	{
		$this->scoreNBadges();
	}
	
	function scoreNBadges(){
  		$data['title']="Score and Badge Management~wannaquiz";
 		$data['main']='admin/score_badges';
		$data['score_badge_list']=$this->Score_badge_management_model->score_badge_list();
		$this->load->view('admin/admin',$data);
	}
	
	function add_score_badge(){
		$data['title']="Score and Badge Management~wannaquiz";
 		$data['main']='admin/add_score_badge';
		$this->load->view('admin/admin',$data);
	}
	
	function edit_score_badge($id){
		$data['title']="Score and Badge Management~wannaquiz";
 		$data['main']='admin/edit_score_badge';
		$data['score_badge_info']=$this->Score_badge_management_model->get_score_badge_info($id);
		$this->load->view('admin/admin',$data);
	}
	
	function insert_score_badge()
	{
		$image=$this->upload_image('badge');
		
		//CALL Auction Models
		$this->Score_badge_management_model->insert($image['file_name']);
		$this->session->set_flashdata('message','Score and Badge Added');
		redirect(ADMIN_PATH.'/score_badge_management','refresh');
		//$this->load->view('admin/admin');
	}
	
	
	function update_score_badge()
	{
	// before updating banner image 
	// delete previous banner if any 
	$score_badge_info=$this->Score_badge_management_model->get_score_badge_info($this->input->post('id'));
	//if(file_exists("badge_images/".$score_badge_info->badge_image))
			//	unlink("badge_images/".$score_badge_info->badge_image);

	if($_FILES['badge']['name']!=""){
		$image=$this->upload_image('badge');
		$image=$image['file_name'];
		}
	else
		$image=$_POST['hdbadge_image'];
	
	 //CALL Auction Models
	$this->Score_badge_management_model->update($image);
	$this->session->set_flashdata('message','Score and Badge Edited');
	redirect(ADMIN_PATH.'/score_badge_management','refresh');
	//$this->load->view('admin/admin');
	}
	
	function upload_image($file)
	{
		$config['upload_path'] = './badge_images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		$this->upload->do_upload($file);
		$data = $this->upload->data();
		return $data;					
	}

// Awards Sections-------------------------------------------
    function awards(){
       $data['title']="Awards Management~wannaquiz";
 	   $data['main']='admin/awards';
	   $data['award_list']=$this->Score_badge_management_model->award_list();
	   $this->load->view('admin/admin',$data);
    }

    function add_award(){
       $data['title']="Awards Management~wannaquiz";
 	   $data['main']='admin/add_awards';
	   $this->load->view('admin/admin',$data);
    }

    function insert_award(){
        $image=$this->upload_award_image('trophy_image');

		//CALL Auction Models
		$this->Score_badge_management_model->insert_award($image['file_name']);
		$this->session->set_flashdata('message','Award Added');
		redirect(ADMIN_PATH.'/score_badge_management/awards','refresh');

    }

    function edit_award($id){
        $data['title']="Award Management~wannaquiz";
 		$data['main']='admin/edit_award';
		$data['award_info']=$this->Score_badge_management_model->get_award_info($id);
		$this->load->view('admin/admin',$data);
    }

    function update_award(){
        if($_FILES['trophy_image']['name']!=""){
            $image=$this->upload_award_image('trophy_image');
            $image=$image['file_name'];
            }
        else
            $image=$_POST['hdtrophy_image'];

        $this->Score_badge_management_model->update_award($image);
        $this->session->set_flashdata('message','Award Edited');
        redirect(ADMIN_PATH.'/score_badge_management/awards','refresh');
    }

    function delete_award($id){
       $this->db->where("id", $id);
       $this->db->delete("tbl_awards");
       $this->session->set_flashdata('message','Selected Award Deleted Successfully.');
       redirect(ADMIN_PATH.'/score_badge_management/awards','refresh');
    }

    function upload_award_image($file)
	{
		$config['upload_path'] = './award_images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		$this->upload->do_upload($file);
		$data = $this->upload->data();
		return $data;
	}

//Quiz Bonus Point Settings .................................................
    function quiz_bonus_points(){
       $data['title']="Quiz Bonus Point Management~wannaquiz";
 	   $data['main']='admin/quiz_bonus_point';
	   $data['quiz_bonus_point_list']=$this->Score_badge_management_model->quiz_bonus_point_list();
	   $this->load->view('admin/admin',$data);
    }

    function add_quiz_bonus_point(){
       $data['title']="Quiz Bonus Point Management~wannaquiz";
 	   $data['main']='admin/add_quiz_bonus_point';
	   $this->load->view('admin/admin',$data);
    }

    function insert_quiz_bonus_point(){
		$this->Score_badge_management_model->insert_quiz_bonus_point();
		$this->session->set_flashdata('message','Award Added');
		redirect(ADMIN_PATH.'/score_badge_management/quiz_bonus_points','refresh');
    }

    function edit_quiz_bonus_point($id){
        $data['title']="Quiz Bonus Point Management~wannaquiz";
 		$data['main']='admin/edit_quiz_bonus_point';
		$data['quiz_bonus_point_info']=$this->Score_badge_management_model->get_quiz_bonus_point_info($id);
		$this->load->view('admin/admin',$data);
    }

    function update_quiz_bonus_point(){
        $this->Score_badge_management_model->update_quiz_bonus_point();
        $this->session->set_flashdata('message','Quiz Bonus Point Edited');
        redirect(ADMIN_PATH.'/score_badge_management/quiz_bonus_points','refresh');
    }

    function delete_quiz_bonus_point($id){
       $this->db->where("id", $id);
       $this->db->delete("tbl_quiz_answered_bonus_points");
       $this->session->set_flashdata('message','Selected Award Deleted Successfully.');
       redirect(ADMIN_PATH.'/score_badge_management/quiz_bonus_points','refresh');
    }

   
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */