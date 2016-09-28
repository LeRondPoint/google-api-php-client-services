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

class Google_Service_Manager_ModuleStatus extends \GoogleApi\Google_Model
{
  protected $autoscalingModuleStatusType = '\GoogleApiServices\Google_Service_Manager_AutoscalingModuleStatus';
  protected $autoscalingModuleStatusDataType = '';
  protected $firewallModuleStatusType = '\GoogleApiServices\Google_Service_Manager_FirewallModuleStatus';
  protected $firewallModuleStatusDataType = '';
  protected $healthCheckModuleStatusType = '\GoogleApiServices\Google_Service_Manager_HealthCheckModuleStatus';
  protected $healthCheckModuleStatusDataType = '';
  protected $lbModuleStatusType = '\GoogleApiServices\Google_Service_Manager_LbModuleStatus';
  protected $lbModuleStatusDataType = '';
  protected $networkModuleStatusType = '\GoogleApiServices\Google_Service_Manager_NetworkModuleStatus';
  protected $networkModuleStatusDataType = '';
  protected $replicaPoolModuleStatusType = '\GoogleApiServices\Google_Service_Manager_ReplicaPoolModuleStatus';
  protected $replicaPoolModuleStatusDataType = '';
  protected $stateType = '\GoogleApiServices\Google_Service_Manager_DeployState';
  protected $stateDataType = '';
  public $type;

  public function setAutoscalingModuleStatus(Google_Service_Manager_AutoscalingModuleStatus $autoscalingModuleStatus)
  {
    $this->autoscalingModuleStatus = $autoscalingModuleStatus;
  }
  public function getAutoscalingModuleStatus()
  {
    return $this->autoscalingModuleStatus;
  }
  public function setFirewallModuleStatus(Google_Service_Manager_FirewallModuleStatus $firewallModuleStatus)
  {
    $this->firewallModuleStatus = $firewallModuleStatus;
  }
  public function getFirewallModuleStatus()
  {
    return $this->firewallModuleStatus;
  }
  public function setHealthCheckModuleStatus(Google_Service_Manager_HealthCheckModuleStatus $healthCheckModuleStatus)
  {
    $this->healthCheckModuleStatus = $healthCheckModuleStatus;
  }
  public function getHealthCheckModuleStatus()
  {
    return $this->healthCheckModuleStatus;
  }
  public function setLbModuleStatus(Google_Service_Manager_LbModuleStatus $lbModuleStatus)
  {
    $this->lbModuleStatus = $lbModuleStatus;
  }
  public function getLbModuleStatus()
  {
    return $this->lbModuleStatus;
  }
  public function setNetworkModuleStatus(Google_Service_Manager_NetworkModuleStatus $networkModuleStatus)
  {
    $this->networkModuleStatus = $networkModuleStatus;
  }
  public function getNetworkModuleStatus()
  {
    return $this->networkModuleStatus;
  }
  public function setReplicaPoolModuleStatus(Google_Service_Manager_ReplicaPoolModuleStatus $replicaPoolModuleStatus)
  {
    $this->replicaPoolModuleStatus = $replicaPoolModuleStatus;
  }
  public function getReplicaPoolModuleStatus()
  {
    return $this->replicaPoolModuleStatus;
  }
  public function setState(Google_Service_Manager_DeployState $state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
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
