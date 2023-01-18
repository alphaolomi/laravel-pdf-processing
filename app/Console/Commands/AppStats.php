<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use function Termwind\{render};

class AppStats extends Command
{
    protected $signature = 'app:stats';

    protected $description = 'Display the application stats';

    public function handle(): int
    {
        render(<<<'HTML'
            <div class="mx-2 my-1">
                <div class="space-x-1">
                    <span class="px-1 bg-blue-500 text-white">Application Info</span>
                </div>

                <div class="mt-1">
                    <span class="font-bold text-green">Totals</span>

                    <div class="flex space-x-1">
                        <span class="font-bold">Users</span>
                        <span class="flex-1 content-repeat-[.] text-gray"></span>
                        <span class="font-bold text-green">150</span>
                    </div>

                    <div class="flex space-x-1">
                        <span class="font-bold">Posts</span>
                        <span class="flex-1 content-repeat-[.] text-gray"></span>
                        <span class="font-bold text-green">200</span>
                    </div>

                    <div class="flex space-x-1">
                        <span class="font-bold">Comments</span>
                        <span class="flex-1 content-repeat-[.] text-gray"></span>
                        <span class="font-bold text-green">175</span>
                    </div>
                </div>

                <div class="mt-1">
                    <span class="font-bold text-green">Health Checks</span>

                    <div class="flex space-x-1">
                        <span class="font-bold">Mailcoach</span>
                        <i class="text-gray">Newsletter</i>
                        <span class="flex-1 content-repeat-[.] text-gray"></span>
                        <span class="font-bold text-green">CONNECTED</span>
                    </div>

                    <div class="flex space-x-1">
                        <span class="font-bold">Vonage</span>
                        <i class="text-gray">SMS</i>
                        <span class="flex-1 content-repeat-[.] text-gray"></span>
                        <span class="font-bold text-red">ERROR!</span>
                    </div>
                </div>
            </div>
        HTML);

        return Command::SUCCESS;
    }
}
