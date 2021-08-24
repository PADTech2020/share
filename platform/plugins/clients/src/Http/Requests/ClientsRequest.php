<?php

namespace Botble\Clients\Http\Requests;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class ClientsRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company'   => 'required',
            'status' => Rule::in(BaseStatusEnum::values()),
        ];
    }
}
