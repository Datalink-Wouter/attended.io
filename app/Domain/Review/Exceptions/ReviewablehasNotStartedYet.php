<?php

namespace App\Domain\Review\Exceptions;

use App\Domain\Review\Interfaces\Reviewable;
use App\Domain\User\Models\User;
use App\Services\Specifications\SpecificationException;

class ReviewablehasNotStartedYet extends SpecificationException
{
    public function __construct(User $user, Reviewable $reviewable)
    {
        parent::__construct('You cannot review something that happens in the future.');
    }
}
