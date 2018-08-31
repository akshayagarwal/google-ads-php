<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/campaign_shared_set_error.proto

namespace Google\Ads\GoogleAds\V0\Errors\CampaignSharedSetErrorEnum;

/**
 * Enum describing possible campaign shared set errors.
 *
 * Protobuf type <code>google.ads.googleads.v0.errors.CampaignSharedSetErrorEnum.CampaignSharedSetError</code>
 */
class CampaignSharedSetError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The shared set belongs to another customer and permission isn't granted.
     *
     * Generated from protobuf enum <code>SHARED_SET_ACCESS_DENIED = 2;</code>
     */
    const SHARED_SET_ACCESS_DENIED = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CampaignSharedSetError::class, \Google\Ads\GoogleAds\V0\Errors\CampaignSharedSetErrorEnum_CampaignSharedSetError::class);

