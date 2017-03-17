<?php

namespace SteamKit\Generate;

class Protobufs
{
	protected $_protobufs = [];

	public function generateProtobufs()
	{
		echo 'Generating Protobufs...' . "\n";

		foreach ($this->_protobufs as $details) {
			exec('php ' . ROOT_FOLDER . 'vendor/bin/protobuf -o ' . $details['output'] . ' ' . $details['includes'] . ' ' . APP_ROOT_FOLDER . $details['file'] . ' 2>&1', $output);
			if (is_array($output) && count($output) > 1) {
				foreach ($output as $line) {
					echo $line . "\n";
				}
			}

			unset($output);
		}

		echo 'Protobufs have been generated!' . "\n";
	}

	public function addProtobufs(array $protobufs)
	{
		foreach ($protobufs as $details) {
			$file = $details['file'];
			$output = (isset($details['output']) ? $details['output'] : false);
			$include = (isset($details['include']) ? $details['include'] : array());
			$replacements = (isset($details['replacements']) ? $details['replacements'] : array());

			$this->addProtobuf($file, $output, $include, $replacements);
		}
	}

	public function addProtobuf($file, $output = false, array $include = array(), array $replacements = array())
	{
		$file = 'Resources/Protobufs/' . $file;

		if (!$output) {
			$output = explode('_', str_replace('.' . pathinfo($file, PATHINFO_EXTENSION), '', substr($file, strrpos($file, '/') + 1)));
		} else {
			$output = explode('/', $output);
		}

		$out = APP_ROOT_FOLDER . 'Base'; $namespace = 'SteamKit\Base'; $package = 'SteamKit.Base';
		foreach ($output as $folder) {
			$folder = ucfirst($folder);
			$out .= '/' . $folder;
			$package .= '.' . $folder;
		}

		$includes = '-i ' . APP_ROOT_FOLDER . 'Resources/Protobufs';
		foreach ($include as &$path) {
			$includes .= ' -i ' . APP_ROOT_FOLDER . 'Resources/Protobufs/' . $path;
		}

		\SteamKit\Helper\FileManager::deleteDirectory($out);
		\SteamKit\Helper\FileManager::createDirectory($out);

		\SteamKit\Helper\FileManager::modifyFile($file, [
			'replace' => $this->_getReplacements($replacements),
			'append' => [
				[
					'ifNotExists' => true,
					'exists' => 'package SteamKit.Base',
					'replace' => "package SteamKit.Base.*\n",
					'toTop' => true,
					'append' => "package $package;\n"
				]
			]
		]);

		$this->_protobufs[] = [
			'file' => $file,
			'includes' => $includes,
			'output' => ROOT_FOLDER,
		];
	}

	public function getProtobufs()
	{
		return $this->_protobufs;
	}

	protected function _getReplacements(array $doReplacements = array())
	{
		$replacements = [
			[
				'find' => '\(\.',
				'replace' => '('
			],
			[
				'find' => 'optional \.',
				'replace' => 'optional '
			],
			[
				'find' => 'repeated \.',
				'replace' => 'repeated '
			],
		];

		if (in_array('steammessages_base', $doReplacements)) {
			$replacements = array_merge($replacements, [
				[
					'find' => 'repeated CMsgAuthTicket',
					'replace' => 'repeated SteamKit.Base.SteamMsgBase.CMsgAuthTicket'
				],
				[
					'find' => 'optional EncryptedAppTicket',
					'replace' => 'optional SteamKit.Base.SteamMsgAppTicket.EncryptedAppTicket'
				],
				[
					'find' => 'option \(msgpool_soft_limit',
					'replace' => 'option (SteamKit.Base.SteamMsgBase.msgpool_soft_limit'
				],
				[
					'find' => 'option \(msgpool_hard_limit',
					'replace' => 'option (SteamKit.Base.SteamMsgBase.msgpool_hard_limit'
				],
			]);
		}

		if (in_array('steammessages_unified_base', $doReplacements)) {
			$replacements = array_merge($replacements, [
				[
					'find' => 'returns \(NoResponse\)',
					'replace' => 'returns (SteamKit.Base.Unified.SteamMsgUnifiedBase.NoResponse)'
				],
				[
					'find' => 'optional string method_description',
					'replace' => 'optional string SteamKit.Base.Unified.SteamMsgUnifiedBase.method_description'
				],
				[
					'find' => 'option \(method_description\)',
					'replace' => 'option (SteamKit.Base.Unified.SteamMsgUnifiedBase.method_description)'
				],
				[
					'find' => 'option \(service_description\)',
					'replace' => 'option (SteamKit.Base.Unified.SteamMsgUnifiedBase.service_description)'
				],
				[
					'find' => 'option \(service_execution_site\)',
					'replace' => 'option (SteamKit.Base.Unified.SteamMsgUnifiedBase.service_execution_site)'
				],
				[
					'find' => '\(description\)',
					'replace' => '(SteamKit.Base.Unified.SteamMsgUnifiedBase.description)'
				],
			]);
		}

		if (in_array('csgo', $doReplacements)) {
			$replacements = array_merge($replacements, [
				[
					'find' => '\(key_field\)',
					'replace' => '(SteamKit.Base.GC.CSGO.SteamMsgBase.key_field)'
				],
				[
					'find' => 'option \(msgpool_soft_limit',
					'replace' => 'option (SteamKit.Base.GC.CSGO.SteamMsgBase.msgpool_soft_limit'
				],
				[
					'find' => 'option \(msgpool_hard_limit',
					'replace' => 'option (SteamKit.Base.GC.CSGO.SteamMsgBase.msgpool_hard_limit'
				],
			]);
		}

		return $replacements;
	}
}