pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/maharjanneety-ops/project.git'
            }
        }

        stage('Deploy to App Server') {
            steps {
                // Copy project files to App Server using SCP
                sh '''
                scp -o StrictHostKeyChecking=no -i ~/.ssh/jenkins_key -r * ubuntu@13.221.76.113:/var/www/html/
                '''
            }
        }
    }

    post {
        success {
            echo "✅ Deployment Successful! App is live at http://13.221.76.113/"
        }
        failure {
            echo "❌ Deployment Failed. Check Jenkins logs."
        }
    }
}
