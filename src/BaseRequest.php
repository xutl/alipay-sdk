<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace alipay\api;

/**
 * Class BaseRequest
 *
 * @author Tongle Xu <xutongle@gmail.com>
 * @since 3.0
 */
class BaseRequest
{
    private $bizContent;
    private $apiParas = [];
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion = "1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt = false;
    private $apiMethodName;

    /**
     * BaseRequest constructor.
     * @param string $apiMethodName
     */
    public function __construct($apiMethodName)
    {
        $this->apiMethodName = $apiMethodName;
    }

    /**
     * @param $bizContent
     */
    public function setBizContent($bizContent)
    {
        $this->bizContent = $bizContent;
        $this->apiParas["biz_content"] = $bizContent;
    }

    /**
     * @return mixed
     */
    public function getBizContent()
    {
        return $this->bizContent;
    }

    /**
     * 获取API方法名称
     * @return string
     */
    public function getApiMethodName()
    {
        return $this->apiMethodName;
    }

    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
    }

    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function getTerminalType()
    {
        return $this->terminalType;
    }

    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
    }

    public function getTerminalInfo()
    {
        return $this->terminalInfo;
    }

    public function setTerminalInfo($terminalInfo)
    {
        $this->terminalInfo = $terminalInfo;
    }

    /**
     * @return mixed
     */
    public function getProdCode()
    {
        return $this->prodCode;
    }

    /**
     * @param string $prodCode
     */
    public function setProdCode($prodCode)
    {
        $this->prodCode = $prodCode;
    }

    /**
     * 设置API版本
     * @param string $apiVersion
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    /**
     * 获取API版本
     * @return string
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    public function setNeedEncrypt($needEncrypt)
    {

        $this->needEncrypt = $needEncrypt;

    }

    public function getNeedEncrypt()
    {
        return $this->needEncrypt;
    }
}