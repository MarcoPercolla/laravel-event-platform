<?php

namespace Database\Seeders;

use App\Models\Event;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'name' => 'evento 1',
                'date' => '2024-08-08',
                'available_tickets' => 500,
                'user_id' => '1',
            ],
            [
                'name' => 'evento 2',
                'date' => '2024-03-13',
                'available_tickets' => 501,
                'user_id' => '2',
            ],
            [
                'name' => 'evento 3',
                'date' => '2024-01-26',
                'available_tickets' => 502,
                'user_id' => '1',
            ],
            [
                'name' => 'evento 4',
                'date' => '2024-03-18',
                'available_tickets' => 10,
                'user_id' => '2',
            ]
        ];

        foreach ($events as $event) {

            $newEvent = new Event();
            $newEvent->fill($event);
            $newEvent->save();
        }
    }
}
