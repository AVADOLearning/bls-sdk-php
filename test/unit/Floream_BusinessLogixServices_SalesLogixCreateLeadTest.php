<?php

/**
 * BLS SDK for PHP.
 *
 * @author Luke Carrier <luke.carrier@avadolearning.com>
 * @copyright 2015 AVADO Learning
 */

use AvadoLearning\BusinessLogicServices\SalesLogixService\ArrayOfContact;
use AvadoLearning\BusinessLogicServices\SalesLogixService\ArrayOfstring;
use AvadoLearning\BusinessLogicServices\SalesLogixService\Contact;
use AvadoLearning\BusinessLogicServices\SalesLogixService\ContactGender;
use AvadoLearning\BusinessLogicServices\SalesLogixService\ContactTitle;
use AvadoLearning\BusinessLogicServices\SalesLogixService\ContactType;
use AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLead;
use AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLeadEntitiesBrandAssociation;
use AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLeadEntitiesCreateLeadRequest;
use AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLeadEntitiesLeadSource;
use AvadoLearning\BusinessLogicServices\SalesLogixService\CreateLeadEntitiesSubmissionType;
use AvadoLearning\BusinessLogicServices\SalesLogixService\ResponseStatus;
use AvadoLearning\BusinessLogicServices\SalesLogixService\SalesLogix;

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
