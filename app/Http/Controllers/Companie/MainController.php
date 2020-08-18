<?php

namespace App\Http\Controllers\Companie;

use App\Employe;
use App\Entreprise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
    public function index(){
        $entreprise = DB::table('entreprises')
            ->orderBy('created_at', 'desc')->simplePaginate(2);
        return view('page1',['entreprises'=>$entreprise]);
    }

    public function empoyer(){
        $entreprise = Entreprise::all();
        $employe = DB::table('employes')
            ->orderBy('created_at', 'desc')->paginate(2);
        return view('back.pageEmploye',['employes'=>$employe,'entreprises'=>$entreprise]);
    }

    public function ajouteEmpoye(){
        $entreprise = Entreprise::all();
        return view('back.employeStore',['entreprises'=>$entreprise]);
    }

    //    Enregistrer dans la base de données
    public function store(Request $request){

        $request->validate(
            [
                'prenom' => 'required',
                'name' => 'required',
                'address'=> 'required',
                'entreprise_id'=> 'required',
                'poste'=> 'required',
                'email'=> 'required',
                'phone' => 'required'
            ]);

        $employe = new Employe();
        $employe->prenom = $request->prenom;
        $employe->name = $request->name;
        $employe->address = $request->address;
        $employe->entreprise_id = $request->entreprise_id;
        $employe->poste = $request->poste;
        $employe->email = $request->email;
        $employe->phone = $request->phone;

        $employe->save();

        return redirect()->route('pageEmploye',['id'=>$employe])
            ->with('notice','L\'employé a bien été ajouté');
    }

    public function edit(Request $request){
        $employe = Employe::find($request->id);
        $entreprise = Entreprise::all();
        return view('back.employeEdit',['employe'=>$employe,'entreprises'=>$entreprise]);
    }

    public function update(Request $request){
        $employe = Employe::find($request->id);
        $request->validate(
            [
                'prenom' => 'required',
                'name' => 'required',
                'address'=> 'required',
                'entreprise_id'=> 'required',
                'poste'=> 'required',
                'email'=> 'required',
                'phone' => 'required'
            ]);

        $employe->prenom = $request->prenom;
        $employe->name = $request->name;
        $employe->address = $request->address;
        $employe->entreprise_id = $request->entreprise_id;
        $employe->poste = $request->poste;
        $employe->email = $request->email;
        $employe->phone = $request->phone;

        $employe->save();

        return redirect()->route('pageEmploye',['id'=>$employe])
            ->with('notice','L\'employé a bien été Modifié');
    }


        public function delete(Request $request){
            $employe = Employe::find($request->id);
            $employe->delete();
            return redirect()->route('pageEmploye')->with('notice','L\'employé a bien été supprimée');

        }
}
