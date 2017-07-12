++<?php
use App\Dish;
use App\Menu;
use Faker\Factory as Faker;


use Illuminate\Database\Seeder;

class DishesSeeder extends Seeder
{
	protected $dish;
    protected $faker;
    protected $menu;

    public function __construct(Dish $dish, Faker $faker, Menu $menu) {
        $this->dish = $dish;
        $this->faker = $faker;
        $this->menu = $menu;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = $this->faker->create();
        $menu_ids = $this->menu->pluck('id');
      foreach (range(1, 10) as $x) {
        $this->dish->create([
        'title' => $faker->name(),
        'photo' => $faker->imageUrl(800, 600, 'food'),
        'description' => $faker->sentence(200),
        'price' => $faker->numberBetween(10, 100),
        'quantity' => $faker->numberBetween(1, 15),
        'menu_id' => $menu_ids->random(),
        'created_at' => new \DateTime(),
        'updated_at' => new \DateTime(),
       ]);
      }
    }

}

