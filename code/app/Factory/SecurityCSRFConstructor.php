<?php
    namespace App\Factory;

    use Carbon\Carbon;
    use Illuminate\Support\Str;

    use App\Models\security\CSRFModel;


    class SecurityCSRFConstructor
    {
        public function __construct()
        {

        }

        // Variables
        private int $tokenDefaultLength = 64;
        private static $factory = null;

        // Code
        /**
         * @param string $ip
         * @return CSRFModel
         */
        public function constructNewModel( string $ip ): CSRFModel
        {
            $input = self::generateInputArray( $ip, $this->getDefaultLength() );
            return self::makeModel( $input );
        }


        /**
         * @param CSRFModel $model
         * @param Carbon|null $time
         * @return CSRFModel
         */
        public function appendIssued( CSRFModel &$model, ?Carbon $time = null ): CSRFModel
        {
            if( is_null( $time ) )
            {
                $model->issued = Carbon::now();
            }
            else
            {
                $model->issued = $time;
            }
            return $model;
        }


        /**
         * @param CSRFModel $model
         * @param Carbon|null $time
         * @return CSRFModel
         */
        public function appendAccessed( CSRFModel &$model, ?Carbon $time = null ): CSRFModel
        {
            if( is_null( $time ) )
            {
                $model->accessed = Carbon::now();
            }
            else
            {
                $model->accessed = $time;
            }
            return $model;
        }


        /**
         * @param CSRFModel $model
         * @param bool $shouldSave
         * @return CSRFModel
         */
        public function executeInvalidateModel( CSRFModel &$model, bool $shouldSave = true ): CSRFModel
        {
            $model->invalidated = true;

            if( $shouldSave )
            {
                $model->save();
            }

            return $model;
        }


        /**
         * @param CSRFModel $model
         * @param bool $shouldSave
         * @return CSRFModel
         */
        public function executeActivateModel( CSRFModel &$model, bool $shouldSave = true ): CSRFModel
        {
            $this->appendIssued( $model );
            $model->activated = true;

            if( $shouldSave )
            {
                $model->save();
            }

            return $model;
        }


        /**
         * @param CSRFModel $model
         * @param bool $shouldSave
         * @return CSRFModel
         */
        public function executeResetModel( CSRFModel &$model, bool $shouldSave = true ): CSRFModel
        {
            $model->secure_token = self::generateRandomToken( $this->getDefaultLength() );
            $model->secret_token = self::generateRandomToken( $this->getDefaultLength() );

            if( $shouldSave )
            {
                $model->save();
            }
            return $model;
        }


        /**
         * @param int $id
         * @return CSRFModel
         */
        public function findById( int $id ): CSRFModel
        {
            $model = CSRFModel::where( 'id', '=', $id )->firstOrFail();
            return $model;
        }


        /**
         * @param string $ipAddress
         * @param string $secure_token
         * @param string $secret_token
         * @return CSRFModel
         */
        public function findByContent( string $ipAddress,
                                       string $secure_token,
                                       string $secret_token ): CSRFModel
        {
            $model = CSRFModel::where(
                [
                    [ 'assigned_to', '=', $ipAddress ],
                    [ 'secure_token', '=', $secure_token ],
                    [ 'secret_token', '=', $secret_token ]
                ]
            )->firstOrFail();

            return $model;
        }

        //
        /**
         * @param int $stringLength
         * @param bool $normalised
         * @return string
         */
        protected static function generateRandomToken( int $stringLength, bool $normalised = false )
        {
            $generatedValue = Str::random( $stringLength );

            if( $normalised )
            {
                return Str::lower( $generatedValue );
            }
            else
            {
                return $generatedValue;
            }
        }


        /**
         * @param string $ipAssignedTo
         * @param int $randomTokenSize
         * @return array|null
         */
        protected static function generateInputArray( string $ipAssignedTo, int $randomTokenSize ): ?array
        {
            return
            [
                'assigned_to' => $ipAssignedTo,
                'secure_token' => self::generateRandomToken( $randomTokenSize ),
                'secret_token' => self::generateRandomToken( $randomTokenSize ),
                'activated' => false,
                'invalidated' => false
            ];
        }


        /**
         * @param array $inputs
         * @return CSRFModel|null
         */
        protected static function makeModel( array $inputs ): ?CSRFModel
        {
            $model = CSRFModel::create( $inputs );
            return $model;
        }


        // Accessors
        public final function getDefaultLength(): int
        {
            return $this->tokenDefaultLength;
        }

        public final function setDefaultLength( int $value ): void
        {
            $this->tokenDefaultLength = $value;
        }

        /**
         * @return SecurityCSRFConstructor
         */
        public final static function getFactory(): SecurityCSRFConstructor
        {
            if( is_null( self::$factory ) )
            {
                self::setFactory( new SecurityCSRFConstructor() );
            }

            return self::$factory;
        }

        /**
         * @param SecurityCSRFConstructor $factory
         * @return void
         */
        protected final static function setFactory( SecurityCSRFConstructor $factory ): void
        {
            self::$factory = $factory;
        }
    }
?>