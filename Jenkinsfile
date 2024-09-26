pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                echo 'Getting GitHub repository'
                git branch: 'main', url: 'https://github.com/Faves7/portfolio.git'
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
