pipeline {
    agent any
    environment {
        MYSQL_URL = credentials("MYSQL_URL")
        MYSQL_USER = credentials("MYSQL_USER")
        MYSQL_PASS = credentials("MYSQL_PASS")
    }
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
        stage('Build') {
            steps {
                sh 'php bin/console cache:clear --env=prod'
            }
        }
        stage('Deploy') {
            steps {
                sh 'symfony server:start'
            }
        }
    }
}
