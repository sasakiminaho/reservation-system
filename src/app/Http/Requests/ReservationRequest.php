<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'reserve_date' => 'required|string',
            'reserve_time' => 'required|string',
            'member' => 'required|integer|between:1,100',
        ];
    }

    public function messages()
    {
        return [
            'reserve_date.required' => '日付を入力してください',
            'reserve_date.string' => '日付を文字列で入力してください',
            'reserve_time.required' => '時間を入力してください',
            'reserve_time.string' => '時間を文字列で入力してください',
            'member.required' => '人数を入力してください',
            'member.integer' => '1~100の数字で入力してください。'
        ];
    }
}


