<?php

namespace Tests\Unit\Models;

use Laravel\Passport\AuthCode;
use Tests\Unit\BaseTestCase;

class AuthCodeTest extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->model = app(AuthCode::class);

        $this->table = 'oauth_auth_codes';

        $this->columns = [
            'id',
            'user_id',
            'client_id',
            'scopes',
            'revoked',
            'expires_at',
        ];
    }
}
