<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function job()
    {
        return $this->hasOne(Job::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public static function jobCompany()
    {
        /*  $sql = "
            SELECT 
            FROM companies
            INNER JOIN jobs ON jobs.company_id = companies.id
            WHERE 
        "; */
    }
}
