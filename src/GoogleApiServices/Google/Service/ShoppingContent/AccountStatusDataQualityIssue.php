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

class Google_Service_ShoppingContent_AccountStatusDataQualityIssue extends \GoogleApi\Google_Collection
{
  protected $collection_key = 'exampleItems';
  public $country;
  public $displayedValue;
  protected $exampleItemsType = '\GoogleApiServices\Google_Service_ShoppingContent_AccountStatusExampleItem';
  protected $exampleItemsDataType = 'array';
  public $id;
  public $lastChecked;
  public $numItems;
  public $severity;
  public $submittedValue;

  public function setCountry($country)
  {
    $this->country = $country;
  }
  public function getCountry()
  {
    return $this->country;
  }
  public function setDisplayedValue($displayedValue)
  {
    $this->displayedValue = $displayedValue;
  }
  public function getDisplayedValue()
  {
    return $this->displayedValue;
  }
  public function setExampleItems($exampleItems)
  {
    $this->exampleItems = $exampleItems;
  }
  public function getExampleItems()
  {
    return $this->exampleItems;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLastChecked($lastChecked)
  {
    $this->lastChecked = $lastChecked;
  }
  public function getLastChecked()
  {
    return $this->lastChecked;
  }
  public function setNumItems($numItems)
  {
    $this->numItems = $numItems;
  }
  public function getNumItems()
  {
    return $this->numItems;
  }
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  public function getSeverity()
  {
    return $this->severity;
  }
  public function setSubmittedValue($submittedValue)
  {
    $this->submittedValue = $submittedValue;
  }
  public function getSubmittedValue()
  {
    return $this->submittedValue;
  }
}
