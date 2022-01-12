<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        # La class Blueprint représente vos tables en BDD à partir de vos Models dans votre application Laravel
        Schema::create('plats', function (Blueprint $table) {
            # Ligne générée par la command line (make:migration) représente l'id auto-incrémenté.
            $table->id();

            //////////////////// RELATION ///////////////////
            # Pour créer une relation, il vous faudra ajouter ces instructions :
            $table->unsignedBigInteger('cocktail_id');
            $table->foreign('cocktail_id')
                ->references('id')
                ->on('cocktails')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            # Grâce à l'objet Blueprint, on peut construire notre table avec les méthodes fournies par Blueprint
            $table->string('title');
            $table->mediumText('content');
            # Ligne générée par la command line qui représente vos propriétés createdAt, updatedAt.
            $table->timestamps();

            # On peut lancer la command line : php artisan migrate
            # Une fois la migration faite, on peut voir le statut avec la command line : php artisan migrate:status
        });
    }

    /**
     * Cette methode est exécutée lors de l'appel par la command line :
     *      php artisan migrate:reset => pour supprimer la table (cela vient lancé la fonction down()
     *      php artisan migrate:refresh => pour supprimer et recréer les tables
     *
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plats');
    }
}
