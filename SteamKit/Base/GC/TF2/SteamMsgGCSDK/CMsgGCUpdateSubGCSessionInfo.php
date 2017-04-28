<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/gcsdk_gcmessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgGCSDK;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamMsgGCSDK.CMsgGCUpdateSubGCSessionInfo
 */
class CMsgGCUpdateSubGCSessionInfo extends \Protobuf\AbstractMessage
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
     * updates repeated message = 1
     *
     * @var \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgGCSDK\CMsgGCUpdateSubGCSessionInfo\CMsgUpdate>
     */
    protected $updates = null;

    /**
     * Check if 'updates' has a value
     *
     * @return bool
     */
    public function hasUpdatesList()
    {
        return $this->updates !== null;
    }

    /**
     * Get 'updates' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgGCSDK\CMsgGCUpdateSubGCSessionInfo\CMsgUpdate>
     */
    public function getUpdatesList()
    {
        return $this->updates;
    }

    /**
     * Set 'updates' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgGCSDK\CMsgGCUpdateSubGCSessionInfo\CMsgUpdate> $value
     */
    public function setUpdatesList(\Protobuf\Collection $value = null)
    {
        $this->updates = $value;
    }

    /**
     * Add a new element to 'updates'
     *
     * @param
     * \SteamKit\Base\GC\TF2\SteamMsgGCSDK\CMsgGCUpdateSubGCSessionInfo\CMsgUpdate
     * $value
     */
    public function addUpdates(\SteamKit\Base\GC\TF2\SteamMsgGCSDK\CMsgGCUpdateSubGCSessionInfo\CMsgUpdate $value)
    {
        if ($this->updates === null) {
            $this->updates = new \Protobuf\MessageCollection();
        }

        $this->updates->add($value);
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
            'updates' => []
        ], $values);

        foreach ($values['updates'] as $item) {
            $message->addUpdates($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGCUpdateSubGCSessionInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'updates',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.GC.TF2.SteamMsgGCSDK.CMsgGCUpdateSubGCSessionInfo.CMsgUpdate'
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

        if ($this->updates !== null) {
            foreach ($this->updates as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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
                $innerMessage = new \SteamKit\Base\GC\TF2\SteamMsgGCSDK\CMsgGCUpdateSubGCSessionInfo\CMsgUpdate();

                if ($this->updates === null) {
                    $this->updates = new \Protobuf\MessageCollection();
                }

                $this->updates->add($innerMessage);

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

        if ($this->updates !== null) {
            foreach ($this->updates as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->updates = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgGCSDK\CMsgGCUpdateSubGCSessionInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->updates = ($message->updates !== null) ? $message->updates : $this->updates;
    }


}
