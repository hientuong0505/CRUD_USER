<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class StorePostRequest extends FormRequest
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
        $user = User::find($this->id);
        return [
            'name' => 'required|max:30',
            'email' => 'required|email|unique:users, email, {$this->user->id}',
            'password' => 'required|max:8',
            'address' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.max' => 'Name user max is 30 characters',
            'email.unique' => 'Email is unique please try again',
            'password.max' => 'Password is 8 characters',
            'address.required' => 'Address is required'
        ];
    }
}
