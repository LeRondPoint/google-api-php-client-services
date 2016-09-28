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

class Google_Service_Games_PlayerScoreSubmissionList extends \GoogleApi\Google_Collection
{
  protected $collection_key = 'scores';
  public $kind;
  protected $scoresType = '\GoogleApiServices\Google_Service_Games_ScoreSubmission';
  protected $scoresDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setScores($scores)
  {
    $this->scores = $scores;
  }
  public function getScores()
  {
    return $this->scores;
  }
}
