<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_buku',
        'pengarang',
        'penerbit',
        'keyword',
        'tahun_terbit',
        'tempat_buku',
    ];
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id', 'id');
    }
}