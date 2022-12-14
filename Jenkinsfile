node {
    checkout scm

    // deploy env dev
    stage("Build"){
        docker.image('shippingdocker/php-composer:7.4').inside('-u root') {
            sh 'rm composer.lock'
            sh 'composer install'
        }
    }

    // deploy env dev
    stage("Build"){
        docker.image('shippingdocker/php-composer:7.4').inside('-u root') {
            sh 'rm composer.lock'
            sh 'composer install'
        }
    }


    // Testing
    stage("Test"){
        docker.image('php:7.4-cli').inside('-u root') {
            sh 'php artisan test --testsuite=Unit'
        }
    }

    // deploy env dev
    stage("Deploy"){
        docker.image('agung3wi/alpine-rsync:1.1').inside('-u root') {
            sshagent (credentials: ['ssh-key']) {
                sh 'mkdir -p ~/.ssh'
                sh 'ssh-keyscan -H 192.168.50.60 > ~/.ssh/known_hosts'
                sh "rsync -rav --delete ./ root@192.168.50.60:/var/www/html/laravel --exclude=.env --exclude=storage --exclude=.git"            }
        }
    }
}
