<?php

namespace Play\Message;

use Illuminate\Support\ServiceProvider;

/**
 *
 * @author weirui
 * @date 2021-10-14
 */
class MessageServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    /**
     * 在注册后启动服务
     */
    public function boot()
    {
        // 加载扩展表的路由文件
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        // 加载扩展包的视图文件
        $this->loadViewsFrom(__DIR__.'/views', 'message');
        // 加载扩展包的数据库迁移
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // 加载扩展包的配置文件
        $this->mergeConfigFrom(__DIR__.'/config/message.php', 'message');

        // 进行包发布
        $this->publishes([
            // 发布配置文件
            __DIR__ . '/config/message.php' => config_path('message.php'),
            // 发布视图
            __DIR__ . '/views' => resource_path('views/vendor/contact')
        ]);
    }
}
