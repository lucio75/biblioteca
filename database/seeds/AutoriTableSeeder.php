<?php

use Illuminate\Database\Seeder;

class AutoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Autori::class,10)->create()->each(function($u){
           $u->Libri()->save(factory(App\Models\Libri::class)->make());
        });
    }
}
