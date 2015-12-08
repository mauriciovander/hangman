<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as Controller;
use Illuminate\Http\Request as Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{

    public function play(Request $request)
    {
        if (!$request->has('letter') || !$request->input('letter')) {
            throw new \Exception('Missing letter');
        }

        $word = $request->session()->get('word');
        $letter = strtoupper(substr($request->input('letter'), 0, 1));
        $findings = [];
        $position = 0;
        $word_letters = str_split($word);

        foreach ($word_letters as $_letter) {
            if ($letter == $_letter) {
                $findings[] = $position;
            }
            $position++;
        }

        if (!count($findings)) {
            throw new \Exception('Letter ' . $letter . ' is not present');
        }

        return $findings;
    }

    public function init(Request $request)
    {
        if (!$request->has('name') || !$request->input('name')) {
            throw new \Exception('Missing player name');
        }

        $player = $request->input('name');

        $word =  $this->selectRandomWord();

        $request->session()->put('player', $player);
        $request->session()->put('word', $word);
        $request->session()->save();

        return ['message' => 'wellcome', 'player' => $player, 'word' => $this->hideLetters($word)];
    }

    private function hideLetters($word)
    {
        return preg_replace("/[\w]/", " _ ", preg_replace("/[^\w]/", " / ", $word));
    }

    private function selectRandomWord()
    {

        $words = app('db')->select("SELECT * FROM words order by rand() limit 1");
        $word = reset($words);
        return $word->word;
    }
}
