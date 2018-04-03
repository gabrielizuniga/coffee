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
            'image' => str_random(10)
        ]);

    }
}
