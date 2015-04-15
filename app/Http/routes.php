<?php


Route::get('/',function(){
    dd(DB::connection()->getDatabaseName());
});
