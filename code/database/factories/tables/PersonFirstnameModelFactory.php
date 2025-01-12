<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries

    // Internal libraries
    use App\Models\tables\PersonFirstnameModel;
    use Database\Factories\tables\testing\TestingPersonFirstnameModelFactory;
    use Database\Factories\templates\FactoryTemplate;


    /**
     *
     */
    class PersonFirstnameModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = PersonFirstnameModel::class;
        private static $debug   = false;

        private static ?TestingPersonFirstnameModelFactory $testingFactory = null;


        private static ?TestingPersonFirstnameModelFactory $testingFactory = null;

        public static final function getTestingFactory(): TestingPersonFirstnameModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingPersonFirstnameModelFactory());
            }

            return self::$testingFactory;
        }

        public static final function setTestingFactory( TestingPersonFirstnameModelFactory $fakeFactory )
        {
            self::$testingFactory = $fakeFactory;
        }

        // Accessors
        /**
         * @return TestingPersonFirstnameModelFactory
         */
        public static final function getTestingFactory(): TestingPersonFirstnameModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingPersonFirstnameModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingPersonFirstnameModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingPersonFirstnameModelFactory $fakeFactory ): void
        {
            self::$testingFactory = $fakeFactory;
        }

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


        // Definitions
        /**
         * @return null[]
         */
        protected final function DefaultDefinition(): array
        {
            return
            [
                PersonFirstnameModel::field_content => null
            ];
        }

        /**
         * @return array
         */
        protected final function TestDefinition(): array
        {
            return self::getTestingFactory()->definition();
        }
    }
?>