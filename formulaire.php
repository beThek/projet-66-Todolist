<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyTodoList66</title>
    </head>
    <body>
<!--1er formulaire qui AFFICHE les tâches en cours - START-->
        <div class="container todolist">
            <header>
                <h1>Tâches en cours</h1>
            </header>
            <form action="formulaire.php" method="post">
                <div id="todo_list" class="no_done_content">
                    <!--code php----------------------->
                </div>
<!--quand on cliquera sur le submit, celà voudra dire que la tâche en cours sera classée en (tâche) faite-->
            <input type="submit" name="done" class="btn btn-done btn-succes" value="faite">
            </form>
        </div>
<!--1er formulaire qui AFFICHE les tâches en cours - END-->

<!--2eme formulaire qui sert à AJOUTER des tâches - START-->
        <div class="container ajout">
            <header>
                <h1>Tâches à ajouter</h1>
            </header>
            <form action="formulaire.php" method="post">
                <textarea name="task" rows="2" placeholder="Ajouter vos tâches" required></textarea>
<!--quand on cliquera sur le submit, celà voudra dire que l'on ajoute une nouvelle tâche-->
                <input type="submit" name="add_task" class="btn btn-ajouter btn-danger" value="ajout">
            </form>
        </div>
<!--2eme formulaire qui sert à AJOUTER des tâches - END-->

<!--container Archives - START-->
        <div class="container archives">
            <header>
                <h1>Archives</h1>
            </header>
            <div class="done_content">
                <!--code php----------------------->
            </div>
        </div>
<!--container Archives - END-->






    </body>
</html>
