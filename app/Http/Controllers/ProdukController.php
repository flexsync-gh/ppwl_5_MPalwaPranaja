<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        return "Halaman daftar produk";
    }

    public function create(){
        return "Halaman tambah produk";
    }

    public function store(Request $request){

    }

    public function show(string $id){
        
    }

    public function edit(string $id){
        
    }

    public function update(Request $request, string $id){
        
    }

    public function destroy(string $id){
       
    }
}