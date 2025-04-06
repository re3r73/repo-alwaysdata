def application(environ, start_response):
    # Code de réponse HTTP
    status = '200 OK'
    headers = [('Content-type', 'text/html; charset=utf-8')]
    start_response(status, headers)

    # Contenu HTML
    response = """
    <html>
        <head>
            <title>Exemple Python sur Alwaysdata</title>
        </head>
        <body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 40px;">
            <h1>Bonjour depuis un script Python sur Alwaysdata 🎉</h1>
            <p>Votre application Python fonctionne correctement.</p>
            <h2>Variables d'environnement :</h2>
            <ul>
    """

    # Affichage des variables d'environnement serveur
    for key, value in environ.items():
        response += f"<li><strong>{key}</strong>: {value}</li>"

    response += """
            </ul>
        </body>
    </html>
    """

    return [response.encode('utf-8')]
