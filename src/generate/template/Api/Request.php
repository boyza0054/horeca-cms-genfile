<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class Get
 * @package App\Http\Requests\Api
 */
class Get{replace}Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public
    /**
     * @return bool
     */
    function authorize()
{
    return true;
}

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public
    /**
     * @return array
     */
    function rules()
{
    return [

    ];
}
}


