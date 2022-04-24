<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\parameter;

class removeConvertedFile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $fileToken;
    public function __construct($fileToken, $type)
    {
        //
        $this->fileToken = $fileToken;
        $this->type = $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        shell_exec("cd public/storage && rm -r ".$this->fileToken);
        $convertedFileNum = parameter::where("key", $this->type)->first();
        $convertedFileNum->value = $convertedFileNum->value + 1;
        $convertedFileNum->save();
        return;
    }
}
