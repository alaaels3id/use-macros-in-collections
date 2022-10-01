<?php

\Illuminate\Database\Eloquent\Builder::macro('whereLike', function ($col, $value){
    return $this->where($col, 'LIKE', "%$value%");
});
