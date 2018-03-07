<?php

namespace TelefonoEroticoX\Database;

// Interface, so that we can deal with multiple implementations and properly
// mock for testing.
interface DatabaseConnection {
	public function query( $query, array $params );
}