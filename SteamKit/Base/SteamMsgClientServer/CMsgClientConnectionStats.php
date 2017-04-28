<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer.CMsgClientConnectionStats
 */
class CMsgClientConnectionStats extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * stats_logon optional message = 1
     *
     * @var \SteamKit\Base\SteamMsgClientServer\CMsgClientConnectionStats\Stats_Logon
     */
    protected $stats_logon = null;

    /**
     * stats_vconn optional message = 2
     *
     * @var \SteamKit\Base\SteamMsgClientServer\CMsgClientConnectionStats\Stats_VConn
     */
    protected $stats_vconn = null;

    /**
     * Check if 'stats_logon' has a value
     *
     * @return bool
     */
    public function hasStatsLogon()
    {
        return $this->stats_logon !== null;
    }

    /**
     * Get 'stats_logon' value
     *
     * @return \SteamKit\Base\SteamMsgClientServer\CMsgClientConnectionStats\Stats_Logon
     */
    public function getStatsLogon()
    {
        return $this->stats_logon;
    }

    /**
     * Set 'stats_logon' value
     *
     * @param \SteamKit\Base\SteamMsgClientServer\CMsgClientConnectionStats\Stats_Logon $value
     */
    public function setStatsLogon(\SteamKit\Base\SteamMsgClientServer\CMsgClientConnectionStats\Stats_Logon $value = null)
    {
        $this->stats_logon = $value;
    }

    /**
     * Check if 'stats_vconn' has a value
     *
     * @return bool
     */
    public function hasStatsVconn()
    {
        return $this->stats_vconn !== null;
    }

    /**
     * Get 'stats_vconn' value
     *
     * @return \SteamKit\Base\SteamMsgClientServer\CMsgClientConnectionStats\Stats_VConn
     */
    public function getStatsVconn()
    {
        return $this->stats_vconn;
    }

    /**
     * Set 'stats_vconn' value
     *
     * @param \SteamKit\Base\SteamMsgClientServer\CMsgClientConnectionStats\Stats_VConn $value
     */
    public function setStatsVconn(\SteamKit\Base\SteamMsgClientServer\CMsgClientConnectionStats\Stats_VConn $value = null)
    {
        $this->stats_vconn = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'stats_logon' => null,
            'stats_vconn' => null
        ], $values);

        $message->setStatsLogon($values['stats_logon']);
        $message->setStatsVconn($values['stats_vconn']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientConnectionStats',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'stats_logon',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientConnectionStats.Stats_Logon'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'stats_vconn',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientConnectionStats.Stats_VConn'
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->stats_logon !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->stats_logon->serializedSize($sizeContext));
            $this->stats_logon->writeTo($context);
        }

        if ($this->stats_vconn !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->stats_vconn->serializedSize($sizeContext));
            $this->stats_vconn->writeTo($context);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientConnectionStats\Stats_Logon();

                $this->stats_logon = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientConnectionStats\Stats_VConn();

                $this->stats_vconn = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->stats_logon !== null) {
            $innerSize = $this->stats_logon->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->stats_vconn !== null) {
            $innerSize = $this->stats_vconn->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->stats_logon = null;
        $this->stats_vconn = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientConnectionStats) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->stats_logon = ($message->stats_logon !== null) ? $message->stats_logon : $this->stats_logon;
        $this->stats_vconn = ($message->stats_vconn !== null) ? $message->stats_vconn : $this->stats_vconn;
    }


}
