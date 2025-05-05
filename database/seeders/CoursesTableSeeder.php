<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'title' => 'مشروع رتل',
                'short_description' => 'ورة في *ضبط كامل القرآن الكريم* ضمن مشروع رَتِّلْ',
                'description' => 'ورة في *ضبط كامل القرآن الكريم* ضمن مشروع رَتِّلْ',
                'image' => 'course1.jpg',
            ],
            [
                'title' => 'مشروع بالقران نرقى',
                'short_description' => 'ورة في *ضبط كامل القرآن الكريم* ضمن مشروع رَتِّلْ',
                'description' => 'ورة في *ضبط كامل القرآن الكريم* ضمن مشروع رَتِّلْ',
                'image' => 'course2.jpg',
            ],
            [
                'title' => 'منابر النور',
                'short_description' => 'ورة في *ضبط كامل القرآن الكريم* ضمن مشروع رَتِّلْ',
                'description' => 'ورة في *ضبط كامل القرآن الكريم* ضمن مشروع رَتِّلْ',
                'image' => 'course3.jpg',
            ],

        ];

        foreach ($courses as $course) {

            Course::create($course);

        }//end of foreach

    }//end of run

}//end of seeder
