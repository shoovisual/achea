<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::truncate();

        News::create([
            'title' => 'ACHEA Launches New Climate Initiative',
            'slug' => 'achea-launches-new-climate-initiative',
            'summary' => 'A major new project to tackle climate change effects in coastal regions.',
            'content' => '
                <p>We are proud to announce the launch of our "Coastal Resilience Project". This initiative aims to protect coastal communities from rising sea levels and extreme weather events.</p>
                <p>The project will focus on:</p>
                <ul>
                    <li>Mangrove reforestation.</li>
                    <li>Construction of sea walls.</li>
                    <li>Community education on climate adaptation.</li>
                </ul>
                <p>This is a significant step forward in our mission to safeguard the environment and vulnerable populations.</p>
            ',
            'image' => 'img/gallery/1.jpg',
            'published_at' => '2025-02-15 10:00:00',
            'author' => 'Sarah Johnson',
            'status' => 'published',
        ]);

        News::create([
            'title' => 'Partnership with Local Government Strengthened',
            'slug' => 'partnership-local-government-strengthened',
            'summary' => 'New agreement signed to enhance healthcare delivery in rural districts.',
            'content' => '
                <p>ACHEA has signed a Memorandum of Understanding (MoU) with the Ministry of Health to expand our healthcare programs in rural districts.</p>
                <p>This partnership will allow us to:</p>
                <ul>
                    <li>Reach more remote villages.</li>
                    <li>Share resources and expertise.</li>
                    <li>Ensure sustainability of our health interventions.</li>
                </ul>
                <p>Collaboration is key to achieving lasting impact, and we are excited about this new chapter.</p>
            ',
            'image' => 'img/gallery/2.jpg',
            'published_at' => '2025-01-20 14:30:00',
            'author' => 'David Mwakalebela',
            'status' => 'published',
        ]);

        News::create([
            'title' => 'Success Story: How Solar Power Changed a Clinic',
            'slug' => 'success-story-solar-power-clinic',
            'summary' => 'A look at the transformative impact of renewable energy on healthcare.',
            'content' => '
                <p>Before the installation of solar panels, the Kilombero Health Center faced frequent power outages, making night-time deliveries dangerous.</p>
                <p>With reliable solar power:</p>
                <ul>
                    <li>Vaccines are stored safely in refrigerators.</li>
                    <li>Lights are available 24/7 for emergencies.</li>
                    <li>Medical equipment runs without interruption.</li>
                </ul>
                <p>"We can now save more lives," says Dr. Amina, the clinic head. This is the power of sustainable solutions.</p>
            ',
            'image' => 'img/gallery/3.jpg',
            'published_at' => '2024-12-05 09:00:00',
            'author' => 'Grace Kimaro',
            'status' => 'published',
        ]);
    }
}
