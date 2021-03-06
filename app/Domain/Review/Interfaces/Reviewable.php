<?php

namespace App\Domain\Review\Interfaces;

use App\Domain\Event\Models\Event;
use App\Domain\User\Models\User;
use Illuminate\Database\Eloquent\Relations\MorphMany;

interface Reviewable
{
    public function reviews(): MorphMany;

    public function recalculateSummary();

    public function isAdministeredBy(User $user): bool;

    public function eventOfReviewable(): Event;

    public function canBeReviewedBy(User $user): bool;
}
