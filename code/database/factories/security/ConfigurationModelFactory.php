<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\security;

    // Internal libraries
    use App\Models\security\ConfigurationModel;

    // External libraries
    use Database\Factories\security\testing\TestingConfigurationModelFactory;
    use Illuminate\Database\Eloquent\Factories\Factory;


    /**
     *
     */
    class ConfigurationModelFactory
        extends Factory
    {
        // Variables
        protected $model        = ConfigurationModel::class;

        private static $debug   = false;
        private static ?TestingConfigurationModelFactory $testingFactory = null;

        public static final function getTestingFactory(): TestingConfigurationModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingConfigurationModelFactory());
            }

            return self::$testingFactory;
        }

        public static final function setTestingFactory( TestingConfigurationModelFactory $fakeFactory )
        {
            self::$testingFactory = $fakeFactory;
        }


        // Accessor
        /**
         * @return bool
         */
        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        /**
         * @param bool $value
         * @return void
         */
        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }


        /**
         * @return null[]
         */
        public function definition(): array
        {
            if( $this->getDebugState() )
            {
                $model = self::getTestingFactory()->definition();
                return $model;
            }
            else
            {
                return
                    [
                        //
                        'key'   => null,
                        'value' => null
                    ];
            }
        }
    }
?>