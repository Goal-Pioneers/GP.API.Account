<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\tools;

    use App\Http\Requests\options\AccountProtectedRequest;


    class ToolsProjectMemberRequest
        extends AccountProtectedRequest
    {
        /**
         * @return bool
         */
        public function authorize(): bool
        {
            return false;
        }


        /**
         * @return array
         */
        public function rules(): array
        {
            return
            [
                //
            ];
        }
    }
?>