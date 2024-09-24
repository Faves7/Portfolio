#!/usr/bin/env groovy

pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/Faves7/portfolio.git'
            }
        }
        stage('Lint HTML') {
            steps {
                sh 'htmlhint index.html'
            }
        }
        stage('Lint CSS') {
            steps {
                sh 'stylelint "styles.css"'
            }
        }
        stage('Lint JS') {
            steps {
                sh 'eslint scripts.js'
            }
        }
        stage('Deploy to GitHub') {
            steps {
                sh '''
                git checkout -b main
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