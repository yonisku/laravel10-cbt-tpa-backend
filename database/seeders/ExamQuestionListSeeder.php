<?php

namespace Database\Seeders;

use App\Models\ExamQuestionList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamQuestionListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExamQuestionList::factory()
            ->count(100)
            ->create();
    }
}
