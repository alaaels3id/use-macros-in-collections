<?php

\Illuminate\Database\Eloquent\Builder::macro('map', function ($callback){
    return $this->get()->map($callback);
});
