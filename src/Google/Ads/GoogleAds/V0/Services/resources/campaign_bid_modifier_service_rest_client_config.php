<?php

return [
    'interfaces' => [
        'google.ads.googleads.v0.services.CampaignBidModifierService' => [
            'GetCampaignBidModifier' => [
                'method' => 'get',
                'uriTemplate' => '/v0/{resource_name=customers/*/campaignBidModifiers/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateCampaignBidModifiers' => [
                'method' => 'post',
                'uriTemplate' => '/v0/customers/{customer_id=*}/campaignBidModifiers:mutate',
                'body' => '*',
                'placeholders' => [
                    'customer_id' => [
                        'getters' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
