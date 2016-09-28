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

class Google_Service_Drive_DriveFile extends \GoogleApi\Google_Collection
{
  protected $collection_key = 'spaces';
  public $appProperties;
  protected $capabilitiesType = 'Google_Service_Drive_DriveFileCapabilities';
  protected $capabilitiesDataType = '';
  protected $contentHintsType = 'Google_Service_Drive_DriveFileContentHints';
  protected $contentHintsDataType = '';
  public $createdTime;
  public $description;
  public $explicitlyTrashed;
  public $fileExtension;
  public $folderColorRgb;
  public $fullFileExtension;
  public $headRevisionId;
  public $iconLink;
  public $id;
  protected $imageMediaMetadataType = 'Google_Service_Drive_DriveFileImageMediaMetadata';
  protected $imageMediaMetadataDataType = '';
  public $isAppAuthorized;
  public $kind;
  protected $lastModifyingUserType = 'Google_Service_Drive_User';
  protected $lastModifyingUserDataType = '';
  public $md5Checksum;
  public $mimeType;
  public $modifiedByMeTime;
  public $modifiedTime;
  public $name;
  public $originalFilename;
  public $ownedByMe;
  protected $ownersType = 'Google_Service_Drive_User';
  protected $ownersDataType = 'array';
  public $parents;
  protected $permissionsType = 'Google_Service_Drive_Permission';
  protected $permissionsDataType = 'array';
  public $properties;
  public $quotaBytesUsed;
  public $shared;
  public $sharedWithMeTime;
  protected $sharingUserType = 'Google_Service_Drive_User';
  protected $sharingUserDataType = '';
  public $size;
  public $spaces;
  public $starred;
  public $thumbnailLink;
  public $trashed;
  public $version;
  protected $videoMediaMetadataType = 'Google_Service_Drive_DriveFileVideoMediaMetadata';
  protected $videoMediaMetadataDataType = '';
  public $viewedByMe;
  public $viewedByMeTime;
  public $viewersCanCopyContent;
  public $webContentLink;
  public $webViewLink;
  public $writersCanShare;

