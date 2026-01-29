<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AnnouncementModel;

class Home extends BaseController
{
    public function home()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $userModel = new UserModel();
        $users = $userModel->findAll();

        $announcementModel = new AnnouncementModel();
        $announcements = $announcementModel->findAll();

        $data = [
            'title'         => 'Dashboard',
            'username'      => $session->get('username'),
            'user_type'     => $session->get('user_type'),
            'users'         => $users,
            'announcements' => $announcements,
        ];

        return view('home', $data);
    }
}
