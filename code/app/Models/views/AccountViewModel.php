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
    #[OA\Schema( title: 'Account View Model',
                 description: '',
                 type: ModelView::model_view,
                 deprecated: false )]
    class AccountViewModel
        extends ModelView
    {
        #[OA\Property( type: 'string' )]
        public const table_name = 'accounts_view';
        protected $table = self::table_name;


        /**
         * @var string[]
         */
        protected $fillable =
        [
            'id',
            'username',
            'email',
            'email_verified_at',
            'password',
            'remember_token',
            'created_at',
            'updated_at',
            'settings'
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            'id',
            'email_verified_at',
            'password',
            'remember_token',
            'settings'
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            'id'        => 'integer',
            'username'  => 'string',

            'email'     => 'string',
            'email_verified_at' =>'timestamp',

            'password'       => 'string',
            'remember_token' => 'string',
            'created_at'     => 'timestamp',
            'updated_at'     => 'timestamp',
            'settings'       => 'array'
        ];
    }
?>