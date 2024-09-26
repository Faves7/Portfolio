pipeline {
    agent any
    environment {
        DOCKER_IMAGE = 'faves/portfolio'
    }
    stages {
        stage('Checkout') {
            steps {
                echo 'Getting GitHub repository'
                git branch: 'main', url: 'https://github.com/Faves7/portfolio.git'
            }
        }
        stage('Build') {
            steps {
                echo 'Building Docker image'
                sh 'docker build -t $DOCKER_IMAGE:latest .'
            }
        }
        stage('Docker Login') {
            steps {
                echo 'Logging into Docker Hub'
                withCredentials([usernamePassword(credentialsId: 'docker-hub-credentials', passwordVariable: 'DOCKER_PASSWORD', usernameVariable: 'DOCKER_USERNAME')]) {
                    sh 'echo $DOCKER_PASSWORD | docker login -u $DOCKER_USERNAME --password-stdin'
                }
            }
        }
        stage('Push') {
            steps {
                echo 'Pushing Docker image'
                sh 'docker push $DOCKER_IMAGE:latest'
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
