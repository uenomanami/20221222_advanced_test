<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'lastname' => 'required',
            'firstname' => 'required',
            'gender' => 'required|integer| between:1,2',
            'email'=> 'required|email',
            'postcode'=> 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
            'address'=> 'required',
            'opinion'=> 'required|max:120',
        ];
    }

    public function messages()
    {
        return [
            'lastname.required' => '名前を入力してください',
            'firstname.required' => '名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.regex' => '郵便番号の形式で入力してください',
            'address.required' => '住所を入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max' => '120文字以内で入力してください',
        ];
    }

    public function prepareForValidation()
    {
        // 全角→半角 英数(※変換できないものもあるので注意)
        $this->merge(['postcode' => mb_convert_kana($this->postcode, 'as')]);
    }
}
