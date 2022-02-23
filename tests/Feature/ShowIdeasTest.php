<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Throwable;

class ShowIdeasTest extends TestCase
{
  use RefreshDatabase;

    /** @test **/
    public function list_of_ideas_shows_on_main_page()
    {
        $ideaOne = Idea::factory()->create([
            'title' => 'My awesome test idea',
            'description' => 'A cool description on the idea',
        ]);
        $ideaTwo = Idea::factory()->create([
            'title' => 'My awesome test two idea',
            'description' => 'A cool description on the idea two',

        ]);
        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaTwo->title);

     }

     /** @test **/
    public function single_idea_shows_correctly_on_the_show_page()
    {
        $idea = Idea::factory()->create([
            'title' => 'My awesome test idea',
            'description' => 'A cool description on the idea',
        ]);
        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
    }


}
