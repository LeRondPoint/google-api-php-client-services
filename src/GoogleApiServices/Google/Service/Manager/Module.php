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

class Google_Service_Manager_Module extends \GoogleApi\Google_Model
{
  protected $autoscalingModuleType = '\GoogleApiServices\Google_Service_Manager_AutoscalingModule';
  protected $autoscalingModuleDataType = '';
  protected $firewallModuleType = '\GoogleApiServices\Google_Service_Manager_FirewallModule';
  protected $firewallModuleDataType = '';
  protected $healthCheckModuleType = '\GoogleApiServices\Google_Service_Manager_HealthCheckModule';
  protected $healthCheckModuleDataType = '';
  protected $lbModuleType = '\GoogleApiServices\Google_Service_Manager_LbModule';
  protected $lbModuleDataType = '';
  protected $networkModuleType = '\GoogleApiServices\Google_Service_Manager_NetworkModule';
  protected $networkModuleDataType = '';
  protected $replicaPoolModuleType = '\GoogleApiServices\Google_Service_Manager_ReplicaPoolModule';
  protected $replicaPoolModuleDataType = '';
  public $type;

  public function setAutoscalingModule(Google_Service_Manager_AutoscalingModule $autoscalingModule)
  {
    $this->autoscalingModule = $autoscalingModule;
  }
  public function getAutoscalingModule()
  {
    return $this->autoscalingModule;
  }
  public function setFirewallModule(Google_Service_Manager_FirewallModule $firewallModule)
  {
    $this->firewallModule = $firewallModule;
  }
  public function getFirewallModule()
  {
    return $this->firewallModule;
  }
  public function setHealthCheckModule(Google_Service_Manager_HealthCheckModule $healthCheckModule)
  {
    $this->healthCheckModule = $healthCheckModule;
  }
  public function getHealthCheckModule()
  {
    return $this->healthCheckModule;
  }
  public function setLbModule(Google_Service_Manager_LbModule $lbModule)
  {
    $this->lbModule = $lbModule;
  }
  public function getLbModule()
  {
    return $this->lbModule;
  }
  public function setNetworkModule(Google_Service_Manager_NetworkModule $networkModule)
  {
    $this->networkModule = $networkModule;
  }
  public function getNetworkModule()
  {
    return $this->networkModule;
  }
  public function setReplicaPoolModule(Google_Service_Manager_ReplicaPoolModule $replicaPoolModule)
  {
    $this->replicaPoolModule = $replicaPoolModule;
  }
  public function getReplicaPoolModule()
  {
    return $this->replicaPoolModule;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}
