<?php

trait AuthCheckTrait
{
    private static function authCheck(?User $newUser, ?User $user): bool
    {
        if(($newUser->name === $user->name) && ($newUser->password === $user->password)) {
            return true;
        } else {
            return false;
        }
    }
}