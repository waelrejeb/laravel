<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>@yield('title','application eleve')</title>

    <!-- Feuilles de style externes -->
    <link rel="stylesheet" href="css/normalize-3.0.3.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Feuilles de style de l'application -->
    <link rel="stylesheet" href="css/eleve-main.css">
    <link rel="stylesheet" href="css/eleve-theme.css">
     <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/ui-button.css">
    <link rel="stylesheet" href="css/ui-form.css">
    
</head>
</head>
<body>
    <!-- En-tête commune de l'application -->
    <header class="eleve-header">
        <h1><a href=""><i class="fa fa-users"></i> les eleves</a></h1>
    </header>

    <main>
      
@yield ('content')
        
    </main>

    <!-- Pied de page commun de l'application -->
    <footer class="eleve-footer">
        <small>Le site de nos eleves</small>
    </footer>
</body>
</html>