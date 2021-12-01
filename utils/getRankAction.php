<?php
function getRankAction($role) {
    return $role == 'user' ? 'Promote' : 'Demote';
}