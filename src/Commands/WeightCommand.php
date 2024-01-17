<?php

namespace OscarWeijman\Weight\Commands;

use Illuminate\Console\Command;

class WeightCommand extends Command
{
    public $signature = 'weight-conversions';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
