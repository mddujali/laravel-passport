<?php

namespace Tests\Unit\Models;

use Laravel\Passport\Client;
use Tests\Unit\BaseTestCase;

class ClientTest extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->model = app(Client::class);

        $this->table = 'oauth_clients';

        $this->columns = [
            'id',
            'user_id',
            'name',
            'secret',
            'provider',
            'redirect',
            'personal_access_client',
            'password_client',
            'revoked',
            'created_at',
            'updated_at',
        ];
    }
}
