pipeline {
    agent any

    environment {
        APP_SERVER = "34.230.188.38"
        SSH_KEY = "/var/lib/jenkins/.ssh/jenkins_key"
        DEPLOY_PATH = "/var/www/html/"
    }

    stages {
        stage('Clone Repository') {
            steps {
                echo "🔹 Cloning GitHub repository..."
                git branch: 'main', url: 'https://github.com/maharjanneety-ops/project.git'
            }
        }

        stage('Deploy to App Server') {
            steps {
                echo "🚀 Deploying code to App Server..."
                sh '''
                    scp -o StrictHostKeyChecking=no -i $SSH_KEY -r * ubuntu@$APP_SERVER:$DEPLOY_PATH
                '''
            }
        }
    }

    post {
        success {
            echo "✅ Deployment Successful!"
        }
        failure {
            echo "❌ Deployment Failed. Check Jenkins logs."
        }
    }
}

