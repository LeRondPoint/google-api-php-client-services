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

class Google_Service_CloudMonitoring_MetricDescriptor extends \GoogleApi\Google_Collection
{
  protected $collection_key = 'labels';
  public $description;
  protected $labelsType = '\GoogleApiServices\Google_Service_CloudMonitoring_MetricDescriptorLabelDescriptor';
  protected $labelsDataType = 'array';
  public $name;
  public $project;
  protected $typeDescriptorType = '\GoogleApiServices\Google_Service_CloudMonitoring_MetricDescriptorTypeDescriptor';
  protected $typeDescriptorDataType = '';

  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProject($project)
  {
    $this->project = $project;
  }
  public function getProject()
  {
    return $this->project;
  }
  public function setTypeDescriptor(Google_Service_CloudMonitoring_MetricDescriptorTypeDescriptor $typeDescriptor)
  {
    $this->typeDescriptor = $typeDescriptor;
  }
  public function getTypeDescriptor()
  {
    return $this->typeDescriptor;
  }
}
