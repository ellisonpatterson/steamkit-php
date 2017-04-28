<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2\CMsgClientUseLocalDeviceAuthorizations;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientUseLocalDeviceAuthorizations.DeviceToken
 */
class DeviceToken extends \Protobuf\AbstractMessage
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
     * owner_account_id optional uint32 = 1
     *
     * @var int
     */
    protected $owner_account_id = null;

    /**
     * token_id optional uint64 = 2
     *
     * @var int
     */
    protected $token_id = null;

    /**
     * Check if 'owner_account_id' has a value
     *
     * @return bool
     */
    public function hasOwnerAccountId()
    {
        return $this->owner_account_id !== null;
    }

    /**
     * Get 'owner_account_id' value
     *
     * @return int
     */
    public function getOwnerAccountId()
    {
        return $this->owner_account_id;
    }

    /**
     * Set 'owner_account_id' value
     *
     * @param int $value
     */
    public function setOwnerAccountId($value = null)
    {
        $this->owner_account_id = $value;
    }

    /**
     * Check if 'token_id' has a value
     *
     * @return bool
     */
    public function hasTokenId()
    {
        return $this->token_id !== null;
    }

    /**
     * Get 'token_id' value
     *
     * @return int
     */
    public function getTokenId()
    {
        return $this->token_id;
    }

    /**
     * Set 'token_id' value
     *
     * @param int $value
     */
    public function setTokenId($value = null)
    {
        $this->token_id = $value;
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
            'owner_account_id' => null,
            'token_id' => null
        ], $values);

        $message->setOwnerAccountId($values['owner_account_id']);
        $message->setTokenId($values['token_id']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DeviceToken',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'owner_account_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'token_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
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

        if ($this->owner_account_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->owner_account_id);
        }

        if ($this->token_id !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->token_id);
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

                $this->owner_account_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->token_id = $reader->readVarint($stream);

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

        if ($this->owner_account_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->owner_account_id);
        }

        if ($this->token_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->token_id);
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
        $this->owner_account_id = null;
        $this->token_id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientUseLocalDeviceAuthorizations\DeviceToken) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->owner_account_id = ($message->owner_account_id !== null) ? $message->owner_account_id : $this->owner_account_id;
        $this->token_id = ($message->token_id !== null) ? $message->token_id : $this->token_id;
    }


}
