<?php

namespace Tests\Unit\Models;

use Laravel\Passport\PersonalAccessClient;
use Tests\Unit\BaseTestCase;

class PersonalAccessClientTest extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->model = app(PersonalAccessClient::class);

        $this->table = 'oauth_personal_access_clients';

        $this->columns = [
            'id',
            'client_id',
            'created_at',
            'updated_at',
        ];
    }
}
