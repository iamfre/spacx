<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|max:150',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'password' => 'required|confirmed',
        ];
    }

    /**
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Поле имя обязательно к заполнению',
            'name.max' => 'Слишком длинное имя',
            'email.required' => 'Поле email обязательно к заполнению',
            'email.email' => 'Не корректный формат email',
            'email.unique' => 'Email уже зарегистрирован',
            'phone.regex' => 'Не корректный формат номера',
            'password.required' => 'Пароль не задан',
            'password.confirmed' => 'Пароли не совпадают',
        ];
    }
}
