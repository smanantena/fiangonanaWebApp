<?php

abstract class DateRecuperation
{
    public static function sundayDateReturn() :string
    {
        $mounthsMalagasy = ["January"=>"Janoary", "February"=>"Febroary","March"=>"Martsa", "April"=>"Aprily", "May"=>"Mey", "June"=>"Jona", "July"=>"Jolay", "August"=>"Aogositra", "September"=>"Septambra", "Oktober"=>"Oktobra", "November"=>"Novambra", "December"=>"Desambra"];
        if (strtolower(date("l"))===strtolower("sunday")) {
            return date("d") . " " . strtolower($mounthsMalagasy[date("F")]) . " ". date("Y") . ".";
        }
        $dateOfLastSunday = strtotime("last Sunday");
        return date("d", $dateOfLastSunday) . " " . strtolower($mounthsMalagasy[date("F", $dateOfLastSunday)]) . " ". date("Y", $dateOfLastSunday) . ".";
    }
}