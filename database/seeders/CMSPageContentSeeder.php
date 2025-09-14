<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CMSPageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = Page::where('status', Page::STATUS_ACTIVE)->get();

        // Delete all data
        PageContent::truncate();

        foreach ($pages as $page) {

            if($page->slug == '/')
            {
                $homeSection = [
                    'hero_section' => [
                        'title' => "Supercharge your passion",
                        'subtitle' => "Quagnite offers training and education tailored to meet the needs of the individual, for businesses and individuals alike. From self-paced learning to expert instruction, a broad range of subjects gives you the skills you need to succeed at the leading edge of technology and industry.",
                        'button_text' => 'Explore',
                        'button_url' => '#',
                    ],
                    'about_section' => [
                        'title' => 'Dedicated to',
                        'content' => 'Quagnite is a multimodal platform that offers learners their choice of instruction. It delivers cutting-edge content and certifications across a broad range of technology subjects. Our members join a community of practitioners that includes talent placement and continual growth.',
                    ],
                    'school_section' => [
                        'schools' => [
                            [
                                'image' => asset('frontend/images/cms_default_image/school_default_image.webp'),
                                'title' => 'Cloud Computing',
                                'description' => 'Learn about cloud computing, including cloud architecture, services, and deployment models.',
                                'button_text' => 'Learn More',
                                'button_url' => '#',
                            ],
                            [
                                'image' => asset('frontend/images/cms_default_image/school_default_image.webp'),
                                'title' => 'Cloud Computing',
                                'description' => 'Learn about cloud computing, including cloud architecture, services, and deployment models.',
                                'button_text' => 'Learn More',
                                'button_url' => '#',
                            ],
                            [
                                'image' => asset('frontend/images/cms_default_image/school_default_image.webp'),
                                'title' => 'Cloud Computing',
                                'description' => 'Learn about cloud computing, including cloud architecture, services, and deployment models.',
                                'button_text' => 'Learn More',
                                'button_url' => '#',
                            ],
                            [
                                'image' => asset('frontend/images/cms_default_image/school_default_image.webp'),
                                'title' => 'Cloud Computing',
                                'description' => 'Learn about cloud computing, including cloud architecture, services, and deployment models.',
                                'button_text' => 'Learn More',
                                'button_url' => '#',
                            ],
                            [
                                'image' => asset('frontend/images/cms_default_image/school_default_image.webp'),
                                'title' => 'Cloud Computing',
                                'description' => 'Learn about cloud computing, including cloud architecture, services, and deployment models.',
                                'button_text' => 'Learn More',
                                'button_url' => '#',
                            ],
                            [
                                'image' => asset('frontend/images/cms_default_image/school_default_image.webp'),
                                'title' => 'Cloud Computing',
                                'description' => 'Learn about cloud computing, including cloud architecture, services, and deployment models.',
                                'button_text' => 'Learn More',
                                'button_url' => '#',
                            ],
                        ],
                    ],
                    'industries_section' => [
                        'title' => 'Quagnite’s industry partners make our',
                        'industries_card' => [
                            [
                                'image' => asset('frontend/images/cms_default_image/industries_card_government.webp'),
                                'title' => 'Government'
                            ],
                            [
                                'image' => asset('frontend/images/cms_default_image/industries_card_private_organisation.webp'),
                                'title' => 'Private Organisation'
                            ],
                            [
                                'image' => asset('frontend/images/cms_default_image/industries_card_non_profit_organization.webp'),
                                'title' => 'Non-profit Organization'
                            ],
                            [
                                'image' => asset('frontend/images/cms_default_image/industries_card_military.webp'),
                                'title' => 'Military'
                            ],
                            [
                                'image' => asset('frontend/images/cms_default_image/industries_card_finance.webp'),
                                'title' => 'Finance'
                            ],
                            [
                                'image' => asset('frontend/images/cms_default_image/industries_card_agriculture.webp'),
                                'title' => 'Agriculture'
                            ],
                            [
                                'image' => asset('frontend/images/cms_default_image/industries_card_real_estate.webp'),
                                'title' => 'Real Estate'
                            ],
                            [
                                'image' => asset('frontend/images/cms_default_image/industries_card_education.webp'),
                                'title' => 'Education'
                            ]

                        ]
                    ],
                    'why_us_section' => [
                        'title' => 'The Quagnite Difference',
                        'reasons' => [
                            [
                                'tab_name' => 'Personalized Training',
                                'title' => 'Personalized Training',
                                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget tortor at nibh mollis in id magna. Fusce elementum at lacus vel viverra. Sed id massa purus.'
                            ],
                            [
                                'tab_name' => 'Success Coach',
                                'title' => 'Your Path to Success',
                                'description' => 'Get guidance from experienced coaches at every step.'
                            ],
                            [
                                'tab_name' => 'Proctored exams',
                                'title' => 'Secure Exam Environment',
                                'description' => 'Take monitored exams for a trusted certification process.'
                            ],
                            [
                                'tab_name' => 'Flexible payments',
                                'title' => 'Pay Your Way',
                                'description' => 'Choose from multiple payment options that suit your budget.'
                            ],
                            [
                                'tab_name' => 'Scholarships',
                                'title' => 'Financial Support Available',
                                'description' => 'Apply for scholarships to reduce your learning costs.'
                            ],
                            [
                                'tab_name' => 'API Intermigration',
                                'title' => 'Powerful API Integration',
                                'description' => 'Easily connect your tools with our flexible APIs.'
                            ],
                            [
                                'tab_name' => 'Dedicated Account Manager',
                                'title' => 'Personal Support',
                                'description' => 'A dedicated expert to help you at every step.'
                            ],
                        ]
                    ],
                    'section_space_section' => [
                        [
                            'image' => asset('frontend/images/cms_default_image/section_space_1.webp'),
                        ],
                        [
                            'image' => asset('frontend/images/cms_default_image/section_space_2.webp'),
                        ],
                        [
                            'image' => asset('frontend/images/cms_default_image/section_space_3.webp'),
                        ],
                        [
                            'image' => asset('frontend/images/cms_default_image/section_space_4.webp'),
                        ],
                        [
                            'image' => asset('frontend/images/cms_default_image/section_space_5.webp'),
                        ],
                        [
                            'image' => asset('frontend/images/cms_default_image/section_space_6.webp'),
                        ]
                    ],
                    'why_quagnite_section' => [
                        'title' => 'Education suitable to you',
                        'subtitle' => "Quagnite offers an efficient process from education to employment. Join a pipeline of training and education that opens up opportunities for a better future.",
                        'why_quagnite_feature_item' => [
                            [
                                'title' => 'Education',
                                'description' => 'By offering tailored learning methods, Quagnite fosters a love of learning and enables every student to succeed.'
                            ],
                            [
                                'title' => 'Certification',
                                'description' => 'The pace of tech is high. Quagnite certifications show the world competency across a broad range of high-demand subjects.'
                            ],
                            [
                                'title' => 'Community',
                                'description' => 'Stronger together. Quagnite students gain instant networking opportunities and can have their skills displayed directly to potential employers.'
                            ],
                        ],
                        'left_image' => asset('frontend/images/cms_default_image/why_quarnite_left.webp'),
                        'center_image' => asset('frontend/images/cms_default_image/why_quarnite_center.webp'),
                        'right_image' => asset('frontend/images/cms_default_image/why_quarnite_right.webp'),
                    ],
                    'hire_section' => [
                        'title' => 'HIRE FROM US',
                        'description' => 'The people on your team are the most critical component to business success; build your perfect team with Quagnite-certified and educated employees.',
                        'button_text' => 'EXPLORE',
                        'button_url' => '#',
                        'image' => asset('frontend/images/cms_default_image/hire.webp'),
                    ]
                ];

//                Home page Default Content
                foreach($homeSection as $key => $section) {
                    PageContent::create([
                        'page_id' => $page->id,
                        'module_name' => $key,
                        'content' => $section,
                        'status' => PageContent::STATUS_ACTIVE,
                    ]);
                }
            }
        }
    }
}
