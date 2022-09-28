<?php

namespace App\Controllers;
use App\Models\BlogModel;
use App\Models\ResumeModel;



class BlogControl extends BaseController
{
    public function bloglist()
    {         
         $blog = new BlogModel();
         $data['blog'] = $blog->get_bloglist();
         $data['blogslied'] = $blog->get_blog4_data();
         $data['cat'] = $blog->get_blog_cat();
        return view('bloglist' ,$data);
    }
    public function blogdetails()
    {       
        
        $blog = new BlogModel();
        $data['blogslied'] = $blog->get_blog4_data();
        $data['cat'] = $blog->get_blog_cat();
         $url = $this->request->uri->getSegments(1);
         $data['blogdetail'] = $blog->get_blog_data($url[1]);
        
        return view('blogdetail' ,$data);
    }
   
    public function addblogcommentprocess()
    {
         $blogs = new BlogcommentModel();
         date_default_timezone_set('Asia/Kolkata');
        $timestamp = date("Y-m-d H:i:s");
        $data =[
            'blog_id' =>$this->request->getPost('blogid'),
            'blog_title' =>$this->request->getPost('blog_title'),
            'blog_comment'=>$this->request->getPost('blog_comment'),
            'blog_created_date'=>$timestamp,
            'blog_approved'=>$this->request->getPost('status')
            ];
            $blogs->save($data);
        return redirect()->back()->with('status','Blog Comment Submit sucssesfully');
        
    }
    public function career()
    {  
        $testimonialModel = new TestimonialModel();
        $data['testimonials']  = $testimonialModel->get_all_data();
        $FaqModel = new FaqModel();
        $data['faq'] = $FaqModel->get_faq_by_slug('about-us');
        $Service_categoryModel = new Service_categoryModel();
        $data['category'] = $Service_categoryModel->get_all_data();
        $DoctorsModel = new DoctorsModel();
        $data['doctors'] = $DoctorsModel->get_doctor_details("1");
         $cms_page = new CmsModel();
        $data['cms_page'] = $cms_page->find("1"); 
        return view('careers', $data);
    }
    public function resumeupload()
    {
        $query = new ResumeModel();
        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]|max_size[userfile,1024]',
                  ],
               ];
        if($this->validate($validationRule)){
            $file = $this->request->getFile('userfile');
            if ($file->isValid() && ! $file->hasMoved()) {
                $imageName = $file->getRandomName();
                     $file->move('public/uploads/resume/', $imageName);
                    
                }
        }
         $data = [ 
              'post_name'=>$this->request->getPost('postname'),
             'name' =>$this->request->getPost('fname').' '.$this->request->getPost('lname'),
             'email_id'=>$this->request->getPost('email_id'),
             'ph_no'=>$this->request->getPost('ph_no'),
             'resumefile'=>$imageName ];
         $query->save($data);
         //**********************
         $email = \Config\Services::email();
         $config['protocol'] = 'sendmail';
            $config['mailPath'] = '/usr/sbin/sendmail';
            $config['charset']  = 'iso-8859-1';
            $config['wordWrap'] = true;

            $email->initialize($config);
            $email->setFrom('nikajukishan@gmail.com', 'Sai');
            $email->setTo('vivekbajaj118@gmail.com');
            $email->setSubject('This is my subject');
            $email->setMessage('Hi Teesha Here is the info you requested.');
            $email->send();
            $email->clear();
         return redirect()->back();
    }
}