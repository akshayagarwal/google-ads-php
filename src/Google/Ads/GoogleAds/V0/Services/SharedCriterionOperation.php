<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/shared_criterion_service.proto

namespace Google\Ads\GoogleAds\V0\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation (create, remove) on an shared criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.services.SharedCriterionOperation</code>
 */
class SharedCriterionOperation extends \Google\Protobuf\Internal\Message
{
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V0\Resources\SharedCriterion $create
     *           Create operation: No resource name is expected for the new shared
     *           criterion.
     *     @type string $remove
     *           Remove operation: A resource name for the removed shared criterion is
     *           expected,
     *           in this format:
     *           `customers/{customer_id}/sharedCriteria/{shared_set_id}_{criterion_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Services\SharedCriterionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Create operation: No resource name is expected for the new shared
     * criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.SharedCriterion create = 1;</code>
     * @return \Google\Ads\GoogleAds\V0\Resources\SharedCriterion
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    /**
     * Create operation: No resource name is expected for the new shared
     * criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.SharedCriterion create = 1;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\SharedCriterion $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Resources\SharedCriterion::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Remove operation: A resource name for the removed shared criterion is
     * expected,
     * in this format:
     * `customers/{customer_id}/sharedCriteria/{shared_set_id}_{criterion_id}`
     *
     * Generated from protobuf field <code>string remove = 3;</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(3);
    }

    /**
     * Remove operation: A resource name for the removed shared criterion is
     * expected,
     * in this format:
     * `customers/{customer_id}/sharedCriteria/{shared_set_id}_{criterion_id}`
     *
     * Generated from protobuf field <code>string remove = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

