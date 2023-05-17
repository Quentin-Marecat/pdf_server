#!/bin/bash
# Vérifier si le nombre d'arguments est correct
if [ "$#" -ne 1 ]; then
    echo "Usage: $0 <fichier_pdf>"
    exit 1
fi

# Récupérer les arguments
fichier_pdf=$1
dossier_destination=/home/qmarecat/Desktop/others/GPT/pdf_server/uploads

# Vérifier si le fichier PDF existe
if [ ! -f "$fichier_pdf" ]; then
    echo "Le fichier PDF '$fichier_pdf' n'existe pas."
    exit 1
fi

# Générer un nouveau nom de fichier
nouveau_nom="my_pdf.pdf"

# Déplacer le fichier vers le dossier de destination avec le nouveau nom
cp "$fichier_pdf" "$dossier_destination/$nouveau_nom"

# Exécuter le code Python
python3 deploy.py
echo "https://pdf-drag-drop.herokuapp.com/uploads/"$nouveau_nom
