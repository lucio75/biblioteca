<?php

use App\Models\Libri;

use App\Models\Autori;

use App\User;
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();

        Autori::truncate();

        Libri::truncate();

        $this->call(AutoriTableSeeder::class);

        $this->call(SeedUserTable::class);


    }
}
