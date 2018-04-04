<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('coffees')->insert([
            'name'  => 'Suplicar Clemencia Dark',
            'roast' => 'dark', 
            'desc'   => 'We take a specially selected blend of beans and roast them until they beg for mercy. A roasty, chocolaty, full bodied and honey-sweet dark roast.', 
            'country' => 'Not available',
            'image' => str_random(10), 
        ]);

       	DB::table('coffees')->insert([
            'name'  => 'Mexico Chiapas Altura',
            'roast' => 'medium', 
            'desc'   => 'This beauty is comfortingly sweet, boasting a medium body with milk chocolate flavors interlaced with light spice and a sweet, mild finish. A really great way to start your morning! Certified Organic and Fair Trade.', 
            'country' => 'Mexico',
            'image' => str_random(10), 
        ]);

        DB::table('coffees')->insert([
            'name'  => 'Ethiopia Sidamo',
            'roast' => 'medium', 
            'desc'   => 'We love the shear complexity of this traditional natural-processed beauty. Lots of lemongrass, slightly floral and a backnote of berries in the finish.  From the small-scale farmers of the Sidama Coffee Farmers Cooperative Union. Certified Organic and Fair Trade.', 
            'country' => 'Ethiopia',
            'image' => str_random(10), 
        ]);

        DB::table('users')->insert([
            'name'  => 'Søren Kierkegaard',
            'email' => 'soren@coffe.com',
            'password' => str_random(32),
        ]);

        DB::table('users')->insert([
            'name'  => 'Honore de Balzac',
            'email' => 'honore@coffe.com',
            'password' => str_random(32),
        ]);

        DB::table('users')->insert([
            'name'  => 'Theodore Roosevelt',
            'email' => 'theodore@coffe.com',
            'password' => str_random(32),
        ]);
    }
}
