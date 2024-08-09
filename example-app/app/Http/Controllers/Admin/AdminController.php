<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (!$this->checkAdmin()) {
            return redirect('/login')->with('error', 'Bạn không có quyền truy cập vào trang này! Vui lòng đăng nhập với quyền quản trị!');
        }

        return view('layout.admin');
    }

    public function dashboard()
    {
        if (!$this->checkAdmin()) {
            return redirect('/login')->with('error', 'Bạn không có quyền truy cập vào trang này! Vui lòng đăng nhập với quyền quản trị!');
        }

        return view('layout.admin.dashboard');
    }

    public function account()
    {
        if (!$this->checkAdmin()) {
            return redirect('/login')->with('error', 'Bạn không có quyền truy cập vào trang này! Vui lòng đăng nhập với quyền quản trị!');
        }

        return view('layout.admin.account');
    }

    public function comment(Request $request)
    {
        if (!$this->checkAdmin()) {
            return redirect('/login')->with('error', 'Bạn không có quyền truy cập vào trang này! Vui lòng đăng nhập với quyền quản trị!');
        }

        return view('layout.admin.comment');
    }

    public function orders()
    {
        if (!$this->checkAdmin()) {
            return redirect('/login')->with('error', 'Bạn không có quyền truy cập vào trang này! Vui lòng đăng nhập với quyền quản trị!');
        }

        return view('layout.admin.orders');
    }

    public function addProd()
    {
        if (!$this->checkAdmin()) {
            return redirect('/login')->with('error', 'Bạn không có quyền truy cập vào trang này! Vui lòng đăng nhập với quyền quản trị!');
        }

        return view('layout.admin.addProd');
    }

    public function ordersDetail()
    {
        if (!$this->checkAdmin()) {
            return redirect('/login')->with('error', 'Bạn không có quyền truy cập vào trang này! Vui lòng đăng nhập với quyền quản trị!');
        }

        return view('layout.admin.ordersDetail');
    }

    // Hàm kiểm tra quyền Admin
    private function checkAdmin()
    {
        if (!Auth::check()) {
            return false;
        }

        if (Auth::user()->userType !== 'ADM') {
            return false;
        }

        return true;
    }
}
