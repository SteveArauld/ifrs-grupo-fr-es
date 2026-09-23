<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __('pages.contact.validation.name_required'),
            'email.required' => __('pages.contact.validation.email_required'),
            'email.email' => __('pages.contact.validation.email_invalid'),
            'subject.required' => __('pages.contact.validation.subject_required'),
            'message.required' => __('pages.contact.validation.message_required'),
        ];
    }
}
