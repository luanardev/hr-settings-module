<?php

namespace Luanardev\Modules\HRSettings\Database\Seeders;

use Illuminate\Database\Seeder;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement($this->query());
    }

    private function query()
    {
        return <<<SQL
            INSERT INTO `hrm_config_job_category` (`id`, `name`) VALUES
            (1, 'Administrative'),
            (2, 'Research'),
            (3, 'Academic'),
            (4, 'Clerical'),
            (5, 'Technical'),
            (6, 'Support');
        SQL;
    }
}
