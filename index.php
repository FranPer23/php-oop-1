<?php
class Movie
{
    public $title;
    public $director;
    public $year;

    function __construct($_title)
    {
        $this->title = $_title;
    }

    public function setWarning()
    {
        if ($this->year < 2000) {
            return "L'anno è precedente al 2000.";
        }
        return "";
    }
}

$killBill = new Movie('title');
$theSnatch = new Movie('title');

$killBill->year = 1994;
$theSnatch->year = 2001;

echo $killBill->setWarning();
echo $theSnatch->setWarning();
