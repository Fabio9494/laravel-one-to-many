<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title'         => 'required|min:4|max:255',
            'description'   => 'required|min:10',
            'date'          => 'required|date_format:Y-m-d|min:3|max:255',
            'author'        => 'required|min:3|max:255',
        ];
    }
    public function message()
    {
        return [
            'title.required'        => 'titolo obbligatorio',
            'title.min'             => 'min 4 caratteri',
            'title.max'             => 'max 255 caratteri',
            'description.required'  => 'descrizione obbligatori',
            'description.min'       => 'min 10 caratteri',
            'date.required'         => 'data obbligatoria',
            'author.required'       => 'titolo obbligatorio',
            'author.min'            => 'min 3 caratteri',
            'author.max'            => 'max 255 caratteri',
        ];
    }

}
