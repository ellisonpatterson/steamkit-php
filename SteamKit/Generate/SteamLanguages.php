<?php

namespace SteamKit\Generate;

class SteamLanguages
{
	protected $_steamLanguages = [];

	protected function _readerTypeMap()
	{
		return [
			'byte' => [
				'read' => 'readByte',
				'write' => 'writeByte',
			],
			'short' => [
				'read' => 'readShort',
				'write' => 'writeShort'
			],
			'ushort' => [
				'read' => 'readUShort',
				'write' => 'writeUShort',
			],
			'int' => [
				'read' => 'readInt',
				'write' => 'writeInt',
			],
			'uint' => [
				'read' => 'readUInt',
				'write' => 'writeUInt',
			],
			'long' => [
				'read' => 'readLong',
				'write' => 'writeLong',
			],
			'ulong' => [
				'read' => 'readULong',
				'write' => 'writeULong',
			],
			'char' => [
				'read' => 'readString',
				'write' => 'writeString'
			]
		];
	}

	public function generateSteamLanguages()
	{
		echo 'Generating Steam Language...' . "\n";

		\SteamKit\Helper\FileManager::createDirectory(APP_ROOT_FOLDER . 'Base/SteamLanguage');
		$this->_generateInterfaces();

		foreach ($this->_steamLanguages as $steamLanguage) {
			$steamLanguageFile = 'Resources/SteamLanguage/' . $steamLanguage['file'];
			$contents = explode(PHP_EOL, \SteamKit\Helper\FileManager::readFileData($steamLanguageFile));

			// Get a list of all things to process!
			$classes = [];
			foreach ($contents as $line) {
				$line = trim($line);
				$idx = strrpos($line, '//');
				if ($idx !== false) {
					$line = trim(substr($line, 0));
				}

				if (empty($line)) {
					continue;
				}

				$match = false;
				if (preg_match('/^class ([a-zA-Z0-9]+)(<[a-z]+>)?(<.*>)?/', $line, $match)) {
					$classes[] = $match[1];
				}
			}
		}

		$currentSteamLanguage = null;

		foreach ($this->_steamLanguages as $steamLanguage) {
			$steamLanguageFile = 'Resources/SteamLanguage/' . $steamLanguage['file'];
			$contents = explode(PHP_EOL, \SteamKit\Helper\FileManager::readFileData($steamLanguageFile));

			foreach ($contents as $line) {
				$line = trim($line);
				$idx = strrpos($line, '//');
				if ($idx !== false) {
					$line = trim(substr($line, 0));
				}

				if (empty($line)) {
					continue;
				}

				$match = false;
				if (!$currentSteamLanguage) {
					if (preg_match('/^class ([a-zA-Z0-9]+)(<[a-z]+>)?(<.*>)?/', $line, $match)) {
						$emsg = (isset($match[3]) ? $match[3] : false);
						if ($emsg && preg_match('/\<EMsg::(.*)\>/', $line, $extra) !== 0) {
							$emsg = $extra[1];
						}

						$currentSteamLanguage = [
							'class' => $match[1],
							'emsg' => $emsg,
							'const' => [],
							'values' => [],
							'interface' => $steamLanguage['interface']
						];
					}
				} else if (!is_array($currentSteamLanguage)) {
					if ($line != '{') {
						echo 'ERROR PARSING STEAM LANGUAGE FILE!';
						return false;
					}
				} else {
					if (preg_match('/^};?$/', $line)) {
						// if ($currentSteamLanguage['emsg'] === false) {
							// var_dump($currentSteamLanguage);
							// die();
						// }

						$file = "<?php\n\nnamespace SteamKit\\Base\\SteamLanguage;\n\nuse SteamKit\Helper\BinReader;\nuse SteamKit\Helper\BinWriter;\n\nclass " . $currentSteamLanguage['class'] . " implements " . $currentSteamLanguage['interface'] . "\n{";

						if (!empty($currentSteamLanguage['const'])) {
							$file .= "\n";
							foreach ($currentSteamLanguage['const'] as $const) {
								$file .= "\tconst " . $const['name'] . " = " . $const['value'] . ";\n";
							}
						}

						if (!empty($currentSteamLanguage['values'])) {
							foreach ($currentSteamLanguage['values'] as $value) {
								$file .= "\n\tpublic \$" . $value['name'] . " = null;";
							}

							if ($currentSteamLanguage['emsg']) {
								$file .= "\n\tpublic \$emsg = null;\n";
							}
						}

						if (!empty($currentSteamLanguage['values'])) {
							foreach ($currentSteamLanguage['values'] as $value) {
								if ($value['extra'] == 'steamidmarshal') {
									$file .= "\n\tpublic function get" . ucwords($value['name']) . "()\n\t{\n\t\treturn new \SteamID(\$this->steamID);\n\t}\n";
									$file .= "\n\tpublic function set" . ucwords($value['name']) . "()\n\t{\n\t\t\$steamID = new \SteamID(\$value);\n\t\t\$this->steamID = \$steamID->ConvertToUInt64();\n\t}\n";
								} else if ($value['extra'] == 'boolmarshal') {
									
								} else if ($value['extra'] == 'gameidmarshal') {
									
								} else {
									$file .= "\n\tpublic function get" . ucwords($value['name']) . "()\n\t{\n\t\treturn \$this->" . $value['name'] . ";\n\t}\n";
									$file .= "\n\tpublic function set" . ucwords($value['name']) . "(\$value)\n\t{\n\t\t\$this->" . $value['name'] . " = \$value;\n\t}\n";
								}
							}

							$file .= "\n\tpublic function setValues(array \$values = [])\n\t{\n\t\tforeach (\$values as \$name => \$value) {\n\t\t\tif (isset(\$this->\$name)) {\n\t\t\t\t\$this->\$name = \$value;\n\t\t\t}\n\t\t}\n\t}\n";
						}

						switch ($currentSteamLanguage['interface']) {
							case 'ISteamSerializableMessage':
							case 'IGCSerializableMessage':
								$file .= "\n\tpublic function getEMsg()\n\t{\n\t\treturn \$this->emsg;\n\t}\n\n";
								break;
							case 'ISteamSerializableHeader':
							case 'IGCSerializableHeader':
								$file .= "\n\tpublic function setEMsg(int \$emsg)\n\t{\n\t\t\$this->esmg = \$emsg;\n\t}\n\n";
								break;
						}

						if (!empty($currentSteamLanguage['values']) || $currentSteamLanguage['emsg']) {
							$file .= "\tpublic function __construct(array \$values = [])\n\t{";
							foreach ($currentSteamLanguage['values'] as $value) {
								$file .= "\n\t\t\$this->" . $value['name'] . " = " . ($value['value'] ? $value['value'] : 0) . ";";
							}

							if ($currentSteamLanguage['emsg']) {
								$file .= "\n\t\t\$this->emsg = \\SteamKit\\Base\\Enums\\EMsg::" . $currentSteamLanguage['emsg'] . ";";
							}

							$file .= "\n\t\t\$this->setValues(\$values);";

							$file .="\n\t}\n\n";
						}

						if ($currentSteamLanguage['values']) {
							$file .= "\tpublic function encode()\n\t{\n\t\t\$bw = new BinWriter();\n";
							$file .= "\n"; $readerTypeMap = $this->_readerTypeMap();
							foreach ($currentSteamLanguage['values'] as $value) {
								$method = 'writeInt';
								if (array_key_exists($value['type'], $readerTypeMap)) {
									$method = $readerTypeMap[$value['type']]['write'];
								}

								if ($currentSteamLanguage['interface'] == 'ISteamSerializableHeader') {
									if ($value['name'] == 'proto') {
										$file .= "\t\t\$proto = (string) \$this->proto;\n";
										continue;
									}

									if ($value['type'] == 'protomask') {
										$file .= "\t\t\$bw->" . $method . "(\\SteamKit\\Helper\\MsgUtil::makeMsg(\$this->" . $value['name'] . ", true));\n";
										continue;
									}
								}

								if ($currentSteamLanguage['interface'] == 'IGCSerializableHeader') {
									if ($value['name'] == 'proto') {
										$file .= "\t\t\$proto = (string) \$this->proto;\n";
										continue;
									}

									if ($value['type'] == 'protomask') {
										$file .= "\t\t\$bw->" . $method . "(\\SteamKit\\Helper\\MsgUtil::makeGCMsg(\$this->" . $value['name'] . ", true));\n";
										continue;
									}
								}

								$file .= "\t\t\$bw->" . $method . "(\$this->" . $value['name'] . ");\n";
							}

							// $file .= "\n\t\treturn \$bw->sizedByteArray();\n";
							$file .= "\n\t\treturn \$bw;\n";

							$file .= "\t}\n\n";
						}

						if (!empty($currentSteamLanguage['values'])) {
							$file .= "\tpublic function decode(\$stream)\n\t{\n\t\t\$br = new BinReader(\$stream);\n\t\t\$results = [];\n";
							$file .= "\n"; $readerTypeMap = $this->_readerTypeMap();
							foreach ($currentSteamLanguage['values'] as $value) {
								$method = 'readInt';
								if (array_key_exists($value['type'], $readerTypeMap)) {
									$method = $readerTypeMap[$value['type']]['read'];
								}

								$file .= "\t\t\$this->" . $value['name'] . " = \$results['" . $value['name'] . "'] = \$br->" . $method . "();\n";
							}
							$file .= "\n\t\treturn \$results;\n\t}\n";
						}

						$file .= "}\n\n?>";

						// if ($currentSteamLanguage['class'] == 'MsgHdrProtoBuf') {
							// echo '<pre>'; var_dump($currentSteamLanguage); echo '</pre>';
							// die();
						// }

						\SteamKit\Helper\FileManager::writeFileData(APP_ROOT_FOLDER . 'Base/SteamLanguage/' . $currentSteamLanguage['class'] . '.php', $file);

						$currentSteamLanguage = null;
					} else if (!empty($line) && $line !== '{') {
						// echo '<pre>'; var_dump($line); echo '</pre>';

						$extra = false;
						if (preg_match('/\<(.*)\>/', $line, $extra) !== 0) {
							$extra = $extra[1];
							$line = preg_replace('/\<.*\>/', '', $line);
						}

						$attributes = array_values(array_filter(str_replace(['=', ';'], '', preg_split('/\s+/', $line))));

						$flag = $attributes[0];
						if ($type = array_values(array_intersect(array_map('strtolower', explode(' ', $line)), array_keys($this->_readerTypeMap())))) {
							$type = reset($type);
						} else {
							$type = false;
						}

						if ($flag == 'const') {
							$type = $attributes[1];
							$currentSteamLanguage['const'][] = [
								'name' => $attributes[2],
								'type' => $type,
								'value' => $attributes[3]
							];
						} else if ($flag == 'steamidmarshal' && $type == 'ulong') {
							$currentSteamLanguage['values'][] = [
								'name' => $attributes[2],
								'type' => $type,
								'value' => 0,
								'extra' => 'steamidmarshal'
							];
						} else if ($flag == 'boolmarshal' && $type == 'byte') {
							$currentSteamLanguage['value'][] = [
								'name' => $attributes[2],
								'type' => $type,
								'value' => 0,
								'extra' => 'boolmarshal'
							];
						} else if ($flag == 'gameidmarshal' && $type == 'ulong') {
							$currentSteamLanguage['values'][] = [
								'name' => $attributes[2],
								'type' => $type,
								'value' => 0,
								'extra' => 'gameidmarshal'
							];
						} else if ($flag == 'protomask') {
							list($class, $value) = explode('::', $attributes[3]);
							if ($class == 'EMsg') {
								$value = '\SteamKit\Base\Enums\EMsg::' . $value;
							}

							$name = $attributes[1];
							if ($name == 'EMsg') {
								$name = 'msg';
							}

							$currentSteamLanguage['values'][] = [
								'name' => $name,
								'type' => ($type ? $type : $attributes[1]),
								'value' => $value,
								'extra' => $extra
							];
						} else if ($flag == 'protomaskgc') {
							$currentSteamLanguage['values'][] = [
								'name' => $attributes[2],
								'type' => $type,
								'value' => (isset($attributes[3]) ? $attributes[3] : false),
								'extra' => $extra
							];
						} else if ($flag == 'proto') {
							$value = $attributes[1];
							if (strpos($value, 'SteamKit2.GC.Internal.') !== false || strpos($value, 'SteamKit2.Internal.') !== false) {
								$type = substr($value, strrpos($value, '.') + 1);
								$value = 'new \SteamKit\Base\SteamMsgBase\\' . $type . '()';
							}

							$currentSteamLanguage['values'][] = [
								'name' => $flag,
								'type' => $flag,
								'value' => $value,
								'extra' => $extra
							];
						} else {
							$type = ($type ? $type : $attributes[0]);
							$value = (isset($attributes[2]) ? $attributes[2] : false);
							$value = str_replace('ulong.MaxValue', 0xFFFFFFFFFFFFFFFF, $value);
							if (strpos($value, 'EMsg') !== false) {
								$value = '\SteamKit\Base\Enums\\' . $value;
							} else if (strpos($value, '::') !== false) {
								list($class, $value) = explode('::', $value);
								if ($class == $currentSteamLanguage['class']) {
									$value = 'self::' . $value;
								} else if (in_array($class, $classes)) {
									$value = '\SteamKit\Base\SteamLanguage\\' . $class . '::' . $value;
								} else {
									$value = '\SteamKit\Base\Enums\\' . $class . '::' . $value;
								}
							}

							if (!$type || empty($value)) {
								$value = 0;
							}

							$currentSteamLanguage['values'][] = [
								'name' => lcfirst($attributes[1]),
								'type' => ($type ? $type : $attributes[0]),
								'value' => $value,
								'extra' => $extra
							];
						}
					}
				}
			}
		}

		echo 'Steam Language has been generated!' . "\n";
	}

