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
    post {
        always {
            script {
                // Enviar notificación por correo electrónico siempre
                emailext (
                    subject: "Build \${currentBuild.fullDisplayName}",
                    body: "Build \${currentBuild.fullDisplayName} finished with status: \${currentBuild.currentResult}",
                    recipientProviders: [[$class: 'DevelopersRecipientProvider']]
                )
            }
        }
        success {
            script {
                // Enviar notificación por correo electrónico solo en caso de éxito
                emailext (
                    subject: "SUCCESS: Build \${currentBuild.fullDisplayName}",
                    body: "Build \${currentBuild.fullDisplayName} finished successfully.",
                    recipientProviders: [[$class: 'DevelopersRecipientProvider']]
                )
            }
        }
        failure {
            script {
                // Enviar notificación por correo electrónico solo en caso de fallo
                emailext (
                    subject: "FAILURE: Build \${currentBuild.fullDisplayName}",
                    body: "Build \${currentBuild.fullDisplayName} failed.",
                    recipientProviders: [[$class: 'DevelopersRecipientProvider']]
                )
            }
        }
    }
}
