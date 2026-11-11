<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table         = 'books';
    protected $primaryKey    = 'id';
    protected $allowedFields = ['book_code', 'title', 'author', 'publication_year', 'stock'];
    protected $useTimestamps = true;
}
