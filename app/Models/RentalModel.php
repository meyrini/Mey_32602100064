<?php

namespace App\Models;

use CodeIgniter\Model;

class RentalModel extends Model
{
    protected $table = 'rentals';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'description', 'price'];
    
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[255]',
        'price' => 'required|decimal',
    ];
    
    protected $validationMessages = [
        'name' => [
            'required' => 'Name is required',
            'min_length' => 'Name must be at least 3 characters long',
        ],
        'price' => [
            'required' => 'Price is required',
            'decimal' => 'Price must be a decimal number',
        ],
    ];
}
