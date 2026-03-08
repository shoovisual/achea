<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing projects to avoid duplicates during development
        \App\Models\Project::truncate();

        // 1) Climate-Resilient Maternal and Newborn Health Initiative – Coastal Tanzania
        \App\Models\Project::create([
            'title' => 'Climate-Resilient Maternal and Newborn Health Initiative',
            'slug' => 'climate-resilient-maternal-newborn-health-initiative',
            'description' => 'Strengthening maternal health service continuity during floods, heatwaves, and water scarcity.',
            'content' => '
                <p><strong>Objective:</strong> Strengthen maternal health service continuity during floods, heatwaves and water scarcity.</p>
                <p><strong>Partners:</strong> Regional Health Offices, Local PHCs, Women’s Groups</p>
                <p><strong>Key Interventions:</strong></p>
                <ul>
                    <li>Solarization of 12 primary health facilities with battery-backed maternity wards</li>
                    <li>Installation of rainwater harvesting systems and climate-proof WASH upgrades</li>
                    <li>Heat-risk protocols integrated into antenatal care services</li>
                    <li>Training of 85 frontline health workers on climate-sensitive MNCH care</li>
                </ul>
                <p><strong>Results:</strong></p>
                <ul>
                    <li>32% reduction in climate-related service disruptions</li>
                    <li>18% increase in facility-based deliveries during peak flood season</li>
                    <li>24-hour power reliability achieved in all upgraded facilities</li>
                </ul>
                <p><strong>Donor Appeal:</strong> Demonstrates scalable, infrastructure-linked adaptation aligned with NDC–Health and SDG 3 & 13.</p>
            ',
            'image' => 'img/gallery/1.jpg',
            'start_date' => '2024-01-01',
            'status' => 'active',
            'location' => 'Dar es Salaam and Pwani Regions',
        ]);

        // 2) Urban Heat and Maternal Health Risk Mapping Program
        \App\Models\Project::create([
            'title' => 'Urban Heat and Maternal Health Risk Mapping Program',
            'slug' => 'urban-heat-maternal-health-risk-mapping',
            'description' => 'Identify climate vulnerability hotspots affecting pregnant women in informal settlements.',
            'content' => '
                <p><strong>Objective:</strong> Identify climate vulnerability hotspots affecting pregnant women in informal settlements.</p>
                <p><strong>Key Interventions:</strong></p>
                <ul>
                    <li>GIS-based heat exposure mapping across 4 municipalities</li>
                    <li>Household surveys of 500 women on heat stress and pregnancy outcomes</li>
                    <li>Development of vulnerability exposure index for PHC planning</li>
                    <li>Policy brief submitted to city health authorities</li>
                </ul>
                <p><strong>Results:</strong></p>
                <ul>
                    <li>Identified 9 high-risk wards for targeted maternal outreach</li>
                    <li>Evidence used to prioritize cooling interventions in 6 PHCs</li>
                    <li>Early warning SMS pilot reached 3,200 women</li>
                </ul>
                <p><strong>Donor Appeal:</strong> Strong data-driven adaptation planning with replicable methodology.</p>
            ',
            'image' => 'img/gallery/2.jpg',
            'start_date' => '2023-01-01',
            'status' => 'completed',
            'location' => 'Dar es Salaam Metropolitan Area',
        ]);

        // 3) Clean Energy for Safe Births Program
        \App\Models\Project::create([
            'title' => 'Clean Energy for Safe Births Program',
            'slug' => 'clean-energy-safe-births',
            'description' => 'Improve energy reliability for emergency obstetric and neonatal care.',
            'content' => '
                <p><strong>Objective:</strong> Improve energy reliability for emergency obstetric and neonatal care.</p>
                <p><strong>Key Interventions:</strong></p>
                <ul>
                    <li>Solar mini-grids installed in 5 district maternity wards</li>
                    <li>Energy audits and load optimization for delivery rooms</li>
                    <li>Cold-chain stabilization for oxytocin and essential medicines</li>
                    <li>Financial sustainability model developed with local authorities</li>
                </ul>
                <p><strong>Results:</strong></p>
                <ul>
                    <li>40% reduction in diesel generator costs</li>
                    <li>Zero vaccine spoilage incidents during 12-month monitoring</li>
                    <li>15% improvement in emergency response time during night deliveries</li>
                </ul>
                <p><strong>Donor Appeal:</strong> Integrates mitigation and adaptation with clear economic return.</p>
            ',
            'image' => 'img/gallery/3.jpg',
            'start_date' => '2024-01-01',
            'status' => 'active',
            'location' => 'Lake Zone District Hospitals',
        ]);

        // 4) Community-Based Climate Early Warning for Pregnant Women
        \App\Models\Project::create([
            'title' => 'Community-Based Climate Early Warning for Pregnant Women',
            'slug' => 'community-based-climate-early-warning',
            'description' => 'Reduce climate-related maternal health risks through localized early warning systems.',
            'content' => '
                <p><strong>Objective:</strong> Reduce climate-related maternal health risks through localized early warning systems.</p>
                <p><strong>Key Interventions:</strong></p>
                <ul>
                    <li>Community climate-health adaptation groups formed in 18 villages</li>
                    <li>SMS-based early warning alerts for extreme heat and flooding</li>
                    <li>Emergency transport savings schemes for maternal referrals</li>
                    <li>Training of community health workers on climate risk communication</li>
                </ul>
                <p><strong>Results:</strong></p>
                <ul>
                    <li>27% increase in timely maternal referrals during extreme weather events</li>
                    <li>60% improvement in awareness of climate-related pregnancy risks</li>
                    <li>Locally managed emergency transport fund operational in all villages</li>
                </ul>
                <p><strong>Donor Appeal:</strong> High community ownership, gender-responsive and equity-focused.</p>
            ',
            'image' => 'img/gallery/4.jpg',
            'start_date' => '2023-06-01',
            'status' => 'active',
            'location' => 'Semi-arid Districts, Central Tanzania',
        ]);

        // 5) Climate-Resilient WASH in Primary Health Facilities
        \App\Models\Project::create([
            'title' => 'Climate-Resilient WASH in Primary Health Facilities',
            'slug' => 'climate-resilient-wash-primary-health',
            'description' => 'Strengthen infection prevention and maternal safety through climate-proof WASH systems.',
            'content' => '
                <p><strong>Objective:</strong> Strengthen infection prevention and maternal safety through climate-proof WASH systems.</p>
                <p><strong>Key Interventions:</strong></p>
                <ul>
                    <li>Upgraded water storage and backup systems in 10 PHCs</li>
                    <li>Climate-adapted sanitation blocks for maternity units</li>
                    <li>Introduction of low-water sterilization technologies</li>
                    <li>Compliance monitoring aligned with WHO WASH-in-HCF framework</li>
                </ul>
                <p><strong>Results:</strong></p>
                <ul>
                    <li>35% reduction in reported maternal ward infections</li>
                    <li>Continuous water availability maintained during drought period</li>
                    <li>WASH compliance improved from 54% to 82% across supported facilities</li>
                </ul>
                <p><strong>Donor Appeal:</strong> Clear health outcomes, alignment with global standards and strong monitoring framework.</p>
            ',
            'image' => 'img/gallery/5.jpg',
            'start_date' => '2024-02-01',
            'status' => 'active',
            'location' => 'Zanzibar and Coastal Mainland',
        ]);
    }
}
