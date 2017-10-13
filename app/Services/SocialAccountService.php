<?php

namespace App\Services;

use App\Repositories\SocialRepository;
use App\Repositories\UserRepository;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{

    /**
     * Ecommerce-CMS
     *
     * Copyright (C) 2014 - 2015  Tihomir Blazhev.
     *
     * LICENSE
     *
     * Ecommerce-cms is released with dual licensing, using the GPL v3 (license-gpl3.txt) and the MIT license (license-mit.txt).
     * You don't have to do anything special to choose one license or the other and you don't have to notify anyone which license you are using.
     * Please see the corresponding license file for details of these licenses.
     * You are free to use, modify and distribute this software, but all copyright information must remain.
     *
     * @package     ecommerce-cms
     * @copyright   Copyright (c) 2014 through 2015, Tihomir Blazhev
     * @license     http://opensource.org/licenses/MIT  MIT License
     * @version     1.0.0
     * @author      Tihomir Blazhev <raylight75@gmail.com>
     */

    /**
     *
     * Social Account Service Class.
     *
     *
     * @package ecommerce-cms
     * @category Service Class
     * @author Tihomir Blazhev <raylight75@gmail.com>
     * @link https://raylight75@bitbucket.org/raylight75/ecommerce-cms.git
     */

    /**
     * SocialService constructor.
     * @param UserRepository $user
     * @param SocialRepository $account
     */

    public function __construct(UserRepository $user, SocialRepository $account)
    {
        $this->user = $user;
        $this->account = $account;
    }

    /**
     * @param ProviderUser $providerUser
     * @param $provider
     * @return mixed
     */
    public function createOrGetUser(ProviderUser $providerUser, $provider)
    {
        $account = $this->getAccount($providerUser->getId());

        if ($account) {
            return $account->user;
        } else {
            $account = $this->account->create([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $provider,
                'access_token' => $providerUser->token
            ]);

            $user = $this->user->findBy('email', $providerUser->getEmail());

            if ($providerUser->getName()) {
                $name = $providerUser->getName();
            } else {
                $name = $provider;
            }
            if (!$user) {
                $user = $this->user->create([
                    'email' => $providerUser->getEmail(),
                    'name' => $name,
                    'password' => bcrypt(str_random(8)),
                    'is_activated' => 1
                ]);
            }
            $account->user()->associate($user);
            $account->save();
            return $user;
        }
    }

    /**
     * @return mixed
     */
    public function getAccount($id)
    {
        $account = $this->account->findBy('provider_user_id', $id);
        return $account;
    }
}
