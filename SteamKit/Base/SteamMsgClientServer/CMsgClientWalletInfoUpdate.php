<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer.CMsgClientWalletInfoUpdate
 */
class CMsgClientWalletInfoUpdate extends \Protobuf\AbstractMessage
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
     * has_wallet optional bool = 1
     *
     * @var bool
     */
    protected $has_wallet = null;

    /**
     * balance optional int32 = 2
     *
     * @var int
     */
    protected $balance = null;

    /**
     * currency optional int32 = 3
     *
     * @var int
     */
    protected $currency = null;

    /**
     * balance_delayed optional int32 = 4
     *
     * @var int
     */
    protected $balance_delayed = null;

    /**
     * Check if 'has_wallet' has a value
     *
     * @return bool
     */
    public function hasHasWallet()
    {
        return $this->has_wallet !== null;
    }

    /**
     * Get 'has_wallet' value
     *
     * @return bool
     */
    public function getHasWallet()
    {
        return $this->has_wallet;
    }

    /**
     * Set 'has_wallet' value
     *
     * @param bool $value
     */
    public function setHasWallet($value = null)
    {
        $this->has_wallet = $value;
    }

    /**
     * Check if 'balance' has a value
     *
     * @return bool
     */
    public function hasBalance()
    {
        return $this->balance !== null;
    }

    /**
     * Get 'balance' value
     *
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set 'balance' value
     *
     * @param int $value
     */
    public function setBalance($value = null)
    {
        $this->balance = $value;
    }

    /**
     * Check if 'currency' has a value
     *
     * @return bool
     */
    public function hasCurrency()
    {
        return $this->currency !== null;
    }

    /**
     * Get 'currency' value
     *
     * @return int
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set 'currency' value
     *
     * @param int $value
     */
    public function setCurrency($value = null)
    {
        $this->currency = $value;
    }

    /**
     * Check if 'balance_delayed' has a value
     *
     * @return bool
     */
    public function hasBalanceDelayed()
    {
        return $this->balance_delayed !== null;
    }

    /**
     * Get 'balance_delayed' value
     *
     * @return int
     */
    public function getBalanceDelayed()
    {
        return $this->balance_delayed;
    }

    /**
     * Set 'balance_delayed' value
     *
     * @param int $value
     */
    public function setBalanceDelayed($value = null)
    {
        $this->balance_delayed = $value;
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
            'has_wallet' => null,
            'balance' => null,
            'currency' => null,
            'balance_delayed' => null
        ], $values);

        $message->setHasWallet($values['has_wallet']);
        $message->setBalance($values['balance']);
        $message->setCurrency($values['currency']);
        $message->setBalanceDelayed($values['balance_delayed']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientWalletInfoUpdate',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'has_wallet',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'balance',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'currency',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'balance_delayed',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
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

        if ($this->has_wallet !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->has_wallet);
        }

        if ($this->balance !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->balance);
        }

        if ($this->currency !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->currency);
        }

        if ($this->balance_delayed !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->balance_delayed);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->has_wallet = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->balance = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->currency = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->balance_delayed = $reader->readVarint($stream);

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

        if ($this->has_wallet !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->balance !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->balance);
        }

        if ($this->currency !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->currency);
        }

        if ($this->balance_delayed !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->balance_delayed);
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
        $this->has_wallet = null;
        $this->balance = null;
        $this->currency = null;
        $this->balance_delayed = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientWalletInfoUpdate) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->has_wallet = ($message->has_wallet !== null) ? $message->has_wallet : $this->has_wallet;
        $this->balance = ($message->balance !== null) ? $message->balance : $this->balance;
        $this->currency = ($message->currency !== null) ? $message->currency : $this->currency;
        $this->balance_delayed = ($message->balance_delayed !== null) ? $message->balance_delayed : $this->balance_delayed;
    }


}
