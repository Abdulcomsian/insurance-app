<?php

namespace Database\Seeders;

use App\Models\AssessmentReportProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssessmentReportProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AssessmentReportProduct::create([
            'name'          => 'R&R',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Repair',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Paint',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Mechanical',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Misc Labour',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Total Labour',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Parts',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Sublet',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Supplementary',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Sub Total',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'GST',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Total Estimate',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Reported Items',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Towing',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'External Sublet',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Additional',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Discounts',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Less ITC',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'Less Contribution',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);

        AssessmentReportProduct::create([
            'name'          => 'PAV',
            'created_at'    => now(),
            'updated_at'     => now(),
        ]);
    }
}
