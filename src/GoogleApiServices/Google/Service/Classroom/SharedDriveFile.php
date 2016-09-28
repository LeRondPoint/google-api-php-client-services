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

class Google_Service_Classroom_SharedDriveFile extends \GoogleApi\Google_Model
{
  protected $driveFileType = 'Google_Service_Classroom_DriveFile';
  protected $driveFileDataType = '';
  public $shareMode;

  public function setDriveFile(Google_Service_Classroom_DriveFile $driveFile)
  {
    $this->driveFile = $driveFile;
  }
  public function getDriveFile()
  {
    return $this->driveFile;
  }
  public function setShareMode($shareMode)
  {
    $this->shareMode = $shareMode;
  }
  public function getShareMode()
  {
    return $this->shareMode;
  }
}