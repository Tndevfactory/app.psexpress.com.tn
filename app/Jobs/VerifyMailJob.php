<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\VerifyAccountMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\MailController;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Symfony\Component\Console\Output\ConsoleOutput;

class VerifyMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Array $data_mail)
    {
        $this->data = $data_mail;
        // $output = new ConsoleOutput();
        // $output->writeln('handle job');
        // $output->writeln($this->data);

        // Mail::to($this->data['recipient'])->send(new VerifyAccountMail($this->data));
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // $output = new ConsoleOutput();
        // $output->writeln('handle job');
        // $output->writeln($this->data);
        // MailController::verifyAccount($this->data);
        Mail::to($this->data['recipient'])->send(new VerifyAccountMail($this->data));
    }
}
