<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Users\UsersRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class LoginAndRegisterController extends Controller
{
    //
    protected $UserRepository;
    public function __construct(UsersRepositoryInterface $usersReporitory)
    {
        $this->UserRepository = $usersReporitory;
    }

    // return a view login
    public function getLogin()
    {
        return view("Login");
    }

    /**
     * function post login
     *  Param $request
     * return a redirect
     */
    public function postLogin(Request $request)
    {
        if(Auth::attempt(["name"=>$request->username,"password"=>$request->password])) {
            return redirect("admin/DashBoard")->with("thong_bao","Login success,welcome adminstator!");
        } else {
            return redirect()->back()->with("thong_bao","Login false, please check again username or password");
        }
    }

    /**
     * function logout
     * return a redirect
     */
    public function logout()
    {
        if(Auth::check()) {
            Auth::logout();
            return redirect('/')->with('thong_bao','Logout success');
        } else {
            return redirect('/')->with('thong_bao','Please login system now!');
        }
    }
}
