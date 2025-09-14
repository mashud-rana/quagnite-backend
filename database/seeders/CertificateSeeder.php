<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Certificate::create([
            'title' => 'MCdns, LLC',
            'website' => 'www.mcdns.tech',
            'tel' => '+1(267)406-8357',
            'body_text' => 'A certificate program is a specialized education designed to
            develop or strengthen specific career skills. A certificate
            program is considered continuing education in some cases
            because it builds on your knowledge of a particular career
            or industry. In other cases, it requires no prior education
            and can help you learn about a subject, career, or industry
            to pursue related jobs.',
            'founder' => 'Franck Kengne, Co-Founder and CEO',
            'name' => 'Jhon Doe',
            'date' => date('Y-m-d'),
        ]);
    }
}
