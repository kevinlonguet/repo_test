  <?php echo 'Si vous voulez intégrez du code PHP dans des documents XHTML ou XML, utilisez ces balises'; ?>

2.  Vous pouvez utiliser la balise courte pour <?= 'écrire ce texte' ?>.
    C'est toujours autorisé en PHP 5.4.0 et supérieur, et est équivalent à 
    <?php echo 'print this string' ?>.

3.  <? echo 'ce code est entre des balises courtes'; ?>
    Le code suivant <?= 'du texte' ?> est un raccourci pour <? echo 'du texte' ?> 

4.  <script language="php">
        echo 'quelques éditeurs (comme FrontPage)
                 n\'aiment pas traiter des  d\'instructions à l\'intérieur de ces balises';
    </script>
    Cette syntaxe est retirée dans PHP 7.0.0

5.  <% echo 'Vous pouvez optionnellement utiliser les balises ASP-style'; %>
    Le code suivant <%= $variable; %> est un raccourci pour <% echo $variable; %> 
    Ces deux syntaxes sont retirées de PHP 7.0.0
