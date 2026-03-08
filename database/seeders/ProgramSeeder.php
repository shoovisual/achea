<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::truncate();

        Program::create([
            'title' => 'Sustainable Agriculture for Youth',
            'slug' => 'sustainable-agriculture-for-youth',
            'description' => 'Empowering young people with skills in modern, climate-resilient farming techniques.',
            'content' => '
                <p>Agriculture is the backbone of many economies, but youth engagement is low. Our program changes this by making farming profitable and sustainable.</p>
                <p>We provide training in:</p>
                <ul>
                    <li>Organic farming methods.</li>
                    <li>Use of drought-resistant seeds.</li>
                    <li>Market access and agribusiness management.</li>
                </ul>
                <p>By equipping youth with these skills, we reduce unemployment and ensure food security for the future.</p>
            ',
            'image' => 'img/service/1.png',
            'start_date' => '2024-06-01',
            'status' => 'active',
            'location' => 'Iringa, Tanzania',
        ]);

        Program::create([
            'title' => 'Clean Water Access for Rural Schools',
            'slug' => 'clean-water-access-rural-schools',
            'description' => 'Providing safe drinking water and sanitation facilities to schools in remote areas.',
            'content' => '
                <p>Lack of clean water affects students\' health and attendance. We drill boreholes and install filtration systems in rural schools.</p>
                <p>Impact:</p>
                <ul>
                    <li>Reduced waterborne diseases among students.</li>
                    <li>Increased school attendance, especially for girls.</li>
                    <li>Improved hygiene practices through education.</li>
                </ul>
                <p>Clean water is not just a resource; it is the foundation of education and health.</p>
            ',
            'image' => 'img/service/2.png',
            'start_date' => '2025-01-10',
            'status' => 'active',
            'location' => 'Singida, Tanzania',
        ]);

        Program::create([
            'title' => 'Women\'s Economic Empowerment',
            'slug' => 'womens-economic-empowerment',
            'description' => 'Supporting women entrepreneurs with micro-loans and business mentorship.',
            'content' => '
                <p>When women succeed, communities thrive. This program focuses on breaking barriers to economic independence for women.</p>
                <p>We offer:</p>
                <ul>
                    <li>Financial literacy workshops.</li>
                    <li>Access to micro-credit for small businesses.</li>
                    <li>Mentorship from successful female leaders.</li>
                </ul>
                <p>From tailoring shops to poultry farming, we help women turn their ideas into sustainable livelihoods.</p>
            ',
            'image' => 'img/service/3.png',
            'start_date' => '2023-11-15',
            'status' => 'active',
            'location' => 'Tanga, Tanzania',
        ]);

        Program::create([
            'title' => 'Digital Literacy for Communities',
            'slug' => 'digital-literacy-communities',
            'description' => 'Bridging the digital divide by providing computer training and internet access.',
            'content' => '
                <p>In today\'s world, digital skills are essential. We set up community computer centers to teach basic computer skills and internet usage.</p>
                <p>Program highlights:</p>
                <ul>
                    <li>Introduction to computers and the internet.</li>
                    <li>Online safety and information literacy.</li>
                    <li>Using digital tools for business and education.</li>
                </ul>
                <p>We are connecting remote communities to the global information network, opening up new opportunities for learning and growth.</p>
            ',
            'image' => 'img/service/4.png',
            'start_date' => '2025-05-01',
            'status' => 'upcoming',
            'location' => 'Mbeya, Tanzania',
        ]);
    }
}
