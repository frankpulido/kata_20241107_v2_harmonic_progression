<?php
declare(strict_types=1);
require_once "chord.php";
require_once "harmonic_progression.php";
/*
Kata 46 de la especialidad fullstackPHP 7-11-24
Imagina que estás ensayando acordes de guitarra (o de cualquier instrumento musical) y quieres una herramienta que te muestre distintos acordes en intervalos de tiempo definidos.
Por tanto, nuestro programa necesitará saber el intervalo de tiempo que pasará entre un acorde y otro y los acordes a pasar.
Por ejemplo: quiero practicar los acordes "Si","La","Do" y quiero que se muestre un distinto cada 5 segundos.
Pista: sleep()
*/

$chord_count = 0;
$length = 0;
$notes = [];
$chords = [];
CONST notes = ['Do','Re','Mi','Fa','Sol','La','Si'];

echo PHP_EOL;
$chord_count = (int) readline("De cuantos acordes estará compuesta la progresión harmónica? : ");
echo PHP_EOL;
for ($i = 1; $i <= $chord_count; $i++) {
    $length = (int) readline("De cuantas notas está compuesto el acorde $i? : ");
    echo PHP_EOL;
    echo "A continuación le pediremos que nos indique una a una las notas que componen el acorde." . PHP_EOL;
    echo "Para facilitar la entrada de datos nos indicará las notas con números enteros :" . PHP_EOL;
    echo PHP_EOL;
    for ($j = 0; $j < count(notes); $j++) {
        echo notes[$j] . " = [$j]".PHP_EOL;
    }
    echo PHP_EOL;
    echo PHP_EOL;
    unset($notes);
    for ($k = 1; $k <= $length; $k++) {
        echo "Indique el número correspondiente a la nota " . ($k+1) . " (0 al 6) : ";
        $note = (int) readline();
        $notes[] = $note;
    }
    $chord = new Chord($notes);
    echo PHP_EOL;
    echo "Y el intervalo de tiempo que debe seguir al acorde " . $chord->toString() . "? : ";
    $tempo = (int) readline();
    echo PHP_EOL;
    $repeat = (int) readline("Cuantas veces desea escucharlo ? : ");

    for ($r = 1; $r <= $repeat; $r++) {
        $chords [] = $chord;
        $tempos [] = $tempo;
    }
    echo PHP_EOL;
}
echo PHP_EOL;

$harmonic_progression = new HarmonicProgression($chords, $tempos);
//var_dump($harmonic_progression);

echo PHP_EOL;
echo "A continuación reproducimos la progresión harmónica :" . PHP_EOL;
$harmonic_progression->play();
echo PHP_EOL;

?>