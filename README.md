# Setup Instruction for Local Development

```bash
git clone https://github.com/kelkakiran/analyse
cd analysed
composer install

# Setup Laravel
composer run post-root-package-install
composer run post-create-project-cmd
composer run post-autoload-dump

# Setup .env file with correct DB credentials before proceeding further
composer run migrate
php artisan db:seed

# Install dev dependencies with NPM
npm install
``` 
