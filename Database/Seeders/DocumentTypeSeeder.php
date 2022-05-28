<?php

namespace Luanardev\Modules\HRSettings\Database\Seeders;

use Illuminate\Database\Seeder;
use Luanardev\Modules\HRSettings\Entities\DocumentType;

class DocumentTypeSeeder extends Seeder
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
            INSERT INTO `hrm_config_document_type` (`id`, `name`) VALUES
            (1, 'National ID'),
            (2, 'Driving Licence'),
            (3, 'Passport'),
            (4, 'Birth Certificate'),
            (5, 'Death Certificate'),
            (6, 'Medical Certificate'),
            (7, 'Curriculum Vitae'),
            (8, 'Academic Certificate'),
            (9, 'Professional Certificate'),
            (10, 'Training Certificate'),
            (11, 'Industrial Certificate'),
            (12, 'Cover Letter'),
            (13, 'Achievement Award');
        SQL;
    }
}
