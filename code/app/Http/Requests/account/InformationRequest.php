<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\account;

    use Illuminate\Foundation\Http\FormRequest;


    /**
     *
     */
    class InformationRequest
        extends FormRequest
    {
        public function authorize()
        {

            return false;
        }


        public function rules()
        {
            return
            [
                //
            ];
        }
    }
?>