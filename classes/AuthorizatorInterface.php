<?php

interface AuthorizatorInterface
{
    /*
     * Permission verification function
     * 
     * @param   Request   Request object
     * @param   User      The correct user's object
     */
    public static function auth(Request $request, ?User $user);
}