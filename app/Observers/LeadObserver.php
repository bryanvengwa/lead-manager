<?php

namespace App\Observers;

use App\Models\benefit;
use App\Models\Customer;
use App\Models\Lead;
use App\Models\User;
use Cassandra\Custom;

class LeadObserver
{
    /**
     * Handle the Lead "created" event.
     */
    public function created(Lead $lead): void
    {
        $benefits = $lead->getBenefits($lead->id);
        foreach ($benefits as $benefit){
            benefit::create($benefit);

        }


        $customer = $lead->getCustomer($lead->id);

        Customer::create($customer);



    }

    /**
     * Handle the Lead "updated" event.
     */
    public function updated(Lead $lead): void
    {
//        deletes current existing benefits and updates by creating new
        Benefit::where('lead_id', $lead->id)->delete();
        $benefits = $lead->getBenefits($lead->id);
        foreach ($benefits as $benefit){
            benefit::create($benefit);

        }


        $customerInfo = $lead->getCustomer($lead->id);
        $customer = Customer::where('lead_id', $lead->id)->first();

        if ($customer) {
        $customer->update($customerInfo);

        }


    }

    /**
     * Handle the Lead "deleted" event.
     */
    public function deleted(Lead $lead): void
    {
        //
    }

    /**
     * Handle the Lead "restored" event.
     */
    public function restored(Lead $lead): void
    {
        //
    }

    /**
     * Handle the Lead "force deleted" event.
     */
    public function forceDeleted(Lead $lead): void
    {
        //
    }
}
