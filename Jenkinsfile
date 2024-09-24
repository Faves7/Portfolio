#!/usr/bin/env groovy

pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                echo 'Getting GitHub repository'
                git branch: 'main', url: 'https://github.com/Faves7/portfolio.git'
            }
        }
        stage('Deploy to GitHub') {
            steps {
                sh '''
                git config --global user.email "facuchaves957@gmail.com"
                git config --global user.name "Facundo Chaves del Pino"
                git pull origin main
                git add .
                echo 'Commit to main'
                git commit -m "Deploy website via Jenkins"
                git push origin main --force
                '''
            }
        }
    }
    post {
        success {
            echo 'Deployment successful!'
        }
        failure {
            echo 'Deployment failed.'
        }
    }
}