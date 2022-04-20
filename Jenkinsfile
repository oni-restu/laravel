node {
    checkout scm

    // deploy env dev
    stage("Build"){
        docker.image('shippingdocker/php-composer:7.4').inside('-u root') {
            sh 'rm composer.lock'
            sh 'composer install'
        }
    }


    // Testing
    stage("Test"){
        docker.image('ubuntu').inside('-u root') {
            sh 'echo "Ini adalah test"'
        }
    }

    // deploy env prod
    stage("Deploy"){
        docker.image('agung3wi/alpine-rsync:1.1').inside('-u root') {
            // sshagent (credentials: ['ssh-prod']) {
            //     sh 'mkdir -p ~/.ssh'
            //     sh 'ssh-keyscan -H "44.202.114.4" > ~/.ssh/known_hosts'
            //     sh "rsync -rav --delete ./ ubuntu@44.202.114.4:/home/ubuntu/prod.kelasdevops.xyz/ --exclude=.env --exclude=storage --exclude=.git"
            //     sh "ssh ubuntu@44.202.114.4 'cd ~/prod.kelasdevops.xyz/ && rm composer.lock && composer install'"
            // }
        }
    }
}