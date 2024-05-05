pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }
        stage('Install dependencies') {
            steps {
                sh 'composer install'
            }
        }
        stage('Run tests') {
            steps {
                sh 'php bin/phpunit'
            }
        }
        stage('Build') {
            steps {
                sh 'php bin/console cache:clear --env=prod'
                sh 'symfony server:start'
                // Aquí puedes agregar comandos para compilar tu proyecto Symfony, como por ejemplo:
            }
        }
        stage('Deploy') {
            steps {
                // Aquí puedes agregar comandos para implementar tu proyecto Symfony, si es necesario.
            }
        }
    }
}
