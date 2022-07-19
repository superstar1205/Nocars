<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::create([
            'name' => "Test Primary School",
            'seed' => '100000',
            'pupils' => 200,
            'address' => "123 High Street",
            'town' => "Thistown",
            'county' => "Hereshire",
            'postcode' => 'AB1 2CD',
            'contact_name' => "Fred Bloggs",
            'contact_email' => "support@comgw.co.uk",
            'office_email' => "sales@comgw.co.uk",
            'telephone' => "01844 220022",
            'modeshift' => false
        ]);
    }
}
