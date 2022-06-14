<?php

namespace App\Http\Controllers;
use App\Models\livres;
use App\Models\auteur;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class livresController extends Controller
{


    public function index(){


        return view('layouts.index');
    }
     
    public function ShowLivre(){

        $Livres =  livres::all();
      

        return view('layouts.index', ['listeLivres' => $Livres]);

        



        
    }


    public function inscrit(){


        return view('login2');
    }

    public function log(Request $request){

        $validate= $request->validate([
            'name' => 'required|max:255',
            'password' => 'required|max:255',
            'email' => 'required|unique:users,email|max:255',]);

            $users = new User();
      
            $users->password = Hash::make($validate['password']);
            $users->email= $validate['email'];
            $users->name= $validate['name'];
            $users->save();
            return redirect()->Route('index'); 
    }

    public function auth(){


        return view('auth');
    }
    
    public function authCheck(Request $request){

      $validate = $request->validate([
          'email' =>'required',
          'password' =>'required',
        ]);

        $user = user::where('email' , '=',$validate['email'])->first();

       
        if(isset($user) &&
            
        Hash::check($validate['password'], $user->password))

        {
            
            session(['user'=>$user]);
            return redirect() -> route ('index');
        }else{
            return redirect()-> route('auth');
            
        }
         
    }
    public function getAll () {
        $livres = Livres::with('auteur')->get();
        $auteurs = auteur::all();

       return view('livres', [
           'titre' => "Liste des livres",
           'livres' => $livres,
           'auteurs' => $auteurs,
       ]);
   }
}
