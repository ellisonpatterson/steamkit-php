<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_publishedfile.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgPublishedFile.PublishedFileDetails.Tag
 */
class Tag extends \Protobuf\AbstractMessage
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
     * tag optional string = 1
     *
     * @var string
     */
    protected $tag = null;

    /**
     * adminonly optional bool = 2
     *
     * @var bool
     */
    protected $adminonly = null;

    /**
     * Check if 'tag' has a value
     *
     * @return bool
     */
    public function hasTag()
    {
        return $this->tag !== null;
    }

    /**
     * Get 'tag' value
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set 'tag' value
     *
     * @param string $value
     */
    public function setTag($value = null)
    {
        $this->tag = $value;
    }

    /**
     * Check if 'adminonly' has a value
     *
     * @return bool
     */
    public function hasAdminonly()
    {
        return $this->adminonly !== null;
    }

    /**
     * Get 'adminonly' value
     *
     * @return bool
     */
    public function getAdminonly()
    {
        return $this->adminonly;
    }

    /**
     * Set 'adminonly' value
     *
     * @param bool $value
     */
    public function setAdminonly($value = null)
    {
        $this->adminonly = $value;
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
            'tag' => null,
            'adminonly' => null
        ], $values);

        $message->setTag($values['tag']);
        $message->setAdminonly($values['adminonly']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Tag',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'tag',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'adminonly',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
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

        if ($this->tag !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->tag);
        }

        if ($this->adminonly !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->adminonly);
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

                $this->tag = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->adminonly = $reader->readBool($stream);

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

        if ($this->tag !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->tag);
        }

        if ($this->adminonly !== null) {
            $size += 1;
            $size += 1;
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
        $this->tag = null;
        $this->adminonly = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails\Tag) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->tag = ($message->tag !== null) ? $message->tag : $this->tag;
        $this->adminonly = ($message->adminonly !== null) ? $message->adminonly : $this->adminonly;
    }


}

