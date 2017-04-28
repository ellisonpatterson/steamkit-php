<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/base_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGC;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgGC.CSOEconItemAttribute
 */
class CSOEconItemAttribute extends \Protobuf\AbstractMessage
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
     * def_index optional uint32 = 1
     *
     * @var int
     */
    protected $def_index = null;

    /**
     * value optional uint32 = 2
     *
     * @var int
     */
    protected $value = null;

    /**
     * value_bytes optional bytes = 3
     *
     * @var \Protobuf\Stream
     */
    protected $value_bytes = null;

    /**
     * Check if 'def_index' has a value
     *
     * @return bool
     */
    public function hasDefIndex()
    {
        return $this->def_index !== null;
    }

    /**
     * Get 'def_index' value
     *
     * @return int
     */
    public function getDefIndex()
    {
        return $this->def_index;
    }

    /**
     * Set 'def_index' value
     *
     * @param int $value
     */
    public function setDefIndex($value = null)
    {
        $this->def_index = $value;
    }

    /**
     * Check if 'value' has a value
     *
     * @return bool
     */
    public function hasValue()
    {
        return $this->value !== null;
    }

    /**
     * Get 'value' value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set 'value' value
     *
     * @param int $value
     */
    public function setValue($value = null)
    {
        $this->value = $value;
    }

    /**
     * Check if 'value_bytes' has a value
     *
     * @return bool
     */
    public function hasValueBytes()
    {
        return $this->value_bytes !== null;
    }

    /**
     * Get 'value_bytes' value
     *
     * @return \Protobuf\Stream
     */
    public function getValueBytes()
    {
        return $this->value_bytes;
    }

    /**
     * Set 'value_bytes' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setValueBytes($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->value_bytes = $value;
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
            'def_index' => null,
            'value' => null,
            'value_bytes' => null
        ], $values);

        $message->setDefIndex($values['def_index']);
        $message->setValue($values['value']);
        $message->setValueBytes($values['value_bytes']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CSOEconItemAttribute',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'def_index',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'value',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'value_bytes',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
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

        if ($this->def_index !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->def_index);
        }

        if ($this->value !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->value);
        }

        if ($this->value_bytes !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeByteStream($stream, $this->value_bytes);
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

                $this->def_index = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->value = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->value_bytes = $reader->readByteStream($stream);

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

        if ($this->def_index !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->def_index);
        }

        if ($this->value !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->value);
        }

        if ($this->value_bytes !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->value_bytes);
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
        $this->def_index = null;
        $this->value = null;
        $this->value_bytes = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemAttribute) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->def_index = ($message->def_index !== null) ? $message->def_index : $this->def_index;
        $this->value = ($message->value !== null) ? $message->value : $this->value;
        $this->value_bytes = ($message->value_bytes !== null) ? $message->value_bytes : $this->value_bytes;
    }


}
