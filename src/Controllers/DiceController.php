<?php

class DiceController
{
    public function roll1d6(): array
    {
        return [rand(1, 6)];
    }

    public function roll2d6(): array
    {
        return [rand(1, 6), rand(1, 6)];
    }

    public function roll3d6(): array
    {
        return [rand(1, 6), rand(1, 6), rand(1, 6)];
    }

    public function displayDice(array $dice): string
    {
        $roll = [];
        $count = 0;
        foreach ($dice as $die) {
            switch ($die) {
                case 1:
                    $roll[$count] = '<img src="/assets/img/die1.png" alt="1" class="die' . $count . '">';
                    break;
                case 2:
                    $roll[$count] = '<img src="/assets/img/die2.png" alt="2" class="die' . $count . '">';
                    break;
                case 3:
                    $roll[$count] = '<img src="/assets/img/die3.png" alt="3" class="die' . $count . '">';
                    break;
                case 4:
                    $roll[$count] = '<img src="/assets/img/die4.png" alt="4" class="die' . $count . '">';
                    break;
                case 5:
                    $roll[$count] = '<img src="/assets/img/die5.png" alt="5" class="die' . $count . '">';
                    break;
                default:
                    $roll[$count] = '<img src="/assets/img/die6.png" alt="6" class="die' . $count . '">';
            }
            $count++;
        }
        return $roll[0] . $roll[1] . $roll[2];
    }
}