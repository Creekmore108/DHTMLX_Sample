<?php

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       		Event::create([
                'text'        	=> 'Test Event One',
                'color'       	=> 'Red',
                'start_date' 	=> Now(),
                'end_date' 		=> Now(),
                'resource_id' 	=> 1,
                'user_id'		=> 1,
            ]);
        

        	Event::create([
                'text'        	=> 'Test Event Two',
                'color'       	=> 'Blue',
                'start_date' 	=> Now(),
                'end_date' 		=> Now(),
                'resource_id' 	=> 2,
                'user_id'		=> 2,
            ]);
 	
        	Event::create([
                'text'        	=> 'Test Event Three',
                'color'       	=> 'Green',
                'start_date' 	=> Now(),
                'end_date' 		=> Now(),
                'resource_id' 	=> 3,
                'user_id'		=> 1,
            ]);
    }
}
