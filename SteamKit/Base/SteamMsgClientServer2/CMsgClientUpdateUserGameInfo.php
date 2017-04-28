<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientUpdateUserGameInfo
 */
class CMsgClientUpdateUserGameInfo extends \Protobuf\AbstractMessage
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
     * steamid_idgs optional fixed64 = 1
     *
     * @var int
     */
    protected $steamid_idgs = null;

    /**
     * gameid optional fixed64 = 2
     *
     * @var int
     */
    protected $gameid = null;

    /**
     * game_ip optional uint32 = 3
     *
     * @var int
     */
    protected $game_ip = null;

    /**
     * game_port optional uint32 = 4
     *
     * @var int
     */
    protected $game_port = null;

    /**
     * token optional bytes = 5
     *
     * @var \Protobuf\Stream
     */
    protected $token = null;

    /**
     * Check if 'steamid_idgs' has a value
     *
     * @return bool
     */
    public function hasSteamidIdgs()
    {
        return $this->steamid_idgs !== null;
    }

    /**
     * Get 'steamid_idgs' value
     *
     * @return int
     */
    public function getSteamidIdgs()
    {
        return $this->steamid_idgs;
    }

    /**
     * Set 'steamid_idgs' value
     *
     * @param int $value
     */
    public function setSteamidIdgs($value = null)
    {
        $this->steamid_idgs = $value;
    }

    /**
     * Check if 'gameid' has a value
     *
     * @return bool
     */
    public function hasGameid()
    {
        return $this->gameid !== null;
    }

    /**
     * Get 'gameid' value
     *
     * @return int
     */
    public function getGameid()
    {
        return $this->gameid;
    }

    /**
     * Set 'gameid' value
     *
     * @param int $value
     */
    public function setGameid($value = null)
    {
        $this->gameid = $value;
    }

    /**
     * Check if 'game_ip' has a value
     *
     * @return bool
     */
    public function hasGameIp()
    {
        return $this->game_ip !== null;
    }

    /**
     * Get 'game_ip' value
     *
     * @return int
     */
    public function getGameIp()
    {
        return $this->game_ip;
    }

    /**
     * Set 'game_ip' value
     *
     * @param int $value
     */
    public function setGameIp($value = null)
    {
        $this->game_ip = $value;
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
     * Check if 'token' has a value
     *
     * @return bool
     */
    public function hasToken()
    {
        return $this->token !== null;
    }

    /**
     * Get 'token' value
     *
     * @return \Protobuf\Stream
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set 'token' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setToken($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->token = $value;
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
            'steamid_idgs' => null,
            'gameid' => null,
            'game_ip' => null,
            'game_port' => null,
            'token' => null
        ], $values);

        $message->setSteamidIdgs($values['steamid_idgs']);
        $message->setGameid($values['gameid']);
        $message->setGameIp($values['game_ip']);
        $message->setGamePort($values['game_port']);
        $message->setToken($values['token']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientUpdateUserGameInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steamid_idgs',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'gameid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'game_ip',
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
                    'name' => 'token',
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

        if ($this->steamid_idgs !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->steamid_idgs);
        }

        if ($this->gameid !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeFixed64($stream, $this->gameid);
        }

        if ($this->game_ip !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->game_ip);
        }

        if ($this->game_port !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->game_port);
        }

        if ($this->token !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeByteStream($stream, $this->token);
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

                $this->steamid_idgs = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->gameid = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->game_ip = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->game_port = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->token = $reader->readByteStream($stream);

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

        if ($this->steamid_idgs !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->gameid !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->game_ip !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->game_ip);
        }

        if ($this->game_port !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->game_port);
        }

        if ($this->token !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->token);
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
        $this->steamid_idgs = null;
        $this->gameid = null;
        $this->game_ip = null;
        $this->game_port = null;
        $this->token = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientUpdateUserGameInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steamid_idgs = ($message->steamid_idgs !== null) ? $message->steamid_idgs : $this->steamid_idgs;
        $this->gameid = ($message->gameid !== null) ? $message->gameid : $this->gameid;
        $this->game_ip = ($message->game_ip !== null) ? $message->game_ip : $this->game_ip;
        $this->game_port = ($message->game_port !== null) ? $message->game_port : $this->game_port;
        $this->token = ($message->token !== null) ? $message->token : $this->token;
    }


}
