<?php namespace GoogleApiServices;
/*
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Analytics_AccountTicket extends \GoogleApi\Google_Model
{
  protected $accountType = '\GoogleApiServices\Google_Service_Analytics_Account';
  protected $accountDataType = '';
  public $id;
  public $kind;
  protected $profileType = '\GoogleApiServices\Google_Service_Analytics_Profile';
  protected $profileDataType = '';
  public $redirectUri;
  protected $webpropertyType = '\GoogleApiServices\Google_Service_Analytics_Webproperty';
  protected $webpropertyDataType = '';

  public function setAccount(Google_Service_Analytics_Account $account)
  {
    $this->account = $account;
  }
  public function getAccount()
  {
    return $this->account;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setProfile(Google_Service_Analytics_Profile $profile)
  {
    $this->profile = $profile;
  }
  public function getProfile()
  {
    return $this->profile;
  }
  public function setRedirectUri($redirectUri)
  {
    $this->redirectUri = $redirectUri;
  }
  public function getRedirectUri()
  {
    return $this->redirectUri;
  }
  public function setWebproperty(Google_Service_Analytics_Webproperty $webproperty)
  {
    $this->webproperty = $webproperty;
  }
  public function getWebproperty()
  {
    return $this->webproperty;
  }
}
