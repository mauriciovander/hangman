<?php namespace App;

/**
 * This class is responsible for
 *
 * @author mauricio
 */

use Illuminate\Database\Eloquent\Model;


class Word extends Model
{
    protected $table = 'words';

    protected $fillable = [
        'id',
        'word',
        'created_at'
    ];

    protected $hidden = [ ];
}