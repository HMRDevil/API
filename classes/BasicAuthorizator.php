<?php

class BasicAuthorizator implements AuthorizatorInterface
{
    use AuthCheckTrait;
    
    public static function auth(Request $request, ?User $user): ?bool
    {
        $newUser = self::getAuthData($request);
        if(self::authCheck($newUser, $user)) {
            return true;
        } else {
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');
            exit;
        }
    }
    
    private static function getAuthData(Request $request): ?User
    {
        if(!isset($request->server['PHP_AUTH_USER'])) {
            return null;
        } else {
            return new User($request->server['PHP_AUTH_USER'], $request->server['PHP_AUTH_PW']);
        }
    }
}