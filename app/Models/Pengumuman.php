<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Pengumuman extends Model
{
    use HasFactory, Searchable;
    protected $table = 'pengumuman';
    protected $guarded = [];

    public function toSearchableArray()
    {
        return [
            'nama' => $this->nama
        ];
    }
}
