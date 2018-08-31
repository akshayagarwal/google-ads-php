<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V0\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Maximize Clicks opt-in recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.Recommendation.MaximizeClicksOptInRecommendation</code>
 */
class MaximizeClicksOptInRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * The recommended new budget amount.
     * Only set if the current budget is too high.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_amount_micros = 1;</code>
     */
    private $recommended_budget_amount_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $recommended_budget_amount_micros
     *           The recommended new budget amount.
     *           Only set if the current budget is too high.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * The recommended new budget amount.
     * Only set if the current budget is too high.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_amount_micros = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getRecommendedBudgetAmountMicros()
    {
        return $this->recommended_budget_amount_micros;
    }

    /**
     * The recommended new budget amount.
     * Only set if the current budget is too high.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_amount_micros = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setRecommendedBudgetAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->recommended_budget_amount_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MaximizeClicksOptInRecommendation::class, \Google\Ads\GoogleAds\V0\Resources\Recommendation_MaximizeClicksOptInRecommendation::class);

