<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'name' =>  'string'.($this->isMethod('put')?'':'|required');
            'description'    =>  'string';
            'quantity'  =>  'integer'.($this->isMethod('put')?'':'|required');
            'place'   => 'string'.($this->isMethod('put')?'':'|required');
            'status'   =>  'string'.($this->isMethod('put')?'':'|required');
            'caution'   =>  'integer'.($this->isMethod('put')?'':'|required');
            'type'   =>  'string'.($this->isMethod('put')?'':'|required');
            'association'   =>  'integer'.($this->isMethod('put')?'':'|required');
        ];
    }
}
