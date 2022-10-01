<?php

\Carbon\Carbon::macro('isEgyptionChristmasDay', function (){
    return $this->day == 7 && $this->month == 1;
});
