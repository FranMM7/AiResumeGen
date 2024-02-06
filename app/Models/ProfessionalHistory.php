<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_name',
        'job_title',
        'tasks_performed',
        'employment_period',
        'reference_attachment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
