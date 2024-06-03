<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/AntonLeontev/lukomore.git');
set('keep_releases', 3);

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

task('build', function () {
    cd('{{release_path}}');
    run('npm install');
    run('npm run build');
});

task('reboot', function () {
    run('sudo reboot');
});

// Hosts

host('81.177.139.224')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/lukomore');

// Hooks

after('deploy:failed', 'deploy:unlock');
after('deploy:vendors', 'build');
after('deploy:success', 'reboot');
