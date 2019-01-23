<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            //
            //['id','title','artnav','tag','img','created_at']
            'title' => 'required|min:10',//验证标题至少 10个字节
            'img'=>'required',
            'content'=>'required',
        ];
    }
}
