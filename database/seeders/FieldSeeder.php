<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = [
            ['name' => 'Short Text', 'html_tag' => 'input:text'],
            ['name' => 'Long Text', 'html_tag' => 'textarea'],
            ['name' => 'Number', 'html_tag' => 'input:number'],
            ['name' => 'Date', 'html_tag' => 'input:date'],
            ['name' => 'Calc Field', 'html_tag' => 'input'],
            ['name' => 'Multisel', 'html_tag' => 'input:checkbox'],
            ['name' => 'Singlesel', 'html_tag' => 'input:radio'],
        ];

        collect($fields)->each(function ($field){
            Field::factory()->create($field);
        });
    }
}
