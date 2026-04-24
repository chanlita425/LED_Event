<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    public function run(): void
    {
        $messages = [
            [
                'first_name' => 'Dara',
                'last_name' => 'Sok',
                'email' => 'dara.sok@gmail.com',
                'project_type' => 'Event booking enquiry',
                'message' => "Hi LED Events team,\n\nI'd like to book LED lighting for my company's annual gala dinner on May 15th. The venue is a ballroom that fits around 300 guests. Could you let me know what packages are available and the estimated cost?",
                'status' => 'new',
                'created_at' => now()->subMinutes(12),
            ],
            [
                'first_name' => 'Maly',
                'last_name' => 'Chan',
                'email' => 'maly.chan@company.com',
                'project_type' => 'Price quote request',
                'message' => "Hello,\n\nCan you send me a quote for a wedding reception with stage lighting, uplights, and a custom monogram projection? We are comparing options for a June event.",
                'status' => 'read',
                'created_at' => now()->subDay(),
            ],
            [
                'first_name' => 'Panha',
                'last_name' => 'Rin',
                'email' => 'panha.rin@yahoo.com',
                'project_type' => 'Question about packages',
                'message' => "Hi team,\n\nWhat packages do you offer for corporate conferences? We need stage washes, a backdrop wash, and setup support for a two-day program.",
                'status' => 'replied',
                'created_at' => now()->subDay()->addHours(4),
            ],
            [
                'first_name' => 'Vanna',
                'last_name' => 'Keo',
                'email' => 'vanna.keo@studio.com',
                'project_type' => 'Follow-up on proposal',
                'message' => "Thanks for the quick reply. We reviewed the proposal and would like to confirm whether the package can be scaled up for a larger stage setup.",
                'status' => 'archived',
                'created_at' => now()->subDays(2),
            ],
            [
                'first_name' => 'Sophea',
                'last_name' => 'Lim',
                'email' => 'sophea.lim@example.com',
                'project_type' => 'Stage lighting setup',
                'message' => "We need lighting for a concert stage on April 30th. Please share what equipment is included, whether delivery is available, and if on-site operators are provided.",
                'status' => 'new',
                'created_at' => now()->subDays(4),
            ],
        ];

        foreach ($messages as $message) {
            ContactMessage::updateOrCreate(
                [
                    'email' => $message['email'],
                    'created_at' => $message['created_at'],
                ],
                $message
            );
        }
    }
}