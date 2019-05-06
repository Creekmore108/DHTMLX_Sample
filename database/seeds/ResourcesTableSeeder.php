<?php

use Illuminate\Database\Seeder;
use App\Models\Resource;


class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   

   			Resource::create([
                'resource_name'        	=> 'Resource One',
                'description'       	=> 'First resource',
                'color' 				=> 'Red',
                
            ]);
        
 			Resource::create([
                'resource_name'        	=> 'Resource Two',
                'description'       	=> 'Second resource',
                'color' 				=> 'Green',
                
            ]);

            Resource::create([
                'resource_name'        	=> 'Resource Three',
                'description'       	=> 'Third resource',
                'color' 				=> 'Blue',
                
            ]);
 
    }
}
