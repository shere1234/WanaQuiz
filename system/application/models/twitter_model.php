<?php
    class Twitter_model extends Model{

        function isOurUser($fb_uid){
            $qry="select user_id from tbl_members where twitter_uid=?";
            $res=$this->db->query($qry,array($fb_uid));
            if($res->num_rows()!=0){
                return 'old';
            }else{
                return 'new';
            }
        }
        function create_user($me){            
//var_dump($me);
//exit;
            $this->load->model('Award_model');
            $current_date=current_date_time_stamp();
                        
            #$bday = explode('/',$me['birthday']);            
            #$dod = $bday[1];
            #$dom = $bday[0];
            #$doy = $bday[2];
            #$dob = mktime(0,0,0,$dom,$dod,$doy);            
#            $dob = '';
            $name = explode(' ',$me['name']);
#exit($name[0]);                   
            $options=array(
            'username'=>$me['screen_name'],
            'twitter_uid' => $me['id'],
            'joined_date'=>$current_date,
            'user_credits'=>'0');

            $this->db->insert('tbl_members',$options);
            $id=$this->db->insert_id();
            
          
             $options1 = array( 
            'first_name'=>$name[0],
#'last_name'=>$me['last_name'],
#           'email'=>$me['email'],
#            'gender'=> $me['gender'],
#            'dob'=>$dob,
#            'website' => $me['link'],
            'profile_picture'=>$me['profile_image_url'],
            'joined_date'=>$current_date,
            'member_id' =>$id);
            $this->db->insert('tbl_member_profile',$options1);            

            $options2 = array(
             'member_id' =>$id,
             'city' => $me['location'],
             'state'=>$me['location'],
             'country' => 'United States'
         );
         $this->db->insert('tbl_address', $options2);
            

            $categories = $this->Category_model->get_categories();
            foreach($categories as $category)
            {
                $data = array('user_id'=>$id,
                                'category_id'=>$category->id,
                                'category_titles'=>'1',
                                'points'=>0
                            );
                $this->db->insert('tbl_member_category_titles',$data);
            }

        $this->Award_model->insert_user_category_award($id);

        return $id;
                             
        }
        
        function get_user_id($fb_uid){
            $qry="select user_id from tbl_members where twitter_uid=?";
            $res=$this->db->query($qry,array($fb_uid));
            $data=$res->row_array();
            return $data['user_id'];
        }
        
        function getUser_firstname($id){
            $qry="select first_name from tbl_member_profile where member_id=?";
            $res=$this->db->query($qry,array($id));
            $data=$res->row_array();
            return $data['first_name'];
        }

    }
    ?>