<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $fillable = ['nama', 'nim', 'kelas_id'];

    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'users.kelas_id')
                    ->select('users.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }
}
