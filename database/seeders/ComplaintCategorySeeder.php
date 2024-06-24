<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\ComplaintCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComplaintCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['title' => 'Korupsi',],
            ['title' => 'Narkotika',],
            ['title' => 'Terorisme',],
            ['title' => 'Perdagangan Orang',],
            ['title' => 'Pencucian Uang',],
        ];
        foreach ($data as $item) :
            ComplaintCategory::create(
                [
                    'user_id' => 1,
                    'slug' => Str::slug($item['title']),
                    'title' => Str::headline(Str::lower($item['title'])),
                ],
            );
        endforeach;
    }
}
