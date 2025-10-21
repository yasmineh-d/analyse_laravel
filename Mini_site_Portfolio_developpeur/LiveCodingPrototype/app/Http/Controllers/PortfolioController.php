<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DeveloperService;

class PortfolioController extends Controller
{
    public function __construct(DeveloperService $DeveloperService)
    {
        $this->DeveloperService = $DeveloperService;
    }
    public function index(DeveloperService $DeveloperService)
    {
        $profile = $this->DeveloperService->getProfile();

        return view('home', ['profile' => $profile]);
    }
}
