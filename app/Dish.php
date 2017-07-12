<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $guarded = [];//$guarded - apaugoti laukai, kurių pildyti negalima, šiuo atveju tuščias masyvas, viskas yras $fillable

    //Eloquent(Modeliai) taip pat leidžia kurti ryšius tar duombazės lentelių ir jas vienas su kita susieti naudojant tam tikrus metodus.
    //Šiuo atveju susikūrėm metodą menu(), kuris sukūrė ryšį tarp dishes ir menu lentelių.
    //Metodas nusako, kad patiekalas priklauso(belongsTo) menu.
    //O tai duoda mums tai, kad  išsikvietę Dishes modelį galim pasiekti Menu modelį ir sužinoti, kuriam meniu priklauso patiekalas.
    //taip kaip kvietėm $dish->menu_id dabar galima rašyti $dish->menu->title ir vietoj menu_id skaičiaus matysim menu pavadinimą.

    //Eloquent yra labai galingas query builderis aprašant ryšius metodais ir reikia laiko juos suprasti, bet daugiau info https://laravel.com/docs/5.4/eloquent-relationships Taip pat plačiau pasidomėti apie foreign key SQLe reikia norint juos geriau suprasti
    public function menu()
  {
  	return $this->belongsTo('App\Menu');
  }
}
