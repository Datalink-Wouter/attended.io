<?php

namespace App\Http\Front\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'city' => '',
            'country' => '',
            'website' => 'required',
            'starts_at' => 'required|date',
            'ends_at' => 'required|after:starts_at',
            'cfp' => 'boolean',
            'cfp_link' => 'required_with:cfp|url',
            'cfp_deadline' => 'nullable|date',
        ];
    }
}
