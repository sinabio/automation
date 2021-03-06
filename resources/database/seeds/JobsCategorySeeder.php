<?php

/**
 * Part of the Antares package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Automation
 * @version    0.9.0
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares
 * @link       http://antaresproject.io
 */



use Illuminate\Database\Seeder;

class JobsCategorySeeder extends Seeder
{

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run()
    {
        $this->down();

        DB::table('tbl_jobs_category')->insert([
            ['name' => 'system', 'title' => 'System'],
            ['name' => 'custom', 'title' => 'Custom'],
        ]);
    }

    public function down()
    {
        DB::table('tbl_jobs_category')->delete();
    }

}
