<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index(){
        // echo "index method in HomeController";
        $ads = Ads::all();
        view('app.create',$ads);
    }

    public function create(){
        echo "create method in HomeController";
        view('app.create');
    }
    public function store(){
        echo "store method in HomeController";
    }
    public function edit($id){
        echo "edit method in HomeController";
    }
    public function update($id){
        echo "update method in HomeController";
    }
    public function destroy($id){
        echo "destroy method in HomeController";
    }

}