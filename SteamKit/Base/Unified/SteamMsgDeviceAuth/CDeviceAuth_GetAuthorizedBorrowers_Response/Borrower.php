<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_deviceauth.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetAuthorizedBorrowers_Response;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgDeviceAuth.CDeviceAuth_GetAuthorizedBorrowers_Response.Borrower
 */
class Borrower extends \Protobuf\AbstractMessage
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
     * steamid optional fixed64 = 1
     *
     * @var int
     */
    protected $steamid = null;

    /**
     * is_pending optional bool = 2
     *
     * @var bool
     */
    protected $is_pending = null;

    /**
     * is_canceled optional bool = 3
     *
     * @var bool
     */
    protected $is_canceled = null;

    /**
     * time_created optional uint32 = 4
     *
     * @var int
     */
    protected $time_created = null;

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
     * Check if 'is_pending' has a value
     *
     * @return bool
     */
    public function hasIsPending()
    {
        return $this->is_pending !== null;
    }

    /**
     * Get 'is_pending' value
     *
     * @return bool
     */
    public function getIsPending()
    {
        return $this->is_pending;
    }

    /**
     * Set 'is_pending' value
     *
     * @param bool $value
     */
    public function setIsPending($value = null)
    {
        $this->is_pending = $value;
    }

    /**
     * Check if 'is_canceled' has a value
     *
     * @return bool
     */
    public function hasIsCanceled()
    {
        return $this->is_canceled !== null;
    }

    /**
     * Get 'is_canceled' value
     *
     * @return bool
     */
    public function getIsCanceled()
    {
        return $this->is_canceled;
    }

    /**
     * Set 'is_canceled' value
     *
     * @param bool $value
     */
    public function setIsCanceled($value = null)
    {
        $this->is_canceled = $value;
    }

    /**
     * Check if 'time_created' has a value
     *
     * @return bool
     */
    public function hasTimeCreated()
    {
        return $this->time_created !== null;
    }

    /**
     * Get 'time_created' value
     *
     * @return int
     */
    public function getTimeCreated()
    {
        return $this->time_created;
    }

    /**
     * Set 'time_created' value
     *
     * @param int $value
     */
    public function setTimeCreated($value = null)
    {
        $this->time_created = $value;
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
            'steamid' => null,
            'is_pending' => null,
            'is_canceled' => null,
            'time_created' => null
        ], $values);

        $message->setSteamid($values['steamid']);
        $message->setIsPending($values['is_pending']);
        $message->setIsCanceled($values['is_canceled']);
        $message->setTimeCreated($values['time_created']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Borrower',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steamid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'is_pending',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'is_canceled',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'time_created',
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

        if ($this->steamid !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->steamid);
        }

        if ($this->is_pending !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->is_pending);
        }

        if ($this->is_canceled !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->is_canceled);
        }

        if ($this->time_created !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->time_created);
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
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steamid = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_pending = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_canceled = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->time_created = $reader->readVarint($stream);

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

        if ($this->steamid !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->is_pending !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->is_canceled !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->time_created !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->time_created);
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
        $this->steamid = null;
        $this->is_pending = null;
        $this->is_canceled = null;
        $this->time_created = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgDeviceAuth\CDeviceAuth_GetAuthorizedBorrowers_Response\Borrower) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steamid = ($message->steamid !== null) ? $message->steamid : $this->steamid;
        $this->is_pending = ($message->is_pending !== null) ? $message->is_pending : $this->is_pending;
        $this->is_canceled = ($message->is_canceled !== null) ? $message->is_canceled : $this->is_canceled;
        $this->time_created = ($message->time_created !== null) ? $message->time_created : $this->time_created;
    }


}

