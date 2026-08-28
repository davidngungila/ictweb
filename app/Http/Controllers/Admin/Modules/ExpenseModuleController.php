<?php

namespace App\Http\Controllers\Admin\Modules;

use App\Http\Controllers\Admin\ModuleCrudController;

class ExpenseModuleController extends ModuleCrudController
{
    protected $resource = 'expense';
}

