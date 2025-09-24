pipeline {
    agent any

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
                # Copy all files from Jenkins workspace to App Server
                scp -o StrictHostKeyChecking=no -i /var/lib/jenkins/.ssh/jenkins_key -r * ubuntu@13.221.76.113:/var/www/html/
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
