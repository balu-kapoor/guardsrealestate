<?php

namespace App\Jobs;

use App\Models\Properties\GB_PropertySync;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class sync10ninety implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        $lastSync = DB::table('GB_PropertySync')->addSelect('created_at')
                      ->max('created_at');
        if(!empty($lastSync))
        {
            $lastSync = \DateTime::createFromFormat('Y-m-d H:i:s',$lastSync);
            Log::debug('10Ninety Last Sync: '.$lastSync->format(DATE_RFC822));
            
            $lastSync->add(new \DateInterval('PT1S'));
            
            if($lastSync < now())
            {
                Log::debug('Syncing now..');
                GB_PropertySync::truncate();
                system("rm -rf ".public_path('property'));
                app('App\Http\Controllers\Controller')->search1090("L",999);
                app('App\Http\Controllers\Controller')->search1090("S",999);
            }
        
        }
        else
        {
            GB_PropertySync::truncate();
            system("rm -rf ".public_path('property'));
            app('App\Http\Controllers\Controller')->search1090("L",999);
            app('App\Http\Controllers\Controller')->search1090("S",999);
        }
    }
}
