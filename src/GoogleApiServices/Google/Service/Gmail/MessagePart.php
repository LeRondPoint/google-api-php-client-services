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

class Google_Service_Gmail_MessagePart extends \GoogleApi\Google_Collection
{
  protected $collection_key = 'parts';
  protected $bodyType = '\GoogleApiServices\Google_Service_Gmail_MessagePartBody';
  protected $bodyDataType = '';
  public $filename;
  protected $headersType = '\GoogleApiServices\Google_Service_Gmail_MessagePartHeader';
  protected $headersDataType = 'array';
  public $mimeType;
  public $partId;
  protected $partsType = '\GoogleApiServices\Google_Service_Gmail_MessagePart';
  protected $partsDataType = 'array';

  public function setBody(Google_Service_Gmail_MessagePartBody $body)
  {
    $this->body = $body;
  }
  public function getBody()
  {
    return $this->body;
  }
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  public function getFilename()
  {
    return $this->filename;
  }
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  public function getHeaders()
  {
    return $this->headers;
  }
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  public function getMimeType()
  {
    return $this->mimeType;
  }
  public function setPartId($partId)
  {
    $this->partId = $partId;
  }
  public function getPartId()
  {
    return $this->partId;
  }
  public function setParts($parts)
  {
    $this->parts = $parts;
  }
  public function getParts()
  {
    return $this->parts;
  }
}
