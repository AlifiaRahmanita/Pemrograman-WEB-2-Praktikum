<?php
class komputer
{
    public static $prosesor = "Core i7";
    public static function memutar_video()
    {
        return "komputer memutar video";
    }
}

echo komputer::$prosesor;
echo "<br/>";
echo komputer::memutar_video();
?>