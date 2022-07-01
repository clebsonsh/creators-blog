<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(Request $request)
    {
        return [
            'title' => ['required', 'min:5', 'max:255', Rule::unique('posts')->ignore($request->post->id)],
            'text' => 'required|min:5|max:999',
        ];
    }
}
