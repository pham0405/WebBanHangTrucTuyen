<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class userController extends Controller
{
    public function index()
    {
        $users = User::all() ;
        return view('layout.admin.account', compact('users'));
    }
    public function lockUser($user_id)
    {
        // Tìm user theo ID và cập nhật trạng thái thành 'Khóa'
        $user = User::find($user_id);
        $user->status = 0; // Khóa tài khoản (0 = Khóa)
        $user->save();
        return $user; // Trả về user vừa được cập nhật
    }
    
    public function unLockUser($user_id)
    {
        // Tìm user theo ID và cập nhật trạng thái thành 'Hoạt Động'
        $user = User::find($user_id);
        $user->status = 1; // Mở khóa tài khoản (1 = Hoạt Động)
        $user->save();
    
        return $user; // Trả về user vừa được cập nhật
    }
    public function lockUsers($user_id)
{
    $this->lockUser($user_id); // Gọi hàm lockUser

    
    return redirect()->back()->with('status', 'Tài khoản đã được mở khóa.' );
}

public function unLockUsers($user_id)
{
    $this->unLockUser($user_id); // Gọi hàm unLockUser
    return redirect()->back()->with('status', 'Tài khoản đã được mở khóa.');
}
}
