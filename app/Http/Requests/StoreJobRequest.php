<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => ["required"],
            "salary" => ["required"],
            "location" => ["required"],
            "schedule" => ["required", Rule::in(["Full time", "Part time"])],
            "url" => ["required", 'active_url'],
            "tags" => ["nullable"]
        ];
    }
}
