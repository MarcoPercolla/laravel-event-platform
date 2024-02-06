<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'name' => 'Music',
                'color' => 'purple',
            ],
            [
                'name' => 'Theatre',
                'color' => 'blue',
            ],
            [
                'name' => 'Food',
                'color' => 'red',
            ],
            [
                'name' => 'Stand-up',
                'color' => 'green',
            ],
            [
                'name' => 'talent',
                'color' => 'orangered',
            ],
            [
                'name' => 'sport',
                'color' => 'grey',
            ],
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->fill($tag);
            $newTag->save();
        }
    }
}
