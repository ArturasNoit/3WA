<?php
use App\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    	protected $menu;
     public function __construct(Menu $menu) {
        $this->menu = $menu;
    }
    public function run()
    {
        $this->menu->create([
        	'title' => 'Dienos pietūs',
        	'link' => 'pietus'
      	]);
      	        $this->menu->create([
        	'title' => 'Užkandžiai',
        	'link' => 'Užk'
      	]);
      	                $this->menu->create([
        	'title' => 'Sriubos',
        	'link' => 'sriubos'
      	]);
    }
}
