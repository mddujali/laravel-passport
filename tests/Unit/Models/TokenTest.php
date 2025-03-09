<?php

namespace Tests\Unit\Models;

use Laravel\Passport\Token;
use Tests\Unit\BaseTestCase;

class TokenTest extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->model = app(Token::class);

        $this->table = 'oauth_access_tokens';

        $this->columns = [
            'id',
            'user_id',
            'client_id',
            'name',
            'scopes',
            'revoked',
            'created_at',
            'updated_at',
            'expires_at',
        ];
    }
}
