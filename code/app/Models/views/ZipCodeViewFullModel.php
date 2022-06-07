<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\views;

    use App\Models\templates\ModelView;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Zip Code View Full model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class ZipCodeViewFullModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'zip_codes_view_full';
        protected $table = self::table_name;


        /**
         * @var string[]
         */
        protected $fillable =
        [
            'id',
            'area_name',
            'zip_number',
            'country_name',
            'country_acronym'
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            'id',
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            'id' => 'integer',

            'area_name'  => 'string',

            'zip_number' => 'integer',

            'country_name'      => 'string',
            'country_acronym'   => 'string'
        ];
    }
?>