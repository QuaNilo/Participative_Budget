<?php

namespace App\Http\Requests;

use App\Models\Regulation;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRegulationRequest extends FormRequest
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
        $rules = Regulation::rules();
        
        return $rules;
    }
}
