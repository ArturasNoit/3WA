<?php
use App\User;
use Faker\Factory as Faker;


use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	protected $user;
    protected $faker;

    public function __construct(User $user, Faker $faker) {
        $this->user = $user;
        $this->faker = $faker;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = $this->faker->create();

      foreach (range(1, 10) as $x) {
        $this->user->create([
        'name' => $faker->name(),
        'surname' => $faker->name(),
        'birthday' => $faker->ean13(),
        'phonenumber' => $faker->ean13(),
        'email' => $faker->email(),
        'password' => \Hash::make('testas'),
        'address' => $faker->ean13(),
        'city' => $faker->city(),
        'zipcode' => $faker->ean13(),
        'country' => $faker->city(),
        'created_at' => new \DateTime(),
        'updated_at' => new \DateTime(),
       ]);
      }

      $this->user->create([
        'name' => 'admin',
        'surname' => 'Aminas',
        'birthday' => '75353535',
        'phonenumber' => '555555555555',
        'email' => 'admin@admin.lt',
        'password' => \Hash::make('testas'),
        'address' => '12345',
        'city' => 'Vilnius',
        'zipcode' => '5777587',
        'country' => 'Lietuva',
        'created_at' => new \DateTime(),
        'updated_at' => new \DateTime(),

      	]);
    }

}
