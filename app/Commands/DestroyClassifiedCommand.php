<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Classified;

class DestroyClassifiedCommand extends Command implements SelfHandling {
    public $id;

    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {     
        return Classified::where('id', $this->id)->delete();
    }
}

