<?php

namespace Botble\Campaigns\Http\Requests;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class CampaignsRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'   => 'required',
            'summary' => 'required',
            'image' => 'required',
            'content' => 'required',
            'status' => Rule::in(BaseStatusEnum::values()),
        ];
    }
}
