<?php

class RequestAuthorizator implements AuthorizatorInterface
{
    use AuthCheckTrait;
    
    public static function auth(Request $request, ?User $user)
    {
        $newUser = self::getAuthData($request);
        if(self::authCheck($newUser, $user)) {
            return true;
        } else {
            echo new IncorrectPasswordException(sprintf("The user's %s password is incorrect", $newUser->name));
            exit;
        }
    }
    
    private static function getAuthData(Request $request): ?User
    {
        if(isset($request->request['user'])) {
            return new User($request->request['user'], $request->request['password']);
        } else {
            return null;
        }
    }
}