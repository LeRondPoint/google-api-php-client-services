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

class Google_Service_ShoppingContent_Table extends \GoogleApi\Google_Collection
{
  protected $collection_key = 'rows';
  protected $columnHeadersType = '\GoogleApiServices\Google_Service_ShoppingContent_Headers';
  protected $columnHeadersDataType = '';
  public $name;
  protected $rowHeadersType = '\GoogleApiServices\Google_Service_ShoppingContent_Headers';
  protected $rowHeadersDataType = '';
  protected $rowsType = '\GoogleApiServices\Google_Service_ShoppingContent_Row';
  protected $rowsDataType = 'array';

  public function setColumnHeaders(Google_Service_ShoppingContent_Headers $columnHeaders)
  {
    $this->columnHeaders = $columnHeaders;
  }
  public function getColumnHeaders()
  {
    return $this->columnHeaders;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRowHeaders(Google_Service_ShoppingContent_Headers $rowHeaders)
  {
    $this->rowHeaders = $rowHeaders;
  }
  public function getRowHeaders()
  {
    return $this->rowHeaders;
  }
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  public function getRows()
  {
    return $this->rows;
  }
}
