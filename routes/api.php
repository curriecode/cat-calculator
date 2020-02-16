<?php

Route::resource('/cats', 'CatsController', [
  'except' => ['edit', 'show', 'store', 'index', 'update', 'destroy']
]);
