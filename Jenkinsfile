pipeline {
  agent any
  stages {
    stage('Checkout') {
      steps {
        git(url: 'https://github.com/Faves7/portfolio', branch: 'main')
      }
    }

    stage('Build') {
      steps {
        sh 'docker build -f Dockerfile -t faves/portfolio:latest .'
      }
    }

  }
}