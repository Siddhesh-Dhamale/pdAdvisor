<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameAndUpdateBlogTopicTable extends Migration
{
    public function up()
    {
        // Rename the table
        Schema::rename('blog_topic', 'blog_solutions');

        // Update the columns
        Schema::table('blog_solutions', function (Blueprint $table) {
            // If you want to rename 'topic_name' to 'solution_title'
            if (Schema::hasColumn('blog_solutions', 'topic_name')) {
                $table->renameColumn('topic_name', 'solution_title');
            }

            // Ensure the essential columns exist or are updated
            if (!Schema::hasColumn('blog_solutions', 'blog_id')) {
                $table->unsignedBigInteger('blog_id');
            }
            if (!Schema::hasColumn('blog_solutions', 'created_at')) {
                $table->timestamp('created_at')->nullable();
            }
            if (!Schema::hasColumn('blog_solutions', 'updated_at')) {
                $table->timestamp('updated_at')->nullable();
            }
        });
    }

    public function down()
    {
        // Reverse the changes
        Schema::table('blog_solutions', function (Blueprint $table) {
            // Revert column rename if needed
            if (Schema::hasColumn('blog_solutions', 'solution_title')) {
                $table->renameColumn('solution_title', 'topic_name');
            }
        });

        // Rename back to blog_topic
        Schema::rename('blog_solutions', 'blog_topic');
    }
}
