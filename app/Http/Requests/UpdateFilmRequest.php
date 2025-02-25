<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UpdateFilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $maxDate = Carbon::now()->addYears(2)->toDateString();

        return [
            'id' => 'required|uuid|exists:films',
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:600',
            'release_date' => "nullable|date|after:1950-01-01|before_or_equal:$maxDate",
            'is_activated' => 'required|boolean',
            'selectedGenderIds' => 'nullable|array'
        ];
    }
}
