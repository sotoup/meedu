<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Http\Requests\ApiV2;

class PasswordChangeRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => __('password.required'),
        ];
    }

    public function filldata()
    {
        return [
            'password' => $this->post('password'),
        ];
    }
}
