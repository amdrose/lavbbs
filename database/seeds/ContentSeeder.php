<?php

use Illuminate\Database\Seeder;

use App\Models\Content;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Content::class,100)->create();
    }
}
