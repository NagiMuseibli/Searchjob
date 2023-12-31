<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class job extends Model
{
    use HasFactory;
    protected $fillable = [
        "category_id",
        "company_id",
        "work_hour",
        "title",
        "description",
        "requirements",
        "salary",
        "location",
        "deadline",
        "status",
        "count",
        "exp_year",
    ];

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
        $result = DB::selectOne("
            SELECT COUNT(*) AS count
            FROM jobs
            LEFT JOIN companies ON companies.id = jobs.company_id
            WHERE jobs.company_id = companies.id 
            
        ");

        // $results = DB::select($query);
        return $result;
    }


    public static function relatedJobs($category_id, $job_id)
    {
        $result = DB::select("
        SELECT jobs.title AS job_title, jobs.location AS job_location, 
        jobs.work_hour AS job_hour, jobs.id AS job_id, jobs.created_at, companies.company_name AS company_name, 
        companies.image AS company_image, companies.id AS company_id
        FROM jobs
        JOIN companies ON jobs.company_id = companies.id
        WHERE jobs.category_id = :category_id
        AND jobs.status = 1
        AND jobs.id != :job_id
        ORDER BY jobs.created_at DESC
        LIMIT 4
        ", ['category_id' => $category_id, 'job_id' => $job_id]);

        return $result;
    }
}
