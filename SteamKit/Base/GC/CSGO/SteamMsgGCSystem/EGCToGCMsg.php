<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/gcsystemmsgs.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGCSystem;

/**
 * Protobuf enum : SteamKit.Base.GC.CSGO.SteamMsgGCSystem.EGCToGCMsg
 */
class EGCToGCMsg extends \Protobuf\Enum
{

    /**
     * k_EGCToGCMsgMasterAck = 150
     */
    const k_EGCToGCMsgMasterAck_VALUE = 150;

    /**
     * k_EGCToGCMsgMasterAckResponse = 151
     */
    const k_EGCToGCMsgMasterAckResponse_VALUE = 151;

    /**
     * k_EGCToGCMsgRouted = 152
     */
    const k_EGCToGCMsgRouted_VALUE = 152;

    /**
     * k_EGCToGCMsgRoutedReply = 153
     */
    const k_EGCToGCMsgRoutedReply_VALUE = 153;

    /**
     * k_EMsgUpdateSessionIP = 154
     */
    const k_EMsgUpdateSessionIP_VALUE = 154;

    /**
     * k_EMsgRequestSessionIP = 155
     */
    const k_EMsgRequestSessionIP_VALUE = 155;

    /**
     * k_EMsgRequestSessionIPResponse = 156
     */
    const k_EMsgRequestSessionIPResponse_VALUE = 156;

    /**
     * k_EGCToGCMsgMasterStartupComplete = 157
     */
    const k_EGCToGCMsgMasterStartupComplete_VALUE = 157;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    protected static $k_EGCToGCMsgMasterAck = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    protected static $k_EGCToGCMsgMasterAckResponse = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    protected static $k_EGCToGCMsgRouted = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    protected static $k_EGCToGCMsgRoutedReply = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    protected static $k_EMsgUpdateSessionIP = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    protected static $k_EMsgRequestSessionIP = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    protected static $k_EMsgRequestSessionIPResponse = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    protected static $k_EGCToGCMsgMasterStartupComplete = null;

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    public static function k_EGCToGCMsgMasterAck()
    {
        if (self::$k_EGCToGCMsgMasterAck !== null) {
            return self::$k_EGCToGCMsgMasterAck;
        }

        return self::$k_EGCToGCMsgMasterAck = new self('k_EGCToGCMsgMasterAck', self::k_EGCToGCMsgMasterAck_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    public static function k_EGCToGCMsgMasterAckResponse()
    {
        if (self::$k_EGCToGCMsgMasterAckResponse !== null) {
            return self::$k_EGCToGCMsgMasterAckResponse;
        }

        return self::$k_EGCToGCMsgMasterAckResponse = new self('k_EGCToGCMsgMasterAckResponse', self::k_EGCToGCMsgMasterAckResponse_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    public static function k_EGCToGCMsgRouted()
    {
        if (self::$k_EGCToGCMsgRouted !== null) {
            return self::$k_EGCToGCMsgRouted;
        }

        return self::$k_EGCToGCMsgRouted = new self('k_EGCToGCMsgRouted', self::k_EGCToGCMsgRouted_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    public static function k_EGCToGCMsgRoutedReply()
    {
        if (self::$k_EGCToGCMsgRoutedReply !== null) {
            return self::$k_EGCToGCMsgRoutedReply;
        }

        return self::$k_EGCToGCMsgRoutedReply = new self('k_EGCToGCMsgRoutedReply', self::k_EGCToGCMsgRoutedReply_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    public static function k_EMsgUpdateSessionIP()
    {
        if (self::$k_EMsgUpdateSessionIP !== null) {
            return self::$k_EMsgUpdateSessionIP;
        }

        return self::$k_EMsgUpdateSessionIP = new self('k_EMsgUpdateSessionIP', self::k_EMsgUpdateSessionIP_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    public static function k_EMsgRequestSessionIP()
    {
        if (self::$k_EMsgRequestSessionIP !== null) {
            return self::$k_EMsgRequestSessionIP;
        }

        return self::$k_EMsgRequestSessionIP = new self('k_EMsgRequestSessionIP', self::k_EMsgRequestSessionIP_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    public static function k_EMsgRequestSessionIPResponse()
    {
        if (self::$k_EMsgRequestSessionIPResponse !== null) {
            return self::$k_EMsgRequestSessionIPResponse;
        }

        return self::$k_EMsgRequestSessionIPResponse = new self('k_EMsgRequestSessionIPResponse', self::k_EMsgRequestSessionIPResponse_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    public static function k_EGCToGCMsgMasterStartupComplete()
    {
        if (self::$k_EGCToGCMsgMasterStartupComplete !== null) {
            return self::$k_EGCToGCMsgMasterStartupComplete;
        }

        return self::$k_EGCToGCMsgMasterStartupComplete = new self('k_EGCToGCMsgMasterStartupComplete', self::k_EGCToGCMsgMasterStartupComplete_VALUE);
    }

    /**
     * @param int $value
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGCSystem\EGCToGCMsg
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 150: return self::k_EGCToGCMsgMasterAck();
            case 151: return self::k_EGCToGCMsgMasterAckResponse();
            case 152: return self::k_EGCToGCMsgRouted();
            case 153: return self::k_EGCToGCMsgRoutedReply();
            case 154: return self::k_EMsgUpdateSessionIP();
            case 155: return self::k_EMsgRequestSessionIP();
            case 156: return self::k_EMsgRequestSessionIPResponse();
            case 157: return self::k_EGCToGCMsgMasterStartupComplete();
            default: return null;
        }
    }


}

