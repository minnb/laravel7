<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalesPriceRequest extends FormRequest
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
            'product' => 'required',
            'uom' => 'required',
            'unit_price' => 'required|numeric',
            'from_date' => 'required|date|after:tomorrow',
            'to_date' => 'required|date|after:from_date',
        ];
    }
}
