<?php

/**
 * BLS SDK for PHP.
 *
 * @author Luke Carrier <luke.carrier@floream.com>
 * @copyright 2015 Floream Limited
 */

use Floream\BusinessLogicServices\SalesLogixService\ArrayOfContact;
use Floream\BusinessLogicServices\SalesLogixService\ArrayOfstring;
use Floream\BusinessLogicServices\SalesLogixService\Contact;
use Floream\BusinessLogicServices\SalesLogixService\ContactGender;
use Floream\BusinessLogicServices\SalesLogixService\ContactTitle;
use Floream\BusinessLogicServices\SalesLogixService\ContactType;
use Floream\BusinessLogicServices\SalesLogixService\CreateLead;
use Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntitiesBrandAssociation;
use Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntitiesCreateLeadRequest;
use Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntitiesLeadSource;
use Floream\BusinessLogicServices\SalesLogixService\CreateLeadEntitiesSubmissionType;
use Floream\BusinessLogicServices\SalesLogixService\ResponseStatus;
use Floream\BusinessLogicServices\SalesLogixService\SalesLogix;

class SalesLogixCreateLeadTest
        extends Floream_BusinessLogicServices_Framework_TestCase {
    public function testWithValidData() {
        $lead = new Contact(false, false, ContactGender::Female, false,
                            ContactTitle::Dr, ContactType::Lead);
        $lead->setFirstName('Marie');
        $lead->setLastName('Curie');
        $lead->setEmail('testlead@homelearningcollege.com');
        $lead->setHomeTelephone('020 7946 0000');
        $lead->setMobileTelephone('07700 900 000');
        $lead->setReference(0);

        $contacts = new ArrayOfContact();
        $contacts->setContact(array($lead));

        $courseInterests = new ArrayOfstring();
        $courseInterests->setString(array('DNS1'));

        $leadSource = new CreateLeadEntitiesLeadSource(CreateLeadEntitiesBrandAssociation::Floream,
                                                       false, CreateLeadEntitiesSubmissionType::MiniRfi);
        $leadSource->setCampaignCode('DTNDIR0002');

        $request = new CreateLeadEntitiesCreateLeadRequest();
        $request->setContacts($contacts);
        $request->setCourseInterests($courseInterests);
        $request->setLeadSource($leadSource);
        $request = new CreateLead($request);

        $client   = $this->getSoapClient('saleslogix');
        $response = $client->CreateLead($request);
        $result   = $response->getCreateLeadResult();

        $this->assertEquals(ResponseStatus::Success, $result->getStatus(),
                            'status indicates successful request');
        $this->assertNull($result->getMessageDetails(),
                          'result contains no validation messages');
        $this->assertCount(1, $result->getContacts()->getCreateLeadEntitiesIdentity(),
                           'result contains one contact');
    }

    public function testWithNoData() {
        $request = new CreateLeadEntitiesCreateLeadRequest();
        $request = new CreateLead($request);

        $client   = $this->getSoapClient('saleslogix');
        $response = $client->CreateLead($request);
        $result   = $response->getCreateLeadResult();

        $this->assertEquals(ResponseStatus::Error, $result->getStatus(),
                            'status indicates successful request');
        $this->assertNotEmpty($result->getMessageDetails()->getValidationMessage(),
                              'result contains validation messages');
    }
}
