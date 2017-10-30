<?php

/**
 * Part of the Sentinel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Sentinel
 * @version    2.0.15
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2017, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class MigrationCartalystSentinel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('code');
            $table->boolean('completed')->default(0);
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('persistences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('code');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('code');
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');

            $table->engine = 'InnoDB';
        });

        Schema::create('texts', function (Blueprint $table) {
            $table->increments('id_text');
            $table->text('text');

            $table->engine = 'InnoDB';
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('password');
            $table->timestamp('last_login')->nullable();
            $table->string('user_name');
            $table->boolean('access')->default(1);
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('email');
        });

        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id_art');
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->integer('id_text')->unsigned();
            $table->integer('visit_count')->default(0);
            $table->integer('like_count')->default(0);
            $table->boolean('access')->default(1);
            $table->timestamp('publication_date')->nullable();
            $table->timestamps();

            $table->unique('id_text');
            $table->unique('user_id');
            $table->unique('category_id');


            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade');

            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onUpdate('cascade');

            $table->foreign('id_text')
                ->references('id_text')->on('texts')
                ->onUpdate('cascade');

            $table->engine = 'InnoDB';
        });

        Schema::create('throttle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('type');
            $table->string('ip')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->index('user_id');
        });

        Schema::create('reminders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('code');
            $table->boolean('completed')->default(0);
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
        });


        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');

            $table->engine = 'InnoDB';
            $table->unique('slug');
        });

        Schema::create('role_users', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->nullableTimestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade');

            $table->foreign('role_id')
                ->references('id')->on('roles')
                ->onUpdate('cascade');

            $table->engine = 'InnoDB';
            $table->primary(['user_id', 'role_id']);
        });


        Schema::create('rights', function (Blueprint $table) {
            $table->increments('id_right');
            $table->string('name_right', 300);

            $table->engine = 'InnoDB';
        });


        Schema::create('rights_role', function (Blueprint $table) {
            $table->increments('id_right_role');
            $table->integer('id_right')->unsigned();
            $table->integer('id_role')->unsigned();


            $table->foreign('id_right')
                ->references('id_right')->on('rights')
                ->onUpdate('cascade');

            $table->foreign('id_role')
                ->references('role_id')->on('role_users')
                ->onUpdate('cascade');

            $table->unique('id_right');
            $table->unique('id_role');
            $table->engine = 'InnoDB';
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
        Schema::drop('texts');
        Schema::drop('roles');
        Schema::drop('role_users');
        Schema::drop('users');
    }
}
