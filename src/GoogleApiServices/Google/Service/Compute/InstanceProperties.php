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

class Google_Service_Compute_InstanceProperties extends \GoogleApi\Google_Collection
{
  protected $collection_key = 'serviceAccounts';
  public $canIpForward;
  public $description;
  protected $disksType = '\GoogleApiServices\Google_Service_Compute_AttachedDisk';
  protected $disksDataType = 'array';
  public $machineType;
  protected $metadataType = '\GoogleApiServices\Google_Service_Compute_Metadata';
  protected $metadataDataType = '';
  protected $networkInterfacesType = '\GoogleApiServices\Google_Service_Compute_NetworkInterface';
  protected $networkInterfacesDataType = 'array';
  protected $schedulingType = '\GoogleApiServices\Google_Service_Compute_Scheduling';
  protected $schedulingDataType = '';
  protected $serviceAccountsType = '\GoogleApiServices\Google_Service_Compute_ServiceAccount';
  protected $serviceAccountsDataType = 'array';
  protected $tagsType = '\GoogleApiServices\Google_Service_Compute_Tags';
  protected $tagsDataType = '';

  public function setCanIpForward($canIpForward)
  {
    $this->canIpForward = $canIpForward;
  }
  public function getCanIpForward()
  {
    return $this->canIpForward;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDisks($disks)
  {
    $this->disks = $disks;
  }
  public function getDisks()
  {
    return $this->disks;
  }
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  public function getMachineType()
  {
    return $this->machineType;
  }
  public function setMetadata(Google_Service_Compute_Metadata $metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setNetworkInterfaces($networkInterfaces)
  {
    $this->networkInterfaces = $networkInterfaces;
  }
  public function getNetworkInterfaces()
  {
    return $this->networkInterfaces;
  }
  public function setScheduling(Google_Service_Compute_Scheduling $scheduling)
  {
    $this->scheduling = $scheduling;
  }
  public function getScheduling()
  {
    return $this->scheduling;
  }
  public function setServiceAccounts($serviceAccounts)
  {
    $this->serviceAccounts = $serviceAccounts;
  }
  public function getServiceAccounts()
  {
    return $this->serviceAccounts;
  }
  public function setTags(Google_Service_Compute_Tags $tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
}
