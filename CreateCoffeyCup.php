<?php

class CreateCoffeyCup extends Cup
{
    public function createCoffey()
    {
        $cup = new Cup('black','nice','I love Berlin');
        $cup->changeColor('yellow');

        echo $cup->color();
        $cup2 = clone $cup;

        for ($i = 0;$i > 10;$i++) {

        }

        $tablica = [
            'name' => 'Marta',
            'surname' => 'Helbin'
        ];

        foreach ($tablica as $klucz => $elementeTablicy) {
            if ($klucz == 'name') {

            }

            if (!$elementeTablicy) {

            }
        }

        

    }
}