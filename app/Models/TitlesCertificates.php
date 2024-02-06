<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitlesCertificates extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'institution_name',
        'title_name',
        'study_period',
        'document_attachment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
