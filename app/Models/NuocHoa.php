<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NuocHoa extends Model
{
    use HasFactory;

    protected $table = 'perfume_list'; // Define the table name if it differs from the model name
    protected $fillable = ['name', 'description', 'price', 'id_type', 'images'];


    /**
     * Define a belongs-to relationship with LoaiNuocHoa.
     */
    public function loaiNuocHoa()
    {
        return $this->belongsTo(LoaiNuocHoa::class, 'id_type');
    }
}
