<?php
function getIsApproved($isApproved, $lookup)
{
    if ($lookup) {
        return $isApproved == 0 ? 'NO' : 'YES';
    } else {
        return $isApproved == 0 ? 'Approve' : 'Disapprove';
    }
}
