#import os
import subprocess
## heroku login
#   heroku login -i
#   heroku create pdf_drag_drop

def deploy_to_heroku():
    app_name = "pdf-drag-drop"  # Change this to your desired app name
    subprocess.run(["git",'add','.'])
    subprocess.run(["git","commit","-m","'Q : herku deploy'"])
    subprocess.run(["git","push"])
    subprocess.run(["heroku", "git:remote", "-a", app_name])
    subprocess.run(["git", "push", "heroku","main"])

if __name__ == "__main__":
    deploy_to_heroku()

