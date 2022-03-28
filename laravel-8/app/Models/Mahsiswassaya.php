<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Mahsiswassaya
 * @package App\Models
 * @version March 28, 2022, 12:43 am UTC
 *
 * @property string $nama
 * @property string $nim
 * @property string $kontak
 */
class Mahsiswassaya extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'mahasiswa';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'nim',
        'kontak'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'nim' => 'string',
        'kontak' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'nullable|string|max:255',
        'nim' => 'nullable|string|max:15',
        'kontak' => 'nullable|string|max:12',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
