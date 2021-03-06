<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer2.CMsgGCClient
 */
class CMsgGCClient extends \Protobuf\AbstractMessage
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
     * appid optional uint32 = 1
     *
     * @var int
     */
    protected $appid = null;

    /**
     * msgtype optional uint32 = 2
     *
     * @var int
     */
    protected $msgtype = null;

    /**
     * payload optional bytes = 3
     *
     * @var \Protobuf\Stream
     */
    protected $payload = null;

    /**
     * steamid optional fixed64 = 4
     *
     * @var int
     */
    protected $steamid = null;

    /**
     * gcname optional string = 5
     *
     * @var string
     */
    protected $gcname = null;

    /**
     * Check if 'appid' has a value
     *
     * @return bool
     */
    public function hasAppid()
    {
        return $this->appid !== null;
    }

    /**
     * Get 'appid' value
     *
     * @return int
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set 'appid' value
     *
     * @param int $value
     */
    public function setAppid($value = null)
    {
        $this->appid = $value;
    }

    /**
     * Check if 'msgtype' has a value
     *
     * @return bool
     */
    public function hasMsgtype()
    {
        return $this->msgtype !== null;
    }

    /**
     * Get 'msgtype' value
     *
     * @return int
     */
    public function getMsgtype()
    {
        return $this->msgtype;
    }

    /**
     * Set 'msgtype' value
     *
     * @param int $value
     */
    public function setMsgtype($value = null)
    {
        $this->msgtype = $value;
    }

    /**
     * Check if 'payload' has a value
     *
     * @return bool
     */
    public function hasPayload()
    {
        return $this->payload !== null;
    }

    /**
     * Get 'payload' value
     *
     * @return \Protobuf\Stream
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Set 'payload' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setPayload($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->payload = $value;
    }

    /**
     * Check if 'steamid' has a value
     *
     * @return bool
     */
    public function hasSteamid()
    {
        return $this->steamid !== null;
    }

    /**
     * Get 'steamid' value
     *
     * @return int
     */
    public function getSteamid()
    {
        return $this->steamid;
    }

    /**
     * Set 'steamid' value
     *
     * @param int $value
     */
    public function setSteamid($value = null)
    {
        $this->steamid = $value;
    }

    /**
     * Check if 'gcname' has a value
     *
     * @return bool
     */
    public function hasGcname()
    {
        return $this->gcname !== null;
    }

    /**
     * Get 'gcname' value
     *
     * @return string
     */
    public function getGcname()
    {
        return $this->gcname;
    }

    /**
     * Set 'gcname' value
     *
     * @param string $value
     */
    public function setGcname($value = null)
    {
        $this->gcname = $value;
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
            'appid' => null,
            'msgtype' => null,
            'payload' => null,
            'steamid' => null,
            'gcname' => null
        ], $values);

        $message->setAppid($values['appid']);
        $message->setMsgtype($values['msgtype']);
        $message->setPayload($values['payload']);
        $message->setSteamid($values['steamid']);
        $message->setGcname($values['gcname']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGCClient',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'msgtype',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'payload',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'steamid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'gcname',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
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

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->msgtype !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->msgtype);
        }

        if ($this->payload !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeByteStream($stream, $this->payload);
        }

        if ($this->steamid !== null) {
            $writer->writeVarint($stream, 33);
            $writer->writeFixed64($stream, $this->steamid);
        }

        if ($this->gcname !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->gcname);
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
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->appid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->msgtype = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->payload = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steamid = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->gcname = $reader->readString($stream);

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

        if ($this->appid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->appid);
        }

        if ($this->msgtype !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->msgtype);
        }

        if ($this->payload !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->payload);
        }

        if ($this->steamid !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->gcname !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->gcname);
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
        $this->appid = null;
        $this->msgtype = null;
        $this->payload = null;
        $this->steamid = null;
        $this->gcname = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgGCClient) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->msgtype = ($message->msgtype !== null) ? $message->msgtype : $this->msgtype;
        $this->payload = ($message->payload !== null) ? $message->payload : $this->payload;
        $this->steamid = ($message->steamid !== null) ? $message->steamid : $this->steamid;
        $this->gcname = ($message->gcname !== null) ? $message->gcname : $this->gcname;
    }


}

