<?php

use Illuminate\Database\Seeder;

class SeedWords extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $available_words = [
            'IQU',
            'PERFORMANCEMARKETING',
            'GAMEANALYTICS',
            'HANGMAN',
            'PEELINGTHEONION',
            'COHORT ANALYSIS',
            'GAMEON',
        ];

        foreach ($available_words as $word) {
            DB::table('words')->insert(['word' => $word]);
        }
    }
}
