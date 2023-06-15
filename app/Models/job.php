<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class job extends Model
{
    use HasFactory;
    protected $fillable = ["category_id", "company_id", "work_hour", "title", "description", "requirements", "salary", "location", "deadline"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public static function countCompanyJobs()
    {
        /* $query = "
            SELECT COUNT(*) AS count
            FROM jobs
            LEFT JOIN companies ON companies.id = jobs.company_id
            WHERE jobs.company_id = companies.id
        
        "; */
        $result = DB::selectOne("
    SELECT COUNT(*) AS count
    FROM jobs
    LEFT JOIN companies ON companies.id = jobs.company_id
    WHERE jobs.company_id = companies.id
");

        // $results = DB::select($query);
        return $result;
    }
}
