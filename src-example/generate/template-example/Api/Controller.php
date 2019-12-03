<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Api\Get{replace}Request;
use App\Services\{replace}\{replace};
use Yajra\DataTables\Facades\DataTables;

class {replace}Controller extends ApiController
{
    public function datatableIndex({replace} $service, Get{replace}Request $request)
    {
        $models = $service->lists($request->all());

        foreach ($models['data'] as $key => $data) {
            #set config
        }

        $data = Datatables::of($models['data'])->with([
            'recordsTotal' => $models['meta']['pagination']['total'],
            'data' => $models['data'],
            'recordsFiltered' => $models['meta']['pagination']['total'],
        ])->make(true);

        return $data;
    }
}
