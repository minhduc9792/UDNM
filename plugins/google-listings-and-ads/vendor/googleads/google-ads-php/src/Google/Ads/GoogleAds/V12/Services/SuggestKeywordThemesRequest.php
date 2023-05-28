<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/smart_campaign_suggest_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [SmartCampaignSuggestService.SuggestKeywordThemes][google.ads.googleads.v12.services.SmartCampaignSuggestService.SuggestKeywordThemes].
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.SuggestKeywordThemesRequest</code>
 */
class SuggestKeywordThemesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. Information to get keyword theme suggestions.
     * Required fields:
     * * suggestion_info.final_url
     * * suggestion_info.language_code
     * * suggestion_info.geo_target
     * Recommended fields:
     * * suggestion_info.business_setting
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.SmartCampaignSuggestionInfo suggestion_info = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $suggestion_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer.
     *     @type \Google\Ads\GoogleAds\V12\Services\SmartCampaignSuggestionInfo $suggestion_info
     *           Required. Information to get keyword theme suggestions.
     *           Required fields:
     *           * suggestion_info.final_url
     *           * suggestion_info.language_code
     *           * suggestion_info.geo_target
     *           Recommended fields:
     *           * suggestion_info.business_setting
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\SmartCampaignSuggestService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. Information to get keyword theme suggestions.
     * Required fields:
     * * suggestion_info.final_url
     * * suggestion_info.language_code
     * * suggestion_info.geo_target
     * Recommended fields:
     * * suggestion_info.business_setting
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.SmartCampaignSuggestionInfo suggestion_info = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V12\Services\SmartCampaignSuggestionInfo|null
     */
    public function getSuggestionInfo()
    {
        return $this->suggestion_info;
    }

    public function hasSuggestionInfo()
    {
        return isset($this->suggestion_info);
    }

    public function clearSuggestionInfo()
    {
        unset($this->suggestion_info);
    }

    /**
     * Required. Information to get keyword theme suggestions.
     * Required fields:
     * * suggestion_info.final_url
     * * suggestion_info.language_code
     * * suggestion_info.geo_target
     * Recommended fields:
     * * suggestion_info.business_setting
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.SmartCampaignSuggestionInfo suggestion_info = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V12\Services\SmartCampaignSuggestionInfo $var
     * @return $this
     */
    public function setSuggestionInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Services\SmartCampaignSuggestionInfo::class);
        $this->suggestion_info = $var;

        return $this;
    }

}

