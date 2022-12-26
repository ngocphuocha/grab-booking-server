<?php

namespace App\Http\Requests\ApiRequests;

use App\Http\Requests\CustomApiFormRequest\ApiFormRequest;

class SaveBookingRequest extends ApiFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'phone' => ['required', 'regex:/((09|03|07|08|05)+([0-9]{8})\b)/'],
            'current_location' => 'required|string',
            'target_location' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Yêu cầu nhập tên',
            'name.string' => 'Tên không hợp lệ',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'current_location.required' => 'Yêu cầu nhập địa chỉ hiện tại của bạn',
            'target_location.required' => 'Yêu cầu nhập chỉ cần đi đến'
        ];
    }
}
