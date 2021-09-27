<?php

namespace App\Imports;

use App\Models\BoardOfDirector;
use App\Models\CompanyAccounting;
use App\Models\CompanyDetail;
use App\Models\MarketShare;
use App\Models\Shareholder;
use App\User;
use App\Utils\Status;
use App\Utils\UserType;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CompaniesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $company =  CompanyDetail::create([
            'created_by' => Auth::user()->name,
            'created_at' => Carbon::now(),
            'about' => isset($row['about']) ? $row['about'] : null,
            'auditor' => isset($row['auditor']) ? $row['auditor'] : null,
            'company_email_id' => isset($row['company_email']) ? $row['company_email'] : null,
            'company_name' => isset($row['company_name']) ? $row['company_name'] : null,
            'company_type' => isset($row['company_type']) ? $row['company_type'] : null,
            'company_website' => isset($row['company_website']) ? $row['company_website'] : null,
            'contact_number' => isset($row['contact_number']) ? $row['contact_number'] : null,
            'corporate_details' => isset($row['corporate_details']) ? $row['corporate_details'] : null,
            'country' => isset($row['country']) ? $row['country'] : null,
            'employee_count' => isset($row['employee_count']) ? $row['employee_count'] : 0 ,
            'fax_detail' => isset($row['fax_detail']) ? $row['fax_detail'] : null,
            'financial_report' => isset($row['financial_report']) ? $row['financial_report'] : null,
            'image_url' => isset($row['image_url']) ? $row['image_url'] : null ,
            'incorporated' => isset($row['incorporated']) ? $row['incorporated'] : null,
            'incorporated_year' => isset($row['incorporated_year']) ? $row['incorporated_year'] : null,
            'location' => isset($row['location']) ? $row['location'] : null,
            'toll_free_number' => isset($row['toll_free_number']) ? $row['toll_free_number'] : null,
            'trade_name' => isset($row['trade_name']) ? $row['trade_name'] : null,
            'alternative_names' => isset($row['alternative_names']) ? $row['alternative_names'] : null,
            'status' => isset($row['status']) ? $row['status'] : Status::Active,
        ]);
        if (isset($row['board_of_directors'])){
            $bods = explode(',',$row['board_of_directors']);
            foreach ($bods as $bod){
                $name = trim(strtok($bod, '('));
                preg_match('/(?<=\()(.+)(?=\))/is', $bod, $match);
                $designation = isset($match[0]) ? trim($match[0]) : null;

                if (isset($designation) && isset($name) && isset($company)){
                    BoardOfDirector::create([
                        'created_by' => Auth::user()->name,
                        'company_id' => $company->id,
                        'name' => $name,
                        'designation' => $designation,
                    ]);
                }
            }
        }
        if (isset($row['currency']) || isset($row['financial_strength_rating']) || isset($row['gross_written_premium'])|| isset($row['gross_written_premium_year']) || isset($row['issue_credit_rating']) || isset($row['moody_rating']) || isset($row['other_rating']) || isset($row['public_listed_company']) || isset($row['regulatory_authority']) || isset($row['s_andprating'])){
            CompanyAccounting::create([
                'created_by' => Auth::user()->name,
                'company_id' => $company->id,
                'currency' => $row['currency'] ?: null,
                'financial_strength_rating' => $row['financial_strength_rating'] ?: null,
                'gross_written_premium' => $row['gross_written_premium'] ?: null,
                'gross_written_premium_year' => $row['gross_written_premium_year'] ?: null,
                'issue_credit_rating' => $row['issue_credit_rating'] ?: null,
                'moody_rating' => $row['moody_rating'] ?: null,
                'other_rating' => $row['other_rating'] ?: null,
                'public_listed_company' => $row['public_listed_company'] ?: null,
                'regulatory_authority' => $row['regulatory_authority'] ?: null,
                's_andprating' => $row['s_andprating'] ?: null,
            ]);
        }

        if (isset($row['authorized_shares']) || isset($row['issued_shares']) || isset($row['no_of_shares'])|| isset($row['paid_up_shares']) || isset($row['total_share']) || isset($row['moody_rating'])){
            $market_share_id = MarketShare::create([
                'created_by' => Auth::user()->name,
                'company_id' => $company->id,
                'authorized_shares' => $row['authorized_shares'] ?: null,
                'issued_shares' => $row['issued_shares'] ?: null,
                'no_of_shares' => $row['no_of_shares'] ?: null,
                'paid_up_shares' => $row['paid_up_shares'] ?: null,
                'total_share' => $row['total_share'] ?: null,
            ]);
        }

//        if (isset($market_share_id) || isset($row['share_holders'])) {
//
//            $share_holders = explode(',', $row['share_holders']);
//            foreach ($share_holders as $share_holder) {
//                $name = trim(strtok($share_holder, '('));
//                preg_match('/(?<=\()(.+)(?=\))/is', $share_holder, $mat);
//                $share_percentage = isset($mat[0]) ? trim($mat[0]) : null;
//                dump($name);
//                dd($share_percentage);
//                $market_share_id = Shareholder::create([
//                    'created_by' => Auth::user()->name,
//                    'name' => $name ?: null,
//                    'share_percentage' => $share_percentage ?: null,
//                    'market_share_id' => $market_share_id,
//                ]);
//            }
//        }

    }
}
