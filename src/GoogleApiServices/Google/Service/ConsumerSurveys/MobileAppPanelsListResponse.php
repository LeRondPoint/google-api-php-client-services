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

class Google_Service_ConsumerSurveys_MobileAppPanelsListResponse extends \GoogleApi\Google_Collection
{
  protected $collection_key = 'resources';
  protected $pageInfoType = '\GoogleApiServices\Google_Service_ConsumerSurveys_PageInfo';
  protected $pageInfoDataType = '';
  public $requestId;
  protected $resourcesType = '\GoogleApiServices\Google_Service_ConsumerSurveys_MobileAppPanel';
  protected $resourcesDataType = 'array';
  protected $tokenPaginationType = '\GoogleApiServices\Google_Service_ConsumerSurveys_TokenPagination';
  protected $tokenPaginationDataType = '';

  public function setPageInfo(Google_Service_ConsumerSurveys_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  public function getRequestId()
  {
    return $this->requestId;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
  public function setTokenPagination(Google_Service_ConsumerSurveys_TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
}
