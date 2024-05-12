<?php

namespace Maatwebsite\Excel\Concerns;

if (trait_exists('\Illuminate\Bus\Batchable')) {
    trait BatchableTrait
    {
        use \Illuminate\Bus\Batchable;

        public function batchCancelled()
        {
            return $this->batch()?->cancelled();
        }
    }
} else {
    trait BatchableTrait
    {
    }
}
