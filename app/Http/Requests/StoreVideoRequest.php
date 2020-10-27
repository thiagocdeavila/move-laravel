<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreVideoRequest extends FormRequest
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
            'title' => 'string|required',
            'description' => 'string|required',
            'tags' => 'array|required',
            'video_file' => 'file|required|mimes:mp4',
            'thumbnail_file' => 'image|required',
            'privacy' => [
                'required',
                Rule::in(['public', 'unlisted', 'private'])
            ],
        ];
    }
}
