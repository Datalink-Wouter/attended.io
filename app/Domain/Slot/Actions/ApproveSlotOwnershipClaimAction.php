<?php

namespace App\Domain\Slot\Actions;

use App\Domain\Slot\Models\SlotOwnershipClaim;
use App\Domain\Slot\Notifications\SlotOwnershipClaimApprovedNotification;

class ApproveSlotOwnershipClaimAction
{
    public function execute(SlotOwnershipClaim $claim)
    {
        $claimingUser = $claim->user;
        $slot = $claim->slot;

        $slot->speakingUsers()->attach($claimingUser);

        $claim->delete();

        $claimingUser->notify(new SlotOwnershipClaimApprovedNotification(
            $claimingUser,
            $slot,
            ));

        activity()
            ->performedOn($slot)
            ->log("claim on `{$slot->name}` by `{$claimingUser->email}` has been approved");
    }
}
