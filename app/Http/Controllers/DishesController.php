<?php

namespace App\Http\Controllers;
use App\Dish;
use Illuminate\Http\Request;

class DishesController extends Controller
{
	//Atvaizduoja visus patiekalus index.blade.php pasiimant duomenis iš SQL naudojant Modelį Dish ir naudojant PHP compact() funkciją duomenys paruošti atvaizdavimui. compact pvz yra Slacke
    public function index(){
    	//$dishes = Dish::all(); //Pasiima visus patiekalus iš duombazės per modelį

    	$dishes = Dish::latest()->get(); //Pasiima visus patiekalus iš duombazės, bet juos išrikiuoja eiliškumu pagal naujausią

    	//$dishes = Dish::latest()->take(2)->get(); //Pasiima visus patiekalus iš duombazės, bet juos išrikiuoja eiliškumu pagal naujausią ir atvaizduoja tik du, take(2). Galima nurodyti kiek norima atvaizduoti

    	return view('dishes.index', compact('dishes'));

    }
    //Perduoda vieno patiekalo duomenis į show.blade.php, $dish = Dish::find($id) suranda duomenis  pagal nurodytą ID
    public function show($id){
	     $dish = Dish::find($id);
	     return view('dishes.show', compact('dish'));
    }
    //Atvaizduoja tuščią formą, kuri paruošiama sukurti naują produktą
    public function create(){
    	return view('dishes.create');
    }
    //Sukuria naują patiekalą. Keičiant duomenis, juos trinant ar sukuriant naujus reikia naudoti Request $request metode. Keičiant duomenis taip pat reikia rašyti return redirect()->route(), o ne return view()
    public function createDish(Request $request){
    	Dish::create($request->all());
    	// $request->session()->flash('success', $request->title . ' was successfully added!'); Užkomentuota PHP sesija, kuri gali atvaizduodi pranešimus keičiant duomenis. Nebaigta, bet dokumentacijoje galit pasidomėti ir užbaigti
    	return redirect()->route('dishes.index');
    }
    //Sukelia duomenis iš SQL pagal ID jau į turimą formą
    public function store($id){
    	$dish = Dish::find($id);
     	return view('dishes.create', compact('dish'));
    }
    //Updeitina patiekalą pagal nurodytus duomenis formoje, jei formos names laukai ir dish tables pavadinimai sutampa. Nereikia visko rašyti po vieną variable, pakanka update($request->all()); Ir viską už jus padaro frameworkas.
    public function update(Request $request, $id){
    	Dish::find($id)->update($request->all());
        return redirect()->route('dishes.index');
    }
    //pagal ID pasirenka patiekalą ir jį ištrina
    public function delete(Request $request, $id){
      $dish = Dish::find($id);
      $dish->delete();

      return redirect()->route('dishes.index');
    }
}
