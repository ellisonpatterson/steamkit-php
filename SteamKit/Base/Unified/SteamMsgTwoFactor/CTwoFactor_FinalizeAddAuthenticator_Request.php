<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_twofactor.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgTwoFactor;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgTwoFactor.CTwoFactor_FinalizeAddAuthenticator_Request
 */
class CTwoFactor_FinalizeAddAuthenticator_Request extends \Protobuf\AbstractMessage
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
     * authenticator_code optional string = 2
     *
     * @var string
     */
    protected $authenticator_code = null;

    /**
     * authenticator_time optional uint64 = 3
     *
     * @var int
     */
    protected $authenticator_time = null;

    /**
     * activation_code optional string = 4
     *
     * @var string
     */
    protected $activation_code = null;

    /**
     * http_headers repeated string = 5
     *
     * @var \Protobuf\Collection
     */
    protected $http_headers = null;

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
     * Check if 'authenticator_code' has a value
     *
     * @return bool
     */
    public function hasAuthenticatorCode()
    {
        return $this->authenticator_code !== null;
    }

    /**
     * Get 'authenticator_code' value
     *
     * @return string
     */
    public function getAuthenticatorCode()
    {
        return $this->authenticator_code;
    }

    /**
     * Set 'authenticator_code' value
     *
     * @param string $value
     */
    public function setAuthenticatorCode($value = null)
    {
        $this->authenticator_code = $value;
    }

    /**
     * Check if 'authenticator_time' has a value
     *
     * @return bool
     */
    public function hasAuthenticatorTime()
    {
        return $this->authenticator_time !== null;
    }

    /**
     * Get 'authenticator_time' value
     *
     * @return int
     */
    public function getAuthenticatorTime()
    {
        return $this->authenticator_time;
    }

    /**
     * Set 'authenticator_time' value
     *
     * @param int $value
     */
    public function setAuthenticatorTime($value = null)
    {
        $this->authenticator_time = $value;
    }

    /**
     * Check if 'activation_code' has a value
     *
     * @return bool
     */
    public function hasActivationCode()
    {
        return $this->activation_code !== null;
    }

    /**
     * Get 'activation_code' value
     *
     * @return string
     */
    public function getActivationCode()
    {
        return $this->activation_code;
    }

    /**
     * Set 'activation_code' value
     *
     * @param string $value
     */
    public function setActivationCode($value = null)
    {
        $this->activation_code = $value;
    }

    /**
     * Check if 'http_headers' has a value
     *
     * @return bool
     */
    public function hasHttpHeadersList()
    {
        return $this->http_headers !== null;
    }

    /**
     * Get 'http_headers' value
     *
     * @return \Protobuf\Collection
     */
    public function getHttpHeadersList()
    {
        return $this->http_headers;
    }

    /**
     * Set 'http_headers' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setHttpHeadersList(\Protobuf\Collection $value = null)
    {
        $this->http_headers = $value;
    }

    /**
     * Add a new element to 'http_headers'
     *
     * @param string $value
     */
    public function addHttpHeaders($value)
    {
        if ($this->http_headers === null) {
            $this->http_headers = new \Protobuf\ScalarCollection();
        }

        $this->http_headers->add($value);
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
            'authenticator_code' => null,
            'authenticator_time' => null,
            'activation_code' => null,
            'http_headers' => []
        ], $values);

        $message->setSteamid($values['steamid']);
        $message->setAuthenticatorCode($values['authenticator_code']);
        $message->setAuthenticatorTime($values['authenticator_time']);
        $message->setActivationCode($values['activation_code']);

        foreach ($values['http_headers'] as $item) {
            $message->addHttpHeaders($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CTwoFactor_FinalizeAddAuthenticator_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steamid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'authenticator_code',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'authenticator_time',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'activation_code',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'http_headers',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->authenticator_code !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->authenticator_code);
        }

        if ($this->authenticator_time !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->authenticator_time);
        }

        if ($this->activation_code !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->activation_code);
        }

        if ($this->http_headers !== null) {
            foreach ($this->http_headers as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeString($stream, $val);
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
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steamid = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->authenticator_code = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->authenticator_time = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->activation_code = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->http_headers === null) {
                    $this->http_headers = new \Protobuf\ScalarCollection();
                }

                $this->http_headers->add($reader->readString($stream));

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

        if ($this->authenticator_code !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->authenticator_code);
        }

        if ($this->authenticator_time !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->authenticator_time);
        }

        if ($this->activation_code !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->activation_code);
        }

        if ($this->http_headers !== null) {
            foreach ($this->http_headers as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
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
        $this->steamid = null;
        $this->authenticator_code = null;
        $this->authenticator_time = null;
        $this->activation_code = null;
        $this->http_headers = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgTwoFactor\CTwoFactor_FinalizeAddAuthenticator_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steamid = ($message->steamid !== null) ? $message->steamid : $this->steamid;
        $this->authenticator_code = ($message->authenticator_code !== null) ? $message->authenticator_code : $this->authenticator_code;
        $this->authenticator_time = ($message->authenticator_time !== null) ? $message->authenticator_time : $this->authenticator_time;
        $this->activation_code = ($message->activation_code !== null) ? $message->activation_code : $this->activation_code;
        $this->http_headers = ($message->http_headers !== null) ? $message->http_headers : $this->http_headers;
    }


}

