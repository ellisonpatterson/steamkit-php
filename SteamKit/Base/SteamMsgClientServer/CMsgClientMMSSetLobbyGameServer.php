<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientMMSSetLobbyGameServer
 */
class CMsgClientMMSSetLobbyGameServer extends \Protobuf\AbstractMessage
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
     * app_id optional uint32 = 1
     *
     * @var int
     */
    protected $app_id = null;

    /**
     * steam_id_lobby optional fixed64 = 2
     *
     * @var int
     */
    protected $steam_id_lobby = null;

    /**
     * game_server_ip optional uint32 = 3
     *
     * @var int
     */
    protected $game_server_ip = null;

    /**
     * game_server_port optional uint32 = 4
     *
     * @var int
     */
    protected $game_server_port = null;

    /**
     * game_server_steam_id optional fixed64 = 5
     *
     * @var int
     */
    protected $game_server_steam_id = null;

    /**
     * Check if 'app_id' has a value
     *
     * @return bool
     */
    public function hasAppId()
    {
        return $this->app_id !== null;
    }

    /**
     * Get 'app_id' value
     *
     * @return int
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Set 'app_id' value
     *
     * @param int $value
     */
    public function setAppId($value = null)
    {
        $this->app_id = $value;
    }

    /**
     * Check if 'steam_id_lobby' has a value
     *
     * @return bool
     */
    public function hasSteamIdLobby()
    {
        return $this->steam_id_lobby !== null;
    }

    /**
     * Get 'steam_id_lobby' value
     *
     * @return int
     */
    public function getSteamIdLobby()
    {
        return $this->steam_id_lobby;
    }

    /**
     * Set 'steam_id_lobby' value
     *
     * @param int $value
     */
    public function setSteamIdLobby($value = null)
    {
        $this->steam_id_lobby = $value;
    }

    /**
     * Check if 'game_server_ip' has a value
     *
     * @return bool
     */
    public function hasGameServerIp()
    {
        return $this->game_server_ip !== null;
    }

    /**
     * Get 'game_server_ip' value
     *
     * @return int
     */
    public function getGameServerIp()
    {
        return $this->game_server_ip;
    }

    /**
     * Set 'game_server_ip' value
     *
     * @param int $value
     */
    public function setGameServerIp($value = null)
    {
        $this->game_server_ip = $value;
    }

    /**
     * Check if 'game_server_port' has a value
     *
     * @return bool
     */
    public function hasGameServerPort()
    {
        return $this->game_server_port !== null;
    }

    /**
     * Get 'game_server_port' value
     *
     * @return int
     */
    public function getGameServerPort()
    {
        return $this->game_server_port;
    }

    /**
     * Set 'game_server_port' value
     *
     * @param int $value
     */
    public function setGameServerPort($value = null)
    {
        $this->game_server_port = $value;
    }

    /**
     * Check if 'game_server_steam_id' has a value
     *
     * @return bool
     */
    public function hasGameServerSteamId()
    {
        return $this->game_server_steam_id !== null;
    }

    /**
     * Get 'game_server_steam_id' value
     *
     * @return int
     */
    public function getGameServerSteamId()
    {
        return $this->game_server_steam_id;
    }

    /**
     * Set 'game_server_steam_id' value
     *
     * @param int $value
     */
    public function setGameServerSteamId($value = null)
    {
        $this->game_server_steam_id = $value;
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
            'app_id' => null,
            'steam_id_lobby' => null,
            'game_server_ip' => null,
            'game_server_port' => null,
            'game_server_steam_id' => null
        ], $values);

        $message->setAppId($values['app_id']);
        $message->setSteamIdLobby($values['steam_id_lobby']);
        $message->setGameServerIp($values['game_server_ip']);
        $message->setGameServerPort($values['game_server_port']);
        $message->setGameServerSteamId($values['game_server_steam_id']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientMMSSetLobbyGameServer',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'steam_id_lobby',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'game_server_ip',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'game_server_port',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'game_server_steam_id',
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

        if ($this->app_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->app_id);
        }

        if ($this->steam_id_lobby !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeFixed64($stream, $this->steam_id_lobby);
        }

        if ($this->game_server_ip !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->game_server_ip);
        }

        if ($this->game_server_port !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->game_server_port);
        }

        if ($this->game_server_steam_id !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeFixed64($stream, $this->game_server_steam_id);
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

                $this->app_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steam_id_lobby = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->game_server_ip = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->game_server_port = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->game_server_steam_id = $reader->readFixed64($stream);

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

        if ($this->app_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->app_id);
        }

        if ($this->steam_id_lobby !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->game_server_ip !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->game_server_ip);
        }

        if ($this->game_server_port !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->game_server_port);
        }

        if ($this->game_server_steam_id !== null) {
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
        $this->app_id = null;
        $this->steam_id_lobby = null;
        $this->game_server_ip = null;
        $this->game_server_port = null;
        $this->game_server_steam_id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientMMSSetLobbyGameServer) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->app_id = ($message->app_id !== null) ? $message->app_id : $this->app_id;
        $this->steam_id_lobby = ($message->steam_id_lobby !== null) ? $message->steam_id_lobby : $this->steam_id_lobby;
        $this->game_server_ip = ($message->game_server_ip !== null) ? $message->game_server_ip : $this->game_server_ip;
        $this->game_server_port = ($message->game_server_port !== null) ? $message->game_server_port : $this->game_server_port;
        $this->game_server_steam_id = ($message->game_server_steam_id !== null) ? $message->game_server_steam_id : $this->game_server_steam_id;
    }


}

