<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/metrics.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Common;

class Metrics
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae4160a2c676f6f676c652f6164732f676f6f676c656164732f76302f63" .
            "6f6d6d6f6e2f6d6574726963732e70726f746f121e676f6f676c652e6164" .
            "732e676f6f676c656164732e76302e636f6d6d6f6e22c6140a074d657472" .
            "696373124c0a26616c6c5f636f6e76657273696f6e735f66726f6d5f696e" .
            "746572616374696f6e735f7261746518412001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e446f75626c6556616c7565123b0a15616c6c5f63" .
            "6f6e76657273696f6e735f76616c756518422001280b321c2e676f6f676c" .
            "652e70726f746f6275662e446f75626c6556616c756512350a0f616c6c5f" .
            "636f6e76657273696f6e7318072001280b321c2e676f6f676c652e70726f" .
            "746f6275662e446f75626c6556616c756512440a1e616c6c5f636f6e7665" .
            "7273696f6e735f76616c75655f7065725f636f7374183e2001280b321c2e" .
            "676f6f676c652e70726f746f6275662e446f75626c6556616c7565125d0a" .
            "37616c6c5f636f6e76657273696f6e735f66726f6d5f696e746572616374" .
            "696f6e735f76616c75655f7065725f696e746572616374696f6e18432001" .
            "280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c" .
            "756512320a0c617665726167655f636f737418082001280b321c2e676f6f" .
            "676c652e70726f746f6275662e446f75626c6556616c756512310a0b6176" .
            "65726167655f63706318092001280b321c2e676f6f676c652e70726f746f" .
            "6275662e446f75626c6556616c756512310a0b617665726167655f63706d" .
            "180a2001280b321c2e676f6f676c652e70726f746f6275662e446f75626c" .
            "6556616c756512360a10617665726167655f706f736974696f6e180d2001" .
            "280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c" .
            "756512310a0b626f756e63655f72617465180f2001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e446f75626c6556616c7565122b0a06636c69" .
            "636b7318132001280b321b2e676f6f676c652e70726f746f6275662e496e" .
            "74363456616c7565124a0a24636f6e74656e745f6275646765745f6c6f73" .
            "745f696d7072657373696f6e5f736861726518142001280b321c2e676f6f" .
            "676c652e70726f746f6275662e446f75626c6556616c7565123e0a18636f" .
            "6e74656e745f696d7072657373696f6e5f736861726518152001280b321c" .
            "2e676f6f676c652e70726f746f6275662e446f75626c6556616c75651248" .
            "0a22636f6e74656e745f72616e6b5f6c6f73745f696d7072657373696f6e" .
            "5f736861726518162001280b321c2e676f6f676c652e70726f746f627566" .
            "2e446f75626c6556616c756512480a22636f6e76657273696f6e735f6672" .
            "6f6d5f696e746572616374696f6e735f7261746518452001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e446f75626c6556616c756512370a11" .
            "636f6e76657273696f6e735f76616c756518462001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e446f75626c6556616c756512400a1a636f6e" .
            "76657273696f6e735f76616c75655f7065725f636f737418472001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512" .
            "590a33636f6e76657273696f6e735f66726f6d5f696e746572616374696f" .
            "6e735f76616c75655f7065725f696e746572616374696f6e18482001280b" .
            "321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c7565" .
            "12310a0b636f6e76657273696f6e7318192001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e446f75626c6556616c756512300a0b636f73745f" .
            "6d6963726f73181a2001280b321b2e676f6f676c652e70726f746f627566" .
            "2e496e74363456616c7565123e0a18636f73745f7065725f616c6c5f636f" .
            "6e76657273696f6e7318442001280b321c2e676f6f676c652e70726f746f" .
            "6275662e446f75626c6556616c756512390a13636f73745f7065725f636f" .
            "6e76657273696f6e181c2001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c7565123e0a1863726f73735f646576696365" .
            "5f636f6e76657273696f6e73181d2001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e446f75626c6556616c756512290a03637472181e200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c75" .
            "6512350a0f656e676167656d656e745f72617465181f2001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e446f75626c6556616c756512300a0b" .
            "656e676167656d656e747318202001280b321b2e676f6f676c652e70726f" .
            "746f6275662e496e74363456616c756512300a0b696d7072657373696f6e" .
            "7318252001280b321b2e676f6f676c652e70726f746f6275662e496e7436" .
            "3456616c756512360a10696e746572616374696f6e5f7261746518262001" .
            "280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c" .
            "756512310a0c696e746572616374696f6e7318272001280b321b2e676f6f" .
            "676c652e70726f746f6275662e496e74363456616c756512380a12696e76" .
            "616c69645f636c69636b5f7261746518282001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e446f75626c6556616c756512330a0e696e76616c" .
            "69645f636c69636b7318292001280b321b2e676f6f676c652e70726f746f" .
            "6275662e496e74363456616c7565123a0a1470657263656e745f6e65775f" .
            "76697369746f7273182a2001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c756512300a0b70686f6e655f63616c6c7318" .
            "2b2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456" .
            "616c756512360a1170686f6e655f696d7072657373696f6e73182c200128" .
            "0b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565" .
            "12380a1270686f6e655f7468726f7567685f72617465182d2001280b321c" .
            "2e676f6f676c652e70726f746f6275662e446f75626c6556616c75651232" .
            "0a0c72656c61746976655f637472182e2001280b321c2e676f6f676c652e" .
            "70726f746f6275662e446f75626c6556616c756512490a23736561726368" .
            "5f6275646765745f6c6f73745f696d7072657373696f6e5f736861726518" .
            "2f2001280b321c2e676f6f676c652e70726f746f6275662e446f75626c65" .
            "56616c756512490a237365617263685f65786163745f6d617463685f696d" .
            "7072657373696f6e5f736861726518312001280b321c2e676f6f676c652e" .
            "70726f746f6275662e446f75626c6556616c7565123d0a17736561726368" .
            "5f696d7072657373696f6e5f736861726518322001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e446f75626c6556616c756512470a21736561" .
            "7263685f72616e6b5f6c6f73745f696d7072657373696f6e5f7368617265" .
            "18332001280b321c2e676f6f676c652e70726f746f6275662e446f75626c" .
            "6556616c7565123f0a1976616c75655f7065725f616c6c5f636f6e766572" .
            "73696f6e7318342001280b321c2e676f6f676c652e70726f746f6275662e" .
            "446f75626c6556616c7565123a0a1476616c75655f7065725f636f6e7665" .
            "7273696f6e18352001280b321c2e676f6f676c652e70726f746f6275662e" .
            "446f75626c6556616c7565123d0a18766965775f7468726f7567685f636f" .
            "6e76657273696f6e73183c2001280b321b2e676f6f676c652e70726f746f" .
            "6275662e496e74363456616c756542c2010a22636f6d2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76302e636f6d6d6f6e420c4d65747269" .
            "637350726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67" .
            "656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c6561" .
            "64732f76302f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f" .
            "6f676c652e4164732e476f6f676c654164732e56302e436f6d6d6f6eca02" .
            "1e476f6f676c655c4164735c476f6f676c654164735c56305c436f6d6d6f" .
            "6e620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