  public function setAppProperties($appProperties)
  {
    $this->appProperties = $appProperties;
  }
  public function getAppProperties()
  {
    return $this->appProperties;
  }
  public function setCapabilities(Google_Service_Drive_DriveFileCapabilities $capabilities)
  {
    $this->capabilities = $capabilities;
  }
  public function getCapabilities()
  {
    return $this->capabilities;
  }
  public function setContentHints(Google_Service_Drive_DriveFileContentHints $contentHints)
  {
    $this->contentHints = $contentHints;
  }
  public function getContentHints()
  {
    return $this->contentHints;
  }
  public function setCreatedTime($createdTime)
  {
    $this->createdTime = $createdTime;
  }
  public function getCreatedTime()
  {
    return $this->createdTime;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setExplicitlyTrashed($explicitlyTrashed)
  {
    $this->explicitlyTrashed = $explicitlyTrashed;
  }
  public function getExplicitlyTrashed()
  {
    return $this->explicitlyTrashed;
  }
  public function setFileExtension($fileExtension)
  {
    $this->fileExtension = $fileExtension;
  }
  public function getFileExtension()
  {
    return $this->fileExtension;
  }
  public function setFolderColorRgb($folderColorRgb)
  {
    $this->folderColorRgb = $folderColorRgb;
  }
  public function getFolderColorRgb()
  {
    return $this->folderColorRgb;
  }
  public function setFullFileExtension($fullFileExtension)
  {
    $this->fullFileExtension = $fullFileExtension;
  }
  public function getFullFileExtension()
  {
    return $this->fullFileExtension;
  }
  public function setHeadRevisionId($headRevisionId)
  {
    $this->headRevisionId = $headRevisionId;
  }
  public function getHeadRevisionId()
  {
    return $this->headRevisionId;
  }
  public function setIconLink($iconLink)
  {
    $this->iconLink = $iconLink;
  }
  public function getIconLink()
  {
    return $this->iconLink;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageMediaMetadata(Google_Service_Drive_DriveFileImageMediaMetadata $imageMediaMetadata)
  {
    $this->imageMediaMetadata = $imageMediaMetadata;
  }
  public function getImageMediaMetadata()
  {
    return $this->imageMediaMetadata;
  }
  public function setIsAppAuthorized($isAppAuthorized)
  {
    $this->isAppAuthorized = $isAppAuthorized;
  }
  public function getIsAppAuthorized()
  {
    return $this->isAppAuthorized;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLastModifyingUser(Google_Service_Drive_User $lastModifyingUser)
  {
    $this->lastModifyingUser = $lastModifyingUser;
  }
  public function getLastModifyingUser()
  {
    return $this->lastModifyingUser;
  }
  public function setMd5Checksum($md5Checksum)
  {
    $this->md5Checksum = $md5Checksum;
  }
  public function getMd5Checksum()
  {
    return $this->md5Checksum;
  }
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  public function getMimeType()
  {
    return $this->mimeType;
  }
  public function setModifiedByMeTime($modifiedByMeTime)
  {
    $this->modifiedByMeTime = $modifiedByMeTime;
  }
  public function getModifiedByMeTime()
  {
    return $this->modifiedByMeTime;
  }
  public function setModifiedTime($modifiedTime)
  {
    $this->modifiedTime = $modifiedTime;
  }
  public function getModifiedTime()
  {
    return $this->modifiedTime;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOriginalFilename($originalFilename)
  {
    $this->originalFilename = $originalFilename;
  }
  public function getOriginalFilename()
  {
    return $this->originalFilename;
  }
  public function setOwnedByMe($ownedByMe)
  {
    $this->ownedByMe = $ownedByMe;
  }
  public function getOwnedByMe()
  {
    return $this->ownedByMe;
  }
  public function setOwners($owners)
  {
    $this->owners = $owners;
  }
  public function getOwners()
  {
    return $this->owners;
  }
  public function setParents($parents)
  {
    $this->parents = $parents;
  }
  public function getParents()
  {
    return $this->parents;
  }
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  public function getPermissions()
  {
    return $this->permissions;
  }
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  public function getProperties()
  {
    return $this->properties;
  }
  public function setQuotaBytesUsed($quotaBytesUsed)
  {
    $this->quotaBytesUsed = $quotaBytesUsed;
  }
  public function getQuotaBytesUsed()
  {
    return $this->quotaBytesUsed;
  }
  public function setShared($shared)
  {
    $this->shared = $shared;
  }
  public function getShared()
  {
    return $this->shared;
  }
  public function setSharedWithMeTime($sharedWithMeTime)
  {
    $this->sharedWithMeTime = $sharedWithMeTime;
  }
  public function getSharedWithMeTime()
  {
    return $this->sharedWithMeTime;
  }
  public function setSharingUser(Google_Service_Drive_User $sharingUser)
  {
    $this->sharingUser = $sharingUser;
  }
  public function getSharingUser()
  {
    return $this->sharingUser;
  }
  public function setSize($size)
  {
    $this->size = $size;
  }
  public function getSize()
  {
    return $this->size;
  }
  public function setSpaces($spaces)
  {
    $this->spaces = $spaces;
  }
  public function getSpaces()
  {
    return $this->spaces;
  }
  public function setStarred($starred)
  {
    $this->starred = $starred;
  }
  public function getStarred()
  {
    return $this->starred;
  }
  public function setThumbnailLink($thumbnailLink)
  {
    $this->thumbnailLink = $thumbnailLink;
  }
  public function getThumbnailLink()
  {
    return $this->thumbnailLink;
  }
  public function setTrashed($trashed)
  {
    $this->trashed = $trashed;
  }
  public function getTrashed()
  {
    return $this->trashed;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setVideoMediaMetadata(Google_Service_Drive_DriveFileVideoMediaMetadata $videoMediaMetadata)
  {
    $this->videoMediaMetadata = $videoMediaMetadata;
  }
  public function getVideoMediaMetadata()
  {
    return $this->videoMediaMetadata;
  }
  public function setViewedByMe($viewedByMe)
  {
    $this->viewedByMe = $viewedByMe;
  }
  public function getViewedByMe()
  {
    return $this->viewedByMe;
  }
  public function setViewedByMeTime($viewedByMeTime)
  {
    $this->viewedByMeTime = $viewedByMeTime;
  }
  public function getViewedByMeTime()
  {
    return $this->viewedByMeTime;
  }
  public function setViewersCanCopyContent($viewersCanCopyContent)
  {
    $this->viewersCanCopyContent = $viewersCanCopyContent;
  }
  public function getViewersCanCopyContent()
  {
    return $this->viewersCanCopyContent;
  }
  public function setWebContentLink($webContentLink)
  {
    $this->webContentLink = $webContentLink;
  }
  public function getWebContentLink()
  {
    return $this->webContentLink;
  }
  public function setWebViewLink($webViewLink)
  {
    $this->webViewLink = $webViewLink;
  }
  public function getWebViewLink()
  {
    return $this->webViewLink;
  }
  public function setWritersCanShare($writersCanShare)
  {
    $this->writersCanShare = $writersCanShare;
  }
  public function getWritersCanShare()
  {
    return $this->writersCanShare;
  }
}