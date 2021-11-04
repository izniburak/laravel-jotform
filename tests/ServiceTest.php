<?php

namespace Jotform\Tests;

class ServiceTest extends TestCase
{
    /** @test */
    public function test_get_api_url()
    {
        $this->assertEquals('https://api.jotform.com', $this->jotform->baseURL);
    }

    /** @test */
    public function test_get_all_forms_for_user()
    {
        $this->assertIsArray($this->jotform->getForms());
    }

    /** @test */
    public function test_get_user_form_by_id()
    {
        $myForms = $this->jotform->getForms();
        if (empty($myForms)) {
            $this->assertEmpty($myForms);
        }

        $lastForm = $myForms[0];
        $getFormDetails = $this->jotform->getForm($lastForm['id']);
        $this->assertEquals($getFormDetails['id'], $lastForm['id']);
    }
}
