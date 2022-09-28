<?php

namespace App\Controllers;
use App\Models\admin\CmsModel;



class CmsControl extends BaseController
{
    public function privacy()
    {         
        $cms_page = new CmsModel();
        $data['cms_page'] = $cms_page->find("3");
        $data['title'] = "Privacy policy | Ventura Technologies";
         $data['meta_desc'] = "Ventura Technologies | E-learning"; 
        return view('privacypolicy' ,$data);
       
    }
    public function about()
    {         
        $cms_page = new CmsModel();
        $data['cms_page'] = $cms_page->find("1"); 
        $data['title'] = "About us | Ventura Technologies";
         $data['meta_desc'] = "Ventura Technologies | E-learning";
        return view('about_us' ,$data);
       
    }
}