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
            'last-name' => ['required', 'string'],
            'first-name' => ['required', 'string'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email'],
            'tel1' => ['required', 'numeric', 'digits_between:5'],
            'tel2' => ['required', 'numeric', 'digits_between:5'],
            'tel3' => ['required', 'numeric', 'digits_between:5'],
            'address' => ['required', 'string', 'max:255'],
            'detail' => ['required'],
            'content' => ['required|max:120'],
        ];
    }

    public function messages()
    {
        return[
            'last-name.required' =>'姓を入力してください',
            'first-name.required' => '名を入力してください',
            'gender' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'tel1.required' => '電話番号を入力してください',
            'tel2.required' => '電話番号を入力してください',
            'tel3.required' => '電話番号を入力してください',
            'tel1.digits_between' => '電話番号を5桁で入力してください',
            'tel2.digits_between' => '電話番号を5桁で入力してください',
            'tel3.digits_between' => '電話番号を5桁で入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.max:120' => 'お問い合せ内容は120文字以内で入力してください',
        ];
    }
}