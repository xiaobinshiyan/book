<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name' => 'bail|required|string|max:25',
            'author' => 'required|string|max:25',
            'sort' => 'required|numeric'
        ];
    }

    public function postFillData()
    {
        return [
            'name' => $this->name,
            'author' => $this->author,
            'sort' => $this->sort
        ];
    }
}
