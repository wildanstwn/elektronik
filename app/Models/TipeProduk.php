<?php
// app/Models/TipeProduk.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeProduk extends Model
{
    use HasFactory;

    protected $table = 'ntipe_produk';

    protected $fillable = [
        'id',
        'nama_type'
    ];

    public function produks()
    {
        return $this->hasMany(Produk::class, 'type_produk_id');
    }
}
