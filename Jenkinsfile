#!/usr/bin/env groovy

pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/Faves7/portfolio.git'
            }
        }
        stage('Deploy to GitHub') {
            steps {
                sh '''
                git checkout main
                git add .
                git commit -m "Deploy website via Jenkins"
                git push origin main
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