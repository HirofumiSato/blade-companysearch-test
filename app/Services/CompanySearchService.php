<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class CompanySearchService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $companies = DB::table('companies')
            ->join('prefectures', 'companies.prefecture_id', '=', 'prefectures.code')
            ->select('companies.*', 'prefectures.name as prefecture_name')
            ->get();
    }

    /**
     * Get companies filtered by prefecture.
     *
     * @param string $prefecture
     * @return \Illuminate\Support\Collection
     */
    public function getCompaniesByPrefecture($prefecture)
    {
        $companies_by_prefecture = DB::table('companies')
            ->join('prefectures', 'companies.prefecture_id', '=', 'prefectures.code')
            ->select('companies.*', 'prefectures.name as name')
            ->where('prefectures.name', $prefecture)
            ->get();

        return $companies_by_prefecture;
    }
}
