<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:100',
            'description' => 'required',
            'thumb' => 'nullable',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Title of the comic is required',
            'title.min' => 'Title lenght must be at least of :min letters',
            'price.required' => 'Price of the comic is required',
            'thumb.nullable' => 'The image URL is required',
            'series.required' => 'Series of the comic is required',
            'sale_date.required'=> 'The Publishing date of the comic is required',
            'type.required' => 'The type of the comic is required'
        ];
    }
}
