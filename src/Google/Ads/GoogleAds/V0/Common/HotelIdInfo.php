<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/criteria.proto

namespace Google\Ads\GoogleAds\V0\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Advertiser-specific hotel ID.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.common.HotelIdInfo</code>
 */
class HotelIdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * String value of the hotel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
     */
    private $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $value
     *           String value of the hotel ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * String value of the hotel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * String value of the hotel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->value = $var;

        return $this;
    }

}

