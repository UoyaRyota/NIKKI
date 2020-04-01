<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'username' => 'required|max20',
            'title' => 'required|max100',
            'img_article' => 'required',
            'movie_link' => 'required',
            'method'=> 'required|max500',
            'phrase' => 'required|max500',
            'goal'=> 'required|max20',

        ];
    }
}
