<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    

    class AccountEmailModel 
        extends Model
    {
        use HasFactory;

        protected $table = 'account_emails';
        
        protected $fillable = 
        [
            'content'
        ];

        
        protected $hidden = 
        [
            
        ];

        
        protected $casts = 
        [
            
        ];
    }
?>