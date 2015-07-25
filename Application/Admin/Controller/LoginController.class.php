<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/7/25 0025
 * Time: 15:11
 */
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller
{
    //登陆主页
    public function index()
    {
        $this->display();
    }

    //登陆验证
    public function login()
    {
        if (!IS_POST) {
            $this->error("非法请求");
        }

        $username = I('username');
        $password = I('password', '', 'md5');
        $code = I('verify', '', 'strtolower');
        //验证验证码是否正确
        if (!($this->check_verify($code))) {
            $this->error('验证码错误');
        }

        $user['id'] = 11;
        $user['username'] = $username;
        $user['password'] = $password;
        //各种验证
        // .......


        //验证成功，保存session并且登录
        if(1) {
            session('adminId', $user['id']);
            session('username', $user['username']);
            $this->success("登陆成功", U('Index/index'));
        }

    }
    //验证码
    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->codeSet = '0123456789';
        $Verify->fontSize = 13;
        $Verify->length = 4;
        $Verify->entry();
    }

    //校验验证码
    protected function check_verify($code){
        $verify = new \Think\Verify();
        return $verify->check($code);
    }

    //登出
    public function logout(){
        session('adminId',null);
        session('username',null);
        redirect(U('Login/index'));
    }
}