<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries
    use Carbon\Carbon;

    // Internal libraries
    use App\Models\tables\ProjectMemberModel;
    use Database\Factories\templates\FactoryTemplate;
    use Database\Factories\tables\testing\TestingProjectMemberModelFactory;


    /**
     *
     */
    class ProjectMemberModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model      = ProjectMemberModel::class;
        private static $debug = false;


        private static ?TestingProjectMemberModelFactory $testingFactory = null;

        /**
         * @return TestingProjectMemberModelFactory
         */
        public static final function getTestingFactory(): TestingProjectMemberModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingProjectMemberModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingProjectMemberModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingProjectMemberModelFactory $fakeFactory ): void
        {
            self::$testingFactory = $fakeFactory;
        }

        // Accessors
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


        protected function DefaultDefinition(): array
        {
            return
                [
                    //
                    'project_id' => 0,
                    'account_id' => 0,
                    'member_group_id' => 0
                ];
        }

        protected function TestDefinition(): array
        {

            return self::getTestingFactory()->definition();
        }
    }
?>