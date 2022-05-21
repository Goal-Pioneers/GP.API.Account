<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;

    
    class User 
        extends Authenticatable
    {
        protected $table = 'accounts';

        use HasApiTokens,  
            HasFactory, 
            Notifiable;


        protected $fillable = 
        [
            'username',
            'name',
            'email_id',
            'password',
            'created_at',
            'updated_at'
        ];

        
        protected $hidden = 
        [
            'password',
            'remember_token',
            'email_id',
            'email_verified_at'
        ];

        
        protected $casts = 
        [
            'email_verified_at' => 'datetime',
            'created_at'        => 'datetime',
            'updated_at'        => 'datetime',
        ];
    }
?>