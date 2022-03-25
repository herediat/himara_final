<?php

namespace App\Http\Controllers;

use App\Models\Fonction;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function affichage()
    {
        $team = Team::all();
        $houseKeeper = Team::where("fonction_id", 1)->first();

        return view("admin.staff.index", compact("team", "houseKeeper"));
    }

    public function create()
    {
        $team = Team::all();
        $fonctionAll = Fonction::all();

        return view("admin.staff.create", compact("team", "fonctionAll"));
    }

    public  function  store(Request  $request)
    {

        request()->validate([
            "fullname" => ["required"],
            "description" => ["required"],
            "img" => ["required"],
        ]);

        $store = new  Team();
        $store->fullname = $request->fullname;
        $store->description = $request->description;
        // $store->url = $request->url;
        if ($request->img) {
            $request->file('img')->storePublicly('images/', 'public');
            $store->img = $request->file('img')->hashName();
        } else {
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('images/' . $token, $fichierURL);
            $store->img = $token;
        }

        // dd($request);
        $store->fonction_id = $request->fonction_id;

        $store->save();
        return  redirect()->back()->with('success', $request->fullname . ' bien ajouté !');
    }

    public function destroy(Team $image, $id)
    {
        $image = Team::find($id);
        // $this->authorize("isAdmin");
        // Storage
        $destination = "images/" . $image->img;
        // dd($destination);
        Storage::disk("public")->delete($destination);
        // dd($destination);
        $image->delete();
        return redirect()->back()->with('warning', 'Image bien supprimé');
    }

    public function edit(Team $teams)
    {
        // $teams = Team::all();
        return view("admin.staff.edit", compact("teams"));
    }

    public function update(Request $request, Team $teams)
    {

        $request->validate([
            'img' => 'required',
            'fullname' => 'required',
            'description' => 'required',
        ]);

        // $teams->img = $request->img;

        if ($request->img) {
            $request->file('img')->storePublicly('images/', 'public');
            $teams->img = $request->file('img')->hashName();
        } else {
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('images/' . $token, $fichierURL);
            $teams->img = $token;
        }

        $teams->fullname = $request->fullname;
        $teams->description = $request->description;
        $teams->save();
        return redirect()->route('team.index')->with('success', 'categorie ' . $request->nom . ' modifiée !');
    }
}
