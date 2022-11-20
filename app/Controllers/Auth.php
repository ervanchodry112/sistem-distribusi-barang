<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Supir;
use App\Models\Toko;
use App\Models\User;
use Config\View;

// use Myth\Auth\Models\UserModel;

class Auth extends BaseController
{
    protected $supir;
    protected $toko;
    protected $user;

    public function __construct()
    {
        $this->supir = new Supir();
        $this->toko = new Toko();
        $this->user = new User();
    }

    public function index()
    {
        $user = $this->user->get_user_toko(user_id());

        $data = [
            'title' => 'Profile',
            'user' => $user
        ];

        return view('auth/profile', $data);
    }

    public function update_password($id)
    {
        if(!$this->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'renew_password' => 'required'
        ])) {
            return redirect()->to('auth/profile');
        }

        $data = [
            // 'password_hash' => $this->request->getVar('new_password'),
            'password_hash' => password_hash($this->request->getVar('new_password'), PASSWORD_DEFAULT),
        ];

        // d($data);
        // exit();

        $this->user->update($id, $data);

        return redirect()->to(base_url('logout'));
    }

    public function registrasi()
    {
        $data = [
            'title' => 'Registrasi'
        ];
        return view('auth/data_toko', $data);
    }

    public function supir()
    {
        $user = new User();
        $userData = $user->selectMax('id')->findAll();
        // dd($userData);
        if (!session('message')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Registrasi Supir',
            'id_user'   => $userData[0],
        ];

        return view('auth/daftar_supir', $data);
    }

    public function attempt_supir()
    {
        $input = $this->request->getVar();
        // dd($input);
        $this->supir->insert($input);

        return redirect()->to(base_url('login'))->with('message', 'Registrasi Berhasil');
    }

    public function toko()
    {
        $user = new User();
        $userData = $user->selectMax('id')->findAll();
        // dd($userData);
        if (!session('message')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'title' => 'Registrasi Toko',
            'id_user'   => $userData[0],
        ];

        return view('auth/daftar_toko', $data);
    }

    public function attempt_toko()
    {
        $input = $this->request->getVar();
        $input['slug'] = url_title($this->request->getVar('nama_toko'), '-', true);
        // dd($input);
        $this->toko->insert($input);

        return redirect()->to(base_url('login'))->with('message', 'Registrasi Berhasil');
    }

    public function new_account()
    {
        $newUser = $this->user->join('auth_groups_users', 'auth_groups_users.user_id=users.id')
            ->join('auth_groups', 'auth_groups.id=auth_groups_users.group_id')
            ->where('users.active', 0)->findAll();
        $data = [
            'title' => 'Akun Baru',
            'new_user' => $newUser,
        ];

        return view('auth/new_account', $data);
    }

    public function activate($id)
    {
        $this->user->save([
            'id' => $id,
            'active' => 1,
        ]);

        return redirect()->to(base_url('auth/new_account'))->with('message', 'Akun Berhasil Diaktifkan');
    }

    public function account()
    {
        $akun = $this->user->join('auth_groups_users', 'auth_groups_users.user_id=users.id')
            ->join('auth_groups', 'auth_groups.id=auth_groups_users.group_id')
            ->where('users.active', 1)->findAll();

        $data = [
            'title' => 'Akun',
            'akun' => $akun,
        ];

        return view('auth/account', $data);
    }
}
