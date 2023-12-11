<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class AdhesionFormRequest extends FormRequest
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
            'nom'=>'string',
            'prenom'=>'string',
            'email'=>'email|string',
            'telephone'=>'string|nullable',
            'pays'=>'string',
            'profession'=>'string',
            'connu_par'=>'string',
            'statut'=>'string',
            'commentaire'=>'string',
            'age'=>'integer'
        ];
    }
}
