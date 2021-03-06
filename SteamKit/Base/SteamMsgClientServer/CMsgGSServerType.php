<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer.CMsgGSServerType
 */
class CMsgGSServerType extends \Protobuf\AbstractMessage
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
     * app_id_served optional uint32 = 1
     *
     * @var int
     */
    protected $app_id_served = null;

    /**
     * flags optional uint32 = 2
     *
     * @var int
     */
    protected $flags = null;

    /**
     * game_ip_address optional uint32 = 3
     *
     * @var int
     */
    protected $game_ip_address = null;

    /**
     * game_port optional uint32 = 4
     *
     * @var int
     */
    protected $game_port = null;

    /**
     * game_dir optional string = 5
     *
     * @var string
     */
    protected $game_dir = null;

    /**
     * game_version optional string = 6
     *
     * @var string
     */
    protected $game_version = null;

    /**
     * game_query_port optional uint32 = 7
     *
     * @var int
     */
    protected $game_query_port = null;

    /**
     * Check if 'app_id_served' has a value
     *
     * @return bool
     */
    public function hasAppIdServed()
    {
        return $this->app_id_served !== null;
    }

    /**
     * Get 'app_id_served' value
     *
     * @return int
     */
    public function getAppIdServed()
    {
        return $this->app_id_served;
    }

    /**
     * Set 'app_id_served' value
     *
     * @param int $value
     */
    public function setAppIdServed($value = null)
    {
        $this->app_id_served = $value;
    }

    /**
     * Check if 'flags' has a value
     *
     * @return bool
     */
    public function hasFlags()
    {
        return $this->flags !== null;
    }

    /**
     * Get 'flags' value
     *
     * @return int
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set 'flags' value
     *
     * @param int $value
     */
    public function setFlags($value = null)
    {
        $this->flags = $value;
    }

    /**
     * Check if 'game_ip_address' has a value
     *
     * @return bool
     */
    public function hasGameIpAddress()
    {
        return $this->game_ip_address !== null;
    }

    /**
     * Get 'game_ip_address' value
     *
     * @return int
     */
    public function getGameIpAddress()
    {
        return $this->game_ip_address;
    }

    /**
     * Set 'game_ip_address' value
     *
     * @param int $value
     */
    public function setGameIpAddress($value = null)
    {
        $this->game_ip_address = $value;
    }

    /**
     * Check if 'game_port' has a value
     *
     * @return bool
     */
    public function hasGamePort()
    {
        return $this->game_port !== null;
    }

    /**
     * Get 'game_port' value
     *
     * @return int
     */
    public function getGamePort()
    {
        return $this->game_port;
    }

    /**
     * Set 'game_port' value
     *
     * @param int $value
     */
    public function setGamePort($value = null)
    {
        $this->game_port = $value;
    }

    /**
     * Check if 'game_dir' has a value
     *
     * @return bool
     */
    public function hasGameDir()
    {
        return $this->game_dir !== null;
    }

    /**
     * Get 'game_dir' value
     *
     * @return string
     */
    public function getGameDir()
    {
        return $this->game_dir;
    }

    /**
     * Set 'game_dir' value
     *
     * @param string $value
     */
    public function setGameDir($value = null)
    {
        $this->game_dir = $value;
    }

    /**
     * Check if 'game_version' has a value
     *
     * @return bool
     */
    public function hasGameVersion()
    {
        return $this->game_version !== null;
    }

    /**
     * Get 'game_version' value
     *
     * @return string
     */
    public function getGameVersion()
    {
        return $this->game_version;
    }

    /**
     * Set 'game_version' value
     *
     * @param string $value
     */
    public function setGameVersion($value = null)
    {
        $this->game_version = $value;
    }

    /**
     * Check if 'game_query_port' has a value
     *
     * @return bool
     */
    public function hasGameQueryPort()
    {
        return $this->game_query_port !== null;
    }

    /**
     * Get 'game_query_port' value
     *
     * @return int
     */
    public function getGameQueryPort()
    {
        return $this->game_query_port;
    }

    /**
     * Set 'game_query_port' value
     *
     * @param int $value
     */
    public function setGameQueryPort($value = null)
    {
        $this->game_query_port = $value;
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
            'app_id_served' => null,
            'flags' => null,
            'game_ip_address' => null,
            'game_port' => null,
            'game_dir' => null,
            'game_version' => null,
            'game_query_port' => null
        ], $values);

        $message->setAppIdServed($values['app_id_served']);
        $message->setFlags($values['flags']);
        $message->setGameIpAddress($values['game_ip_address']);
        $message->setGamePort($values['game_port']);
        $message->setGameDir($values['game_dir']);
        $message->setGameVersion($values['game_version']);
        $message->setGameQueryPort($values['game_query_port']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGSServerType',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'app_id_served',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'flags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'game_ip_address',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'game_port',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'game_dir',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'game_version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'game_query_port',
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

        if ($this->app_id_served !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->app_id_served);
        }

        if ($this->flags !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->flags);
        }

        if ($this->game_ip_address !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->game_ip_address);
        }

        if ($this->game_port !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->game_port);
        }

        if ($this->game_dir !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->game_dir);
        }

        if ($this->game_version !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->game_version);
        }

        if ($this->game_query_port !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->game_query_port);
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

                $this->app_id_served = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->flags = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->game_ip_address = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->game_port = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->game_dir = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->game_version = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->game_query_port = $reader->readVarint($stream);

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

        if ($this->app_id_served !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->app_id_served);
        }

        if ($this->flags !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->flags);
        }

        if ($this->game_ip_address !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->game_ip_address);
        }

        if ($this->game_port !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->game_port);
        }

        if ($this->game_dir !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->game_dir);
        }

        if ($this->game_version !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->game_version);
        }

        if ($this->game_query_port !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->game_query_port);
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
        $this->app_id_served = null;
        $this->flags = null;
        $this->game_ip_address = null;
        $this->game_port = null;
        $this->game_dir = null;
        $this->game_version = null;
        $this->game_query_port = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgGSServerType) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->app_id_served = ($message->app_id_served !== null) ? $message->app_id_served : $this->app_id_served;
        $this->flags = ($message->flags !== null) ? $message->flags : $this->flags;
        $this->game_ip_address = ($message->game_ip_address !== null) ? $message->game_ip_address : $this->game_ip_address;
        $this->game_port = ($message->game_port !== null) ? $message->game_port : $this->game_port;
        $this->game_dir = ($message->game_dir !== null) ? $message->game_dir : $this->game_dir;
        $this->game_version = ($message->game_version !== null) ? $message->game_version : $this->game_version;
        $this->game_query_port = ($message->game_query_port !== null) ? $message->game_query_port : $this->game_query_port;
    }


}

