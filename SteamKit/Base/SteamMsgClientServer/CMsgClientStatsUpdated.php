<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer.CMsgClientStatsUpdated
 */
class CMsgClientStatsUpdated extends \Protobuf\AbstractMessage
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
     * steam_id optional fixed64 = 1
     *
     * @var int
     */
    protected $steam_id = null;

    /**
     * game_id optional fixed64 = 2
     *
     * @var int
     */
    protected $game_id = null;

    /**
     * crc_stats optional uint32 = 3
     *
     * @var int
     */
    protected $crc_stats = null;

    /**
     * updated_stats repeated message = 4
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientStatsUpdated\Updated_Stats>
     */
    protected $updated_stats = null;

    /**
     * Check if 'steam_id' has a value
     *
     * @return bool
     */
    public function hasSteamId()
    {
        return $this->steam_id !== null;
    }

    /**
     * Get 'steam_id' value
     *
     * @return int
     */
    public function getSteamId()
    {
        return $this->steam_id;
    }

    /**
     * Set 'steam_id' value
     *
     * @param int $value
     */
    public function setSteamId($value = null)
    {
        $this->steam_id = $value;
    }

    /**
     * Check if 'game_id' has a value
     *
     * @return bool
     */
    public function hasGameId()
    {
        return $this->game_id !== null;
    }

    /**
     * Get 'game_id' value
     *
     * @return int
     */
    public function getGameId()
    {
        return $this->game_id;
    }

    /**
     * Set 'game_id' value
     *
     * @param int $value
     */
    public function setGameId($value = null)
    {
        $this->game_id = $value;
    }

    /**
     * Check if 'crc_stats' has a value
     *
     * @return bool
     */
    public function hasCrcStats()
    {
        return $this->crc_stats !== null;
    }

    /**
     * Get 'crc_stats' value
     *
     * @return int
     */
    public function getCrcStats()
    {
        return $this->crc_stats;
    }

    /**
     * Set 'crc_stats' value
     *
     * @param int $value
     */
    public function setCrcStats($value = null)
    {
        $this->crc_stats = $value;
    }

    /**
     * Check if 'updated_stats' has a value
     *
     * @return bool
     */
    public function hasUpdatedStatsList()
    {
        return $this->updated_stats !== null;
    }

    /**
     * Get 'updated_stats' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientStatsUpdated\Updated_Stats>
     */
    public function getUpdatedStatsList()
    {
        return $this->updated_stats;
    }

    /**
     * Set 'updated_stats' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientStatsUpdated\Updated_Stats> $value
     */
    public function setUpdatedStatsList(\Protobuf\Collection $value = null)
    {
        $this->updated_stats = $value;
    }

    /**
     * Add a new element to 'updated_stats'
     *
     * @param \SteamKit\Base\SteamMsgClientServer\CMsgClientStatsUpdated\Updated_Stats
     * $value
     */
    public function addUpdatedStats(\SteamKit\Base\SteamMsgClientServer\CMsgClientStatsUpdated\Updated_Stats $value)
    {
        if ($this->updated_stats === null) {
            $this->updated_stats = new \Protobuf\MessageCollection();
        }

        $this->updated_stats->add($value);
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
            'steam_id' => null,
            'game_id' => null,
            'crc_stats' => null,
            'updated_stats' => []
        ], $values);

        $message->setSteamId($values['steam_id']);
        $message->setGameId($values['game_id']);
        $message->setCrcStats($values['crc_stats']);

        foreach ($values['updated_stats'] as $item) {
            $message->addUpdatedStats($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientStatsUpdated',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steam_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'game_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'crc_stats',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'updated_stats',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientStatsUpdated.Updated_Stats'
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

        if ($this->steam_id !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->steam_id);
        }

        if ($this->game_id !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeFixed64($stream, $this->game_id);
        }

        if ($this->crc_stats !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->crc_stats);
        }

        if ($this->updated_stats !== null) {
            foreach ($this->updated_stats as $val) {
                $writer->writeVarint($stream, 34);
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
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steam_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->game_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->crc_stats = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientStatsUpdated\Updated_Stats();

                if ($this->updated_stats === null) {
                    $this->updated_stats = new \Protobuf\MessageCollection();
                }

                $this->updated_stats->add($innerMessage);

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

        if ($this->steam_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->game_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->crc_stats !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->crc_stats);
        }

        if ($this->updated_stats !== null) {
            foreach ($this->updated_stats as $val) {
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
        $this->steam_id = null;
        $this->game_id = null;
        $this->crc_stats = null;
        $this->updated_stats = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientStatsUpdated) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steam_id = ($message->steam_id !== null) ? $message->steam_id : $this->steam_id;
        $this->game_id = ($message->game_id !== null) ? $message->game_id : $this->game_id;
        $this->crc_stats = ($message->crc_stats !== null) ? $message->crc_stats : $this->crc_stats;
        $this->updated_stats = ($message->updated_stats !== null) ? $message->updated_stats : $this->updated_stats;
    }


}
