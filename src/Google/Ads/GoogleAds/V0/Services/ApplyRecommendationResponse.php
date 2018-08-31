<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V0\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [RecommendationService.ApplyRecommendation][google.ads.googleads.v0.services.RecommendationService.ApplyRecommendation].
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.services.ApplyRecommendationResponse</code>
 */
class ApplyRecommendationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Results of operations to apply recommendations.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.ApplyRecommendationResult results = 1;</code>
     */
    private $results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V0\Services\ApplyRecommendationResult[]|\Google\Protobuf\Internal\RepeatedField $results
     *           Results of operations to apply recommendations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Results of operations to apply recommendations.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.ApplyRecommendationResult results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Results of operations to apply recommendations.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.ApplyRecommendationResult results = 1;</code>
     * @param \Google\Ads\GoogleAds\V0\Services\ApplyRecommendationResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V0\Services\ApplyRecommendationResult::class);
        $this->results = $arr;

        return $this;
    }

}

