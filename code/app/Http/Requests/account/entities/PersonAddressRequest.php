<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\account\entities;

    use App\Http\Requests\options\AccountProtectedRequest;


    /**
     *
     */
    class PersonAddressRequest
        extends AccountProtectedRequest
    {
        /**
         * @return bool
         */
        public final function authorize(): bool
        {
            return false;
        }

        /**
         * @return array
         */
        public final function rules()
        {
            return
            [
                //
            ];
        }
    }
?>