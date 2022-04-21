<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';
    protected $fillable = ['folders','filename'];

    /*public function setFilenameAttribute($value)
    {
        $this->attributes['filename'] = json_encode($value);
    }
    */
}
