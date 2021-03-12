<?php

namespace App\Http\Controllers;

use App\City;
use App\School;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        return view('admin.ListeUniversités')->with('schools' , $schools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string','max:255', 'unique:users'],
            'description' => ['string', 'max:255'],
            'logo' => ['required', 'string', 'max:255'],
            'localisation' => [ 'string', 'max:255'],
            'Devenir' => [ 'string', 'max:255'],
            'TypeUniversité' => [ 'string', 'max:255'],
        ]);
    }
    public function create(Request $request)
    {
    $city = City::select('id')->where('name', $request->ville)->first();
    School::create([
        'name' => $request['name'],
        'address' => $request['address'],
        'description' => $request['description'],
        'logo' => $request['logo'],
        'localisation' => $request['localisation'],
        'Devenir' => $request['Devenir'],
        'TypeUniversité' => $request['TypeUniversité'],
        'city_id' => $city->id,
    ]);    
    return redirect()->route('school.index')->with('status', 'Université a été ajouté avec success!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
    dd('Bonjour cher tous');  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    { 
        return view('admin.universités.edit',[
        'school' => $school ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $school->name = $request->name;
        $school->address = $request->address;
        $school->description = $request->description;
        $school->logo = $request->logo;
        $school->Devenir = $request->Devenir;
        $school->localisation = $request->localisation;
        $school->TypeUniversité = $request->TypeUniversité;
        $school->save();
        $city = DB::table('cities')->where('id', $school->city_id)->update(['name' => $request['ville']]);
       return redirect()->route('school.index')->with('status', 'Informations modifier !');
 }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        if(Gate::denies('delete-school'))//si l'utilisateur n'est pas un admit il ne peux pas edit et on lui redirige vers notre page d'accueil
        { 
            return redirect()->route('school.index');
        }
        $school_Sup = $school->name;
        $school->delete();
        return redirect()->route('school.index')->with('status', 'utilisateur  '.$school_Sup.' a été supprimé');   }
    }
