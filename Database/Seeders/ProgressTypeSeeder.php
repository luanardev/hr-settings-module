<?php

namespace Luanardev\Modules\HRSettings\Database\Seeders;

use Illuminate\Database\Seeder;

class ProgressTypeSeeder extends Seeder
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
            INSERT INTO `hrm_config_progress_type` (`id`, `name`) VALUES
            (1, 'Permanent'),
            (2, 'Contract'),
            (3, 'Promotion'),
            (4, 'Increment'),
            (5, 'Appointment');
        SQL;
    }
}
