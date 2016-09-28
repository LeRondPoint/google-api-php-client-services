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

class Google_Service_Sheets_BooleanRule extends \GoogleApi\Google_Model
{
  protected $conditionType = '\GoogleApiServices\Google_Service_Sheets_BooleanCondition';
  protected $conditionDataType = '';
  protected $formatType = '\GoogleApiServices\Google_Service_Sheets_CellFormat';
  protected $formatDataType = '';

  public function setCondition(Google_Service_Sheets_BooleanCondition $condition)
  {
    $this->condition = $condition;
  }
  public function getCondition()
  {
    return $this->condition;
  }
  public function setFormat(Google_Service_Sheets_CellFormat $format)
  {
    $this->format = $format;
  }
  public function getFormat()
  {
    return $this->format;
  }
}
