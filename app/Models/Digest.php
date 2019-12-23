<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Digest extends Model
{
    protected $table = 'digest';
    protected $fillable = ['content','book_id'];
}
