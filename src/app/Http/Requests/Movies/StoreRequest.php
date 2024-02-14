<?php

namespace App\Http\Requests\Movies;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            "title" => ["required", "string", "unique:movies", "min:3", "max:255"],
            "description" => ["nullable", "string", "min:3"],
            "release_date" => ["required", "date"],
            "ganre_id" => ["required", "string", "exists:ganres,id"],
            "author_id" => ["required", "string", "exists:authors,id"],
            "cinemas" => ["required", "array"],
            "cinemas.*" => ["exists:cinemas,id"],
        ];
    }
}
