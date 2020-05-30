<?php
/**
 * Created by PhpStorm.
 * User: Pankaj
 * Date: 2/12/2020
 * Time: 10:26 AM
 */

namespace App\Http\Controllers;


class controllerwebpage
{
    public function index()
    {
        return view('NavBar.navbar');
    }

    public function navabout()
    {
        return view('NavBar.about');
    }

    public function navservices()
    {
        return view('NavBar.services');
    }

    public function navproducts()
    {
        return view('NavBar.Products');
    }

    public function navcontact($value)
    {
        $data['name'] = $value;
        return view('NavBar.contact',$data);
    }
    public function user($username,$password){
        $data["username"] = $username;
        $data["password"] = $password;
        return view('NavBar.user',$data);
    }
}
