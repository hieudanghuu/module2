<?php

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/TWO7/2018
 * Time: 6:20 PM
 */

const MINUS_ONE = -1;
const ZERO = 0;
const ONE = 1;
const TWO = 2;
const THREE = 3;
const FOUR = 4;
class TennisGame
{
    public $score = '';

    public function getScore($player1Name, $player2Name, $score1, $score2)
    {
        $tempScore = ZERO;

        if ($score1 == $score2) {
            $this->getTiePoint($score1);
        } else  if ($score1 >= FOUR || $score2 >= FOUR) {
            $this->getBiggerFour($score1, $score2);
        } else {
            $this->getLessFour($score1, $score2);
        }
    }
    public function getTiePoint($score1)
    {
        switch ($score1) {
            case ZERO:
                $this->score = "Love-All";
                break;
            case ONE:
                $this->score = "Fifteen-All";
                break;
            case TWO:
                $this->score = "Thirty-All";
                break;
            case THREE:
                $this->score = "Forty-All";
                break;
            default:
                $this->score = "Deuce";
                break;
        }
    }
    public function getBiggerFour($score1, $score2)
    {

        $minusResult = $score1 - $score2;
        if ($minusResult > ZERO) {
            $this->score = "Win for player1";
        } else $this->score = "Win for player2";
    }
    public function getLessFour($score1, $score2)
    {
        for ($i = 1; $i < THREE; $i++) {
            if ($i == ONE) $tempScore = $score1;
            else {
                $this->score .= "-";
                $tempScore = $score2;
            }
            switch ($tempScore) {
                case ZERO:
                    $this->score .= "Love";
                    break;
                case ONE:
                    $this->score .= "Fifteen";
                    break;
                case TWO:
                    $this->score .= "Thirty";
                    break;
                case THREE:
                    $this->score .= "Forty";
                    break;
            }
        }
    }

    public function __toString()
    {
        return $this->score;
    }
}
