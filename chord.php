<?php
declare(strict_types=1);

class Chord {
    private $keys = ['Do','Re','Mi','Fa','Sol','La','Si'];
    protected array $notes;

    function __construct(array $notes = []) { // integers from 0 to 6 (toString will grab a string from $keys)
        $this->notes = $notes;
    }

    public function getKeys() : array {
        return $this->keys;
    }

    public function getNotes() : array {
        return $this->notes;
    }

    public function setNotes($notes): void {
        $this->notes = $notes;
    }

    public function toString() : string {
        $chord = "";
        foreach ($this->notes as $note) {
            $chord = $chord . $this->keys[$note] . " ";
        }
        return $chord;
    }
}
?>