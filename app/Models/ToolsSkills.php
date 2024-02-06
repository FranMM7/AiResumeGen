<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToolsSkills extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tool_skill_name',
        'type',
        'related_title_employment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function relatedTitleEmployment()
    {
        return $this->belongsTo(TitlesCertificates::class, 'related_title_employment');
    }
}
