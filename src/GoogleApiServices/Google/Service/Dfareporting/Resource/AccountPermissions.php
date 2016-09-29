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

/**
 * The "accountPermissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $accountPermissions = $dfareportingService->accountPermissions;
 *  </code>
 */
class Google_Service_Dfareporting_Resource_AccountPermissions extends \GoogleApi\Google_Service_Resource
{
  /**
   * Gets one account permission by ID. (accountPermissions.get)
   *
   * @param string $profileId User profile ID associated with this request.
   * @param string $id Account permission ID.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_AccountPermission
   */
  public function get($profileId, $id, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\GoogleApiServices\Google_Service_Dfareporting_AccountPermission");
  }
  /**
   * Retrieves the list of account permissions.
   * (accountPermissions.listAccountPermissions)
   *
   * @param string $profileId User profile ID associated with this request.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_AccountPermissionsListResponse
   */
  public function listAccountPermissions($profileId, $optParams = array())
  {
    $params = array('profileId' => $profileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\GoogleApiServices\Google_Service_Dfareporting_AccountPermissionsListResponse");
  }
}
