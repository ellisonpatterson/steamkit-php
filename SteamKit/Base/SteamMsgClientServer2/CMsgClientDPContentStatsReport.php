<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientDPContentStatsReport
 */
class CMsgClientDPContentStatsReport extends \Protobuf\AbstractMessage
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
     * stats_machine_id optional fixed64 = 1
     *
     * @var int
     */
    protected $stats_machine_id = null;

    /**
     * country_code optional string = 2
     *
     * @var string
     */
    protected $country_code = null;

    /**
     * os_type optional int32 = 3
     *
     * @var int
     */
    protected $os_type = null;

    /**
     * language optional int32 = 4
     *
     * @var int
     */
    protected $language = null;

    /**
     * num_install_folders optional uint32 = 5
     *
     * @var int
     */
    protected $num_install_folders = null;

    /**
     * num_installed_games optional uint32 = 6
     *
     * @var int
     */
    protected $num_installed_games = null;

    /**
     * size_installed_games optional uint64 = 7
     *
     * @var int
     */
    protected $size_installed_games = null;

    /**
     * Check if 'stats_machine_id' has a value
     *
     * @return bool
     */
    public function hasStatsMachineId()
    {
        return $this->stats_machine_id !== null;
    }

    /**
     * Get 'stats_machine_id' value
     *
     * @return int
     */
    public function getStatsMachineId()
    {
        return $this->stats_machine_id;
    }

    /**
     * Set 'stats_machine_id' value
     *
     * @param int $value
     */
    public function setStatsMachineId($value = null)
    {
        $this->stats_machine_id = $value;
    }

    /**
     * Check if 'country_code' has a value
     *
     * @return bool
     */
    public function hasCountryCode()
    {
        return $this->country_code !== null;
    }

    /**
     * Get 'country_code' value
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Set 'country_code' value
     *
     * @param string $value
     */
    public function setCountryCode($value = null)
    {
        $this->country_code = $value;
    }

    /**
     * Check if 'os_type' has a value
     *
     * @return bool
     */
    public function hasOsType()
    {
        return $this->os_type !== null;
    }

    /**
     * Get 'os_type' value
     *
     * @return int
     */
    public function getOsType()
    {
        return $this->os_type;
    }

    /**
     * Set 'os_type' value
     *
     * @param int $value
     */
    public function setOsType($value = null)
    {
        $this->os_type = $value;
    }

    /**
     * Check if 'language' has a value
     *
     * @return bool
     */
    public function hasLanguage()
    {
        return $this->language !== null;
    }

    /**
     * Get 'language' value
     *
     * @return int
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set 'language' value
     *
     * @param int $value
     */
    public function setLanguage($value = null)
    {
        $this->language = $value;
    }

    /**
     * Check if 'num_install_folders' has a value
     *
     * @return bool
     */
    public function hasNumInstallFolders()
    {
        return $this->num_install_folders !== null;
    }

    /**
     * Get 'num_install_folders' value
     *
     * @return int
     */
    public function getNumInstallFolders()
    {
        return $this->num_install_folders;
    }

    /**
     * Set 'num_install_folders' value
     *
     * @param int $value
     */
    public function setNumInstallFolders($value = null)
    {
        $this->num_install_folders = $value;
    }

    /**
     * Check if 'num_installed_games' has a value
     *
     * @return bool
     */
    public function hasNumInstalledGames()
    {
        return $this->num_installed_games !== null;
    }

    /**
     * Get 'num_installed_games' value
     *
     * @return int
     */
    public function getNumInstalledGames()
    {
        return $this->num_installed_games;
    }

    /**
     * Set 'num_installed_games' value
     *
     * @param int $value
     */
    public function setNumInstalledGames($value = null)
    {
        $this->num_installed_games = $value;
    }

    /**
     * Check if 'size_installed_games' has a value
     *
     * @return bool
     */
    public function hasSizeInstalledGames()
    {
        return $this->size_installed_games !== null;
    }

    /**
     * Get 'size_installed_games' value
     *
     * @return int
     */
    public function getSizeInstalledGames()
    {
        return $this->size_installed_games;
    }

    /**
     * Set 'size_installed_games' value
     *
     * @param int $value
     */
    public function setSizeInstalledGames($value = null)
    {
        $this->size_installed_games = $value;
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
            'stats_machine_id' => null,
            'country_code' => null,
            'os_type' => null,
            'language' => null,
            'num_install_folders' => null,
            'num_installed_games' => null,
            'size_installed_games' => null
        ], $values);

        $message->setStatsMachineId($values['stats_machine_id']);
        $message->setCountryCode($values['country_code']);
        $message->setOsType($values['os_type']);
        $message->setLanguage($values['language']);
        $message->setNumInstallFolders($values['num_install_folders']);
        $message->setNumInstalledGames($values['num_installed_games']);
        $message->setSizeInstalledGames($values['size_installed_games']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientDPContentStatsReport',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'stats_machine_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'country_code',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'os_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'language',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'num_install_folders',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'num_installed_games',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'size_installed_games',
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

        if ($this->stats_machine_id !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->stats_machine_id);
        }

        if ($this->country_code !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->country_code);
        }

        if ($this->os_type !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->os_type);
        }

        if ($this->language !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->language);
        }

        if ($this->num_install_folders !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->num_install_folders);
        }

        if ($this->num_installed_games !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->num_installed_games);
        }

        if ($this->size_installed_games !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->size_installed_games);
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

                $this->stats_machine_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->country_code = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->os_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->language = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->num_install_folders = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->num_installed_games = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->size_installed_games = $reader->readVarint($stream);

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

        if ($this->stats_machine_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->country_code !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->country_code);
        }

        if ($this->os_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->os_type);
        }

        if ($this->language !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->language);
        }

        if ($this->num_install_folders !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->num_install_folders);
        }

        if ($this->num_installed_games !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->num_installed_games);
        }

        if ($this->size_installed_games !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->size_installed_games);
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
        $this->stats_machine_id = null;
        $this->country_code = null;
        $this->os_type = null;
        $this->language = null;
        $this->num_install_folders = null;
        $this->num_installed_games = null;
        $this->size_installed_games = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientDPContentStatsReport) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->stats_machine_id = ($message->stats_machine_id !== null) ? $message->stats_machine_id : $this->stats_machine_id;
        $this->country_code = ($message->country_code !== null) ? $message->country_code : $this->country_code;
        $this->os_type = ($message->os_type !== null) ? $message->os_type : $this->os_type;
        $this->language = ($message->language !== null) ? $message->language : $this->language;
        $this->num_install_folders = ($message->num_install_folders !== null) ? $message->num_install_folders : $this->num_install_folders;
        $this->num_installed_games = ($message->num_installed_games !== null) ? $message->num_installed_games : $this->num_installed_games;
        $this->size_installed_games = ($message->size_installed_games !== null) ? $message->size_installed_games : $this->size_installed_games;
    }


}

