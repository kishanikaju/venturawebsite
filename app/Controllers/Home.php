<?php

namespace App\Controllers;
use App\Models\SampleModel;

class Home extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function index()
    {
        $data['title'] = "Ventura Technologies";
         $data['meta_desc'] = "Ventura Technologies | E-learning";
        return view('homepage',$data);
    }
    public function success_stories()
    {
        $data['title'] = "Success Stories | Ventura Technologies";
         $data['meta_desc'] = "Ventura Technologies | E-learning";
        return view('success_stories',$data);
    }
    public function services()
    {
         $data['title'] = "services | Ventura Technologies";
         $data['meta_desc'] = "Ventura Technologies | E-learning";
        return view('services',$data);
    }
    public function contact()
    {
         $data['title'] = "Contact us | Ventura Technologies";
         $data['meta_desc'] = "Ventura Technologies | E-learning";
        return view('contact-us',$data);
    }
    public function join_team()
    {
        $data['title'] = "Join our team | Ventura Technologies";
         $data['meta_desc'] = "Ventura Technologies | E-learning";
        return view('join-our-team',$data);
    }
    public function services_we()
    {
        $data['title'] = "Services We | Ventura Technologies";
         $data['meta_desc'] = "Ventura Technologies | E-learning";
        return view('services-we-spe',$data);
    }
    public function enquiry()
    {
        $data['title'] = "Enquiry | Ventura Technologies";
         $data['meta_desc'] = "Ventura Technologies | E-learning";
        return view('contact-enquiry',$data);
    }
    // public function portfolio()
    // {
    //     return view('sample/portfolio');
    // }
    public function portfolio()
    {         
        $blog = new SampleModel();
        $request = \Config\Services::request();
        $this->request = $request;         
         $data = array();
            $where = NULL;
            if($request->getVar('Category')){
                if($where!=NULL){$where .= ' AND ';}
                $where .= ' ( smp_name LIKE "%'.$this->request->getVar('Category').'%" OR  smp_category LIKE "'.$this->request->getVar('Category').'" )';
                }
         $data['sample_portfolio'] = $blog->get_samplelist($where);
         $data['level1_list'] = $blog->get_level1_data($where);
         $data['level2_list'] = $blog->get_level2_data($where);
         $data['level3_list'] = $blog->get_level3_data($where);
        // $data['cat'] = $blog->get_blog_cat();
        return view('sample/portfolio' ,$data);
    }
    
    public function sendmail() { 
        $validation = $this->validate([
            'fname'=> 'required','lname'=>'required', 'email' => 'required|valid_email','ph'=>'required',
            'company'=> 'required','role'=> 'required'
        ]);
        if(!$validation){
            return view('contact-enquiry',['validation'=>$this->validator]);
        }else{
            if($this->isOnline()){
                $request = \Config\Services::request();
                $this->request = $request;         
                     $data = array();
                     
                     $postvalues['name'] = $this->request->getVar('fname');
                $email = \Config\Services::email();
                $config['protocol'] = 'sendmail';
                $config['mailPath'] = '/usr/sbin/sendmail';
                $config['charset']  = 'iso-8859-1';$config['mailtype'] = 'html';
                $config['wordWrap'] = true;
                $email->initialize($config);
                // $to = $this->request->getVar('email');
                // $subject = $this->request->getVar('lname');
                // $message = $this->request->getVar('fname');        
                $email->setTo('kishan.nikaju@venturatechnologies.in');
                $email->setFrom('nikajukishan@gmail.com', 'Confirm Registration');
                
                $email->setSubject('hi  subject');
                $message = view('emails/query_contact',$postvalues);
                $email->setMessage($message,TRUE);
        
                    if ($email->send()) 
                    {
                        //echo 'Email successfully sent';
                        return redirect()->to(base_url('/enquiry'))->with('success','Email successfully sent')->withInput();
                    } 
                    else 
                    {
                     return redirect()->to(base_url('/enquiry'))->with('error','Failed')->withInput();
                        // $data = $email;
                        // echo "<pre>";
                        // print_r($data);
                    // echo 'Email Not sent';
                    }
            }else{
                return redirect()->to(base_url('/enquiry'))->with('error','check your validation')->withInput();
            }
            
        }
        
    }

    //run code done
    public function sendmail_done() {
        $request = \Config\Services::request();
         $this->request = $request;         
         $data = array();
         
         $postvalues['name'] = $this->request->getVar('fname');
        
        $email = \Config\Services::email();
        $config['protocol'] = 'sendmail';
        $config['mailPath'] = '/usr/sbin/sendmail';
        $config['charset']  = 'iso-8859-1';
        $config['wordWrap'] = TRUE;
        $config['mailtype'] = 'html';
        
        $email->initialize($config);
        // $to = $this->request->getVar('email');
        // $subject = $this->request->getVar('lname');
        // $message = $this->request->getVar('fname');        
        $email->setTo('kishan.nikaju@venturatechnologies.in');
        $email->setFrom('nikajukishan@gmail.com', 'Confirm Registration');
        
        $email->setSubject('hi  subject');
        $message = view('emails/query_contact',$postvalues);
        $email->setMessage($message,TRUE);

if ($email->send()) 
{
    echo 'Email successfully sent';
} 
else 
{
    $data = $email;
    echo "<pre>";
    print_r($data);
   // echo 'Email Not sent';
}
    }
}
