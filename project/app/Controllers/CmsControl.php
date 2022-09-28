<?php

namespace App\Controllers;
use App\Models\admin\CmsModel;



class CmsControl extends BaseController
{
    public function privacy()
    {         
        $cms_page = new CmsModel();
        $data['cms_page'] = $cms_page->find("3"); 
        return view('privacypolicy' ,$data);
       
    }
    public function about()
    {         
        $cms_page = new CmsModel();
        $data['cms_page'] = $cms_page->find("1"); 
        return view('about_us' ,$data);
       
    }
}