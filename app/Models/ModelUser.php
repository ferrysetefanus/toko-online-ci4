<?php namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $returnType = 'App\Entities\User';
    protected $allowedFields = ['username', 'avatar', 'password', 'salt', 'create_date', 'created_by', 'updated_date', 'updated_by'];
    protected $useTimestamps = false;

}