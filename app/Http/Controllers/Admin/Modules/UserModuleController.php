<?php

namespace App\Http\Controllers\Admin\Modules;

use App\Http\Controllers\Admin\ModuleCrudController;

class UserModuleController extends ModuleCrudController
{
    protected $resource = 'user';
}

