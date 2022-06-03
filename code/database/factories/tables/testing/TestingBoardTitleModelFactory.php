<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables\testing;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\BoardTitleModel;


    /**
     *
     */
    class TestingBoardTitleModelFactory
        extends Factory
    {
        // Variables
        private static $debug   = false;
        protected $model        = BoardTitleModel::class;


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


        /**
         * @return array|mixed[]
         */
        public function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                    [
                        'content' => $this->faker
                                          ->unique()
                                          ->realText(50)
                    ];
            }
            else
            {
                return
                    [
                        'content' => null
                    ];
            }
        }
    }
?>