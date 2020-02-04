<p align="center"><img src="https://www.commude.ph/assets/images/commude_logo.png" width="400"></p>

## Configuration
1.  Clone this repository.
    ```bash
        $   git clone https://github.com/commude/gallery.git
    ```
2.  Recreate `.env` by copying `.env.example`
    ```bash
        $   cp .env.example .env
    ```
3.  Install composer
    ```bash
        $   composer install
    ```
4.  Install NPM
    ```bash
        $   npm install
    ```
5.  Generate Application Key
    ```bash
        $   php artisan key:generate
    ``` 
6.  Execute Database Migration and Seeders
    ```bash
        $   php migrate:fresh --seed
    ``` 
7.  Create Storage symlink for Storage in Public Directory
    ```bash
        $   php artisan storage:link
    ``` 
