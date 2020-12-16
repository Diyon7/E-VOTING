<?php

namespace App\Models;

use CodeIgniter\Model;

class KandidatModel extends Model
{
    protected $table      = 't_kandidat';
    protected $primaryKey = 'id_kandidat';
    protected $allowedFields = ['nama_calon', 'foto', 'visi', 'misi', 'suara'];
    protected $useTimestamps = false;
}
