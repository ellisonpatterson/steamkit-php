<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/steammessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgBase;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgBase.CMsgGCRoutingInfo
 */
class CMsgGCRoutingInfo extends \Protobuf\AbstractMessage
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
     * dir_index repeated uint32 = 1
     *
     * @var \Protobuf\Collection
     */
    protected $dir_index = null;

    /**
     * method optional enum = 2
     *
     * @var \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    protected $method = null;

    /**
     * fallback optional enum = 3
     *
     * @var \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    protected $fallback = null;

    /**
     * protobuf_field optional uint32 = 4
     *
     * @var int
     */
    protected $protobuf_field = null;

    /**
     * webapi_param optional string = 5
     *
     * @var string
     */
    protected $webapi_param = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->method = \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod::RANDOM();
        $this->fallback = \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod::DISCARD();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'dir_index' has a value
     *
     * @return bool
     */
    public function hasDirIndexList()
    {
        return $this->dir_index !== null;
    }

    /**
     * Get 'dir_index' value
     *
     * @return \Protobuf\Collection
     */
    public function getDirIndexList()
    {
        return $this->dir_index;
    }

    /**
     * Set 'dir_index' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setDirIndexList(\Protobuf\Collection $value = null)
    {
        $this->dir_index = $value;
    }

    /**
     * Add a new element to 'dir_index'
     *
     * @param int $value
     */
    public function addDirIndex($value)
    {
        if ($this->dir_index === null) {
            $this->dir_index = new \Protobuf\ScalarCollection();
        }

        $this->dir_index->add($value);
    }

    /**
     * Check if 'method' has a value
     *
     * @return bool
     */
    public function hasMethod()
    {
        return $this->method !== null;
    }

    /**
     * Get 'method' value
     *
     * @return \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set 'method' value
     *
     * @param \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod $value
     */
    public function setMethod(\SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod $value = null)
    {
        $this->method = $value;
    }

    /**
     * Check if 'fallback' has a value
     *
     * @return bool
     */
    public function hasFallback()
    {
        return $this->fallback !== null;
    }

    /**
     * Get 'fallback' value
     *
     * @return \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    public function getFallback()
    {
        return $this->fallback;
    }

    /**
     * Set 'fallback' value
     *
     * @param \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod $value
     */
    public function setFallback(\SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod $value = null)
    {
        $this->fallback = $value;
    }

    /**
     * Check if 'protobuf_field' has a value
     *
     * @return bool
     */
    public function hasProtobufField()
    {
        return $this->protobuf_field !== null;
    }

    /**
     * Get 'protobuf_field' value
     *
     * @return int
     */
    public function getProtobufField()
    {
        return $this->protobuf_field;
    }

    /**
     * Set 'protobuf_field' value
     *
     * @param int $value
     */
    public function setProtobufField($value = null)
    {
        $this->protobuf_field = $value;
    }

    /**
     * Check if 'webapi_param' has a value
     *
     * @return bool
     */
    public function hasWebapiParam()
    {
        return $this->webapi_param !== null;
    }

    /**
     * Get 'webapi_param' value
     *
     * @return string
     */
    public function getWebapiParam()
    {
        return $this->webapi_param;
    }

    /**
     * Set 'webapi_param' value
     *
     * @param string $value
     */
    public function setWebapiParam($value = null)
    {
        $this->webapi_param = $value;
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
            'dir_index' => [],
            'method' => \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod::RANDOM(),
            'fallback' => \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod::DISCARD(),
            'protobuf_field' => null,
            'webapi_param' => null
        ], $values);

        $message->setMethod($values['method']);
        $message->setFallback($values['fallback']);
        $message->setProtobufField($values['protobuf_field']);
        $message->setWebapiParam($values['webapi_param']);

        foreach ($values['dir_index'] as $item) {
            $message->addDirIndex($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGCRoutingInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'dir_index',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'method',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.GC.CSGO.SteamMsgBase.CMsgGCRoutingInfo.RoutingMethod',
                    'default_value' => \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod::RANDOM()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'fallback',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.GC.CSGO.SteamMsgBase.CMsgGCRoutingInfo.RoutingMethod',
                    'default_value' => \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod::DISCARD()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'protobuf_field',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'webapi_param',
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

        if ($this->dir_index !== null) {
            foreach ($this->dir_index as $val) {
                $writer->writeVarint($stream, 8);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->method !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->method->value());
        }

        if ($this->fallback !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->fallback->value());
        }

        if ($this->protobuf_field !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->protobuf_field);
        }

        if ($this->webapi_param !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->webapi_param);
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

                if ($this->dir_index === null) {
                    $this->dir_index = new \Protobuf\ScalarCollection();
                }

                $this->dir_index->add($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->method = \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->fallback = \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->protobuf_field = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->webapi_param = $reader->readString($stream);

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

        if ($this->dir_index !== null) {
            foreach ($this->dir_index as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->method !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->method->value());
        }

        if ($this->fallback !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->fallback->value());
        }

        if ($this->protobuf_field !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->protobuf_field);
        }

        if ($this->webapi_param !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->webapi_param);
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
        $this->dir_index = null;
        $this->method = \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod::RANDOM();
        $this->fallback = \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod::DISCARD();
        $this->protobuf_field = null;
        $this->webapi_param = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCRoutingInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->dir_index = ($message->dir_index !== null) ? $message->dir_index : $this->dir_index;
        $this->method = ($message->method !== null) ? $message->method : $this->method;
        $this->fallback = ($message->fallback !== null) ? $message->fallback : $this->fallback;
        $this->protobuf_field = ($message->protobuf_field !== null) ? $message->protobuf_field : $this->protobuf_field;
        $this->webapi_param = ($message->webapi_param !== null) ? $message->webapi_param : $this->webapi_param;
    }


}
