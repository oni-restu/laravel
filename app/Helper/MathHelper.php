<?php

namespace App\Helper;

class MathHelper
{
    /**
     * Define the application's command schedule.
     *
     * @param  int $a, int $b
     * @return int
     */
    public static function pangkat($a, $b)
    {
        $result = 1;
        if ($b > 0) {
            for ($i = 1; $i <= $b; $i++) {
                $result = $result * $a;
            }
        } else {
            for ($i = 1; $i <= $b * -1; $i++) {
                $result = $result / $a;
            }
        }

        return $result;
    }
}
