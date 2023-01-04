<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Achievement;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class IndexController extends Controller
{
    public function index()
    {
        // dd(Customer::all()[0]->getMedia("customers")[0]->model_id,
        //  Customer::all()[0]->getMedia("customers")[0]->file_name);

        return view('index', [
            'achievments' => Achievement::all(),
            "customers" => Customer::all(),
            "services" => Service::all(),
        ]);
    }

    public function projects()
    {
        // dd(Customer::all()[0]->getMedia("customers")[0]->model_id,
        //  Customer::all()[0]->getMedia("customers")[0]->file_name);

        return view('projects', [
            'projects' => Project::all(),
        ]);
    }
}