	protected function _generateInterfaces()
	{
		\SteamKit\Helper\FileManager::writeFileData(APP_ROOT_FOLDER . 'Base/SteamLanguage/ISteamSerializable.php', "<?php\n\nnamespace SteamKit\\Base\\SteamLanguage;\n\ninterface ISteamSerializable\n{\n\tpublic function encode();\n\tpublic function decode(\$stream);\n}\n\n?>");
		\SteamKit\Helper\FileManager::writeFileData(APP_ROOT_FOLDER . 'Base/SteamLanguage/ISteamSerializableHeader.php', "<?php\n\nnamespace SteamKit\\Base\\SteamLanguage;\n\ninterface ISteamSerializableHeader extends ISteamSerializable\n{\n\tpublic function setEMsg(int \$msg);\n}\n\n?>");
		\SteamKit\Helper\FileManager::writeFileData(APP_ROOT_FOLDER . 'Base/SteamLanguage/ISteamSerializableMessage.php', "<?php\n\nnamespace SteamKit\\Base\\SteamLanguage;\n\ninterface ISteamSerializableMessage extends ISteamSerializable\n{\n\tpublic function getEMsg();\n}\n\n?>");
		\SteamKit\Helper\FileManager::writeFileData(APP_ROOT_FOLDER . 'Base/SteamLanguage/IGCSerializableHeader.php', "<?php\n\nnamespace SteamKit\\Base\\SteamLanguage;\n\ninterface IGCSerializableHeader extends ISteamSerializable\n{\n\tpublic function setEMsg(int \$msg);\n}\n\n?>");
		\SteamKit\Helper\FileManager::writeFileData(APP_ROOT_FOLDER . 'Base/SteamLanguage/IGCSerializableMessage.php', "<?php\n\nnamespace SteamKit\\Base\\SteamLanguage;\n\ninterface IGCSerializableMessage extends ISteamSerializable\n{\n\tpublic function getEMsg()\n}\n\n?>");
	}

	public function addSteamLanguages(array $files)
	{
		foreach ($files as $file) {
			$this->addSteamLanguage($file);
		}
	}

	public function addSteamLanguage($file)
	{
		$this->_steamLanguages[] = $file;
	}

	public function getSteamLanguages()
	{
		return $this->_steamLanguages;
	}
}