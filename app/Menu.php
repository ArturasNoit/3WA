<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $table = 'menu';
	// Priverčia duombazę laravelyje nenaudoti daugiskaitos, kai daugiskaitos nėra ir nereikia
	//Pagal default laravelis sukuria "menus" lentelę
	protected $fillable = ['title', 'link'];//$fillable leidžiami laukai užpildyti
}
