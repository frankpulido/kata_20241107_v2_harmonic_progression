<?php
declare(strict_types=1);
require_once "chord.php";

class HarmonicProgression {
    protected array $chords;
    protected array $tempos;

    function __construct(array $chords, array $tempos = []) {
        $this->chords = $chords;
        $this->tempos = $tempos;
    }

    public function getChords() : array {
        return $this->chords;
    }

    public function getTempos() : array {
        return $this->tempos;
    }

    public function setChords($chords): void {
        $this->chords = $chords;
    }

    public function setTempos($tempos) : void {
        $this->tempos = $tempos;
    }

    public function play() {
        $chords = $this->chords;
        $tempos = $this->tempos;
        if (count($chords) == count($tempos)) {
            for ($i = 0; $i < count($chords); $i++) {
                echo $chords[$i]->toString() . PHP_EOL;
                sleep ((int)$tempos[$i]);
            }
        }
    }
}
?>