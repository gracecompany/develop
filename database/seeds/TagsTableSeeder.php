<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        DB::table('tags')->truncate();

        DB::table('tags')->insert([
            [
                'name' => 'Qnique',
                'slug' => Str::slug('qnique'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Quilting',
                'slug' => Str::slug('quilting'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Quilting Machine',
                'slug' => Str::slug('quilting-machine'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Sewing Machine',
                'slug' => Str::slug('sewing-machine'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Expert Quilter',
                'slug' => Str::slug('expert-quilter'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Quilting Tutorial',
                'slug' => Str::slug('quilting-tutorial'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Hand Quilting',
                'slug' => Str::slug('hand-quilting'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Hand Quilting Frame',
                'slug' => Str::slug('hand-quilting-frame'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Quilting Hoop',
                'slug' => Str::slug('quilting-hoop'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Quilting Lap Hoop',
                'slug' => Str::slug('quilting-lap-hoop'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Grace',
                'slug' => Str::slug('grace'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Grace Company',
                'slug' => Str::slug('grace-company'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Grace Frame',
                'slug' => Str::slug('grace-frame'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Grace Manufacturing',
                'slug' => Str::slug('grace-manufacturing'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
            [
                'name' => 'Affordable Programmer',
                'slug' => Str::slug('affordable-programmer'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'lang' => 'en',
            ],
        ]);
    }
}
