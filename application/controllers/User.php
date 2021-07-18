<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  User extends CI_Controller
{


    function user_login()
    {
        $data['fetch_category'] = $this->Admin_model->category();
        $data['fetch_sub_category'] = $this->Admin_model->sub_category();
        $data['fetch_tags'] = $this->Admin_model->fetch_tags();
        $data['basic_info'] = $this->Admin_model->basic_info();
        $data['accepted_projects'] = $this->Admin_model->accepted_projects();

        $this->load->view('include/header', $data);
        $this->load->view('user_login');
        $this->load->view('include/footer', $data);
    }

    function user_login_check_new()
    {
        $resutl = $this->User_model->user_login_check();
        if($resutl){

            $this->session->set_flashdata('msg', 'Successfully Logged In');
            $this->session->set_flashdata('msg_class', 'bg-info text-white');
            redirect(base_url() . 'home');
        }else{
            
            $this->session->set_flashdata('msg', 'Error Please Try Again');
            $this->session->set_flashdata('msg_class', 'bg-danger text-white');
            redirect(base_url() . 'index.php/user_login');
        }
    }

    //...........user signup.................//
    function user_signup()
    {
       
        $data['fetch_category'] = $this->Admin_model->category();
        $data['fetch_sub_category'] = $this->Admin_model->sub_category();
        $data['fetch_tags'] = $this->Admin_model->fetch_tags();
        $data['basic_info'] = $this->Admin_model->basic_info();
        $data['accepted_projects'] = $this->Admin_model->accepted_projects();

        $this->load->view('include/header', $data);
        $this->load->view('user_signup');
        $this->load->view('include/footer', $data);
    }


    function gen_otp()
    {
       
    if($this->session->userdata('temp_otp')){
        redirect(base_url() . 'User/user_otp');
    }
    
        $data['fetch_category'] = $this->Admin_model->category();
        $data['fetch_sub_category'] = $this->Admin_model->sub_category();
        $data['fetch_tags'] = $this->Admin_model->fetch_tags();
        $data['basic_info'] = $this->Admin_model->basic_info();
        $data['accepted_projects'] = $this->Admin_model->accepted_projects();
        
         $this->User_model->gen_otp();

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
     
         $emailContent .= '<h1 style="padding-left:5%">Your OTP is: ';
         $emailContent .=   $this->session->userdata('temp_otp');
         $emailContent .= '</h1>';

     
         $emailContent .='<tr><td style="height:20px"></td></tr>';
         $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><img src='https://taskearner.in/assets/images/download2.png' width='300px' vspace=10 /></p></td></tr></table></body></html>";
     
         $this->email->initialize($config);
         $this->email->set_mailtype("html");
         $this->email->from($from);
         $this->email->to($this->session->userdata('temp_email'));
         $this->email->subject($subject);
         $this->email->message($emailContent);
         $this->email->send();

        $this->session->set_flashdata('msg', 'OTP has been sent to your Email');
        $this->session->set_flashdata('msg_class', 'bg-info text-white');
        $this->load->view('include/header', $data);
        $this->load->view('user_otp');
        $this->load->view('include/footer', $data);
    }

    function check_user_signup()
    {
        $otp = $this->input->post('otp');
        $temp_otp = $this->session->userdata('temp_otp');
        if ($otp == $temp_otp){
        $this->session->unset_userdata('temp_otp');
        $resutl = $this->User_model->check_user_signup();
        if ($resutl == 1) {
            $this->session->set_flashdata('msg', 'Welcome');
            $this->session->set_flashdata('msg_class', 'bg-info text-white');
            redirect(base_url() );
        } elseif ($resutl == 2) {
            $this->session->set_flashdata('msg', 'Email Already Registered');
            $this->session->set_flashdata('msg_class', 'bg-danger text-white');
            redirect(base_url() . 'index.php/user_signup');
        } else {
            $this->session->set_flashdata('msg', 'Passwords Not Matched!!! Please Try Again..');
            $this->session->set_flashdata('msg_class', 'bg-danger text-white');
            redirect(base_url() . 'index.php/user_signup');
        }
    }else{
        // $this->session->unset_userdata('temp_otp');

        $this->session->set_flashdata('msg', 'OTP does not matched');
        $this->session->set_flashdata('msg_class', 'bg-danger text-white');
        redirect(base_url() . 'User/user_otp');
    }
    }


    function cancel_otp()
    {
        $this->session->unset_userdata('temp_name');
        $this->session->unset_userdata('temp_pass');
        $this->session->unset_userdata('temp_confirm');
        $this->session->unset_userdata('temp_email');
        $this->session->unset_userdata('temp_referal_code');
        $this->session->unset_userdata('temp_otp');

        $this->session->set_flashdata('msg', 'Registration Cancel');
        $this->session->set_flashdata('msg_class', 'bg-danger text-white');
        redirect(base_url() . 'User/user_signup');
    }

    function user_otp()
    {
        
        $data['fetch_category'] = $this->Admin_model->category();
        $data['fetch_sub_category'] = $this->Admin_model->sub_category();
        $data['fetch_tags'] = $this->Admin_model->fetch_tags();
        $data['basic_info'] = $this->Admin_model->basic_info();
        $data['accepted_projects'] = $this->Admin_model->accepted_projects();

        $this->load->view('include/header', $data);
        $this->load->view('user_otp');
        $this->load->view('include/footer', $data);
    }
    //...........user login.................//
    function user_login_check()
    {
        $resutl = $this->User_model->user_login_check();
        echo $resutl ? 1 : 0;
    }

    function user_logout()
    {
        $this->session->unset_userdata('user_email');
        $this->session->unset_userdata('user_wallet_amount');
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_details_id');
        $this->session->unset_userdata('user_profile_pic');
        $this->session->unset_userdata('user_wallet_amount');

        $this->session->set_flashdata('msg', 'Successfully Logged Out');
        $this->session->set_flashdata('msg_class', 'bg-success text-white');
        redirect(base_url().'home');
    }

//...........user forgot password.................//
    function user_forgot_password()
    {
        $data['fetch_category'] = $this->Admin_model->category();
        $data['fetch_sub_category'] = $this->Admin_model->sub_category();
        $data['fetch_tags'] = $this->Admin_model->fetch_tags();
        $data['basic_info'] = $this->Admin_model->basic_info();
        $data['accepted_projects'] = $this->Admin_model->accepted_projects();

        $this->load->view('include/header', $data);
        $this->load->view('user_forgot_password');
        $this->load->view('include/footer', $data);     
    }

    function check_forgot_email()
    {
        $m = $this->User_model->check_forgot_email();
        if($m){



            $this->session->set_flashdata('msg', 'Password sent to your Email ID!! To change password go to '.'MY Account'.' section');
            $this->session->set_flashdata('msg_class', 'bg-success text-white');
            redirect(base_url().'home');
        }else{
            $this->session->set_flashdata('msg', 'Email is not Registered');
            $this->session->set_flashdata('msg_class', 'bg-danger text-white');
            redirect(base_url().'user_forgot_password');
        }

    }



}
