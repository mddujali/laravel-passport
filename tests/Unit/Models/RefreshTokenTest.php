<?php

namespace Tests\Unit\Models;

use Laravel\Passport\RefreshToken;
use Tests\Unit\BaseTestCase;

class RefreshTokenTest extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->model = app(RefreshToken::class);

        $this->table = 'oauth_refresh_tokens';

        $this->columns = [
            'id',
            'access_token_id',
            'revoked',
            'expires_at',
        ];
    }
}
