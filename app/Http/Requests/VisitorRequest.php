<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Visitor;

class VisitorRequest extends Request
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
        $id = $this->visitor ? ',' . $this->visitor : '';
        return [
            'name'      => 'required|max:255',
            'email'     => 'required|email|unique:visitors',
            'phone'     => 'required|max:20|unique:visitors',
            'ocupation' => 'required|max:255',
        ];
    }
}
