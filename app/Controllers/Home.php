<?php

namespace App\Controllers;
use App\Models\RegisterModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new RegisterModel();
        $data['registers'] = $model->getNames();
        return view('welcome_message', $data);
    }

    public function save(){
        echo "String";exit;
        $model = new RegisterModel();
        $data = array(
            'email' => $this->request->getPost('email'),
            'names' => $this->request->getPost('names'),
            'password' => $this->request->getPost('password'),
        );
        $model->getName($data);
        return redirect()->to('/');
        exit;
    }
}
