<?php
namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'my_project');

// Project repository
set('repository', '');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
set('shared_files', []);
set('shared_dirs', []);

// Writable dirs by web server 
set('writable_dirs', []);


// Hosts
// host('cruzersoftwares-local.com')
//     ->set('deploy_path', '~/{{application}}');    

// localhost()
//     ->stage('production')
//     ->roles('test', 'build');

// host('cruzersoftwares.com')
//     ->user('name')
//     ->port(22)
//     ->configFile('~/.ssh/config')
//     ->identityFile('~/.ssh/id_rsa')
//     ->forwardAgent(true)
//     ->multiplexing(true)
//     ->addSshOption('UserKnownHostsFile', '/dev/null')
//     ->addSshOption('StrictHostKeyChecking', 'no')
//     ->set('deploy_path', '~/var/www/html/{{application}}');
// Tasks

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

task('test', function () {
    writeln('Hello world');
});

task('pwd', function () {
    $result = run('pwd');
    writeln("Current dir: $result");
});

set('user', function () {
    return runLocally('git config --get user.name');
});

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
