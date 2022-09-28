<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\admin\AdminModel;

class LoginController extends BaseController
{
    public function login()
    {
        return view('backend/login');
    }
    public function register()
    {
        $tbl_rolemaster = new AdminModel();
       $data['tbl_rolemaster'] = $tbl_rolemaster->get_role();
        return view('backend/registeruser',$data);
    }
    public function userlist()
    {   
        
         $tbl_usermaster = new AdminModel();
        $data['tbl_usermaster'] = $tbl_usermaster->findAll();
        $data['tbl_rolemaster'] = $tbl_usermaster->get_role();
            $session = session();
        if($session->has('role') == 1){
        return view('backend/userlist',$data);
        }else{
            return view('backend/login');
        }
    }
    public function edit($id)
    {   
       $tbl_usermaster = new AdminModel();
        $data['tbl_rolemaster'] = $tbl_usermaster->get_role();
        $data['tbl_usermaster'] = $tbl_usermaster->find($id);
        $session = session();
        if($session->has('role') == '1'){
        return view('backend/useredit',$data);}
        else{
            return view('backend/login');
        }
    }
   public function adminlogin()
   {
    $model = new AdminModel();
    $result =$model->where('username',$this->request->getVar('username'))->where('password',md5($this->request->getVar('password')))
    ->first();
    //print_r($result);
    $session = session();
    
    if($result != null)
    {
        $session->set('role',$result['role']);
        $role= $session->role;
            $session->set('name',$result['name']);
           
        $role= $session->role;
        $data['result1'] = $model->get_privileges($role);
        //       echo "<pre>";
        // print_r($data['result1']);
        // echo "</pre>";
             foreach($data['result1'] as $row){
                
                if($role == $row['roleid']){
                   
               return redirect()->to(base_url('admin/'.$row["url"]))->with('status','User login sucssesfully');
               
                }else{
                    return view('backend/login');
                }
                
              }

        // if($result['role']=='1'){
           
        //     return redirect()->to(base_url('admin/user-list'))->with('status','User login sucssesfully');
            
        // }elseif($result['role']=='2'){
           
        //     return redirect()->to(base_url('admin/news-list'))->with('status','User login sucssesfully');
        // }
        
        // else{
        //     return redirect()->to(base_url('admin/login'))->with('status','user detail not found ');
        // }

    }else{
        return redirect()->to(base_url('admin/login'))->with('status','user detail not found ');
    }

   }
   public function registerprocess()
    {
        $users = new AdminModel();
        $data = [
            'name'=>$this->request->getPost('full_name'),
            'username' =>$this->request->getPost('email_id'),
            'phone_no'=>$this->request->getPost('phone_no'),
            'gender'=>$this->request->getPost('gender'),
            'password'=>md5($this->request->getPost('password')),
            'role'=>$this->request->getPost('userrole')
        ];
        $users->save($data);
        return redirect()->to(base_url('admin/user-list'))->with('status','Submit sucssesfully');
       // print_r();
    }

    public function update($id)
    {
        $users = new AdminModel();
       // $users->find($id);
        $data = [
            'name'=>$this->request->getPost('full_name'),
            'username' =>$this->request->getPost('email_id'),
            'phone_no'=>$this->request->getPost('phone_no'),
            'gender'=>$this->request->getPost('gender'),
            'password'=>md5($this->request->getPost('password')),
            'role'=>$this->request->getPost('userrole')
        ];
        $users->update($id, $data);
        return redirect()->to(base_url('admin/user-list'))->with('status','Update Data sucssesfully');
       // print_r();
    }
    public function delete($id)
    {
        $users = new AdminModel();
        $users->delete($id);
        return redirect()->to(base_url('admin/user-list'))->with('status','User Delete sucssesfully');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
       
        return redirect()->to(base_url('admin/login'))->with('status','User logout sucssesfully');
    }
}
