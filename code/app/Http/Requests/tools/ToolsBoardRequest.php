<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Requests\tools;

    use App\Http\Requests\template\AccountProtectedRequest;

    use OpenApi\Attributes
        as OA;

    #[OA\Schema()]
    class ToolsBoardRequest
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
        public final function rules(): array
        {
            return
            [
                //
            ];
        }
    }
?>