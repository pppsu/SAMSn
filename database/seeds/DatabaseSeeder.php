<?php

use Illuminate\Database\Seeder;
use App\Organization;
use App\Staff;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(OrganizationTableSeeder::class);
        $this->call(StaffTableSeeder::class);

    }
}

class OrganizationTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('organizations')->delete();

        $organizations = [
        	[   "psu_passport"=>'19940001',
        		"org_name"=>'Asian American Association',
        		"org_acronym"=>'AAA',
        		"org_status"=>'Renew a club',
        		"org_attribute"=>'Public consiousness, morals, ethics and discipline'
        	],
        	[   "psu_passport"=>'19940002',
        		"org_name"=>'Biomedical Engineering Society',
        		"org_acronym"=>'BMES',
        		"org_status"=>'Established a new club',
        		"org_attribute"=>'Social skill, profession international capability on basis of being Thai.'
        	],
        	[   "psu_passport"=>'19940003',
                "org_name"=>'BRYE Teen',
        		"org_acronym"=>'PBHA',
        		"org_status"=>'Renew a club',
        		"org_attribute"=>'Pride of lnstitute being children of the Father, being on without divsion by academic campus campus or area'
        	],
        	[   "psu_passport"=>'19940004',
        		"org_name"=>'Computer Society',
        		"org_acronym"=>'HCS',
        		"org_status"=>'Established a new club',
        		"org_attribute"=>'Understanding of cultural plurality, democracy'
        	],
        	[   "psu_passport"=>'19940005',
        		"org_name"=>'Quad Sound Studios',
        		"org_acronym"=>'QSS',
        		"org_status"=>'Renew a club',
        		"org_attribute"=>'Healthy development'
        	]
        ];

        foreach ($organizations as $o) {
        	Organization::create($o);
        }

    }
}

class StaffTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('staffs')->delete();

        $staffs = [
            [   "psu_passport"=>'19940001',
                "title"=>'Mr.',
                "firstname"=>'Adisak001',
                "lastname"=>'Intana',
                "role"=>'Advisor',
                "email"=>'adisak@email.com',
                "begin_date"=>'2017-03-15',
                "end_date"=>'2017-12-01'
            ],
            [   "psu_passport"=>'19940002',
                "title"=>'Mr.',
                "firstname"=>'Adisak002',
                "lastname"=>'Intana',
                "role"=>'Advisor',
                "email"=>'adisak@email.com',
                "begin_date"=>'2017-03-15',
                "end_date"=>'2017-12-01'
            ],
            [   "psu_passport"=>'19940003',
                "title"=>'Mr.',
                "firstname"=>'Adisak003',
                "lastname"=>'Intana',
                "role"=>'Advisor',
                "email"=>'adisak@email.com',
                "begin_date"=>'2017-03-15',
                "end_date"=>'2017-12-01'
            ],
            [   "psu_passport"=>'19940004',
                "title"=>'Mr.',
                "firstname"=>'Adisak004',
                "lastname"=>'Intana',
                "role"=>'Advisor',
                "email"=>'adisak@email.com',
                "begin_date"=>'2017-03-15',
                "end_date"=>'2017-12-01'
            ],
            [   "psu_passport"=>'19940005',
                "title"=>'Mr.',
                "firstname"=>'Adisak005',
                "lastname"=>'Intana',
                "role"=>'Advisor',
                "email"=>'adisak@email.com',
                "begin_date"=>'2017-03-15',
                "end_date"=>'2017-12-01'
            ]
        ];

        foreach ($staffs as $s) {
            Staff::create($s);
        }

    }
}