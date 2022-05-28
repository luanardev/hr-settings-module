<?php

namespace Luanardev\Modules\HRSettings\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Luanardev\Modules\HRSettings\Database\Seeders\DocumentTypeSeeder;
use Luanardev\Modules\HRSettings\Database\Seeders\JobCategorySeeder;
use Luanardev\Modules\HRSettings\Database\Seeders\JobStatusSeeder;
use Luanardev\Modules\HRSettings\Database\Seeders\JobTypeSeeder;
use Luanardev\Modules\HRSettings\Database\Seeders\JobGradeSeeder;
use Luanardev\Modules\HRSettings\Database\Seeders\JobScaleSeeder;
use Luanardev\Modules\HRSettings\Database\Seeders\JobNotchSeeder;
use Luanardev\Modules\HRSettings\Database\Seeders\ProgressTypeSeeder;
use Luanardev\Modules\HRSettings\Database\Seeders\QualificationLevelSeeder;

class HRSettingsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([
            DocumentTypeSeeder::class,
            JobCategorySeeder::class,
            JobStatusSeeder::class,
            JobTypeSeeder::class,
            JobGradeSeeder::class,
            JobScaleSeeder::class,
            JobNotchSeeder::class,
            ProgressTypeSeeder::class,
            QualificationLevelSeeder::class
        ]);
    }
}
