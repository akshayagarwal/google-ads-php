<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/recommendation.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Resources;

class Recommendation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Criteria::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\RecommendationType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\TargetCpaOptInRecommendationGoal::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\Ad::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a89220a36676f6f676c652f6164732f676f6f676c656164732f76302f72" .
            "65736f75726365732f7265636f6d6d656e646174696f6e2e70726f746f12" .
            "21676f6f676c652e6164732e676f6f676c656164732e76302e7265736f75" .
            "726365731a37676f6f676c652f6164732f676f6f676c656164732f76302f" .
            "656e756d732f7265636f6d6d656e646174696f6e5f747970652e70726f74" .
            "6f1a49676f6f676c652f6164732f676f6f676c656164732f76302f656e75" .
            "6d732f7461726765745f6370615f6f70745f696e5f7265636f6d6d656e64" .
            "6174696f6e5f676f616c2e70726f746f1a2a676f6f676c652f6164732f67" .
            "6f6f676c656164732f76302f7265736f75726365732f61642e70726f746f" .
            "1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f" .
            "746f22f81d0a0e5265636f6d6d656e646174696f6e12150a0d7265736f75" .
            "7263655f6e616d6518012001280912560a047479706518022001280e3248" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76302e656e756d73" .
            "2e5265636f6d6d656e646174696f6e54797065456e756d2e5265636f6d6d" .
            "656e646174696f6e5479706512560a06696d7061637418032001280b3246" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76302e7265736f75" .
            "726365732e5265636f6d6d656e646174696f6e2e5265636f6d6d656e6461" .
            "74696f6e496d7061637412350a0f63616d706169676e5f62756467657418" .
            "052001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c7565122e0a0863616d706169676e18062001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c7565122e0a0861645f" .
            "67726f757018072001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c7565122d0a096469736d6973736564180d2001280b" .
            "321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75651278" .
            "0a1e63616d706169676e5f6275646765745f7265636f6d6d656e64617469" .
            "6f6e18042001280b324e2e676f6f676c652e6164732e676f6f676c656164" .
            "732e76302e7265736f75726365732e5265636f6d6d656e646174696f6e2e" .
            "43616d706169676e4275646765745265636f6d6d656e646174696f6e4800" .
            "12690a166b6579776f72645f7265636f6d6d656e646174696f6e18082001" .
            "280b32472e676f6f676c652e6164732e676f6f676c656164732e76302e72" .
            "65736f75726365732e5265636f6d6d656e646174696f6e2e4b6579776f72" .
            "645265636f6d6d656e646174696f6e480012680a16746578745f61645f72" .
            "65636f6d6d656e646174696f6e18092001280b32462e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e7265736f75726365732e5265636f" .
            "6d6d656e646174696f6e2e5465787441645265636f6d6d656e646174696f" .
            "6e4800127a0a207461726765745f6370615f6f70745f696e5f7265636f6d" .
            "6d656e646174696f6e180a2001280b324e2e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76302e7265736f75726365732e5265636f6d6d656e" .
            "646174696f6e2e5461726765744370614f7074496e5265636f6d6d656e64" .
            "6174696f6e4800128e010a2a6d6178696d697a655f636f6e76657273696f" .
            "6e735f6f70745f696e5f7265636f6d6d656e646174696f6e180b2001280b" .
            "32582e676f6f676c652e6164732e676f6f676c656164732e76302e726573" .
            "6f75726365732e5265636f6d6d656e646174696f6e2e4d6178696d697a65" .
            "436f6e76657273696f6e734f7074496e5265636f6d6d656e646174696f6e" .
            "4800127e0a22656e68616e6365645f6370635f6f70745f696e5f7265636f" .
            "6d6d656e646174696f6e180c2001280b32502e676f6f676c652e6164732e" .
            "676f6f676c656164732e76302e7265736f75726365732e5265636f6d6d65" .
            "6e646174696f6e2e456e68616e6365644370634f7074496e5265636f6d6d" .
            "656e646174696f6e48001284010a257365617263685f706172746e657273" .
            "5f6f70745f696e5f7265636f6d6d656e646174696f6e180e2001280b3253" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76302e7265736f75" .
            "726365732e5265636f6d6d656e646174696f6e2e53656172636850617274" .
            "6e6572734f7074496e5265636f6d6d656e646174696f6e48001284010a25" .
            "6d6178696d697a655f636c69636b735f6f70745f696e5f7265636f6d6d65" .
            "6e646174696f6e180f2001280b32532e676f6f676c652e6164732e676f6f" .
            "676c656164732e76302e7265736f75726365732e5265636f6d6d656e6461" .
            "74696f6e2e4d6178696d697a65436c69636b734f7074496e5265636f6d6d" .
            "656e646174696f6e48001281010a236f7074696d697a655f61645f726f74" .
            "6174696f6e5f7265636f6d6d656e646174696f6e18102001280b32522e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e7265736f757263" .
            "65732e5265636f6d6d656e646174696f6e2e4f7074696d697a654164526f" .
            "746174696f6e5265636f6d6d656e646174696f6e48001ad9010a14526563" .
            "6f6d6d656e646174696f6e496d70616374125d0a0c626173655f6d657472" .
            "69637318012001280b32472e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76302e7265736f75726365732e5265636f6d6d656e646174696f6e" .
            "2e5265636f6d6d656e646174696f6e4d65747269637312620a11706f7465" .
            "6e7469616c5f6d65747269637318022001280b32472e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e7265736f75726365732e5265636f" .
            "6d6d656e646174696f6e2e5265636f6d6d656e646174696f6e4d65747269" .
            "63731a90020a155265636f6d6d656e646174696f6e4d6574726963731231" .
            "0a0b696d7072657373696f6e7318012001280b321c2e676f6f676c652e70" .
            "726f746f6275662e446f75626c6556616c7565122c0a06636c69636b7318" .
            "022001280b321c2e676f6f676c652e70726f746f6275662e446f75626c65" .
            "56616c756512300a0b636f73745f6d6963726f7318032001280b321b2e67" .
            "6f6f676c652e70726f746f6275662e496e74363456616c756512310a0b63" .
            "6f6e76657273696f6e7318042001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e446f75626c6556616c756512310a0b766964656f5f76696577" .
            "7318052001280b321c2e676f6f676c652e70726f746f6275662e446f7562" .
            "6c6556616c75651aee030a1c43616d706169676e4275646765745265636f" .
            "6d6d656e646174696f6e12410a1c63757272656e745f6275646765745f61" .
            "6d6f756e745f6d6963726f7318012001280b321b2e676f6f676c652e7072" .
            "6f746f6275662e496e74363456616c756512450a207265636f6d6d656e64" .
            "65645f6275646765745f616d6f756e745f6d6963726f7318022001280b32" .
            "1b2e676f6f676c652e70726f746f6275662e496e74363456616c75651289" .
            "010a0e6275646765745f6f7074696f6e7318032003280b32712e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76302e7265736f75726365732e" .
            "5265636f6d6d656e646174696f6e2e43616d706169676e42756467657452" .
            "65636f6d6d656e646174696f6e2e43616d706169676e4275646765745265" .
            "636f6d6d656e646174696f6e4f7074696f6e1ab7010a2243616d70616967" .
            "6e4275646765745265636f6d6d656e646174696f6e4f7074696f6e12390a" .
            "146275646765745f616d6f756e745f6d6963726f7318012001280b321b2e" .
            "676f6f676c652e70726f746f6275662e496e74363456616c756512560a06" .
            "696d7061637418022001280b32462e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76302e7265736f75726365732e5265636f6d6d656e646174" .
            "696f6e2e5265636f6d6d656e646174696f6e496d706163741a96010a154b" .
            "6579776f72645265636f6d6d656e646174696f6e123c0a076b6579776f72" .
            "6418012001280b322b2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76302e636f6d6d6f6e2e4b6579776f7264496e666f123f0a1a7265636f" .
            "6d6d656e6465645f6370635f6269645f6d6963726f7318022001280b321b" .
            "2e676f6f676c652e70726f746f6275662e496e74363456616c75651ab501" .
            "0a145465787441645265636f6d6d656e646174696f6e12310a0261641801" .
            "2001280b32252e676f6f676c652e6164732e676f6f676c656164732e7630" .
            "2e7265736f75726365732e416412330a0d6372656174696f6e5f64617465" .
            "18022001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512350a0f6175746f5f6170706c795f646174651803200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "651adf040a1c5461726765744370614f7074496e5265636f6d6d656e6461" .
            "74696f6e1282010a076f7074696f6e7318012003280b32712e676f6f676c" .
            "652e6164732e676f6f676c656164732e76302e7265736f75726365732e52" .
            "65636f6d6d656e646174696f6e2e5461726765744370614f7074496e5265" .
            "636f6d6d656e646174696f6e2e5461726765744370614f7074496e526563" .
            "6f6d6d656e646174696f6e4f7074696f6e12420a1d7265636f6d6d656e64" .
            "65645f7461726765745f6370615f6d6963726f7318022001280b321b2e67" .
            "6f6f676c652e70726f746f6275662e496e74363456616c75651af5020a22" .
            "5461726765744370614f7074496e5265636f6d6d656e646174696f6e4f70" .
            "74696f6e12720a04676f616c18012001280e32642e676f6f676c652e6164" .
            "732e676f6f676c656164732e76302e656e756d732e546172676574437061" .
            "4f7074496e5265636f6d6d656e646174696f6e476f616c456e756d2e5461" .
            "726765744370614f7074496e5265636f6d6d656e646174696f6e476f616c" .
            "12360a117461726765745f6370615f6d6963726f7318022001280b321b2e" .
            "676f6f676c652e70726f746f6275662e496e74363456616c7565124b0a26" .
            "72657175697265645f63616d706169676e5f6275646765745f616d6f756e" .
            "745f6d6963726f7318032001280b321b2e676f6f676c652e70726f746f62" .
            "75662e496e74363456616c756512560a06696d7061637418042001280b32" .
            "462e676f6f676c652e6164732e676f6f676c656164732e76302e7265736f" .
            "75726365732e5265636f6d6d656e646174696f6e2e5265636f6d6d656e64" .
            "6174696f6e496d706163741a6f0a264d6178696d697a65436f6e76657273" .
            "696f6e734f7074496e5265636f6d6d656e646174696f6e12450a20726563" .
            "6f6d6d656e6465645f6275646765745f616d6f756e745f6d6963726f7318" .
            "012001280b321b2e676f6f676c652e70726f746f6275662e496e74363456" .
            "616c75651a200a1e456e68616e6365644370634f7074496e5265636f6d6d" .
            "656e646174696f6e1a230a21536561726368506172746e6572734f707449" .
            "6e5265636f6d6d656e646174696f6e1a6a0a214d6178696d697a65436c69" .
            "636b734f7074496e5265636f6d6d656e646174696f6e12450a207265636f" .
            "6d6d656e6465645f6275646765745f616d6f756e745f6d6963726f731801" .
            "2001280b321b2e676f6f676c652e70726f746f6275662e496e7436345661" .
            "6c75651a220a204f7074696d697a654164526f746174696f6e5265636f6d" .
            "6d656e646174696f6e42100a0e7265636f6d6d656e646174696f6e42d801" .
            "0a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76302e" .
            "7265736f757263657342135265636f6d6d656e646174696f6e50726f746f" .
            "50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f" .
            "2f676f6f676c65617069732f6164732f676f6f676c656164732f76302f72" .
            "65736f75726365733b7265736f7572636573a20203474141aa0221476f6f" .
            "676c652e4164732e476f6f676c654164732e56302e5265736f7572636573" .
            "ca0221476f6f676c655c4164735c476f6f676c654164735c56305c526573" .
            "6f7572636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

