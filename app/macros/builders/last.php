<?php

\Illuminate\Database\Eloquent\Builder::macro('last', function (){
    return $this->orderBy('id', 'DESC')->first();
});
