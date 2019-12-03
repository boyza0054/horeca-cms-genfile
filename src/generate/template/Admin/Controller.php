<?php

namespace App\Http\Controllers\Admin;

use Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Store{replace}Request;
use App\Http\Requests\Admin\Update{replace}Request;
use App\Services\{replace}\{replace};
use App\Services\ViewCompactData\{replace}CreateViewCompactData;
use App\Services\ViewCompactData\{replace}EditViewCompactData;
use App\Services\ViewCompactData\{replace}IndexViewCompactData;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Class {replace}Controller
 * @package App\Http\Controllers\Admin
 */
class {replace}Controller extends Controller
{
    /**
     * @param {replace}IndexViewCompactData $view
     * @return mixed|string
     * @throws \Throwable
     */
    public function index({replace}IndexViewCompactData $view)
    {
        return $view->render();
    }

    /**
     * @param {replace}CreateViewCompactData $view
     * @return mixed|string
     * @throws \Throwable
     */
    public function create({replace}CreateViewCompactData $view)
    {
        return $view->render();
    }

    /**
     * @param {replace} $outlets
     * @param Store{replace}Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store({replace} $service, Store{replace}Request $request)
    {
        return $service->create($request->all());
    }

    /**
     * @param {replace}EditViewCompactData $view
     * @return mixed|string
     * @throws \Throwable
     */
    public function edit({replace}EditViewCompactData $view)
    {
        return $view->render();
    }

    /**
     * @param {replace} $outlets
     * @param $id
     * @param Update{replace}Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update({replace} $outlets, $id, Update{replace}Request $request)
    {
        return $outlets->update($id, $request->all());
    }

    /**
     * @param {replace} $outlets
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function destroy({replace} $outlets, $id)
    {
        return $outlets->delete($id, 'admin.{replace_sm}.index');
    }
}
