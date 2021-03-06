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

class Google_Service_Monitoring_CreateCollectdTimeSeriesRequest extends \GoogleApi\Google_Collection
{
  protected $collection_key = 'collectdPayloads';
  protected $collectdPayloadsType = '\GoogleApiServices\Google_Service_Monitoring_CollectdPayload';
  protected $collectdPayloadsDataType = 'array';
  public $collectdVersion;
  protected $resourceType = '\GoogleApiServices\Google_Service_Monitoring_MonitoredResource';
  protected $resourceDataType = '';

  public function setCollectdPayloads($collectdPayloads)
  {
    $this->collectdPayloads = $collectdPayloads;
  }
  public function getCollectdPayloads()
  {
    return $this->collectdPayloads;
  }
  public function setCollectdVersion($collectdVersion)
  {
    $this->collectdVersion = $collectdVersion;
  }
  public function getCollectdVersion()
  {
    return $this->collectdVersion;
  }
  public function setResource(Google_Service_Monitoring_MonitoredResource $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}
