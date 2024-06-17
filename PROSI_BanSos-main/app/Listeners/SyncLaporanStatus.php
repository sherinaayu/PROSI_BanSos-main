<?php

namespace App\Listeners;

use App\Events\StatusUpdated;

class SyncLaporanStatus
{
    public function handle(StatusUpdated $event)
    {
        $data = $event->data;
        
        foreach ($data->laporan as $laporan) {
            $laporan->status = $data->status;
            $laporan->save();
        }
    }
}