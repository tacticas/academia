<?php

use App\Review;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'stud_id'=>'2',
            'coach_id' => '1',
            'star' => '4',
            'text' =>  'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit iusto provident harum? Delectus hic qui earum temporibus debitis accusamus fuga fugiat cumque quidem. Maiores magni reiciendis repellat fugit commodi placeat.'
        ]);
        Review::create([
            'stud_id'=>'3',
            'coach_id' => '1',
            'star' => '5',
            'text' =>  'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit iusto provident harum? Delectus hic qui earum temporibus debitis accusamus fuga fugiat cumque quidem. Maiores magni reiciendis repellat fugit commodi placeat.'
        ]);
    }
}
