<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index(){
        return "method ini nantinya akan digunakan untuk menambah semua data user";
    }
    public function create(){
        return "method ini nantinya digunkana untuk menampilkan form untuk menambah data user";
    }
    public function store(Request $request){
        return "method ini digunakan untuk menciptakan data user baru";
    }
    public function show(){
        return "method ini nantinya akan digunakan untuk mengambil satu user dengan id =";
    }
    public function edit(){
        return "method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit id=";
    }
    public function update(Request $request){
        return "method ini nantinya akan digunakan untuk mengubah data user dengan id=";
    }
    public function destroy(){
        return "method ini nantinya digunakan untuk menghapus data user dengan id=";
    }
}