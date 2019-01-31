<?php

/**
 *  *  * Created by Agência CCM.
 * Author: Lucas Cardial <luccascardial@gmail.com>
 * Date: 31/01/2019
 * Time: 10:24
 */

namespace LucasCardial\UserDataService;


use LucasCardial\Contracts\IUserData;

class UserDataService implements IUserData
{
    private $user;

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }
}