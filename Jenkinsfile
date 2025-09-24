pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                echo "🔹 Cloning GitHub repository..."
                // Jenkins built-in Git plugin (cleaner than raw git checkout)
                git branch: 'main', url: 'https://github.com/maharjanneety-ops/project.git'
            }
        }

        stage('Build') {
            steps {
                echo "⚙️ Running build steps..."
                // 👉 Add your actual build commands here (npm, maven, etc.)
                // Example: sh 'mvn clean package'
            }
        }

        stage('Deploy to App Server') {
            steps {
                echo "🚀 Deploying code to App Server..."
                sh '''
                # Ensure permissions on private key
                chmod 600 /var/lib/jenkins/.ssh/jenkins_key

                # Deploy files to EC2 instance
                scp -o StrictHostKeyChecking=no \
                    -i /var/lib/jenkins/.ssh/jenkins_key \
                    -r * \
                    ubuntu@13.221.76.113:/var/www/html/
                '''
            }
        }
    }

    post {
        success {
            echo "✅ Deployment Successful! App is live at: http://13.221.76.113/"
        }
        failure {
            echo "❌ Deployment Failed. Check Jenkins logs."
        }
    }
}
