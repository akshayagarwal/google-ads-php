<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/campaign_error.proto

namespace Google\Ads\GoogleAds\V0\Errors\CampaignErrorEnum;

/**
 * Enum describing possible campaign errors.
 *
 * Protobuf type <code>google.ads.googleads.v0.errors.CampaignErrorEnum.CampaignError</code>
 */
class CampaignError
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
     * Cannot target content network.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_CONTENT_NETWORK = 3;</code>
     */
    const CANNOT_TARGET_CONTENT_NETWORK = 3;
    /**
     * Cannot target search network.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_SEARCH_NETWORK = 4;</code>
     */
    const CANNOT_TARGET_SEARCH_NETWORK = 4;
    /**
     * Cannot cover search network without google search network.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_SEARCH_NETWORK_WITHOUT_GOOGLE_SEARCH = 5;</code>
     */
    const CANNOT_TARGET_SEARCH_NETWORK_WITHOUT_GOOGLE_SEARCH = 5;
    /**
     * Cannot target Google Search network for a CPM campaign.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN = 6;</code>
     */
    const CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN = 6;
    /**
     * Must target at least one network.
     *
     * Generated from protobuf enum <code>CAMPAIGN_MUST_TARGET_AT_LEAST_ONE_NETWORK = 7;</code>
     */
    const CAMPAIGN_MUST_TARGET_AT_LEAST_ONE_NETWORK = 7;
    /**
     * Only some Google partners are allowed to target partner search network.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_PARTNER_SEARCH_NETWORK = 8;</code>
     */
    const CANNOT_TARGET_PARTNER_SEARCH_NETWORK = 8;
    /**
     * Cannot target content network only as campaign has criteria-level bidding
     * strategy.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CRITERIA_LEVEL_BIDDING_STRATEGY = 9;</code>
     */
    const CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CRITERIA_LEVEL_BIDDING_STRATEGY = 9;
    /**
     * Cannot modify the start or end date such that the campaign duration would
     * not contain the durations of all runnable trials.
     *
     * Generated from protobuf enum <code>CAMPAIGN_DURATION_MUST_CONTAIN_ALL_RUNNABLE_TRIALS = 10;</code>
     */
    const CAMPAIGN_DURATION_MUST_CONTAIN_ALL_RUNNABLE_TRIALS = 10;
    /**
     * Cannot modify dates, budget or campaign name of a trial campaign.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_FOR_TRIAL_CAMPAIGN = 11;</code>
     */
    const CANNOT_MODIFY_FOR_TRIAL_CAMPAIGN = 11;
    /**
     * Trying to modify the name of an active or paused campaign, where the name
     * is already assigned to another active or paused campaign.
     *
     * Generated from protobuf enum <code>DUPLICATE_CAMPAIGN_NAME = 12;</code>
     */
    const DUPLICATE_CAMPAIGN_NAME = 12;
    /**
     * Two fields are in conflicting modes.
     *
     * Generated from protobuf enum <code>INCOMPATIBLE_CAMPAIGN_FIELD = 13;</code>
     */
    const INCOMPATIBLE_CAMPAIGN_FIELD = 13;
    /**
     * Campaign name cannot be used.
     *
     * Generated from protobuf enum <code>INVALID_CAMPAIGN_NAME = 14;</code>
     */
    const INVALID_CAMPAIGN_NAME = 14;
    /**
     * Given status is invalid.
     *
     * Generated from protobuf enum <code>INVALID_AD_SERVING_OPTIMIZATION_STATUS = 15;</code>
     */
    const INVALID_AD_SERVING_OPTIMIZATION_STATUS = 15;
    /**
     * Error in the campaign level tracking url.
     *
     * Generated from protobuf enum <code>INVALID_TRACKING_URL = 16;</code>
     */
    const INVALID_TRACKING_URL = 16;
    /**
     * Cannot set both tracking url template and tracking setting. An user has
     * to clear legacy tracking setting in order to add tracking url template.
     *
     * Generated from protobuf enum <code>CANNOT_SET_BOTH_TRACKING_URL_TEMPLATE_AND_TRACKING_SETTING = 17;</code>
     */
    const CANNOT_SET_BOTH_TRACKING_URL_TEMPLATE_AND_TRACKING_SETTING = 17;
    /**
     * The maximum number of impressions for Frequency Cap should be an integer
     * greater than 0.
     *
     * Generated from protobuf enum <code>MAX_IMPRESSIONS_NOT_IN_RANGE = 18;</code>
     */
    const MAX_IMPRESSIONS_NOT_IN_RANGE = 18;
    /**
     * Only the Day, Week and Month time units are supported.
     *
     * Generated from protobuf enum <code>TIME_UNIT_NOT_SUPPORTED = 19;</code>
     */
    const TIME_UNIT_NOT_SUPPORTED = 19;
    /**
     * Operation not allowed on a campaign whose serving status has ended
     *
     * Generated from protobuf enum <code>INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED = 20;</code>
     */
    const INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED = 20;
    /**
     * This budget is exclusively linked to a Campaign that is using experiments
     * so it cannot be shared.
     *
     * Generated from protobuf enum <code>BUDGET_CANNOT_BE_SHARED = 21;</code>
     */
    const BUDGET_CANNOT_BE_SHARED = 21;
    /**
     * Campaigns using experiments cannot use a shared budget.
     *
     * Generated from protobuf enum <code>CAMPAIGN_CANNOT_USE_SHARED_BUDGET = 22;</code>
     */
    const CAMPAIGN_CANNOT_USE_SHARED_BUDGET = 22;
    /**
     * A different budget cannot be assigned to a campaign when there are
     * running or scheduled trials.
     *
     * Generated from protobuf enum <code>CANNOT_CHANGE_BUDGET_ON_CAMPAIGN_WITH_TRIALS = 23;</code>
     */
    const CANNOT_CHANGE_BUDGET_ON_CAMPAIGN_WITH_TRIALS = 23;
    /**
     * No link found between the campaign and the label.
     *
     * Generated from protobuf enum <code>CAMPAIGN_LABEL_DOES_NOT_EXIST = 24;</code>
     */
    const CAMPAIGN_LABEL_DOES_NOT_EXIST = 24;
    /**
     * The label has already been attached to the campaign.
     *
     * Generated from protobuf enum <code>CAMPAIGN_LABEL_ALREADY_EXISTS = 25;</code>
     */
    const CAMPAIGN_LABEL_ALREADY_EXISTS = 25;
    /**
     * A ShoppingSetting was not found when creating a shopping campaign.
     *
     * Generated from protobuf enum <code>MISSING_SHOPPING_SETTING = 26;</code>
     */
    const MISSING_SHOPPING_SETTING = 26;
    /**
     * The country in shopping setting is not an allowed country.
     *
     * Generated from protobuf enum <code>INVALID_SHOPPING_SALES_COUNTRY = 27;</code>
     */
    const INVALID_SHOPPING_SALES_COUNTRY = 27;
    /**
     * A Campaign with channel sub type UNIVERSAL_APP_CAMPAIGN must have a
     * UniversalAppCampaignSetting specified.
     *
     * Generated from protobuf enum <code>MISSING_UNIVERSAL_APP_CAMPAIGN_SETTING = 30;</code>
     */
    const MISSING_UNIVERSAL_APP_CAMPAIGN_SETTING = 30;
    /**
     * The requested channel type is not available according to the customer's
     * account setting.
     *
     * Generated from protobuf enum <code>ADVERTISING_CHANNEL_TYPE_NOT_AVAILABLE_FOR_ACCOUNT_TYPE = 31;</code>
     */
    const ADVERTISING_CHANNEL_TYPE_NOT_AVAILABLE_FOR_ACCOUNT_TYPE = 31;
    /**
     * The AdvertisingChannelSubType is not a valid subtype of the primary
     * channel type.
     *
     * Generated from protobuf enum <code>INVALID_ADVERTISING_CHANNEL_SUB_TYPE = 32;</code>
     */
    const INVALID_ADVERTISING_CHANNEL_SUB_TYPE = 32;
    /**
     * At least one conversion must be selected.
     *
     * Generated from protobuf enum <code>AT_LEAST_ONE_CONVERSION_MUST_BE_SELECTED = 33;</code>
     */
    const AT_LEAST_ONE_CONVERSION_MUST_BE_SELECTED = 33;
    /**
     * Setting ad rotation mode for a campaign is not allowed. Ad rotation mode
     * at campaign is deprecated.
     *
     * Generated from protobuf enum <code>CANNOT_SET_AD_ROTATION_MODE = 34;</code>
     */
    const CANNOT_SET_AD_ROTATION_MODE = 34;
    /**
     * Trying to change start date on a campaign that has started.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED = 35;</code>
     */
    const CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED = 35;
    /**
     * Trying to modify a date into the past.
     *
     * Generated from protobuf enum <code>CANNOT_SET_DATE_TO_PAST = 36;</code>
     */
    const CANNOT_SET_DATE_TO_PAST = 36;
    /**
     * Hotel center id in the hotel setting does not match any customer links.
     *
     * Generated from protobuf enum <code>MISSING_HOTEL_CUSTOMER_LINK = 37;</code>
     */
    const MISSING_HOTEL_CUSTOMER_LINK = 37;
    /**
     * Hotel center id in the hotel setting must match an active customer link.
     *
     * Generated from protobuf enum <code>INVALID_HOTEL_CUSTOMER_LINK = 38;</code>
     */
    const INVALID_HOTEL_CUSTOMER_LINK = 38;
    /**
     * Hotel setting was not found when creating a hotel ads campaign.
     *
     * Generated from protobuf enum <code>MISSING_HOTEL_SETTING = 39;</code>
     */
    const MISSING_HOTEL_SETTING = 39;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CampaignError::class, \Google\Ads\GoogleAds\V0\Errors\CampaignErrorEnum_CampaignError::class);

