<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{

    use HasFactory;

    protected $guarded = [];
    public function benefits()
    {
        return $this->hasMany(Benefit::class);
    }

    public function getCustomer($id){
        $lead = Lead::find($id);
        $customer = ['first_name'=>$lead->first_name , 'password'=>$lead->password ,'middle_name'=>$lead->middle_name , 'last_name'=>$lead->last_name , 'password'=>$lead->password , 'lead_id'=>$lead->id , 'email_address'=>$lead->email_address];
        return $customer;
    }

    public function getBenefits($id){
        $lead = Lead::find($id);
        $benefits = [];

           $benefits[0] =[ 'lead_id' => $id ,  'benefit_name' => $lead->income_based_job_seekers_allowance > 0 ? 'Income-based Job Seekers Allowance' : ''] ;
       $benefits[1] =[ 'lead_id' => $id ,  'benefit_name' => $lead->income_related_employment > 0 ? 'Income-related Employment and Support Allowance': ''];
       $benefits[2] = [ 'lead_id' => $id ,  'benefit_name'=>$lead->income_support > 0 ? 'Income Support': ''];
       $benefits[3] = [ 'lead_id' => $id ,  'benefit_name'=>$lead->pension_credit > 0 ? 'Pension Credit either Savings Credit or Guarantee Credit': ''];
       $benefits[4] = [ 'lead_id' => $id ,  'benefit_name'=>$lead->working_tax_credit > 0 ? 'Working Tax Credit': ''];
       $benefits[5] = [ 'lead_id' => $id ,  'benefit_name'=>$lead->child_tax_credit > 0 ? 'Child Tax Credit': ''];
       $benefits[6] = [ 'lead_id' => $id ,  'benefit_name'=>$lead->universal_credit > 0 ? 'Universal Credit': ''];
       $benefits[7] = [ 'lead_id' => $id ,  'benefit_name'=>$lead->child_benefit_where > 0 ? 'Child benefit where the occupants meet the below income thresholds': ''];
       $benefits[8] = [ 'lead_id' => $id ,  'benefit_name'=>$lead->housing_benefit > 0 ? 'Housing Benefit': ''];
        foreach ($benefits as $key => $value) {
            if ($value['benefit_name']== '' || $value['benefit_name'] == null) {
                unset($benefits[$key]);
            }
        }

// Re-index the array to remove gaps in the keys
       return array_values($benefits);



    }
}
