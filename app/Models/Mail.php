<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;
    public function subjectMails(){
        return $this->belongsTo(SubjectMail::class, "subject_mails_id");
    }
}
