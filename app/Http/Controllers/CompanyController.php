<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Prefecture;
use App\Services\CompanySearchService;

class CompanyController extends Controller
{
    protected $companySearchService;

    public function __construct(CompanySearchService $companySearchService)
    {
        $this->companySearchService = $companySearchService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::join('prefectures', 'companies.prefecture_id', '=', 'prefectures.code')
            ->orderBy('companies.prefecture_id', 'asc')
            ->get();
        $prefectures = Prefecture::all();
        
        return view('welcome', [
            'companies' => $companies,
            'prefectures' => $prefectures
        ]);
    }

    /**
     * Search companies by prefecture.
     */             

    public function search_company_by_prefecture(Request $request)
    {
        $companies = $this->companySearchService->getCompaniesByPrefecture($request->prefecture_name);
        $prefectures = Prefecture::all();
        
        return view('welcome', [
            'companies' => $companies,
            'prefectures' => $prefectures
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
