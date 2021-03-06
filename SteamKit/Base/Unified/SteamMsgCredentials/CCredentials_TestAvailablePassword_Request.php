<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_credentials.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgCredentials;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgCredentials.CCredentials_TestAvailablePassword_Request
 */
class CCredentials_TestAvailablePassword_Request extends \Protobuf\AbstractMessage
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
     * password optional string = 1
     *
     * @var string
     */
    protected $password = null;

    /**
     * sha_digest_password optional bytes = 2
     *
     * @var \Protobuf\Stream
     */
    protected $sha_digest_password = null;

    /**
     * account_name optional string = 3
     *
     * @var string
     */
    protected $account_name = null;

    /**
     * Check if 'password' has a value
     *
     * @return bool
     */
    public function hasPassword()
    {
        return $this->password !== null;
    }

    /**
     * Get 'password' value
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set 'password' value
     *
     * @param string $value
     */
    public function setPassword($value = null)
    {
        $this->password = $value;
    }

    /**
     * Check if 'sha_digest_password' has a value
     *
     * @return bool
     */
    public function hasShaDigestPassword()
    {
        return $this->sha_digest_password !== null;
    }

    /**
     * Get 'sha_digest_password' value
     *
     * @return \Protobuf\Stream
     */
    public function getShaDigestPassword()
    {
        return $this->sha_digest_password;
    }

    /**
     * Set 'sha_digest_password' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setShaDigestPassword($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->sha_digest_password = $value;
    }

    /**
     * Check if 'account_name' has a value
     *
     * @return bool
     */
    public function hasAccountName()
    {
        return $this->account_name !== null;
    }

    /**
     * Get 'account_name' value
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->account_name;
    }

    /**
     * Set 'account_name' value
     *
     * @param string $value
     */
    public function setAccountName($value = null)
    {
        $this->account_name = $value;
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
            'password' => null,
            'sha_digest_password' => null,
            'account_name' => null
        ], $values);

        $message->setPassword($values['password']);
        $message->setShaDigestPassword($values['sha_digest_password']);
        $message->setAccountName($values['account_name']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CCredentials_TestAvailablePassword_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'password',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'sha_digest_password',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'account_name',
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

        if ($this->password !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->password);
        }

        if ($this->sha_digest_password !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeByteStream($stream, $this->sha_digest_password);
        }

        if ($this->account_name !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->account_name);
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

                $this->password = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->sha_digest_password = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->account_name = $reader->readString($stream);

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

        if ($this->password !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->password);
        }

        if ($this->sha_digest_password !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->sha_digest_password);
        }

        if ($this->account_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->account_name);
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
        $this->password = null;
        $this->sha_digest_password = null;
        $this->account_name = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgCredentials\CCredentials_TestAvailablePassword_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->password = ($message->password !== null) ? $message->password : $this->password;
        $this->sha_digest_password = ($message->sha_digest_password !== null) ? $message->sha_digest_password : $this->sha_digest_password;
        $this->account_name = ($message->account_name !== null) ? $message->account_name : $this->account_name;
    }


}

