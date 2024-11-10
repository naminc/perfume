<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiNuocHoa extends Model
{
    use HasFactory;

    protected $table = 'perfume_type';
    protected $fillable = ['name']; // Adjust fields as per your database structure

    /**
     * Define a one-to-many relationship with NuocHoa.
     */
    public function nuocHoas()
    {
        return $this->hasMany(NuocHoa::class, 'id_type');
    }
}
