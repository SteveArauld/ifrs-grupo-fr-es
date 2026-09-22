<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyNowRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'civ' => ['required', 'string', 'max:20'],
            'name' => ['required', 'string', 'max:255'],
            'first' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'country' => ['required', 'string', 'max:255'],
            'codpost' => ['required', 'string', 'max:50'],
            'city' => ['required', 'string', 'max:255'],
            'montantpret' => ['required', 'string', 'max:50'],
            'dureepret' => ['required', 'string', 'max:50'],
        ];
    }

    public function messages(): array
    {
        return [
            'civ.required' => __('pages.apply.validation.civ_required'),
            'name.required' => __('pages.apply.validation.name_required'),
            'first.required' => __('pages.apply.validation.first_required'),
            'email.required' => __('pages.apply.validation.email_required'),
            'email.email' => __('pages.apply.validation.email_invalid'),
            'phone.required' => __('pages.apply.validation.phone_required'),
            'country.required' => __('pages.apply.validation.country_required'),
            'codpost.required' => __('pages.apply.validation.codpost_required'),
            'city.required' => __('pages.apply.validation.city_required'),
            'montantpret.required' => __('pages.apply.validation.montantpret_required'),
            'dureepret.required' => __('pages.apply.validation.dureepret_required'),
        ];
    }
}
