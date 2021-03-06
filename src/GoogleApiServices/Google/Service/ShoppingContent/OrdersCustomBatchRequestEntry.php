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

class Google_Service_ShoppingContent_OrdersCustomBatchRequestEntry extends \GoogleApi\Google_Model
{
  public $batchId;
  protected $cancelType = '\GoogleApiServices\Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryCancel';
  protected $cancelDataType = '';
  protected $cancelLineItemType = '\GoogleApiServices\Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryCancelLineItem';
  protected $cancelLineItemDataType = '';
  public $merchantId;
  public $merchantOrderId;
  public $method;
  public $operationId;
  public $orderId;
  protected $refundType = '\GoogleApiServices\Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryRefund';
  protected $refundDataType = '';
  protected $returnLineItemType = '\GoogleApiServices\Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryReturnLineItem';
  protected $returnLineItemDataType = '';
  protected $shipLineItemsType = '\GoogleApiServices\Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryShipLineItems';
  protected $shipLineItemsDataType = '';
  protected $updateShipmentType = '\GoogleApiServices\Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryUpdateShipment';
  protected $updateShipmentDataType = '';

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  public function getBatchId()
  {
    return $this->batchId;
  }
  public function setCancel(Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryCancel $cancel)
  {
    $this->cancel = $cancel;
  }
  public function getCancel()
  {
    return $this->cancel;
  }
  public function setCancelLineItem(Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryCancelLineItem $cancelLineItem)
  {
    $this->cancelLineItem = $cancelLineItem;
  }
  public function getCancelLineItem()
  {
    return $this->cancelLineItem;
  }
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  public function setMerchantOrderId($merchantOrderId)
  {
    $this->merchantOrderId = $merchantOrderId;
  }
  public function getMerchantOrderId()
  {
    return $this->merchantOrderId;
  }
  public function setMethod($method)
  {
    $this->method = $method;
  }
  public function getMethod()
  {
    return $this->method;
  }
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  public function getOperationId()
  {
    return $this->operationId;
  }
  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }
  public function getOrderId()
  {
    return $this->orderId;
  }
  public function setRefund(Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryRefund $refund)
  {
    $this->refund = $refund;
  }
  public function getRefund()
  {
    return $this->refund;
  }
  public function setReturnLineItem(Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryReturnLineItem $returnLineItem)
  {
    $this->returnLineItem = $returnLineItem;
  }
  public function getReturnLineItem()
  {
    return $this->returnLineItem;
  }
  public function setShipLineItems(Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryShipLineItems $shipLineItems)
  {
    $this->shipLineItems = $shipLineItems;
  }
  public function getShipLineItems()
  {
    return $this->shipLineItems;
  }
  public function setUpdateShipment(Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryUpdateShipment $updateShipment)
  {
    $this->updateShipment = $updateShipment;
  }
  public function getUpdateShipment()
  {
    return $this->updateShipment;
  }
}
