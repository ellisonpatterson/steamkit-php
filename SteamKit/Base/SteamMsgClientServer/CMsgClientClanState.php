<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer.CMsgClientClanState
 */
class CMsgClientClanState extends \Protobuf\AbstractMessage
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
     * steamid_clan optional fixed64 = 1
     *
     * @var int
     */
    protected $steamid_clan = null;

    /**
     * m_unStatusFlags optional uint32 = 2
     *
     * @var int
     */
    protected $m_unStatusFlags = null;

    /**
     * clan_account_flags optional uint32 = 3
     *
     * @var int
     */
    protected $clan_account_flags = null;

    /**
     * name_info optional message = 4
     *
     * @var \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\NameInfo
     */
    protected $name_info = null;

    /**
     * user_counts optional message = 5
     *
     * @var \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\UserCounts
     */
    protected $user_counts = null;

    /**
     * events repeated message = 6
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\Event>
     */
    protected $events = null;

    /**
     * announcements repeated message = 7
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\Event>
     */
    protected $announcements = null;

    /**
     * Check if 'steamid_clan' has a value
     *
     * @return bool
     */
    public function hasSteamidClan()
    {
        return $this->steamid_clan !== null;
    }

    /**
     * Get 'steamid_clan' value
     *
     * @return int
     */
    public function getSteamidClan()
    {
        return $this->steamid_clan;
    }

    /**
     * Set 'steamid_clan' value
     *
     * @param int $value
     */
    public function setSteamidClan($value = null)
    {
        $this->steamid_clan = $value;
    }

    /**
     * Check if 'm_unStatusFlags' has a value
     *
     * @return bool
     */
    public function hasMUnStatusFlags()
    {
        return $this->m_unStatusFlags !== null;
    }

    /**
     * Get 'm_unStatusFlags' value
     *
     * @return int
     */
    public function getMUnStatusFlags()
    {
        return $this->m_unStatusFlags;
    }

    /**
     * Set 'm_unStatusFlags' value
     *
     * @param int $value
     */
    public function setMUnStatusFlags($value = null)
    {
        $this->m_unStatusFlags = $value;
    }

    /**
     * Check if 'clan_account_flags' has a value
     *
     * @return bool
     */
    public function hasClanAccountFlags()
    {
        return $this->clan_account_flags !== null;
    }

    /**
     * Get 'clan_account_flags' value
     *
     * @return int
     */
    public function getClanAccountFlags()
    {
        return $this->clan_account_flags;
    }

    /**
     * Set 'clan_account_flags' value
     *
     * @param int $value
     */
    public function setClanAccountFlags($value = null)
    {
        $this->clan_account_flags = $value;
    }

    /**
     * Check if 'name_info' has a value
     *
     * @return bool
     */
    public function hasNameInfo()
    {
        return $this->name_info !== null;
    }

    /**
     * Get 'name_info' value
     *
     * @return \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\NameInfo
     */
    public function getNameInfo()
    {
        return $this->name_info;
    }

    /**
     * Set 'name_info' value
     *
     * @param \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\NameInfo $value
     */
    public function setNameInfo(\SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\NameInfo $value = null)
    {
        $this->name_info = $value;
    }

    /**
     * Check if 'user_counts' has a value
     *
     * @return bool
     */
    public function hasUserCounts()
    {
        return $this->user_counts !== null;
    }

    /**
     * Get 'user_counts' value
     *
     * @return \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\UserCounts
     */
    public function getUserCounts()
    {
        return $this->user_counts;
    }

    /**
     * Set 'user_counts' value
     *
     * @param \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\UserCounts $value
     */
    public function setUserCounts(\SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\UserCounts $value = null)
    {
        $this->user_counts = $value;
    }

    /**
     * Check if 'events' has a value
     *
     * @return bool
     */
    public function hasEventsList()
    {
        return $this->events !== null;
    }

    /**
     * Get 'events' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\Event>
     */
    public function getEventsList()
    {
        return $this->events;
    }

    /**
     * Set 'events' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\Event> $value
     */
    public function setEventsList(\Protobuf\Collection $value = null)
    {
        $this->events = $value;
    }

    /**
     * Add a new element to 'events'
     *
     * @param \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\Event $value
     */
    public function addEvents(\SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\Event $value)
    {
        if ($this->events === null) {
            $this->events = new \Protobuf\MessageCollection();
        }

        $this->events->add($value);
    }

    /**
     * Check if 'announcements' has a value
     *
     * @return bool
     */
    public function hasAnnouncementsList()
    {
        return $this->announcements !== null;
    }

    /**
     * Get 'announcements' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\Event>
     */
    public function getAnnouncementsList()
    {
        return $this->announcements;
    }

    /**
     * Set 'announcements' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\Event> $value
     */
    public function setAnnouncementsList(\Protobuf\Collection $value = null)
    {
        $this->announcements = $value;
    }

    /**
     * Add a new element to 'announcements'
     *
     * @param \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\Event $value
     */
    public function addAnnouncements(\SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\Event $value)
    {
        if ($this->announcements === null) {
            $this->announcements = new \Protobuf\MessageCollection();
        }

        $this->announcements->add($value);
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
            'steamid_clan' => null,
            'm_unStatusFlags' => null,
            'clan_account_flags' => null,
            'name_info' => null,
            'user_counts' => null,
            'events' => [],
            'announcements' => []
        ], $values);

        $message->setSteamidClan($values['steamid_clan']);
        $message->setMUnStatusFlags($values['m_unStatusFlags']);
        $message->setClanAccountFlags($values['clan_account_flags']);
        $message->setNameInfo($values['name_info']);
        $message->setUserCounts($values['user_counts']);

        foreach ($values['events'] as $item) {
            $message->addEvents($item);
        }

        foreach ($values['announcements'] as $item) {
            $message->addAnnouncements($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientClanState',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steamid_clan',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'm_unStatusFlags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'clan_account_flags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'name_info',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientClanState.NameInfo'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'user_counts',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientClanState.UserCounts'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'events',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientClanState.Event'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'announcements',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientClanState.Event'
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

        if ($this->steamid_clan !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->steamid_clan);
        }

        if ($this->m_unStatusFlags !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->m_unStatusFlags);
        }

        if ($this->clan_account_flags !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->clan_account_flags);
        }

        if ($this->name_info !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->name_info->serializedSize($sizeContext));
            $this->name_info->writeTo($context);
        }

        if ($this->user_counts !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->user_counts->serializedSize($sizeContext));
            $this->user_counts->writeTo($context);
        }

        if ($this->events !== null) {
            foreach ($this->events as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->announcements !== null) {
            foreach ($this->announcements as $val) {
                $writer->writeVarint($stream, 58);
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

                $this->steamid_clan = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->m_unStatusFlags = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->clan_account_flags = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\NameInfo();

                $this->name_info = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\UserCounts();

                $this->user_counts = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\Event();

                if ($this->events === null) {
                    $this->events = new \Protobuf\MessageCollection();
                }

                $this->events->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState\Event();

                if ($this->announcements === null) {
                    $this->announcements = new \Protobuf\MessageCollection();
                }

                $this->announcements->add($innerMessage);

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

        if ($this->steamid_clan !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->m_unStatusFlags !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->m_unStatusFlags);
        }

        if ($this->clan_account_flags !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->clan_account_flags);
        }

        if ($this->name_info !== null) {
            $innerSize = $this->name_info->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->user_counts !== null) {
            $innerSize = $this->user_counts->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->events !== null) {
            foreach ($this->events as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->announcements !== null) {
            foreach ($this->announcements as $val) {
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
        $this->steamid_clan = null;
        $this->m_unStatusFlags = null;
        $this->clan_account_flags = null;
        $this->name_info = null;
        $this->user_counts = null;
        $this->events = null;
        $this->announcements = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientClanState) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steamid_clan = ($message->steamid_clan !== null) ? $message->steamid_clan : $this->steamid_clan;
        $this->m_unStatusFlags = ($message->m_unStatusFlags !== null) ? $message->m_unStatusFlags : $this->m_unStatusFlags;
        $this->clan_account_flags = ($message->clan_account_flags !== null) ? $message->clan_account_flags : $this->clan_account_flags;
        $this->name_info = ($message->name_info !== null) ? $message->name_info : $this->name_info;
        $this->user_counts = ($message->user_counts !== null) ? $message->user_counts : $this->user_counts;
        $this->events = ($message->events !== null) ? $message->events : $this->events;
        $this->announcements = ($message->announcements !== null) ? $message->announcements : $this->announcements;
    }


}
