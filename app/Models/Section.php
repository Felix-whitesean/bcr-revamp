<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    use HasFactory;

    protected $table = 'sections';

    protected $fillable = ['title', 'content','title_tag', 'last_updated_by'];
    
}
