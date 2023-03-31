<?php

namespace App\Models;

use App\Models\Pekerjaan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pegawai extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
 
    public function pekerjaan()
    {
        return $this->BelongsTo(Pekerjaan::class, 'id_pekerjaan', 'id');
    }
}
