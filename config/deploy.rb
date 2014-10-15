set :application, "drupal7Con"
set :scm, "git" 

set :repository, "ssh://git@github.com/ispeakeasy/drupal7theme.git"
set :scm_username, 'ispeakeasy'
set :scm_passphrase, "sadmovi33"
set :branch, "master"

server "192.168.1.160", :app, :web, :db 
#role :app, "192.168.1.160"

set :app_path, "/var/www/drupal7/current"
set :shared_children, ['sites/default/files']
set :shared_files, ['sites/default/settings.php']
set :deploy_to, "/var/www/drupal7"

set :user, "root"
set :password, "rootpass"
set :runner, "www-data"

set :use_sudo, false
set :normalize_asset_timestamps, false

ssh_options[:forward_agent] = true
default_run_options[:pty] = true

set :deploy_via, :remote_cache

set :keep_releases, 2