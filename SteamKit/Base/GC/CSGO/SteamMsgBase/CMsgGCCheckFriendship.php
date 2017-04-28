<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/steammessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgBase;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgBase.CMsgGCCheckFriendship
 */
class CMsgGCCheckFriendship extends \Protobuf\AbstractMessage
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
     * steamid_left optional fixed64 = 1
     *
     * @var int
     */
    protected $steamid_left = null;

    /**
     * steamid_right optional fixed64 = 2
     *
     * @var int
     */
    protected $steamid_right = null;

    /**
     * Check if 'steamid_left' has a value
     *
     * @return bool
     */
    public function hasSteamidLeft()
    {
        return $this->steamid_left !== null;
    }

    /**
     * Get 'steamid_left' value
     *
     * @return int
     */
    public function getSteamidLeft()
    {
        return $this->steamid_left;
    }

    /**
     * Set 'steamid_left' value
     *
     * @param int $value
     */
    public function setSteamidLeft($value = null)
    {
        $this->steamid_left = $value;
    }

    /**
     * Check if 'steamid_right' has a value
     *
     * @return bool
     */
    public function hasSteamidRight()
    {
        return $this->steamid_right !== null;
    }

    /**
     * Get 'steamid_right' value
     *
     * @return int
     */
    public function getSteamidRight()
    {
        return $this->steamid_right;
    }

    /**
     * Set 'steamid_right' value
     *
     * @param int $value
     */
    public function setSteamidRight($value = null)
    {
        $this->steamid_right = $value;
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
            'steamid_left' => null,
            'steamid_right' => null
        ], $values);

        $message->setSteamidLeft($values['steamid_left']);
        $message->setSteamidRight($values['steamid_right']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGCCheckFriendship',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steamid_left',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'steamid_right',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
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

        if ($this->steamid_left !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->steamid_left);
        }

        if ($this->steamid_right !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeFixed64($stream, $this->steamid_right);
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

                $this->steamid_left = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steamid_right = $reader->readFixed64($stream);

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

        if ($this->steamid_left !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->steamid_right !== null) {
            $size += 1;
            $size += 8;
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
        $this->steamid_left = null;
        $this->steamid_right = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgBase\CMsgGCCheckFriendship) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steamid_left = ($message->steamid_left !== null) ? $message->steamid_left : $this->steamid_left;
        $this->steamid_right = ($message->steamid_right !== null) ? $message->steamid_right : $this->steamid_right;
    }


}
