<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ForeachArrJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $foreachArrCheck;
    /**
     * Create a new job instance.
     */
    public function __construct($foreachArrCheck)
    {
        $this->foreachArrCheck = $foreachArrCheck;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $restWeek = [
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday',
        ];

        foreach ($restWeek as $day) {
           array_push($this->foreachArrCheck, $day) ;
        }

     //   dd($this->foreachArrCheck);
    }
}
