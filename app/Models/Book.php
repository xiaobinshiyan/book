<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = ['name', 'sort', 'author'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function digest()
    {
        return $this->hasMany(Digest::class);
    }
}
