<?php

declare(strict_types=1);
// SPDX-FileCopyrightText: Chris Schmidt <signux@gmx.net>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\Haushaltsbuch\Tests\Unit\Controller;

use OCA\Haushaltsbuch\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
