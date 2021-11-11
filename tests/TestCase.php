<?php

namespace Days85\HiveOS\Tests;

use Days85\HiveOS\Facades\HiveOS;
use Days85\HiveOS\ServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app): array
    {
        return ['HiveOS' => HiveOS::class];
    }

    protected function getEnvironmentSetUp($app): void
    {
    }

    protected function defineEnvironment($app)
    {
        $app['config']->set('hiveos.token', 'sometoken');
    }

    protected function getAuthLoginResponse(): array
    {
        return [
            'access_token' => 'string',
            'token_type' => 'bearer',
            'expires_in' => 0,
        ];
    }

    protected function getFarmsResponse(): array
    {
        return [
            'data' => [
                0 => [
                    'id' => 0,
                    'name' => 'Test farm',
                    'timezone' => 'UTC',
                    'gpu_red_temp' => 72,
                    'asic_red_temp' => 72,
                    'asic_red_board_temp' => 72,
                    'gpu_red_mem_temp' => 60,
                    'gpu_red_cpu_temp' => 60,
                    'gpu_red_fan' => 90,
                    'asic_red_fan' => 90,
                    'gpu_red_asr' => 85,
                    'asic_red_asr' => 85,
                    'gpu_red_la' => 1.8,
                    'asic_red_la' => 1.8,
                    'repo_urls' => [
                        0 => 'string',
                    ],
                    'power_price' => 0.1,
                    'power_price_currency' => '$',
                    'charge_on_pool' => true,
                    'autocreate_hash' => '3bf6d003a4a10903bcb6a6f9310bc35c780808ad',
                    'nonfree' => true,
                    'locked' => false,
                    'twofa_required' => true,
                    'trusted' => true,
                    'owner' => [
                        'id' => 12345,
                        'login' => 'john.doe',
                        'name' => 'John Doe',
                        'me' => false,
                    ],
                    'payer' => [
                        'id' => 12345,
                        'login' => 'john.doe',
                        'name' => 'John Doe',
                        'me' => false,
                    ],
                    'personal_settings' => [
                        'is_favorite' => true,
                        'note' => 'string',
                    ],
                    'role' => 'tech',
                    'workers_count' => 10,
                    'rigs_count' => 6,
                    'asics_count' => 4,
                    'disabled_rigs_count' => 1,
                    'disabled_asics_count' => 2,
                    'money' => [
                        'is_paid' => true,
                        'is_free' => true,
                        'balance' => 123.45,
                        'discount' => 10,
                        'monthly_cost' => 0,
                        'daily_cost' => 0,
                        'cost_details' => [
                            0 => [
                                'type' => 11,
                                'type_name' => 'string',
                                'amount' => 1.23,
                                'monthly_price' => 3,
                                'monthly_cost' => 3.69,
                                'daily_cost' => 0.123,
                            ],
                        ],
                        'days_left' => 0,
                        'overdraft' => true,
                        'overdraft_days_left' => 0,
                    ],
                    'stats' => [
                        'workers_total' => 10,
                        'workers_online' => 8,
                        'workers_offline' => 2,
                        'workers_overheated' => 1,
                        'workers_overloaded' => 1,
                        'workers_invalid' => 1,
                        'workers_low_asr' => 1,
                        'rigs_total' => 5,
                        'rigs_online' => 4,
                        'rigs_offline' => 1,
                        'gpus_total' => 32,
                        'gpus_online' => 24,
                        'gpus_offline' => 8,
                        'gpus_overheated' => 3,
                        'asics_total' => 5,
                        'asics_online' => 4,
                        'asics_offline' => 1,
                        'boards_total' => 15,
                        'boards_online' => 12,
                        'boards_offline' => 3,
                        'boards_overheated' => 0,
                        'cpus_online' => 0,
                        'devices_total' => 5,
                        'devices_online' => 4,
                        'devices_offline' => 1,
                        'power_draw' => 4532,
                        'power_cost' => 0.45,
                        'asr' => 99.9,
                    ],
                    'hashrates' => [
                        0 => [
                            'algo' => 'ethash',
                            'hashrate' => 182859,
                        ],
                        1 => [
                            'algo' => 'etchash',
                            'hashrate' => 123456,
                        ],
                    ],
                    'hashrates_by_coin' => [
                        0 => [
                            'coin' => 'ETH',
                            'algo' => 'ethash',
                            'hashrate' => 182859,
                        ],
                    ],
                    'tag_ids' => [
                        0 => 47,
                        1 => 52,
                    ],
                    'hardware_power_draw' => 715,
                    'psu_efficiency' => 85,
                    'octofan_correct_power' => true,
                    'auto_tags' => true,
                    'default_fs' => [
                        1 => 12233,
                        2 => 12244,
                    ],
                ],
            ],
            'tags' => [
                0 => [
                    'id' => 0,
                    'name' => 'string',
                    'color' => 0,
                    'farms_count' => 0,
                    'workers_count' => 0,
                    'type_id' => 1,
                    'user_id' => 0,
                ],
            ],
        ];
    }
}
