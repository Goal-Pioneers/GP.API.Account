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
    use App\Models\tables\AccountEmailModel;


    /**
     *
     */
    class TestingAccountEmailModelFactory
        extends Factory
    {
        protected $model = AccountEmailModel::class;

        /**
         * @return array|mixed[]
         */
        public final function definition(): array
        {
            return
            [
                AccountEmailModel::field_content => $this->faker->unique()->safeEmail
            ];
        }
    }
?>