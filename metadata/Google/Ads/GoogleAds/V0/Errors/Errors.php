<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/errors.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Errors;

class Errors
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Policy::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Value::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\AdCustomizerError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\AdError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\AdGroupAdError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\AdGroupBidModifierError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\AdGroupCriterionError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\AdGroupError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\AdSharingError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\AdxError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\AuthenticationError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\AuthorizationError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\BiddingError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\BiddingStrategyError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\CampaignBudgetError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\CampaignCriterionError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\CampaignError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\CampaignGroupError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\CampaignSharedSetError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\CollectionSizeError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\ContextError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\CriterionError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\DatabaseError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\DateError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\DateRangeError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\DistinctError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\EnumError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\FeedAttributeReferenceError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\FieldError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\FieldMaskError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\FunctionError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\FunctionParsingError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\HeaderError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\IdError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\ImageError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\InternalError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\ListOperationError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\MediaBundleError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\MediaError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\MultiplierError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\MutateError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\NewResourceCreationError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\NotEmptyError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\NullError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\OperationAccessDeniedError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\OperatorError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\PolicyFindingError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\QueryError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\QuotaError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\RangeError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\RecommendationError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\RegionCodeError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\RequestError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\ResourceAccessDeniedError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\ResourceCountLimitExceededError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\SettingError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\SharedCriterionError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\SharedSetError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\StringFormatError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\StringLengthError::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Errors\UrlFieldError::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a95530a2b676f6f676c652f6164732f676f6f676c656164732f76302f65" .
            "72726f72732f6572726f72732e70726f746f121e676f6f676c652e616473" .
            "2e676f6f676c656164732e76302e6572726f72731a2a676f6f676c652f61" .
            "64732f676f6f676c656164732f76302f636f6d6d6f6e2f76616c75652e70" .
            "726f746f1a38676f6f676c652f6164732f676f6f676c656164732f76302f" .
            "6572726f72732f61645f637573746f6d697a65725f6572726f722e70726f" .
            "746f1a2d676f6f676c652f6164732f676f6f676c656164732f76302f6572" .
            "726f72732f61645f6572726f722e70726f746f1a36676f6f676c652f6164" .
            "732f676f6f676c656164732f76302f6572726f72732f61645f67726f7570" .
            "5f61645f6572726f722e70726f746f1a40676f6f676c652f6164732f676f" .
            "6f676c656164732f76302f6572726f72732f61645f67726f75705f626964" .
            "5f6d6f6469666965725f6572726f722e70726f746f1a3d676f6f676c652f" .
            "6164732f676f6f676c656164732f76302f6572726f72732f61645f67726f" .
            "75705f637269746572696f6e5f6572726f722e70726f746f1a33676f6f67" .
            "6c652f6164732f676f6f676c656164732f76302f6572726f72732f61645f" .
            "67726f75705f6572726f722e70726f746f1a35676f6f676c652f6164732f" .
            "676f6f676c656164732f76302f6572726f72732f61645f73686172696e67" .
            "5f6572726f722e70726f746f1a2e676f6f676c652f6164732f676f6f676c" .
            "656164732f76302f6572726f72732f6164785f6572726f722e70726f746f" .
            "1a39676f6f676c652f6164732f676f6f676c656164732f76302f6572726f" .
            "72732f61757468656e7469636174696f6e5f6572726f722e70726f746f1a" .
            "38676f6f676c652f6164732f676f6f676c656164732f76302f6572726f72" .
            "732f617574686f72697a6174696f6e5f6572726f722e70726f746f1a3267" .
            "6f6f676c652f6164732f676f6f676c656164732f76302f6572726f72732f" .
            "62696464696e675f6572726f722e70726f746f1a3b676f6f676c652f6164" .
            "732f676f6f676c656164732f76302f6572726f72732f62696464696e675f" .
            "73747261746567795f6572726f722e70726f746f1a3a676f6f676c652f61" .
            "64732f676f6f676c656164732f76302f6572726f72732f63616d70616967" .
            "6e5f6275646765745f6572726f722e70726f746f1a3d676f6f676c652f61" .
            "64732f676f6f676c656164732f76302f6572726f72732f63616d70616967" .
            "6e5f637269746572696f6e5f6572726f722e70726f746f1a33676f6f676c" .
            "652f6164732f676f6f676c656164732f76302f6572726f72732f63616d70" .
            "6169676e5f6572726f722e70726f746f1a39676f6f676c652f6164732f67" .
            "6f6f676c656164732f76302f6572726f72732f63616d706169676e5f6772" .
            "6f75705f6572726f722e70726f746f1a3e676f6f676c652f6164732f676f" .
            "6f676c656164732f76302f6572726f72732f63616d706169676e5f736861" .
            "7265645f7365745f6572726f722e70726f746f1a3a676f6f676c652f6164" .
            "732f676f6f676c656164732f76302f6572726f72732f636f6c6c65637469" .
            "6f6e5f73697a655f6572726f722e70726f746f1a32676f6f676c652f6164" .
            "732f676f6f676c656164732f76302f6572726f72732f636f6e746578745f" .
            "6572726f722e70726f746f1a34676f6f676c652f6164732f676f6f676c65" .
            "6164732f76302f6572726f72732f637269746572696f6e5f6572726f722e" .
            "70726f746f1a33676f6f676c652f6164732f676f6f676c656164732f7630" .
            "2f6572726f72732f64617461626173655f6572726f722e70726f746f1a2f" .
            "676f6f676c652f6164732f676f6f676c656164732f76302f6572726f7273" .
            "2f646174655f6572726f722e70726f746f1a35676f6f676c652f6164732f" .
            "676f6f676c656164732f76302f6572726f72732f646174655f72616e6765" .
            "5f6572726f722e70726f746f1a33676f6f676c652f6164732f676f6f676c" .
            "656164732f76302f6572726f72732f64697374696e63745f6572726f722e" .
            "70726f746f1a2f676f6f676c652f6164732f676f6f676c656164732f7630" .
            "2f6572726f72732f656e756d5f6572726f722e70726f746f1a43676f6f67" .
            "6c652f6164732f676f6f676c656164732f76302f6572726f72732f666565" .
            "645f6174747269627574655f7265666572656e63655f6572726f722e7072" .
            "6f746f1a30676f6f676c652f6164732f676f6f676c656164732f76302f65" .
            "72726f72732f6669656c645f6572726f722e70726f746f1a35676f6f676c" .
            "652f6164732f676f6f676c656164732f76302f6572726f72732f6669656c" .
            "645f6d61736b5f6572726f722e70726f746f1a33676f6f676c652f616473" .
            "2f676f6f676c656164732f76302f6572726f72732f66756e6374696f6e5f" .
            "6572726f722e70726f746f1a3b676f6f676c652f6164732f676f6f676c65" .
            "6164732f76302f6572726f72732f66756e6374696f6e5f70617273696e67" .
            "5f6572726f722e70726f746f1a31676f6f676c652f6164732f676f6f676c" .
            "656164732f76302f6572726f72732f6865616465725f6572726f722e7072" .
            "6f746f1a2d676f6f676c652f6164732f676f6f676c656164732f76302f65" .
            "72726f72732f69645f6572726f722e70726f746f1a30676f6f676c652f61" .
            "64732f676f6f676c656164732f76302f6572726f72732f696d6167655f65" .
            "72726f722e70726f746f1a33676f6f676c652f6164732f676f6f676c6561" .
            "64732f76302f6572726f72732f696e7465726e616c5f6572726f722e7072" .
            "6f746f1a39676f6f676c652f6164732f676f6f676c656164732f76302f65" .
            "72726f72732f6c6973745f6f7065726174696f6e5f6572726f722e70726f" .
            "746f1a37676f6f676c652f6164732f676f6f676c656164732f76302f6572" .
            "726f72732f6d656469615f62756e646c655f6572726f722e70726f746f1a" .
            "30676f6f676c652f6164732f676f6f676c656164732f76302f6572726f72" .
            "732f6d656469615f6572726f722e70726f746f1a35676f6f676c652f6164" .
            "732f676f6f676c656164732f76302f6572726f72732f6d756c7469706c69" .
            "65725f6572726f722e70726f746f1a31676f6f676c652f6164732f676f6f" .
            "676c656164732f76302f6572726f72732f6d75746174655f6572726f722e" .
            "70726f746f1a40676f6f676c652f6164732f676f6f676c656164732f7630" .
            "2f6572726f72732f6e65775f7265736f757263655f6372656174696f6e5f" .
            "6572726f722e70726f746f1a34676f6f676c652f6164732f676f6f676c65" .
            "6164732f76302f6572726f72732f6e6f745f656d7074795f6572726f722e" .
            "70726f746f1a2f676f6f676c652f6164732f676f6f676c656164732f7630" .
            "2f6572726f72732f6e756c6c5f6572726f722e70726f746f1a42676f6f67" .
            "6c652f6164732f676f6f676c656164732f76302f6572726f72732f6f7065" .
            "726174696f6e5f6163636573735f64656e6965645f6572726f722e70726f" .
            "746f1a33676f6f676c652f6164732f676f6f676c656164732f76302f6572" .
            "726f72732f6f70657261746f725f6572726f722e70726f746f1a39676f6f" .
            "676c652f6164732f676f6f676c656164732f76302f6572726f72732f706f" .
            "6c6963795f66696e64696e675f6572726f722e70726f746f1a30676f6f67" .
            "6c652f6164732f676f6f676c656164732f76302f6572726f72732f717565" .
            "72795f6572726f722e70726f746f1a30676f6f676c652f6164732f676f6f" .
            "676c656164732f76302f6572726f72732f71756f74615f6572726f722e70" .
            "726f746f1a30676f6f676c652f6164732f676f6f676c656164732f76302f" .
            "6572726f72732f72616e67655f6572726f722e70726f746f1a39676f6f67" .
            "6c652f6164732f676f6f676c656164732f76302f6572726f72732f726563" .
            "6f6d6d656e646174696f6e5f6572726f722e70726f746f1a36676f6f676c" .
            "652f6164732f676f6f676c656164732f76302f6572726f72732f72656769" .
            "6f6e5f636f64655f6572726f722e70726f746f1a32676f6f676c652f6164" .
            "732f676f6f676c656164732f76302f6572726f72732f726571756573745f" .
            "6572726f722e70726f746f1a41676f6f676c652f6164732f676f6f676c65" .
            "6164732f76302f6572726f72732f7265736f757263655f6163636573735f" .
            "64656e6965645f6572726f722e70726f746f1a48676f6f676c652f616473" .
            "2f676f6f676c656164732f76302f6572726f72732f7265736f757263655f" .
            "636f756e745f6c696d69745f65786365656465645f6572726f722e70726f" .
            "746f1a32676f6f676c652f6164732f676f6f676c656164732f76302f6572" .
            "726f72732f73657474696e675f6572726f722e70726f746f1a3b676f6f67" .
            "6c652f6164732f676f6f676c656164732f76302f6572726f72732f736861" .
            "7265645f637269746572696f6e5f6572726f722e70726f746f1a35676f6f" .
            "676c652f6164732f676f6f676c656164732f76302f6572726f72732f7368" .
            "617265645f7365745f6572726f722e70726f746f1a38676f6f676c652f61" .
            "64732f676f6f676c656164732f76302f6572726f72732f737472696e675f" .
            "666f726d61745f6572726f722e70726f746f1a38676f6f676c652f616473" .
            "2f676f6f676c656164732f76302f6572726f72732f737472696e675f6c65" .
            "6e6774685f6572726f722e70726f746f1a34676f6f676c652f6164732f67" .
            "6f6f676c656164732f76302f6572726f72732f75726c5f6669656c645f65" .
            "72726f722e70726f746f1a1e676f6f676c652f70726f746f6275662f7772" .
            "6170706572732e70726f746f22520a10476f6f676c654164734661696c75" .
            "7265123e0a066572726f727318012003280b322e2e676f6f676c652e6164" .
            "732e676f6f676c656164732e76302e6572726f72732e476f6f676c654164" .
            "734572726f722298020a0e476f6f676c654164734572726f72123d0a0a65" .
            "72726f725f636f646518012001280b32292e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76302e6572726f72732e4572726f72436f6465120f" .
            "0a076d65737361676518022001280912360a077472696767657218032001" .
            "280b32252e676f6f676c652e6164732e676f6f676c656164732e76302e63" .
            "6f6d6d6f6e2e56616c7565123f0a086c6f636174696f6e18042001280b32" .
            "2d2e676f6f676c652e6164732e676f6f676c656164732e76302e6572726f" .
            "72732e4572726f724c6f636174696f6e123d0a0764657461696c73180520" .
            "01280b322c2e676f6f676c652e6164732e676f6f676c656164732e76302e" .
            "6572726f72732e4572726f7244657461696c7322dc2d0a094572726f7243" .
            "6f646512560a0d726571756573745f6572726f7218012001280e323d2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e6572726f72732e" .
            "526571756573744572726f72456e756d2e526571756573744572726f7248" .
            "00126f0a1662696464696e675f73747261746567795f6572726f72180220" .
            "01280e324d2e676f6f676c652e6164732e676f6f676c656164732e76302e" .
            "6572726f72732e42696464696e6753747261746567794572726f72456e75" .
            "6d2e42696464696e6753747261746567794572726f724800125a0a0f7572" .
            "6c5f6669656c645f6572726f7218032001280e323f2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e6572726f72732e55726c4669656c" .
            "644572726f72456e756d2e55726c4669656c644572726f72480012690a14" .
            "6c6973745f6f7065726174696f6e5f6572726f7218042001280e32492e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e6572726f72732e" .
            "4c6973744f7065726174696f6e4572726f72456e756d2e4c6973744f7065" .
            "726174696f6e4572726f72480012500a0b71756572795f6572726f721805" .
            "2001280e32392e676f6f676c652e6164732e676f6f676c656164732e7630" .
            "2e6572726f72732e51756572794572726f72456e756d2e51756572794572" .
            "726f72480012530a0c6d75746174655f6572726f7218072001280e323b2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76302e6572726f7273" .
            "2e4d75746174654572726f72456e756d2e4d75746174654572726f724800" .
            "125d0a106669656c645f6d61736b5f6572726f7218082001280e32412e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e6572726f72732e" .
            "4669656c644d61736b4572726f72456e756d2e4669656c644d61736b4572" .
            "726f72480012680a13617574686f72697a6174696f6e5f6572726f721809" .
            "2001280e32492e676f6f676c652e6164732e676f6f676c656164732e7630" .
            "2e6572726f72732e417574686f72697a6174696f6e4572726f72456e756d" .
            "2e417574686f72697a6174696f6e4572726f72480012590a0e696e746572" .
            "6e616c5f6572726f72180a2001280e323f2e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76302e6572726f72732e496e7465726e616c457272" .
            "6f72456e756d2e496e7465726e616c4572726f72480012500a0b71756f74" .
            "615f6572726f72180b2001280e32392e676f6f676c652e6164732e676f6f" .
            "676c656164732e76302e6572726f72732e51756f74614572726f72456e75" .
            "6d2e51756f74614572726f72480012470a0861645f6572726f72180c2001" .
            "280e32332e676f6f676c652e6164732e676f6f676c656164732e76302e65" .
            "72726f72732e41644572726f72456e756d2e41644572726f72480012570a" .
            "0e61645f67726f75705f6572726f72180d2001280e323d2e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76302e6572726f72732e416447726f" .
            "75704572726f72456e756d2e416447726f75704572726f724800126c0a15" .
            "63616d706169676e5f6275646765745f6572726f72180e2001280e324b2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76302e6572726f7273" .
            "2e43616d706169676e4275646765744572726f72456e756d2e43616d7061" .
            "69676e4275646765744572726f72480012590a0e63616d706169676e5f65" .
            "72726f72180f2001280e323f2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76302e6572726f72732e43616d706169676e4572726f72456e75" .
            "6d2e43616d706169676e4572726f724800126b0a1461757468656e746963" .
            "6174696f6e5f6572726f7218112001280e324b2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76302e6572726f72732e41757468656e746963" .
            "6174696f6e4572726f72456e756d2e41757468656e7469636174696f6e45" .
            "72726f72480012730a1861645f67726f75705f637269746572696f6e5f65" .
            "72726f7218122001280e324f2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76302e6572726f72732e416447726f7570437269746572696f6e" .
            "4572726f72456e756d2e416447726f7570437269746572696f6e4572726f" .
            "72480012660a1361645f637573746f6d697a65725f6572726f7218132001" .
            "280e32472e676f6f676c652e6164732e676f6f676c656164732e76302e65" .
            "72726f72732e4164437573746f6d697a65724572726f72456e756d2e4164" .
            "437573746f6d697a65724572726f724800125e0a1161645f67726f75705f" .
            "61645f6572726f7218152001280e32412e676f6f676c652e6164732e676f" .
            "6f676c656164732e76302e6572726f72732e416447726f75704164457272" .
            "6f72456e756d2e416447726f757041644572726f724800125d0a1061645f" .
            "73686172696e675f6572726f7218182001280e32412e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e6572726f72732e41645368617269" .
            "6e674572726f72456e756d2e416453686172696e674572726f724800124a" .
            "0a096164785f6572726f7218192001280e32352e676f6f676c652e616473" .
            "2e676f6f676c656164732e76302e6572726f72732e4164784572726f7245" .
            "6e756d2e4164784572726f72480012560a0d62696464696e675f6572726f" .
            "72181a2001280e323d2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76302e6572726f72732e42696464696e674572726f72456e756d2e4269" .
            "6464696e674572726f72480012750a1863616d706169676e5f6372697465" .
            "72696f6e5f6572726f72181d2001280e32512e676f6f676c652e6164732e" .
            "676f6f676c656164732e76302e6572726f72732e43616d706169676e4372" .
            "69746572696f6e4572726f72456e756d2e43616d706169676e4372697465" .
            "72696f6e4572726f724800126c0a15636f6c6c656374696f6e5f73697a65" .
            "5f6572726f72181f2001280e324b2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76302e6572726f72732e436f6c6c656374696f6e53697a65" .
            "4572726f72456e756d2e436f6c6c656374696f6e53697a654572726f7248" .
            "00125c0a0f637269746572696f6e5f6572726f7218202001280e32412e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e6572726f72732e" .
            "437269746572696f6e4572726f72456e756d2e437269746572696f6e4572" .
            "726f724800124d0a0a646174655f6572726f7218212001280e32372e676f" .
            "6f676c652e6164732e676f6f676c656164732e76302e6572726f72732e44" .
            "6174654572726f72456e756d2e446174654572726f724800125d0a106461" .
            "74655f72616e67655f6572726f7218222001280e32412e676f6f676c652e" .
            "6164732e676f6f676c656164732e76302e6572726f72732e446174655261" .
            "6e67654572726f72456e756d2e4461746552616e67654572726f72480012" .
            "590a0e64697374696e63745f6572726f7218232001280e323f2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76302e6572726f72732e446973" .
            "74696e63744572726f72456e756d2e44697374696e63744572726f724800" .
            "1285010a1e666565645f6174747269627574655f7265666572656e63655f" .
            "6572726f7218242001280e325b2e676f6f676c652e6164732e676f6f676c" .
            "656164732e76302e6572726f72732e466565644174747269627574655265" .
            "666572656e63654572726f72456e756d2e46656564417474726962757465" .
            "5265666572656e63654572726f72480012590a0e66756e6374696f6e5f65" .
            "72726f7218252001280e323f2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76302e6572726f72732e46756e6374696f6e4572726f72456e75" .
            "6d2e46756e6374696f6e4572726f724800126f0a1666756e6374696f6e5f" .
            "70617273696e675f6572726f7218262001280e324d2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e6572726f72732e46756e6374696f" .
            "6e50617273696e674572726f72456e756d2e46756e6374696f6e50617273" .
            "696e674572726f72480012470a0869645f6572726f7218272001280e3233" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76302e6572726f72" .
            "732e49644572726f72456e756d2e49644572726f72480012500a0b696d61" .
            "67655f6572726f7218282001280e32392e676f6f676c652e6164732e676f" .
            "6f676c656164732e76302e6572726f72732e496d6167654572726f72456e" .
            "756d2e496d6167654572726f72480012630a126d656469615f62756e646c" .
            "655f6572726f72182a2001280e32452e676f6f676c652e6164732e676f6f" .
            "676c656164732e76302e6572726f72732e4d6564696142756e646c654572" .
            "726f72456e756d2e4d6564696142756e646c654572726f72480012500a0b" .
            "6d656469615f6572726f72182b2001280e32392e676f6f676c652e616473" .
            "2e676f6f676c656164732e76302e6572726f72732e4d656469614572726f" .
            "72456e756d2e4d656469614572726f724800125f0a106d756c7469706c69" .
            "65725f6572726f72182c2001280e32432e676f6f676c652e6164732e676f" .
            "6f676c656164732e76302e6572726f72732e4d756c7469706c6965724572" .
            "726f72456e756d2e4d756c7469706c6965724572726f724800127c0a1b6e" .
            "65775f7265736f757263655f6372656174696f6e5f6572726f72182d2001" .
            "280e32552e676f6f676c652e6164732e676f6f676c656164732e76302e65" .
            "72726f72732e4e65775265736f757263654372656174696f6e4572726f72" .
            "456e756d2e4e65775265736f757263654372656174696f6e4572726f7248" .
            "00125a0a0f6e6f745f656d7074795f6572726f72182e2001280e323f2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e6572726f72732e" .
            "4e6f74456d7074794572726f72456e756d2e4e6f74456d7074794572726f" .
            "724800124d0a0a6e756c6c5f6572726f72182f2001280e32372e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76302e6572726f72732e4e756c" .
            "6c4572726f72456e756d2e4e756c6c4572726f72480012590a0e6f706572" .
            "61746f725f6572726f7218302001280e323f2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76302e6572726f72732e4f70657261746f724572" .
            "726f72456e756d2e4f70657261746f724572726f72480012500a0b72616e" .
            "67655f6572726f7218312001280e32392e676f6f676c652e6164732e676f" .
            "6f676c656164732e76302e6572726f72732e52616e67654572726f72456e" .
            "756d2e52616e67654572726f724800126b0a147265636f6d6d656e646174" .
            "696f6e5f6572726f72183a2001280e324b2e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76302e6572726f72732e5265636f6d6d656e646174" .
            "696f6e4572726f72456e756d2e5265636f6d6d656e646174696f6e457272" .
            "6f72480012600a11726567696f6e5f636f64655f6572726f721833200128" .
            "0e32432e676f6f676c652e6164732e676f6f676c656164732e76302e6572" .
            "726f72732e526567696f6e436f64654572726f72456e756d2e526567696f" .
            "6e436f64654572726f72480012560a0d73657474696e675f6572726f7218" .
            "342001280e323d2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "302e6572726f72732e53657474696e674572726f72456e756d2e53657474" .
            "696e674572726f72480012660a13737472696e675f666f726d61745f6572" .
            "726f7218352001280e32472e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76302e6572726f72732e537472696e67466f726d61744572726f72" .
            "456e756d2e537472696e67466f726d61744572726f72480012660a137374" .
            "72696e675f6c656e6774685f6572726f7218362001280e32472e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76302e6572726f72732e537472" .
            "696e674c656e6774684572726f72456e756d2e537472696e674c656e6774" .
            "684572726f7248001282010a1d6f7065726174696f6e5f6163636573735f" .
            "64656e6965645f6572726f7218372001280e32592e676f6f676c652e6164" .
            "732e676f6f676c656164732e76302e6572726f72732e4f7065726174696f" .
            "6e41636365737344656e6965644572726f72456e756d2e4f706572617469" .
            "6f6e41636365737344656e6965644572726f724800127f0a1c7265736f75" .
            "7263655f6163636573735f64656e6965645f6572726f7218382001280e32" .
            "572e676f6f676c652e6164732e676f6f676c656164732e76302e6572726f" .
            "72732e5265736f7572636541636365737344656e6965644572726f72456e" .
            "756d2e5265736f7572636541636365737344656e6965644572726f724800" .
            "1292010a237265736f757263655f636f756e745f6c696d69745f65786365" .
            "656465645f6572726f7218392001280e32632e676f6f676c652e6164732e" .
            "676f6f676c656164732e76302e6572726f72732e5265736f75726365436f" .
            "756e744c696d697445786365656465644572726f72456e756d2e5265736f" .
            "75726365436f756e744c696d697445786365656465644572726f72480012" .
            "7a0a1b61645f67726f75705f6269645f6d6f6469666965725f6572726f72" .
            "183b2001280e32532e676f6f676c652e6164732e676f6f676c656164732e" .
            "76302e6572726f72732e416447726f75704269644d6f6469666965724572" .
            "726f72456e756d2e416447726f75704269644d6f6469666965724572726f" .
            "72480012560a0d636f6e746578745f6572726f72183c2001280e323d2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e6572726f72732e" .
            "436f6e746578744572726f72456e756d2e436f6e746578744572726f7248" .
            "0012500a0b6669656c645f6572726f72183d2001280e32392e676f6f676c" .
            "652e6164732e676f6f676c656164732e76302e6572726f72732e4669656c" .
            "644572726f72456e756d2e4669656c644572726f724800125d0a10736861" .
            "7265645f7365745f6572726f72183e2001280e32412e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e6572726f72732e53686172656453" .
            "65744572726f72456e756d2e5368617265645365744572726f724800126f" .
            "0a167368617265645f637269746572696f6e5f6572726f72183f2001280e" .
            "324d2e676f6f676c652e6164732e676f6f676c656164732e76302e657272" .
            "6f72732e536861726564437269746572696f6e4572726f72456e756d2e53" .
            "6861726564437269746572696f6e4572726f72480012760a1963616d7061" .
            "69676e5f7368617265645f7365745f6572726f7218402001280e32512e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e6572726f72732e" .
            "43616d706169676e5368617265645365744572726f72456e756d2e43616d" .
            "706169676e5368617265645365744572726f72480012530a0c6865616465" .
            "725f6572726f7218422001280e323b2e676f6f676c652e6164732e676f6f" .
            "676c656164732e76302e6572726f72732e4865616465724572726f72456e" .
            "756d2e4865616465724572726f72480012590a0e64617461626173655f65" .
            "72726f7218432001280e323f2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76302e6572726f72732e44617461626173654572726f72456e75" .
            "6d2e44617461626173654572726f72480012690a14706f6c6963795f6669" .
            "6e64696e675f6572726f7218442001280e32492e676f6f676c652e616473" .
            "2e676f6f676c656164732e76302e6572726f72732e506f6c69637946696e" .
            "64696e674572726f72456e756d2e506f6c69637946696e64696e67457272" .
            "6f72480012690a1463616d706169676e5f67726f75705f6572726f721845" .
            "2001280e32492e676f6f676c652e6164732e676f6f676c656164732e7630" .
            "2e6572726f72732e43616d706169676e47726f75704572726f72456e756d" .
            "2e43616d706169676e47726f75704572726f724800124d0a0a656e756d5f" .
            "6572726f7218462001280e32372e676f6f676c652e6164732e676f6f676c" .
            "656164732e76302e6572726f72732e456e756d4572726f72456e756d2e45" .
            "6e756d4572726f724800420c0a0a6572726f725f636f646522f6010a0d45" .
            "72726f724c6f636174696f6e12340a0f6f7065726174696f6e5f696e6465" .
            "7818012001280b321b2e676f6f676c652e70726f746f6275662e496e7436" .
            "3456616c7565125b0a136669656c645f706174685f656c656d656e747318" .
            "022003280b323e2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "302e6572726f72732e4572726f724c6f636174696f6e2e4669656c645061" .
            "7468456c656d656e741a520a104669656c6450617468456c656d656e7412" .
            "120a0a6669656c645f6e616d65180120012809122a0a05696e6465781802" .
            "2001280b321b2e676f6f676c652e70726f746f6275662e496e7436345661" .
            "6c756522de010a0c4572726f7244657461696c73121e0a16756e7075626c" .
            "69736865645f6572726f725f636f646518012001280912580a18706f6c69" .
            "63795f76696f6c6174696f6e5f64657461696c7318022001280b32362e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e6572726f72732e" .
            "506f6c69637956696f6c6174696f6e44657461696c7312540a16706f6c69" .
            "63795f66696e64696e675f64657461696c7318032001280b32342e676f6f" .
            "676c652e6164732e676f6f676c656164732e76302e6572726f72732e506f" .
            "6c69637946696e64696e6744657461696c7322b3010a16506f6c69637956" .
            "696f6c6174696f6e44657461696c7312230a1b65787465726e616c5f706f" .
            "6c6963795f6465736372697074696f6e180220012809123f0a036b657918" .
            "042001280b32322e676f6f676c652e6164732e676f6f676c656164732e76" .
            "302e636f6d6d6f6e2e506f6c69637956696f6c6174696f6e4b6579121c0a" .
            "1465787465726e616c5f706f6c6963795f6e616d6518052001280912150a" .
            "0d69735f6578656d707469626c6518062001280822660a14506f6c696379" .
            "46696e64696e6744657461696c73124e0a14706f6c6963795f746f706963" .
            "5f656e747269657318012003280b32302e676f6f676c652e6164732e676f" .
            "6f676c656164732e76302e636f6d6d6f6e2e506f6c696379546f70696345" .
            "6e74727942c1010a22636f6d2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76302e6572726f7273420b4572726f727350726f746f50015a44" .
            "676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f" .
            "676c65617069732f6164732f676f6f676c656164732f76302f6572726f72" .
            "733b6572726f7273a20203474141aa021e476f6f676c652e4164732e476f" .
            "6f676c654164732e56302e4572726f7273ca021e476f6f676c655c416473" .
            "5c476f6f676c654164735c56305c4572726f7273620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

