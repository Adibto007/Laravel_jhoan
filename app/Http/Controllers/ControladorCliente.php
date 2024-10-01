<?php


namespace App\Http\Controllers;

use App\Models\User;


class ControladorCliente extends Controller
{


   public function index(){
    $user=User::all();

    return view('index', array('clientes' => $user));
   }

   public function viewUser($id){
    $user=User::find($id);

    return view('index', array('clientes' => $user));

   }



    public function cedula($id)
    {
        return view( 'details');
    }
}
