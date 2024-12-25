<?php

namespace App\Observers;
use App\Models\Property;

class PropertyObserver {
    public function creating(Property $property): void {
        if (auth()->check()) {
            $property->user_id = auth()->id();
        }        
    }

    /**
     * Handle the Property "created" event.
     */
    public function created(Property $property): void {
        if (auth()->check()) {
            $property->user_id = auth()->id();
        }

        // if (auth()->hasUser()) {
        //     $property->user_id = auth()->user()->user_id;
        //     $property->property()->associate(auth()->user()->user_id);
        // }
    }

    /**
     * Handle the Property "updated" event.
     */
    public function updated(Property $property): void
    {
        //
    }

    /**
     * Handle the Property "deleted" event.
     */
    public function deleted(Property $property): void
    {
        //
    }

    /**
     * Handle the Property "restored" event.
     */
    public function restored(Property $property): void
    {
        //
    }

    /**
     * Handle the Property "force deleted" event.
     */
    public function forceDeleted(Property $property): void
    {
        //
    }
}
