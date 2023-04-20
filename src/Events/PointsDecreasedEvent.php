<?php

namespace LevelUp\Experience\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PointsDecreasedEvent
{
    use Dispatchable;
    use SerializesModels;

    public function __construct(
        public int $pointsDecreasedBy,
        public int $totalPoints,
    ) {
    }
}
