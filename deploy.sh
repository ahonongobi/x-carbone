ssh -i /path/to/your/key.pem ubuntu@13.58.45.254
# Navigate to the directory where you want to store your deployment files (e.g., /var/www/html/gitdeploy).

mkdir gitdeploy.git && cd gitdeploy.git
git init --bare

cd hooks
touch post-receive
chmod +x post-receive

# Path: post-receive (make sure to replace the path to your target directory)
#!/bin/bash

TARGET_DIR="/var/www/html/gitdeploy"

while read oldrev newrev refname; do
    if [ "$refname" = "refs/heads/master" ]; then
        GIT_WORK_TREE="$TARGET_DIR" git checkout -f
        echo "Deployment completed!"
    fi
done


# Step 2: Set Up Your Local Repository

git remote add ec2 ubuntu@13.58.45.254:/path/to/gitdeploy.git
git push ec2 master


----------------------------------------------------------------------------------
INSTALLATION DE APACHE AU CAS OU LE CODE EXECUTE PAS 
---------------------------------------------------------------------------------

sudo apt-get update
sudo apt-get install apache2


sudo apt-get install php libapache2-mod-php
sudo systemctl restart apache2

#Assurez-vous que le fichier index.php est prioritaire sur le fichier index.html :

#Dans le répertoire /var/www/html, supprimez le fichier index.html si nécessaire.

sudo nano /var/www/html/index.php
# Ajoutez le code suivant :
<?php
phpinfo();
?>
# boom ! ça marche



# en cas derreur de ssh 
eval $(ssh-agent -s)
ssh-add /home/gobi/.ssh/goby-ssh.pem




