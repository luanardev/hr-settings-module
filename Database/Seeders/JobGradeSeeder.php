<?php

namespace Luanardev\Modules\HRSettings\Database\Seeders;

use Illuminate\Database\Seeder;

class JobGradeSeeder extends Seeder
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
            INSERT INTO `hrm_config_job_grade` (`id`, `name`) VALUES
            (1, 'Research Professor'),
            (2, 'Associate Research Professor'),
            (3, 'Senior Research Fellow'),
            (4, 'Research Fellow'),
            (5, 'Professor'),
            (6, 'Associate Professior'),
            (7, 'Senior Lecturer'),
            (8, 'Lecturer'),
            (9, 'Technician'),
            (10, 'Top Manager'),
            (11, 'Senior Manager'),
            (12, 'Manager'),
            (13, 'Chief'),
            (14, 'Senior'),
            (15, 'Intermidiate'),
            (16, 'Junior'),
            (17, 'Trainee'),
            (18, 'Intern');
        SQL;
    }
}
