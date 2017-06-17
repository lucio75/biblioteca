<?php

use Illuminate\Database\Seeder;

class SeedUserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        {/*
        $sql="INSERT INTO users (name,email,password,created_at)
values(:name,:email,:password,:created_at)";
        for($i=0;$i<31;$i++) {
            DB::statement($sql, [
                'name' => 'Lucio'.$i,
                'email' => 'lucioticali@gmail.com'.$i,
                'password' => bcrypt('29031975').$i,
                'created_at'=>\Carbon\Carbon::now()

            ]);
        }

    */}

        factory(App\User::class,10)->create();
    }
}
