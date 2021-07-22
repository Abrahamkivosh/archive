<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names =["photos","document","music","vido","notes"];
        $users = User::all();
        foreach ($names as $key => $name) {
           
           $category = Category::create(['name'=>$name]);
            $groups = ["school","family","social","Wedding","entertainment"] ;
            foreach ($groups as $key => $group) {
                Group::create([
                    'name'=>$group,
                    'category_id'=> $category->id,
                    'user_id'=> $users->random()->id
                ]);
            }
        }
       
    }
}
