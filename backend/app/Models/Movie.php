<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $duaded = 'id';

    function getCoulmnType()
    {
        return [
            'id',
            'string',
            'string',
            'timestamps'
        ];
    }
}
