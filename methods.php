<?php

class Singer
{
    public $name;

    public function get_name()
    {
        return $this->name;
    }
    public function set_name($value)
    {
        $this->name = $value;
    }
    public function sing_sam_smith()
    {
        echo "oh won't you....STAYYYY with mee\n";
    }
    public function curse()
    {
        echo "fuck\n";
    }
}

$singer = new Singer();
$singer->name = "same smith\n";
echo $singer->get_name();
$singer->sing_sam_smith();
$singer->curse();

$singer->set_name("will smith\n");
echo $singer->get_name();


?>
