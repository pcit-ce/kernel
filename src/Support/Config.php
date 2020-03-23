<?php

declare(strict_types=1);

namespace PCIT\Support;

class Config
{
    /**
     * 配置项 生成数组.
     *
     * @return array
     *
     * @throws \Exception
     */
    public static function config(array $config, string $git_type)
    {
        return $config = [
            'git_type' => $git_type,
            'api_url' => Git::getAPIUrl($git_type),
            'coding' => [
                'client_id' => getenv('CI_CODING_CLIENT_ID'),
                'client_secret' => getenv('CI_CODING_CLIENT_SECRET'),
                'callback_url' => getenv('CI_CODING_CALLBACK_URL'),
                'access_token' => $config['coding_access_token'] ?? null,
                'team' => getenv('CI_CODING_TEAM'),
            ],
            'gitee' => [
                'client_id' => getenv('CI_GITEE_CLIENT_ID'),
                'client_secret' => getenv('CI_GITEE_CLIENT_SECRET'),
                'callback_url' => getenv('CI_GITEE_CALLBACK_URL'),
                'access_token' => $config['gitee_access_token'] ?? null,
            ],
            'github' => [
                'client_id' => getenv('CI_GITHUB_CLIENT_ID'),
                'client_secret' => getenv('CI_GITHUB_CLIENT_SECRET'),
                'callback_url' => getenv('CI_GITHUB_CALLBACK_URL'),
                'access_token' => $config['github_access_token'] ?? null,
            ],
            'tencent_ai' => [
                'app_id' => getenv('CI_TENCENT_AI_APP_ID'),
                'app_key' => getenv('CI_TENCENT_AI_APP_KEY'),
            ],
            'wechat' => [
                'app_id' => getenv('CI_WECHAT_APP_ID'),
                'app_secret' => getenv('CI_WECHAT_APP_SECRET'),
                'token' => getenv('CI_WECHAT_TOKEN'),
                'template_id' => getenv('CI_WECHAT_TEMPLATE_ID'),
                'open_id' => getenv('CI_WECHAT_USER_OPENID'),
            ],
        ];
    }
}
