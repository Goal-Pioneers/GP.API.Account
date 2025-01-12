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
    use App\Models\tables\NewsletterSubscriptionModel;


    /**
     *
     */
    class TestingNewsletterSubscriptionModelFactory
        extends Factory
    {
        // Variables
        protected $model        = NewsletterSubscriptionModel::class;


        /**
         * @return array
         */
        public final function definition(): array
        {
            return
            [
                NewsletterSubscriptionModel::field_email_id => 1,
                NewsletterSubscriptionModel::field_options => ''
            ];
        }
    }
?>