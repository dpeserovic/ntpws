<?php
function getRoleName($roles, $roleId)
{
    foreach ($roles as $role) {
        if ($role['id'] == $roleId) {
            return $role['role'];
        }
    }
}
