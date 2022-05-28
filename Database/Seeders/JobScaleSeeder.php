<?php

namespace Luanardev\Modules\HRSettings\Database\Seeders;

use Illuminate\Database\Seeder;

class JobScaleSeeder extends Seeder
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
            INSERT INTO `hrm_config_job_scale` (`id`, `scale`, `leave_days`) VALUES
            (1, 'A', 21),
            (2, 'B', 21),
            (3, 'C', 21),
            (4, 'D', 24),
            (5, 'E', 24),
            (6, 'F', 24),
            (7, 'G', 24),
            (8, 'H', 30),
            (9, 'I', 30),
            (10, 'J', 30),
            (11, 'K', 30),
            (12, 'L', 30),
            (13, 'M', 30),
            (14, 'N', 30),
            (15, 'O', 30),
            (16, 'P', 30),
            (17, 'Q', 30),
            (18, 'R', 30);
        SQL;
    }
}
