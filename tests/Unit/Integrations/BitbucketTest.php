<?php

namespace Tests\Unit\Integrations;

use App\Services\Bitbucket\Bitbucket;
use Tests\TestCase;

/** @group integrations */
class BitbucketTest extends TestCase{
    /** @test */
    public function can_create_issue(){
        $repo = "revo-pos/revo-back";
        $issue = (new Bitbucket)->createIssue($repo, "test issue", "this is a test issue");
        $this->assertTrue( is_numeric($issue->local_id) );
    }
}