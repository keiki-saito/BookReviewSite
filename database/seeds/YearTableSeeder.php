<?php

use App\Year;
use Illuminate\Database\Seeder;

class YearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('years')->insert([
            [
                'id'=>'1',
                'year'=>'2004年'
            ],
            [
                'id'=>'2',
                'year'=>'2005年'
            ],
            [
                'id'=>'3',
                'year'=>'2006年'
            ],
            [
                'id'=>'4',
                'year'=>'2007年'
            ],
            [
                'id'=>'5',
                'year'=>'2008年'
            ],
            [
                'id'=>'6',
                'year'=>'2009年'
            ],
            [
                'id'=>'7',
                'year'=>'2010年'
            ],
            [
                'id'=>'8',
                'year'=>'2011年'
            ],
            [
                'id'=>'9',
                'year'=>'2012年'
            ],
            [
                'id'=>'10',
                'year'=>'2013年'
            ],
            [
                'id'=>'11',
                'year'=>'2014年'
            ],
            [
                'id'=>'12',
                'year'=>'2015年'
            ],
            [
                'id'=>'13',
                'year'=>'2016年'
            ],
            [
                'id'=>'14',
                'year'=>'2017年'
            ],
            [
                'id'=>'15',
                'year'=>'2018年'
            ],
            [
                'id'=>'16',
                'year'=>'2019年'
            ],
            [
                'id'=>'17',
                'year'=>'2020年'
            ],
            [
                'id'=>'18',
                'year'=>'2021年'
            ],
        ]);
    }
}
