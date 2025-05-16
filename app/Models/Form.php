<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lost_or_found',
        'item_name',
        'last_seen_date',
        'last_seen_location',
        'other_details',
        'image_path'
    ];
    public $timestamps = false;
    protected $table = 'posts';
    protected $primaryKey = 'post_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
