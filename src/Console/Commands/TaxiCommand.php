<?php

declare(strict_types=1);

namespace loranger\Taxi\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Terminal;

class TaxiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature='taxi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description='Board a cab for your new journey';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $full_width=(new Terminal())->getWidth();

        $size=$full_width * 50;

        $progressBar=$this->output->createProgressBar($size);
        $progressBar->setBarWidth($full_width);
        $progressBar->setFormat('Enjoy the journey! %bar%');
        $progressBar->setProgressCharacter("\u{1F695}");
        $progressBar->setBarCharacter(' ');
        $progressBar->setEmptyBarCharacter(' ');
        $progressBar->setRedrawFrequency(50);

        $progressBar->setProgress($size);
        while ($size-- >= 0) {
            $progressBar->setProgress($size);
            usleep(1000);
        }
        $progressBar->finish();

        return 0;
    }
}
