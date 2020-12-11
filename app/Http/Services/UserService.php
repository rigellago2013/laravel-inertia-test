<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\User;

class UserServices extends BaseService
{
    public function __construct(Request $request, User $currentUser)
    {
        parent::__construct($currentUser, $request, $currentUser);
    }

    public function getAll(){
        return $this->model->all();    
    }


}
