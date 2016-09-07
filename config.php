<?php

return [

	// the url that points to the web/ folder
	'webUrl' => 'http://bot.cebe.cc/',

	// SET THIS IN config.local.php
	// needs the following permissions:
	// - repo
	// - admin:repo_hook
	'github_token' => '',
	'github_username' => '',

	// a secret to verify hooks are really coming from github
	'hook_secret' => '',

	// the repositories to install hooks for
	'repositories' => [
		'cebe-test/testrepo',
		'cebe-test/testrepo-redis',
	],

	// comment on issues that are labeled with a specific label
	// - action: "comment"
	// - label: on which label to react
	// - comment: what to post
	// - close: whether to close the issue after commenting

	// move issues to other repos based on labels
	// - action: "move"
	// - label: on which label to react
	// - repo: the repo to move the issue to

	'actions' => [
		[
			'action' => 'comment',
			'label' => 'question',
			'comment' => <<<COMMENT
_This is an automated comment, triggered by adding the label `question`._
			
Please note, that the GitHub Issue Tracker is for bug reports and feature requests only.

We are happy to help you on the [support forum](http://www.yiiframework.com/forum/), on [IRC](http://www.yiiframework.com/chat/) (#yii on freenode), or [Gitter](https://gitter.im/yiisoft/yii2).

Please use one of the above mentioned resources to discuss the problem.
If the result of the discussion turns out that there really is a bug in the framework, feel free to
come back and provide information on how to reproduce the issue. This issue will be closed for now.
COMMENT
,
			'close' => true,
		],

		[
			'action' => 'move',
			'label' => 'ext:apidoc',
			'repo' => 'yiisoft/yii2-apidoc',
		],

		[
			'action' => 'move',
			'label' => 'ext:authclient',
			'repo' => 'yiisoft/yii2-authclient',
		],

		[
			'action' => 'move',
			'label' => 'ext:bootstrap',
			'repo' => 'yiisoft/yii2-bootstrap',
		],

		[
			'action' => 'move',
			'label' => 'ext:codeception',
			'repo' => 'yiisoft/yii2-codeception',
		],

		[
			'action' => 'move',
			'label' => 'ext:debug',
			'repo' => 'yiisoft/yii2-debug',
		],

		[
			'action' => 'move',
			'label' => 'ext:elasticsearch',
			'repo' => 'yiisoft/yii2-elasticsearch',
		],

		[
			'action' => 'move',
			'label' => 'ext:faker',
			'repo' => 'yiisoft/yii2-faker',
		],

		[
			'action' => 'move',
			'label' => 'ext:gii',
			'repo' => 'yiisoft/yii2-gii',
		],

		[
			'action' => 'move',
			'label' => 'ext:imagine',
			'repo' => 'yiisoft/yii2-imagine',
		],

		[
			'action' => 'move',
			'label' => 'ext:jui',
			'repo' => 'yiisoft/yii2-jui',
		],

		[
			'action' => 'move',
			'label' => 'ext:mongodb',
			'repo' => 'yiisoft/yii2-mongodb',
		],

		[
			'action' => 'move',
			'label' => 'ext:redis',
			'repo' => 'yiisoft/yii2-redis',
		],

		[
			'action' => 'move',
			'label' => 'ext:sphinx',
			'repo' => 'yiisoft/yii2-sphinx',
		],

		[
			'action' => 'move',
			'label' => 'ext:swiftmailer',
			'repo' => 'yiisoft/yii2-swiftmailer',
		],

		[
			'action' => 'move',
			'label' => 'ext:twig',
			'repo' => 'yiisoft/yii2-twig',
		],

		[
			'action' => 'move',
			'label' => 'ext:smarty',
			'repo' => 'yiisoft/yii2-smarty',
		],

	],



];
