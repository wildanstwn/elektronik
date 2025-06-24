<?php
// app/Models/Produk.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'nama_produk', 
        'deskripsi', 
        'harga',
        'gambar', 
        'type_produk_id' 
        
    ];

    public function typeProduk()
    {
        return $this->belongsTo(TipeProduk::class, 'type_produk_id');
    }
}

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
