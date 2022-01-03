<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [
                'key'   => 'title',
                'value' => 'The Annual<br><span>Marketing</span> Conference'
            ],
            [
                'key'   => 'subtitle',
                'value' => '10-12 December, Downtown Conference Center, New York'
            ],
            [
                'key'   => 'youtube_link',
                'value' => 'https://www.youtube.com/watch?v=jDDaplaOz7Q'
            ],
            [
                'key'   => 'about_description',
                'value' => 'Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in est ut optio sequi unde.'
            ],
            [
                'key'   => 'about_where',
                'value' => 'Downtown Conference Center, New York'
            ],
            [
                'key'   => 'about_when',
                'value' => 'Monday to Wednesday<br>10-12 December'
            ],
            [
                'key'   => 'contact_address',
                'value' => 'A108 Adam Street, NY 535022, USA'
            ],
            [
                'key'   => 'contact_phone',
                'value' => '+1 5589 55488 55'
            ],
            [
                'key'   => 'contact_email',
                'value' => 'info@example.com'
            ],
            [
                'key'   => 'footer_description',
                'value' => 'In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.'
            ],
            [
                'key'   => 'footer_address',
                'value' => 'A108 Adam Street <br> New York, NY 535022<br> United States '
            ],
            [
                'key'   => 'footer_twitter',
                'value' => '#'
            ],
            [
                'key'   => 'footer_facebook',
                'value' => '#'
            ],
            [
                'key'   => 'footer_instagram',
                'value' => '#'
            ],
            [
                'key'   => 'footer_googleplus',
                'value' => '#'
            ],
            [
                'key'   => 'footer_linkedin',
                'value' => '#'
            ],
            [
                'key' => 'service_description',
                'value' => 'Many people go to a clinic for routine doctor’s appointments and checkups. We are a “walk-in” clinic providing FREE primary care, specialized care through partnership providers, mental health, nutritional care, sexually transmitted diseases, drug addiction, and preventative care.

                            We deliver care to mothers and babies during pregnancy and delivery. In addition to traditional maternity care, we diagnose and treat disorders of the female reproductive system, urinary systems, and support for preventive women’s healthcare.'
            ],
            [
                'key' => 'facility_description',
                'value' => 'Our representatives have visited Dwazon, Liberia and have accessed the needs of residents and found that the the need and affordability of quality health care is paramount among the residents. EmmanuelHealth have provided medicines and food stuff to meed immediate needs. To meet the urgent health care needs of residents in the district, EmmanuelHealth is constructing a 3-storey multi-purpose healthcare facility. When completed it will provide In-Patient and Out-Patient services, on-site training and a food and nutrutional center.'
            ],
            [
                'key' => 'why_us_description',
                'value' => 'We are a nonprofit clinic providing FREE medically necessary primary or preventive care. We medically diagnose and treat patients reporting illnesses or conditions. Our service delivery model is to provide patients with a patient-centered comprehensive healthcare for the entire family.'
            ],
            [
                'key' => 'why_us_title',
                'value' => 'EmmanuelHealth'
            ],
            [
                'key' => 'about_title',
                'value' => 'EmmanuelHealth Clinic In The Cummunity'
            ],
            [
                'key' => 'about_description',
                'value' => 'Thank you for visiting. Please take a moment to learn about us and what we are doing for humanity. EmmanuelHealth is a private, not-for-profit organization, with 501c3 status, created in 2019 to provide quality healthcare services in Liberia, West Africa, to underderserving communities in the district of Dwazon. Dwazon district spans two counties: Montserrado and Margibi with a population of approximately 27,000 residents. Major hospitals are 27 to 40 miles away. We committed to providing quality medical, women and children health and wellness and nutritions, dental, and behavioral health care to residents of the area.'
            ],
            [
                'key' => 'donate_description',
                'value' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.'
            ],
        ];

        foreach($settings as $setting)
        {
            Setting::create($setting);
        }
    }
}
