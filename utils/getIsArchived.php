<?php
function getIsArchived($isArchived, $shouldReturnAction)
{
    return ($shouldReturnAction == true ? ($isArchived == 1 ? 'Unarchive' : 'Archive') : ($isArchived == 1 ? 'YES' : 'NO')); 
}
