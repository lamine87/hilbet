<?php

namespace App\Http\Controllers;

use App\Entreprise;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function add(){
        return view('back.indexStore');
    }


//    Enregistrer dans la base de données
    public function store(Request $request){

        $request->validate(
            [   'name' => 'required',
                'email' => 'required',
                'address'=> 'required',
                'phone'=> 'required',
                'website' => 'required'
            ]);

        $entreprise = new Entreprise();
        $entreprise->name = $request->name;
        $entreprise->email = $request->email;
        $entreprise->address = $request->address;
        $entreprise->phone = $request->phone;
        $entreprise->website = $request->website;

        $entreprise->save();

        return redirect()->route('page',['id'=>$entreprise])
            ->with('notice','L\'entreprise a bien été ajoutée');
        }

        public function accueil()
        {
            $entreprise = Entreprise::all();

            return view('page1',['entreprises'=>$entreprise]);
        }

        public function edit(Request $request)
        {
            $entreprise = Entreprise::find($request->id);
            return view('back.pageEdit', ['entreprise' => $entreprise]);

        }

        public function update(Request $request)
        {
            $entreprise = Entreprise::find($request->id);
            $request->validate(
                [   'name' => 'required',
                    'email' => 'required',
                    'address'=> 'required',
                    'phone'=> 'required',
                    'website' => 'required'
                ]);

            $entreprise->name = $request->name;
            $entreprise->email = $request->email;
            $entreprise->address = $request->address;
            $entreprise->phone = $request->phone;
            $entreprise->website = $request->website;
            $entreprise->save();

            return redirect()->route('page',['id'=>$entreprise])
                ->with('notice','L\'entreprise a bien été modifiée');
        }

        public function delete(Request $request){
            $entreprise = Entreprise::find($request->id);
            $entreprise->delete();
            return redirect()->route('page')->with('notice','L\'entreprise a bien été supprimée');

    }


}
