<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    /**
     * The table associated with the Model.
     *
     * @var string
     */
    protected $table = 'genero';

    protected $primaryKey = 'id';

    /**
     * The storage format of the Model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * Indicates if the Model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [];

    protected $fillable = [
        'id',
        'nome'
    ];

}
