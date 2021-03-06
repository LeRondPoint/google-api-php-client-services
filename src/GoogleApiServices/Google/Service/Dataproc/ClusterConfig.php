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

class Google_Service_Dataproc_ClusterConfig extends \GoogleApi\Google_Collection
{
  protected $collection_key = 'initializationActions';
  public $configBucket;
  protected $gceClusterConfigType = '\GoogleApiServices\Google_Service_Dataproc_GceClusterConfig';
  protected $gceClusterConfigDataType = '';
  protected $initializationActionsType = '\GoogleApiServices\Google_Service_Dataproc_NodeInitializationAction';
  protected $initializationActionsDataType = 'array';
  protected $masterConfigType = '\GoogleApiServices\Google_Service_Dataproc_InstanceGroupConfig';
  protected $masterConfigDataType = '';
  protected $secondaryWorkerConfigType = '\GoogleApiServices\Google_Service_Dataproc_InstanceGroupConfig';
  protected $secondaryWorkerConfigDataType = '';
  protected $softwareConfigType = '\GoogleApiServices\Google_Service_Dataproc_SoftwareConfig';
  protected $softwareConfigDataType = '';
  protected $workerConfigType = '\GoogleApiServices\Google_Service_Dataproc_InstanceGroupConfig';
  protected $workerConfigDataType = '';

  public function setConfigBucket($configBucket)
  {
    $this->configBucket = $configBucket;
  }
  public function getConfigBucket()
  {
    return $this->configBucket;
  }
  public function setGceClusterConfig(Google_Service_Dataproc_GceClusterConfig $gceClusterConfig)
  {
    $this->gceClusterConfig = $gceClusterConfig;
  }
  public function getGceClusterConfig()
  {
    return $this->gceClusterConfig;
  }
  public function setInitializationActions($initializationActions)
  {
    $this->initializationActions = $initializationActions;
  }
  public function getInitializationActions()
  {
    return $this->initializationActions;
  }
  public function setMasterConfig(Google_Service_Dataproc_InstanceGroupConfig $masterConfig)
  {
    $this->masterConfig = $masterConfig;
  }
  public function getMasterConfig()
  {
    return $this->masterConfig;
  }
  public function setSecondaryWorkerConfig(Google_Service_Dataproc_InstanceGroupConfig $secondaryWorkerConfig)
  {
    $this->secondaryWorkerConfig = $secondaryWorkerConfig;
  }
  public function getSecondaryWorkerConfig()
  {
    return $this->secondaryWorkerConfig;
  }
  public function setSoftwareConfig(Google_Service_Dataproc_SoftwareConfig $softwareConfig)
  {
    $this->softwareConfig = $softwareConfig;
  }
  public function getSoftwareConfig()
  {
    return $this->softwareConfig;
  }
  public function setWorkerConfig(Google_Service_Dataproc_InstanceGroupConfig $workerConfig)
  {
    $this->workerConfig = $workerConfig;
  }
  public function getWorkerConfig()
  {
    return $this->workerConfig;
  }
}
