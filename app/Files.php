<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    /**
     * The table associated with the model.
     */
    protected $table = 'files';

    /**
     * The primary key associated with the table.
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parsedFile',
    ];
}
