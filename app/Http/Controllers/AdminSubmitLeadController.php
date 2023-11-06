<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class AdminSubmitLeadController extends Controller
{
    public function store(Request $request)

    {

        $this->extracted($request);
        $inputPassword = $request->input('password');
        if (!password_needs_rehash($inputPassword, PASSWORD_BCRYPT)) {
            $hashedPassword = $inputPassword;
        } else {
            // Hash the password
            $hashedPassword = bcrypt($inputPassword);
        }


        $request->merge(['password' => bcrypt($request->input('password'))]);
        Lead::create($request->all());

        return redirect()->route('admin.dashboard')->with('refresh', true);

    }
    public function update(Request $request)
    {
        $this->extracted($request);
        $lead =  Lead::find($request->id);
        $inputPassword = $request->input('password');
        if (!password_needs_rehash($inputPassword, PASSWORD_BCRYPT)) {
            $hashedPassword = $inputPassword;
        } else {
            // Hash the password
            $hashedPassword = bcrypt($inputPassword);
        }


        $request->merge(['password' => bcrypt($request->input('password'))]);
        $lead->update($request->all());

        return redirect()->route('admin.dashboard')->with('refresh', true);


    }

    /**
     * @param Request $request
     * @return void
     */
    public function extracted(Request $request): void
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'email_address' => 'required',
            'postal_code' => 'required',
            'password' => 'required',
            'contact_number_1' => 'required',
        ]);
        $columnsToCheck = ["income_based_job_seekers_allowance", "income_related_employment", "income_support", "pension_credit", "working_tax_credit", "child_tax_credit", "universal_credit", "housing_benefit", "child_benefit_where"];
        foreach ($columnsToCheck as $column) {
            if (!$request->has($column)) {
                $request->merge([$column => 0]);
            }
        }
    }
}
