<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientUpdateMachineAuth
 */
class CMsgClientUpdateMachineAuth extends \Protobuf\AbstractMessage
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
     * filename optional string = 1
     *
     * @var string
     */
    protected $filename = null;

    /**
     * offset optional uint32 = 2
     *
     * @var int
     */
    protected $offset = null;

    /**
     * cubtowrite optional uint32 = 3
     *
     * @var int
     */
    protected $cubtowrite = null;

    /**
     * bytes optional bytes = 4
     *
     * @var \Protobuf\Stream
     */
    protected $bytes = null;

    /**
     * otp_type optional uint32 = 5
     *
     * @var int
     */
    protected $otp_type = null;

    /**
     * otp_identifier optional string = 6
     *
     * @var string
     */
    protected $otp_identifier = null;

    /**
     * otp_sharedsecret optional bytes = 7
     *
     * @var \Protobuf\Stream
     */
    protected $otp_sharedsecret = null;

    /**
     * otp_timedrift optional uint32 = 8
     *
     * @var int
     */
    protected $otp_timedrift = null;

    /**
     * Check if 'filename' has a value
     *
     * @return bool
     */
    public function hasFilename()
    {
        return $this->filename !== null;
    }

    /**
     * Get 'filename' value
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set 'filename' value
     *
     * @param string $value
     */
    public function setFilename($value = null)
    {
        $this->filename = $value;
    }

    /**
     * Check if 'offset' has a value
     *
     * @return bool
     */
    public function hasOffset()
    {
        return $this->offset !== null;
    }

    /**
     * Get 'offset' value
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Set 'offset' value
     *
     * @param int $value
     */
    public function setOffset($value = null)
    {
        $this->offset = $value;
    }

    /**
     * Check if 'cubtowrite' has a value
     *
     * @return bool
     */
    public function hasCubtowrite()
    {
        return $this->cubtowrite !== null;
    }

    /**
     * Get 'cubtowrite' value
     *
     * @return int
     */
    public function getCubtowrite()
    {
        return $this->cubtowrite;
    }

    /**
     * Set 'cubtowrite' value
     *
     * @param int $value
     */
    public function setCubtowrite($value = null)
    {
        $this->cubtowrite = $value;
    }

    /**
     * Check if 'bytes' has a value
     *
     * @return bool
     */
    public function hasBytes()
    {
        return $this->bytes !== null;
    }

    /**
     * Get 'bytes' value
     *
     * @return \Protobuf\Stream
     */
    public function getBytes()
    {
        return $this->bytes;
    }

    /**
     * Set 'bytes' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setBytes($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->bytes = $value;
    }

    /**
     * Check if 'otp_type' has a value
     *
     * @return bool
     */
    public function hasOtpType()
    {
        return $this->otp_type !== null;
    }

    /**
     * Get 'otp_type' value
     *
     * @return int
     */
    public function getOtpType()
    {
        return $this->otp_type;
    }

    /**
     * Set 'otp_type' value
     *
     * @param int $value
     */
    public function setOtpType($value = null)
    {
        $this->otp_type = $value;
    }

    /**
     * Check if 'otp_identifier' has a value
     *
     * @return bool
     */
    public function hasOtpIdentifier()
    {
        return $this->otp_identifier !== null;
    }

    /**
     * Get 'otp_identifier' value
     *
     * @return string
     */
    public function getOtpIdentifier()
    {
        return $this->otp_identifier;
    }

    /**
     * Set 'otp_identifier' value
     *
     * @param string $value
     */
    public function setOtpIdentifier($value = null)
    {
        $this->otp_identifier = $value;
    }

    /**
     * Check if 'otp_sharedsecret' has a value
     *
     * @return bool
     */
    public function hasOtpSharedsecret()
    {
        return $this->otp_sharedsecret !== null;
    }

    /**
     * Get 'otp_sharedsecret' value
     *
     * @return \Protobuf\Stream
     */
    public function getOtpSharedsecret()
    {
        return $this->otp_sharedsecret;
    }

    /**
     * Set 'otp_sharedsecret' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setOtpSharedsecret($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->otp_sharedsecret = $value;
    }

    /**
     * Check if 'otp_timedrift' has a value
     *
     * @return bool
     */
    public function hasOtpTimedrift()
    {
        return $this->otp_timedrift !== null;
    }

    /**
     * Get 'otp_timedrift' value
     *
     * @return int
     */
    public function getOtpTimedrift()
    {
        return $this->otp_timedrift;
    }

    /**
     * Set 'otp_timedrift' value
     *
     * @param int $value
     */
    public function setOtpTimedrift($value = null)
    {
        $this->otp_timedrift = $value;
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
            'filename' => null,
            'offset' => null,
            'cubtowrite' => null,
            'bytes' => null,
            'otp_type' => null,
            'otp_identifier' => null,
            'otp_sharedsecret' => null,
            'otp_timedrift' => null
        ], $values);

        $message->setFilename($values['filename']);
        $message->setOffset($values['offset']);
        $message->setCubtowrite($values['cubtowrite']);
        $message->setBytes($values['bytes']);
        $message->setOtpType($values['otp_type']);
        $message->setOtpIdentifier($values['otp_identifier']);
        $message->setOtpSharedsecret($values['otp_sharedsecret']);
        $message->setOtpTimedrift($values['otp_timedrift']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientUpdateMachineAuth',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'filename',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'offset',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'cubtowrite',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'bytes',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'otp_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'otp_identifier',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'otp_sharedsecret',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'otp_timedrift',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
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

        if ($this->filename !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->filename);
        }

        if ($this->offset !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->offset);
        }

        if ($this->cubtowrite !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->cubtowrite);
        }

        if ($this->bytes !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeByteStream($stream, $this->bytes);
        }

        if ($this->otp_type !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->otp_type);
        }

        if ($this->otp_identifier !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->otp_identifier);
        }

        if ($this->otp_sharedsecret !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeByteStream($stream, $this->otp_sharedsecret);
        }

        if ($this->otp_timedrift !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->otp_timedrift);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->filename = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->offset = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->cubtowrite = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->bytes = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->otp_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->otp_identifier = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->otp_sharedsecret = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->otp_timedrift = $reader->readVarint($stream);

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

        if ($this->filename !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->filename);
        }

        if ($this->offset !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->offset);
        }

        if ($this->cubtowrite !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->cubtowrite);
        }

        if ($this->bytes !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->bytes);
        }

        if ($this->otp_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->otp_type);
        }

        if ($this->otp_identifier !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->otp_identifier);
        }

        if ($this->otp_sharedsecret !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->otp_sharedsecret);
        }

        if ($this->otp_timedrift !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->otp_timedrift);
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
        $this->filename = null;
        $this->offset = null;
        $this->cubtowrite = null;
        $this->bytes = null;
        $this->otp_type = null;
        $this->otp_identifier = null;
        $this->otp_sharedsecret = null;
        $this->otp_timedrift = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientUpdateMachineAuth) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->filename = ($message->filename !== null) ? $message->filename : $this->filename;
        $this->offset = ($message->offset !== null) ? $message->offset : $this->offset;
        $this->cubtowrite = ($message->cubtowrite !== null) ? $message->cubtowrite : $this->cubtowrite;
        $this->bytes = ($message->bytes !== null) ? $message->bytes : $this->bytes;
        $this->otp_type = ($message->otp_type !== null) ? $message->otp_type : $this->otp_type;
        $this->otp_identifier = ($message->otp_identifier !== null) ? $message->otp_identifier : $this->otp_identifier;
        $this->otp_sharedsecret = ($message->otp_sharedsecret !== null) ? $message->otp_sharedsecret : $this->otp_sharedsecret;
        $this->otp_timedrift = ($message->otp_timedrift !== null) ? $message->otp_timedrift : $this->otp_timedrift;
    }


}

