<?php
require_once 'moves.php';
class Cube
{
    /**
     * @var int[]
     */
    private array $cubeStatus = array( 0 => 0 ,  1,  2,  3,  4,  5,  6,  7,  8,
                                           9, 10, 11, 12, 13, 14, 15, 16,
                                          17, 18, 19, 20, 21, 22, 23, 24,
                                          25, 26, 27, 28, 29, 30, 31, 32,
                                          33, 34, 35, 36, 37, 38, 39, 40,
                                          41, 42, 43, 44, 45, 46, 47, 48 );
    /**
     * @var int[]
     */
    private array $newStatus;

    /**
     *
     */
    function __construct() {
        $this->newStatus = [...$this->cubeStatus];
    }

    /**
     * @param string $scramble
     * @return void
     */
    public function performScramble(string $scramble): void
    {
        $scrambleArray = explode(' ', $scramble);

        foreach($scrambleArray as $s) {
            $moves = MOVES[$s];

            foreach($moves as $move) {
                $source = $move[0];
                $target = $move[1];

                $this->setStatus($source, $target);
            }
            $this->cubeStatus = [...$this->newStatus];
        }
    }
    /**
     * @return int[]
     */
    public function getStatus(): array {
        return $this->cubeStatus;
    }

    /**
     * @param $src
     * @param $dst
     * @return void
     */
    public function setStatus($src, $dst): void {
        $this->newStatus[$src] = $this->cubeStatus[$dst];
    }
}