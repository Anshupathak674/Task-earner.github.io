<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    function gen_otp()
    {
        $user_name = $this->input->post('user_name');

        $user_password = $this->input->post('user_password');
        $user_confirm = $this->input->post('user_confirm');
        $user_email = $this->input->post('user_email');
        $user_referal_code = $this->input->post('user_referal_code');
        
        $otp1 =  rand(100000, 999999);;

        $this->session->set_userdata('temp_otp', $otp1);
        $this->session->set_userdata('temp_name', $user_name);
        $this->session->set_userdata('temp_pass', $user_password);
        $this->session->set_userdata('temp_confirm', $user_confirm);
        $this->session->set_userdata('temp_email', $user_email);
        $this->session->set_userdata('temp_referal_code', $user_referal_code);
      
    }

    
    function check_user_signup()
    {
        $user_name = $this->session->userdata('temp_name');
        $user_password = $this->session->userdata('temp_pass');
        $user_confirm =  $this->session->userdata('temp_confirm');
        $user_email =  $this->session->userdata('temp_email');
        $user_referal_code =  $this->session->userdata('temp_referal_code');

        extract($this->input->post());
        $this->session->unset_userdata('temp_name');
        $this->session->unset_userdata('temp_pass');
        $this->session->unset_userdata('temp_confirm');
        $this->session->unset_userdata('temp_email');
        $this->session->unset_userdata('temp_referal_code');

        if ($user_password == $user_confirm) {

            $this->db->select('*');
            $this->db->from('user_details');
            $this->db->where('user_email', $user_email);

            $query = $this->db->get();
            $login = $query->row();

            if ($login) {
                return 2;
            } else {

                $length = 10;
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                 $randomString;

                date_default_timezone_set("Asia/Kolkata");
                $date = date('Y-m-d h:i:sa ');

                $formArray = array(
                    'user_password' => $user_password,
                    'user_date'  => $date,
                    'user_email'  => $user_email,
                    'user_name'  => $user_name,
                    'user_referal_code' => $randomString
                );
                $this->db->insert('user_details', $formArray);
                $last_id = $this->db->insert_id();


                $this->db->select('*');
                $this->db->from('user_details');
                $this->db->where('user_referal_code', $user_referal_code);

                $query1 = $this->db->get();
                $login1 = $query1->row();
                if ($login1) {

                    $formArray1 = array(
                        'user_wallet_amount' => 5
                    );
                    $this->db->where('user_details_id', $last_id);
                    $this->db->update('user_details', $formArray1);


                    $new = $login1->user_wallet_amount + 5;

                    $formArray1 = array(
                        'user_wallet_amount' => $new
                    );
                    $this->db->where('user_details_id', $login1->user_details_id);
                    $this->db->update('user_details', $formArray1);

                }

                $this->db->select('*');
                $this->db->from('user_details');
                $this->db->where('user_details_id', $last_id);
                $query = $this->db->get();
                $login2 = $query->row();
        
                if ($login2) {
                    $this->session->set_userdata('user_email', $login2->user_email);
                    $this->session->set_userdata('user_wallet_amount', $login2->user_wallet_amount);
                    $this->session->set_userdata('user_name', $login2->user_name);
                    $this->session->set_userdata('user_details_id', $login2->user_details_id);
                    $this->session->set_userdata('user_profile_pic', $login2->user_profile_pic);
                    $this->session->set_userdata('user_referal_code', $login2->user_referal_code);

                }
                return 1;
            }
        } else {
            return 0;
        }
    }

    function user_login_check()
    {
        $user_email = $this->input->post('user_email');
        $user_password = $this->input->post('user_password');

        $this->db->select('*');
        $this->db->from('user_details');
        $this->db->where('user_email', $user_email);
        $this->db->where('user_password', $user_password);
        $query = $this->db->get();
        $login = $query->row();

        if ($login) {

        $this->db->select('*');
        $this->db->from('tasker_details');
 
        $query1 = $this->db->get();
        $login1 = $query1->row();
    
            $this->session->set_userdata('min_wid', $login1->min_wid_amount);

            $this->session->set_userdata('user_email', $login->user_email);
            $this->session->set_userdata('user_wallet_amount', $login->user_wallet_amount);
            $this->session->set_userdata('user_name', $login->user_name);
            $this->session->set_userdata('user_details_id', $login->user_details_id);
            $this->session->set_userdata('user_profile_pic', $login->user_profile_pic);
            $this->session->set_userdata('user_referal_code', $login->user_referal_code);

            return 1;
        } else {
            return 0;
        }
    }


    function fetch_user_data()
    {
        $user_id = $this->session->userdata('user_details_id');
        $this->db->select('*');
        $this->db->from('user_details');
        $this->db->where('user_details_id', $user_id);
        return $this->db->get()->row_array();
    }

    function change_user_detials()
    {
        $user_email = $this->input->post('user_email');
        $user_name = $this->input->post('user_name');
        $user_password_old = $this->input->post('user_password_old');

        $user_new_password = $this->input->post('user_new_password');
        $user_confirm_password = $this->input->post('user_confirm_password');
        $user_id = $this->session->userdata('user_details_id');


        $this->db->select('*');
        $this->db->from('user_details');
        $this->db->where('user_details_id', $user_id);
        $this->db->where('user_password', $user_password_old);
        $query = $this->db->get();
        $login = $query->row();

        if ($login) {
            $formArray = array(
                'user_email' => $user_email,
                'user_name'  => $user_name
            );
            $this->db->update('user_details', $formArray);

            if ($user_new_password != null && $user_confirm_password != null) {

                if ($user_new_password == $user_confirm_password) {
                    $formArray = array(
                        'user_password' => $user_confirm_password
                    );
                    $this->db->update('user_details', $formArray);
                    return 3;
                } else {
                    return 2;
                }
            } else {
                return 1;
            }
        } else {
            return 0;
        }
    }


    function change_user_profile_pic($user_profile_pic)
    {
        $user_details_id = $this->session->userdata('user_details_id');
        $formArray = array(
            'user_profile_pic' => $user_profile_pic,
        );
        $this->db->where('user_details_id', $user_details_id);
        $this->db->update('user_details', $formArray);
    }

    function check_forgot_email()
    {
        $user_email = $this->input->post('user_email');
        
        $this->db->select('*');
        $this->db->from('user_details');
        $this->db->where('user_email', $user_email);
        $query = $this->db->get();
        $login = $query->row();

        if ($login) {
            // $this->session->set_userdata('forgot_email', $login->user_email);
            $config['protocol']    = 'smtp';
         $config['smtp_host']    = 'tls://smtp.gmail.com';
         $config['smtp_port']    = '465';
         $config['smtp_timeout'] = '60';
     
         $config['smtp_user']    = 'sharmarajesh1077@gmail.com' ;    
         $config['smtp_pass']    = 'bnsqkpwtquuhdlut' ; 
     
         $config['charset']    = 'utf-8';
         $config['newline']    = "\r\n";
         $config['mailtype'] = 'html'; // or html
         $config['validation'] = TRUE; // bool whether to validate email or not 
 
         $subject = 'Welcome To TaskEarner';
     
         $from = 'sharmarajesh1077@gmail.com';              // Pass here your mail id
     
         $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><p style="margin-top:1px;""><a href="#" style="text-decoration:none;color: #60d2ff;">Welcome To TaskEarner</a></p></td></tr>';
         $emailContent .='<tr><td style="height:20px"></td></tr>';
     
         $emailContent .= '<h1 style="padding-left:5%">Email ID: ';
         $emailContent .=   $login->user_email;
         $emailContent .= '</h1>';
         $emailContent .= '<h1 style="padding-left:5%">Password:';
         $emailContent .=   $login->user_password;
         $emailContent .= '</h1>';
     
         $emailContent .='<tr><td style="height:20px"></td></tr>';
         $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><img src='https://taskearner.in/assets/images/download2.png' width='300px' vspace=10 /></p></td></tr></table></body></html>";
     
         $this->email->initialize($config);
         $this->email->set_mailtype("html");
         $this->email->from($from);
         $this->email->to($login->user_email);
         $this->email->subject($subject);
         $this->email->message($emailContent);
         $this->email->send();

            return 1;
        }else{
            return 0;
        }
    }
}
