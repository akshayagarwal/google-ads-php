<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/criteria.proto

namespace Google\Ads\GoogleAds\V0\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A location criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.common.LocationInfo</code>
 */
class LocationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The geo target constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue geo_target_constant = 1;</code>
     */
    private $geo_target_constant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $geo_target_constant
     *           The geo target constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The geo target constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue geo_target_constant = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getGeoTargetConstant()
    {
        return $this->geo_target_constant;
    }

    /**
     * The geo target constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue geo_target_constant = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setGeoTargetConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->geo_target_constant = $var;

        return $this;
    }

}

