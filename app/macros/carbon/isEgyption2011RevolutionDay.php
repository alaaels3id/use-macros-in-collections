<?php

\Carbon\Carbon::macro('isEgyption2011RevolutionDay', function (){
    return $this->day == 25 && $this->month == 1;
});
