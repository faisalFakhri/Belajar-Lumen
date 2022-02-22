<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Learn extends Model
{
    protected $table = 'data_diri';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'nama'
    ,'descs'
    ];

} 