<?php

namespace App\Controllers;
use App\Models\UserModel;
class Validation extends BaseController
{
    public function register()
    {
        $data = [];
        helper(['form']);
        $rules =[
            'username' => [
                'rules' => 'required|min_length[3]|max_length[25]|is_unique[users.username]',
                'errors' => [
                    'min_length' => 'Your username must be at least 3 characters',
                    'max_length' => 'Your username must not exceed 25 characters',
                    'is_unique' => 'Username already taken!',
                ]
            ],
            'email' => [
                'rules' => 'required|min_length[6]|max_length[60]|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Your Email Address is required.',
                    'valid_email' => 'Please enter a valid email.',
                    'is_unique' => 'Your email has already been registered.',
                ]
            ],
            'pass' => [
                'rules' => 'required|min_length[8]|max_length[255]',
                'errors' => [
                    'min_length' => 'Password must be at least 8 characters.',
                ]
            ],
            'confirmPass' => [
                'rules' => 'matches[pass]',
                'errors' => [
                    'matches' => 'Your passwords do not match.',
                ],
            ],
        ];

        if(! $this->validate($rules))
        {
            $data['validate'] = $this->validator->getErrors();
            session()->setFlashdata($data);
            return redirect()->back()->withInput();
        }

        else
        {
            $userModel = new UserModel();
            $pass = $this->request->getPost('pass');
            $encPass = md5($pass);

            $userData = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'pass' => $encPass,
                'fName' => $this->request->getPost('fName'),
                'lName' => $this->request->getPost('lName'),
                'age' => $this->request->getPost('age'),
                'gender' => $this->request->getPost('gender'),
                'cNum' => $this->request->getPost('cNum'),
                'street' => $this->request->getPost('street'),
                'city' => $this->request->getPost('city'),
                'zCode' => $this->request->getPost('zCode'),
            ];

            $userModel->save($userData);
            return redirect()->back()->with('success', 'Successfully registered an account!');
        }

        //echo view('register', $data);
        
    }

    public function login()
    {
        $data = [];
        helper(['form']);

        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('pass');

        $user = $userModel->where('email', $email)->first();
        if(!$user || md5($pass) != $user['pass'])
        {

            return redirect()->back()->with('error', 'Incorrect Email or Password!');
        }

        else
        {
            $userData = [
                'id' => $user['user_id'],
                'username' => $user['username'],
            ];
            session()->set($userData);
            return redirect()->to('/');
        }


        // echo "<pre>";
        // print_r($user);
        // echo "</pre>";

        //$arrayValidate = ['email' => $email, 'pass' => $pass];
        // if(!$userModel->where($arrayValidate))
        // {
        //     return redirect()->back()->with('error', 'Incorrect Email or Password!');
        // }

        // else
        // {
        //     return redirect()->to('/');
        // }
    }

    public function logout()
    {
        $sessionVar = ['id', 'username'];
        session()->remove($sessionVar);
        return redirect()->to('login');
    }
}
