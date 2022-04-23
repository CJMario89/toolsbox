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
    public function __construct($fileToken)
    {
        //
        $this->fileToken = $fileToken;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $shell = shell_exec("cd storage && ls && rm -r ".$this->fileToken);
        echo $shell;
        $convertedFileNum = parameter::where("key", "convertedFileNum")->first();
        $convertedFileNum->value = $convertedFileNum->value + 1;
        $convertedFileNum->save();
        return;
    }
}
