<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    
    return new class extends Migration
    {
        
        public function up()
        {
            Schema::create( 'password_resets', 
                function (Blueprint $table) 
                {
                    $table->id();
                    
                    $table->bigInteger( 'email_id' )
                          ->unsigned()
                          ->index();

                    $table->string( 'token' );
                    
                    $table->timestamp( 'created_at' )
                          ->nullable();
                }
            );
        }


        
        public function down()
        {
            Schema::dropIfExists( 'password_resets' );
        }
    };

?>