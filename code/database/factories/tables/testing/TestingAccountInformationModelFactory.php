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
    use App\Models\tables\AccountInformationModel;


    /**
     *
     */
    class TestingAccountInformationModelFactory
        extends Factory
    {
        protected $model        = AccountInformationModel::class;

        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                AccountInformationModel::field_account => 0,
                AccountInformationModel::field_settings => '',
                AccountInformationModel::field_created_at => $this->faker->dateTime,
                AccountInformationModel::field_updated_at => $this->faker->dateTime
            ];
        }
    }
?>