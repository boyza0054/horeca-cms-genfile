<?php

$this->get('{replace_sm}/datatable', '{replace}Controller@datatableIndex')
    ->middleware('uaa.auth')
    ->name('api.{replace_sm}.datatable');