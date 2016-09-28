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

class Google_Service_Datastore_Filter extends \GoogleApi\Google_Model
{
  protected $compositeFilterType = 'Google_Service_Datastore_CompositeFilter';
  protected $compositeFilterDataType = '';
  protected $propertyFilterType = 'Google_Service_Datastore_PropertyFilter';
  protected $propertyFilterDataType = '';

  public function setCompositeFilter(Google_Service_Datastore_CompositeFilter $compositeFilter)
  {
    $this->compositeFilter = $compositeFilter;
  }
  public function getCompositeFilter()
  {
    return $this->compositeFilter;
  }
  public function setPropertyFilter(Google_Service_Datastore_PropertyFilter $propertyFilter)
  {
    $this->propertyFilter = $propertyFilter;
  }
  public function getPropertyFilter()
  {
    return $this->propertyFilter;
  }
}
