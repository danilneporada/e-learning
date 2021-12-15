<?php

use App\Models\Course;
use App\Models\Topic;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillCoursesRelatedTableForBackendCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $course = Course::create([
            'name' => 'backend',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem incidunt ratione repellat mollitia nostrum in accusamus consequuntur, aperiam amet dolorem, nobis expedita labore praesentium? Natus, culpa animi? Perferendis, sint minus!',
            'logo_path' => 'logo/backend.png'
        ]);

        Topic::insert([
            [
                'course_id' => $course->id,
                'name' => 'Internet',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/internet.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Basic Frontend Knowledge',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/frontend.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'OS and General Knowledge',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/os.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Learn PHP Language',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/php.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Version Control Systems',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/vcs.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Basic Usage of Git',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/git.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Repo hosting Services',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/repo.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Relational Databases',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/database.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'More about Databases',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/orm.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'NoSQL Databases',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/nosql.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Learn about APIs',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/api.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Caching',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/cache.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Web Security Knowledge',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/security.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Testing',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/test.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'CI / CD',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/cicd.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Design and Development Principles',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/solid.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Architectural Patterns',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/patterns.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Search Engines',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/search.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Message Brokers',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/message.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Containerization vs Virtualization',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/docker.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'GraphQL',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/graphql.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'WebSockets',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/websocket.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Web Servers',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/nginx.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'course_id' => $course->id,
                'name' => 'Building for Scale',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi debitis magni voluptatum corporis accusamus sint reiciendis ipsum sunt incidunt. Eaque quas accusamus repudiandae dolores quibusdam culpa voluptates magni odit! Saepe!',
                'icon' => 'logo/scale.png',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Course::query()->truncate();

        Topic::query()->truncate();
    }
}
