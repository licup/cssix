<?php
/**
 * Copyright 2007 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
# Generated by the protocol buffer compiler. DO NOT EDIT!
# source: google/appengine/api/mail_service.proto

namespace dummy {
  if (!defined('GOOGLE_APPENGINE_CLASSLOADER')) {
    require_once 'google/appengine/runtime/proto/ProtocolMessage.php';
    require_once 'google/appengine/api/api_base_pb.php';
  }
}
namespace google\appengine\MailServiceError {
  class ErrorCode {
    const OK = 0;
    const INTERNAL_ERROR = 1;
    const BAD_REQUEST = 2;
    const UNAUTHORIZED_SENDER = 3;
    const INVALID_ATTACHMENT_TYPE = 4;
    const INVALID_HEADER_NAME = 5;
    const INVALID_CONTENT_ID = 6;
  }
}
namespace google\appengine {
  class MailServiceError extends \google\net\ProtocolMessage {
    public function clear() {
    }
    public function byteSizePartial() {
      $res = 0;
      return $res;
    }
    public function outputPartial($out) {
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      return $res;
    }
  }
}
namespace google\appengine {
  class MailAttachment extends \google\net\ProtocolMessage {
    public function getFilename() {
      if (!isset($this->FileName)) {
        return '';
      }
      return $this->FileName;
    }
    public function setFilename($val) {
      $this->FileName = $val;
      return $this;
    }
    public function clearFilename() {
      unset($this->FileName);
      return $this;
    }
    public function hasFilename() {
      return isset($this->FileName);
    }
    public function getData() {
      if (!isset($this->Data)) {
        return '';
      }
      return $this->Data;
    }
    public function setData($val) {
      $this->Data = $val;
      return $this;
    }
    public function clearData() {
      unset($this->Data);
      return $this;
    }
    public function hasData() {
      return isset($this->Data);
    }
    public function getContentid() {
      if (!isset($this->ContentID)) {
        return '';
      }
      return $this->ContentID;
    }
    public function setContentid($val) {
      $this->ContentID = $val;
      return $this;
    }
    public function clearContentid() {
      unset($this->ContentID);
      return $this;
    }
    public function hasContentid() {
      return isset($this->ContentID);
    }
    public function getContentidSet() {
      if (!isset($this->ContentID_set)) {
        return false;
      }
      return $this->ContentID_set;
    }
    public function setContentidSet($val) {
      $this->ContentID_set = $val;
      return $this;
    }
    public function clearContentidSet() {
      unset($this->ContentID_set);
      return $this;
    }
    public function hasContentidSet() {
      return isset($this->ContentID_set);
    }
    public function clear() {
      $this->clearFilename();
      $this->clearData();
      $this->clearContentid();
      $this->clearContentidSet();
    }
    public function byteSizePartial() {
      $res = 0;
      if (isset($this->FileName)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->FileName));
      }
      if (isset($this->Data)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->Data));
      }
      if (isset($this->ContentID)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->ContentID));
      }
      if (isset($this->ContentID_set)) {
        $res += 2;
      }
      return $res;
    }
    public function outputPartial($out) {
      if (isset($this->FileName)) {
        $out->putVarInt32(10);
        $out->putPrefixedString($this->FileName);
      }
      if (isset($this->Data)) {
        $out->putVarInt32(18);
        $out->putPrefixedString($this->Data);
      }
      if (isset($this->ContentID)) {
        $out->putVarInt32(26);
        $out->putPrefixedString($this->ContentID);
      }
      if (isset($this->ContentID_set)) {
        $out->putVarInt32(104);
        $out->putBoolean($this->ContentID_set);
      }
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 10:
            $length = $d->getVarInt32();
            $this->setFilename(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 18:
            $length = $d->getVarInt32();
            $this->setData(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 26:
            $length = $d->getVarInt32();
            $this->setContentid(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 104:
            $this->setContentidSet($d->getBoolean());
            break;
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      if (!isset($this->FileName)) return 'FileName';
      if (!isset($this->Data)) return 'Data';
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
      if ($x->hasFilename()) {
        $this->setFilename($x->getFilename());
      }
      if ($x->hasData()) {
        $this->setData($x->getData());
      }
      if ($x->hasContentid()) {
        $this->setContentid($x->getContentid());
      }
      if ($x->hasContentidSet()) {
        $this->setContentidSet($x->getContentidSet());
      }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      if (isset($this->FileName) !== isset($x->FileName)) return false;
      if (isset($this->FileName) && $this->FileName !== $x->FileName) return false;
      if (isset($this->Data) !== isset($x->Data)) return false;
      if (isset($this->Data) && $this->Data !== $x->Data) return false;
      if (isset($this->ContentID) !== isset($x->ContentID)) return false;
      if (isset($this->ContentID) && $this->ContentID !== $x->ContentID) return false;
      if (isset($this->ContentID_set) !== isset($x->ContentID_set)) return false;
      if (isset($this->ContentID_set) && $this->ContentID_set !== $x->ContentID_set) return false;
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      if (isset($this->FileName)) {
        $res .= $prefix . "FileName: " . $this->debugFormatString($this->FileName) . "\n";
      }
      if (isset($this->Data)) {
        $res .= $prefix . "Data: " . $this->debugFormatString($this->Data) . "\n";
      }
      if (isset($this->ContentID)) {
        $res .= $prefix . "ContentID: " . $this->debugFormatString($this->ContentID) . "\n";
      }
      if (isset($this->ContentID_set)) {
        $res .= $prefix . "ContentID_set: " . $this->debugFormatBool($this->ContentID_set) . "\n";
      }
      return $res;
    }
  }
}
namespace google\appengine {
  class MailHeader extends \google\net\ProtocolMessage {
    public function getName() {
      if (!isset($this->name)) {
        return '';
      }
      return $this->name;
    }
    public function setName($val) {
      $this->name = $val;
      return $this;
    }
    public function clearName() {
      unset($this->name);
      return $this;
    }
    public function hasName() {
      return isset($this->name);
    }
    public function getValue() {
      if (!isset($this->value)) {
        return '';
      }
      return $this->value;
    }
    public function setValue($val) {
      $this->value = $val;
      return $this;
    }
    public function clearValue() {
      unset($this->value);
      return $this;
    }
    public function hasValue() {
      return isset($this->value);
    }
    public function clear() {
      $this->clearName();
      $this->clearValue();
    }
    public function byteSizePartial() {
      $res = 0;
      if (isset($this->name)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->name));
      }
      if (isset($this->value)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->value));
      }
      return $res;
    }
    public function outputPartial($out) {
      if (isset($this->name)) {
        $out->putVarInt32(10);
        $out->putPrefixedString($this->name);
      }
      if (isset($this->value)) {
        $out->putVarInt32(18);
        $out->putPrefixedString($this->value);
      }
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 10:
            $length = $d->getVarInt32();
            $this->setName(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 18:
            $length = $d->getVarInt32();
            $this->setValue(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      if (!isset($this->name)) return 'name';
      if (!isset($this->value)) return 'value';
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
      if ($x->hasName()) {
        $this->setName($x->getName());
      }
      if ($x->hasValue()) {
        $this->setValue($x->getValue());
      }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      if (isset($this->name) !== isset($x->name)) return false;
      if (isset($this->name) && $this->name !== $x->name) return false;
      if (isset($this->value) !== isset($x->value)) return false;
      if (isset($this->value) && $this->value !== $x->value) return false;
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      if (isset($this->name)) {
        $res .= $prefix . "name: " . $this->debugFormatString($this->name) . "\n";
      }
      if (isset($this->value)) {
        $res .= $prefix . "value: " . $this->debugFormatString($this->value) . "\n";
      }
      return $res;
    }
  }
}
namespace google\appengine {
  class MailMessage extends \google\net\ProtocolMessage {
    private $To = array();
    private $Cc = array();
    private $Bcc = array();
    private $Attachment = array();
    private $Header = array();
    public function getSender() {
      if (!isset($this->Sender)) {
        return '';
      }
      return $this->Sender;
    }
    public function setSender($val) {
      $this->Sender = $val;
      return $this;
    }
    public function clearSender() {
      unset($this->Sender);
      return $this;
    }
    public function hasSender() {
      return isset($this->Sender);
    }
    public function getReplyto() {
      if (!isset($this->ReplyTo)) {
        return '';
      }
      return $this->ReplyTo;
    }
    public function setReplyto($val) {
      $this->ReplyTo = $val;
      return $this;
    }
    public function clearReplyto() {
      unset($this->ReplyTo);
      return $this;
    }
    public function hasReplyto() {
      return isset($this->ReplyTo);
    }
    public function getToSize() {
      return sizeof($this->To);
    }
    public function getToList() {
      return $this->To;
    }
    public function getTo($idx) {
      return $this->To[$idx];
    }
    public function setTo($idx, $val) {
      $this->To[$idx] = $val;
      return $this;
    }
    public function addTo($val) {
      $this->To[] = $val;
      return $this;
    }
    public function clearTo() {
      $this->To = array();
    }
    public function getCcSize() {
      return sizeof($this->Cc);
    }
    public function getCcList() {
      return $this->Cc;
    }
    public function getCc($idx) {
      return $this->Cc[$idx];
    }
    public function setCc($idx, $val) {
      $this->Cc[$idx] = $val;
      return $this;
    }
    public function addCc($val) {
      $this->Cc[] = $val;
      return $this;
    }
    public function clearCc() {
      $this->Cc = array();
    }
    public function getBccSize() {
      return sizeof($this->Bcc);
    }
    public function getBccList() {
      return $this->Bcc;
    }
    public function getBcc($idx) {
      return $this->Bcc[$idx];
    }
    public function setBcc($idx, $val) {
      $this->Bcc[$idx] = $val;
      return $this;
    }
    public function addBcc($val) {
      $this->Bcc[] = $val;
      return $this;
    }
    public function clearBcc() {
      $this->Bcc = array();
    }
    public function getSubject() {
      if (!isset($this->Subject)) {
        return '';
      }
      return $this->Subject;
    }
    public function setSubject($val) {
      $this->Subject = $val;
      return $this;
    }
    public function clearSubject() {
      unset($this->Subject);
      return $this;
    }
    public function hasSubject() {
      return isset($this->Subject);
    }
    public function getTextbody() {
      if (!isset($this->TextBody)) {
        return '';
      }
      return $this->TextBody;
    }
    public function setTextbody($val) {
      $this->TextBody = $val;
      return $this;
    }
    public function clearTextbody() {
      unset($this->TextBody);
      return $this;
    }
    public function hasTextbody() {
      return isset($this->TextBody);
    }
    public function getHtmlbody() {
      if (!isset($this->HtmlBody)) {
        return '';
      }
      return $this->HtmlBody;
    }
    public function setHtmlbody($val) {
      $this->HtmlBody = $val;
      return $this;
    }
    public function clearHtmlbody() {
      unset($this->HtmlBody);
      return $this;
    }
    public function hasHtmlbody() {
      return isset($this->HtmlBody);
    }
    public function getAttachmentSize() {
      return sizeof($this->Attachment);
    }
    public function getAttachmentList() {
      return $this->Attachment;
    }
    public function mutableAttachment($idx) {
      if (!isset($this->Attachment[$idx])) {
        $val = new \google\appengine\MailAttachment();
        $this->Attachment[$idx] = $val;
        return $val;
      }
      return $this->Attachment[$idx];
    }
    public function getAttachment($idx) {
      if (isset($this->Attachment[$idx])) {
        return $this->Attachment[$idx];
      }
      if ($idx >= end(array_keys($this->Attachment))) {
        throw new \OutOfRangeException('index out of range: ' + $idx);
      }
      return new \google\appengine\MailAttachment();
    }
    public function addAttachment() {
      $val = new \google\appengine\MailAttachment();
      $this->Attachment[] = $val;
      return $val;
    }
    public function clearAttachment() {
      $this->Attachment = array();
    }
    public function getHeaderSize() {
      return sizeof($this->Header);
    }
    public function getHeaderList() {
      return $this->Header;
    }
    public function mutableHeader($idx) {
      if (!isset($this->Header[$idx])) {
        $val = new \google\appengine\MailHeader();
        $this->Header[$idx] = $val;
        return $val;
      }
      return $this->Header[$idx];
    }
    public function getHeader($idx) {
      if (isset($this->Header[$idx])) {
        return $this->Header[$idx];
      }
      if ($idx >= end(array_keys($this->Header))) {
        throw new \OutOfRangeException('index out of range: ' + $idx);
      }
      return new \google\appengine\MailHeader();
    }
    public function addHeader() {
      $val = new \google\appengine\MailHeader();
      $this->Header[] = $val;
      return $val;
    }
    public function clearHeader() {
      $this->Header = array();
    }
    public function getAmphtmlbody() {
      if (!isset($this->AmpHtmlBody)) {
        return '';
      }
      return $this->AmpHtmlBody;
    }
    public function setAmphtmlbody($val) {
      $this->AmpHtmlBody = $val;
      return $this;
    }
    public function clearAmphtmlbody() {
      unset($this->AmpHtmlBody);
      return $this;
    }
    public function hasAmphtmlbody() {
      return isset($this->AmpHtmlBody);
    }
    public function clear() {
      $this->clearSender();
      $this->clearReplyto();
      $this->clearTo();
      $this->clearCc();
      $this->clearBcc();
      $this->clearSubject();
      $this->clearTextbody();
      $this->clearHtmlbody();
      $this->clearAttachment();
      $this->clearHeader();
      $this->clearAmphtmlbody();
    }
    public function byteSizePartial() {
      $res = 0;
      if (isset($this->Sender)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->Sender));
      }
      if (isset($this->ReplyTo)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->ReplyTo));
      }
      $this->checkProtoArray($this->To);
      $res += 1 * sizeof($this->To);
      foreach ($this->To as $value) {
        $res += $this->lengthString(strlen($value));
      }
      $this->checkProtoArray($this->Cc);
      $res += 1 * sizeof($this->Cc);
      foreach ($this->Cc as $value) {
        $res += $this->lengthString(strlen($value));
      }
      $this->checkProtoArray($this->Bcc);
      $res += 1 * sizeof($this->Bcc);
      foreach ($this->Bcc as $value) {
        $res += $this->lengthString(strlen($value));
      }
      if (isset($this->Subject)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->Subject));
      }
      if (isset($this->TextBody)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->TextBody));
      }
      if (isset($this->HtmlBody)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->HtmlBody));
      }
      $this->checkProtoArray($this->Attachment);
      $res += 1 * sizeof($this->Attachment);
      foreach ($this->Attachment as $value) {
        $res += $this->lengthString($value->byteSizePartial());
      }
      $this->checkProtoArray($this->Header);
      $res += 1 * sizeof($this->Header);
      foreach ($this->Header as $value) {
        $res += $this->lengthString($value->byteSizePartial());
      }
      if (isset($this->AmpHtmlBody)) {
        $res += 1;
        $res += $this->lengthString(strlen($this->AmpHtmlBody));
      }
      return $res;
    }
    public function outputPartial($out) {
      if (isset($this->Sender)) {
        $out->putVarInt32(10);
        $out->putPrefixedString($this->Sender);
      }
      if (isset($this->ReplyTo)) {
        $out->putVarInt32(18);
        $out->putPrefixedString($this->ReplyTo);
      }
      $this->checkProtoArray($this->To);
      foreach ($this->To as $value) {
        $out->putVarInt32(26);
        $out->putPrefixedString($value);
      }
      $this->checkProtoArray($this->Cc);
      foreach ($this->Cc as $value) {
        $out->putVarInt32(34);
        $out->putPrefixedString($value);
      }
      $this->checkProtoArray($this->Bcc);
      foreach ($this->Bcc as $value) {
        $out->putVarInt32(42);
        $out->putPrefixedString($value);
      }
      if (isset($this->Subject)) {
        $out->putVarInt32(50);
        $out->putPrefixedString($this->Subject);
      }
      if (isset($this->TextBody)) {
        $out->putVarInt32(58);
        $out->putPrefixedString($this->TextBody);
      }
      if (isset($this->HtmlBody)) {
        $out->putVarInt32(66);
        $out->putPrefixedString($this->HtmlBody);
      }
      $this->checkProtoArray($this->Attachment);
      foreach ($this->Attachment as $value) {
        $out->putVarInt32(74);
        $out->putVarInt32($value->byteSizePartial());
        $value->outputPartial($out);
      }
      $this->checkProtoArray($this->Header);
      foreach ($this->Header as $value) {
        $out->putVarInt32(82);
        $out->putVarInt32($value->byteSizePartial());
        $value->outputPartial($out);
      }
      if (isset($this->AmpHtmlBody)) {
        $out->putVarInt32(90);
        $out->putPrefixedString($this->AmpHtmlBody);
      }
    }
    public function tryMerge($d) {
      while($d->avail() > 0) {
        $tt = $d->getVarInt32();
        switch ($tt) {
          case 10:
            $length = $d->getVarInt32();
            $this->setSender(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 18:
            $length = $d->getVarInt32();
            $this->setReplyto(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 26:
            $length = $d->getVarInt32();
            $this->addTo(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 34:
            $length = $d->getVarInt32();
            $this->addCc(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 42:
            $length = $d->getVarInt32();
            $this->addBcc(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 50:
            $length = $d->getVarInt32();
            $this->setSubject(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 58:
            $length = $d->getVarInt32();
            $this->setTextbody(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 66:
            $length = $d->getVarInt32();
            $this->setHtmlbody(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 74:
            $length = $d->getVarInt32();
            $tmp = new \google\net\Decoder($d->buffer(), $d->pos(), $d->pos() + $length);
            $d->skip($length);
            $this->addAttachment()->tryMerge($tmp);
            break;
          case 82:
            $length = $d->getVarInt32();
            $tmp = new \google\net\Decoder($d->buffer(), $d->pos(), $d->pos() + $length);
            $d->skip($length);
            $this->addHeader()->tryMerge($tmp);
            break;
          case 90:
            $length = $d->getVarInt32();
            $this->setAmphtmlbody(substr($d->buffer(), $d->pos(), $length));
            $d->skip($length);
            break;
          case 0:
            throw new \google\net\ProtocolBufferDecodeError();
            break;
          default:
            $d->skipData($tt);
        }
      };
    }
    public function checkInitialized() {
      if (!isset($this->Sender)) return 'Sender';
      if (!isset($this->Subject)) return 'Subject';
      foreach ($this->Attachment as $value) {
        if (!$value->isInitialized()) return 'Attachment';
      }
      foreach ($this->Header as $value) {
        if (!$value->isInitialized()) return 'Header';
      }
      return null;
    }
    public function mergeFrom($x) {
      if ($x === $this) { throw new \IllegalArgumentException('Cannot copy message to itself'); }
      if ($x->hasSender()) {
        $this->setSender($x->getSender());
      }
      if ($x->hasReplyto()) {
        $this->setReplyto($x->getReplyto());
      }
      foreach ($x->getToList() as $v) {
        $this->addTo($v);
      }
      foreach ($x->getCcList() as $v) {
        $this->addCc($v);
      }
      foreach ($x->getBccList() as $v) {
        $this->addBcc($v);
      }
      if ($x->hasSubject()) {
        $this->setSubject($x->getSubject());
      }
      if ($x->hasTextbody()) {
        $this->setTextbody($x->getTextbody());
      }
      if ($x->hasHtmlbody()) {
        $this->setHtmlbody($x->getHtmlbody());
      }
      foreach ($x->getAttachmentList() as $v) {
        $this->addAttachment()->copyFrom($v);
      }
      foreach ($x->getHeaderList() as $v) {
        $this->addHeader()->copyFrom($v);
      }
      if ($x->hasAmphtmlbody()) {
        $this->setAmphtmlbody($x->getAmphtmlbody());
      }
    }
    public function equals($x) {
      if ($x === $this) { return true; }
      if (isset($this->Sender) !== isset($x->Sender)) return false;
      if (isset($this->Sender) && $this->Sender !== $x->Sender) return false;
      if (isset($this->ReplyTo) !== isset($x->ReplyTo)) return false;
      if (isset($this->ReplyTo) && $this->ReplyTo !== $x->ReplyTo) return false;
      if (sizeof($this->To) !== sizeof($x->To)) return false;
      foreach (array_map(null, $this->To, $x->To) as $v) {
        if ($v[0] !== $v[1]) return false;
      }
      if (sizeof($this->Cc) !== sizeof($x->Cc)) return false;
      foreach (array_map(null, $this->Cc, $x->Cc) as $v) {
        if ($v[0] !== $v[1]) return false;
      }
      if (sizeof($this->Bcc) !== sizeof($x->Bcc)) return false;
      foreach (array_map(null, $this->Bcc, $x->Bcc) as $v) {
        if ($v[0] !== $v[1]) return false;
      }
      if (isset($this->Subject) !== isset($x->Subject)) return false;
      if (isset($this->Subject) && $this->Subject !== $x->Subject) return false;
      if (isset($this->TextBody) !== isset($x->TextBody)) return false;
      if (isset($this->TextBody) && $this->TextBody !== $x->TextBody) return false;
      if (isset($this->HtmlBody) !== isset($x->HtmlBody)) return false;
      if (isset($this->HtmlBody) && $this->HtmlBody !== $x->HtmlBody) return false;
      if (sizeof($this->Attachment) !== sizeof($x->Attachment)) return false;
      foreach (array_map(null, $this->Attachment, $x->Attachment) as $v) {
        if (!$v[0]->equals($v[1])) return false;
      }
      if (sizeof($this->Header) !== sizeof($x->Header)) return false;
      foreach (array_map(null, $this->Header, $x->Header) as $v) {
        if (!$v[0]->equals($v[1])) return false;
      }
      if (isset($this->AmpHtmlBody) !== isset($x->AmpHtmlBody)) return false;
      if (isset($this->AmpHtmlBody) && $this->AmpHtmlBody !== $x->AmpHtmlBody) return false;
      return true;
    }
    public function shortDebugString($prefix = "") {
      $res = '';
      if (isset($this->Sender)) {
        $res .= $prefix . "Sender: " . $this->debugFormatString($this->Sender) . "\n";
      }
      if (isset($this->ReplyTo)) {
        $res .= $prefix . "ReplyTo: " . $this->debugFormatString($this->ReplyTo) . "\n";
      }
      foreach ($this->To as $value) {
        $res .= $prefix . "To: " . $this->debugFormatString($value) . "\n";
      }
      foreach ($this->Cc as $value) {
        $res .= $prefix . "Cc: " . $this->debugFormatString($value) . "\n";
      }
      foreach ($this->Bcc as $value) {
        $res .= $prefix . "Bcc: " . $this->debugFormatString($value) . "\n";
      }
      if (isset($this->Subject)) {
        $res .= $prefix . "Subject: " . $this->debugFormatString($this->Subject) . "\n";
      }
      if (isset($this->TextBody)) {
        $res .= $prefix . "TextBody: " . $this->debugFormatString($this->TextBody) . "\n";
      }
      if (isset($this->HtmlBody)) {
        $res .= $prefix . "HtmlBody: " . $this->debugFormatString($this->HtmlBody) . "\n";
      }
      foreach ($this->Attachment as $value) {
        $res .= $prefix . "Attachment <\n" . $value->shortDebugString($prefix . "  ") . $prefix . ">\n";
      }
      foreach ($this->Header as $value) {
        $res .= $prefix . "Header <\n" . $value->shortDebugString($prefix . "  ") . $prefix . ">\n";
      }
      if (isset($this->AmpHtmlBody)) {
        $res .= $prefix . "AmpHtmlBody: " . $this->debugFormatString($this->AmpHtmlBody) . "\n";
      }
      return $res;
    }
  }
}
