<?php

namespace Floream\BusinessLogicServices\SalesLogixService;

class SalesLogix extends \Floream\BusinessLogicServices\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'ArrayOfstring' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfstring',
  'ArrayOfKeyValueOfstringanyType' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfKeyValueOfstringanyType',
  'KeyValueOfstringanyType' => 'Floream\\BusinessLogicServices\\SalesLogixService\\KeyValueOfstringanyType',
  'ValidateEntities.ValidateStudentRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateEntitiesValidateStudentRequest',
  'ServiceRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ServiceRequest',
  'ValidateEntities.ValidateStudentResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateEntitiesValidateStudentResponse',
  'ServiceResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ServiceResponse',
  'ArrayOfValidationMessage' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfValidationMessage',
  'ValidationMessage' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidationMessage',
  'Contact' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Contact',
  'ArrayOfAddress' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfAddress',
  'Address' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Address',
  'Coordinates' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Coordinates',
  'Course' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Course',
  'Grade' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Grade',
  'AccessRights' => 'Floream\\BusinessLogicServices\\SalesLogixService\\AccessRights',
  'ExamMembership' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamMembership',
  'ExamVoucher' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamVoucher',
  'Action' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Action',
  'Opportunity' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Opportunity',
  'Communication' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Communication',
  'WelcomeCall' => 'Floream\\BusinessLogicServices\\SalesLogixService\\WelcomeCall',
  'ArrayOfProduct' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfProduct',
  'Product' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Product',
  'ValidateEntities.ValidateStudentOpportunityRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateEntitiesValidateStudentOpportunityRequest',
  'ValidateEntities.ValidateTutorRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateEntitiesValidateTutorRequest',
  'ValidateEntities.ValidateTutorResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateEntitiesValidateTutorResponse',
  'CryptographyEntities.CryptographyRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CryptographyEntitiesCryptographyRequest',
  'CryptographyEntities.CryptographyResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CryptographyEntitiesCryptographyResponse',
  'CourseSoftwareEntities.ValidateSoftwareRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CourseSoftwareEntitiesValidateSoftwareRequest',
  'CourseSoftwareEntities.ValidateSoftwareResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CourseSoftwareEntitiesValidateSoftwareResponse',
  'CourseSoftwareEntities.UpdateSoftwareRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CourseSoftwareEntitiesUpdateSoftwareRequest',
  'CourseSoftwareEntities.UpdateSoftwareResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CourseSoftwareEntitiesUpdateSoftwareResponse',
  'ExamEntities.GetExamsRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamEntitiesGetExamsRequest',
  'ExamEntities.GetExamsResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamEntitiesGetExamsResponse',
  'ArrayOfExam' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfExam',
  'Exam' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Exam',
  'ArrayOfExamVenue' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfExamVenue',
  'ExamVenue' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamVenue',
  'ArrayOfExamVenueDate' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfExamVenueDate',
  'ExamVenueDate' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamVenueDate',
  'ExamVenueBooking' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamVenueBooking',
  'DateSpan' => 'Floream\\BusinessLogicServices\\SalesLogixService\\DateSpan',
  'ExamEntities.ExamBookingRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamEntitiesExamBookingRequest',
  'ArrayOfExamBooking' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfExamBooking',
  'ExamBooking' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamBooking',
  'ExamEntities.ExamBookingResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamEntitiesExamBookingResponse',
  'ExamEntities.CreateExamMembershipRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamEntitiesCreateExamMembershipRequest',
  'ExamEntities.CreateExamMembershipResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamEntitiesCreateExamMembershipResponse',
  'HistoryEntities.GetHistoryRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\HistoryEntitiesGetHistoryRequest',
  'PagingRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\PagingRequest',
  'HistoryEntities.GetHistoryResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\HistoryEntitiesGetHistoryResponse',
  'PagingResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\PagingResponse',
  'ArrayOfListItem' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfListItem',
  'ListItem' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ListItem',
  'ArrayOfHistory' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfHistory',
  'History' => 'Floream\\BusinessLogicServices\\SalesLogixService\\History',
  'HistoryEntities.CreateHistoryRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\HistoryEntitiesCreateHistoryRequest',
  'HistoryEntities.CreateHistoryResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\HistoryEntitiesCreateHistoryResponse',
  'TutorEntities.GradeStudentRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\TutorEntitiesGradeStudentRequest',
  'TutorEntities.GradeStudentResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\TutorEntitiesGradeStudentResponse',
  'SaveLeadEntities.SaveLeadRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\SaveLeadEntitiesSaveLeadRequest',
  'StoreRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\StoreRequest',
  'CreateLeadEntities.CreateLeadRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateLeadEntitiesCreateLeadRequest',
  'ArrayOfContact' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfContact',
  'CreateLeadEntities.LeadSource' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateLeadEntitiesLeadSource',
  'CreateLeadEntities.Questions' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateLeadEntitiesQuestions',
  'ArrayOfAdditionalQuestion' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfAdditionalQuestion',
  'AdditionalQuestion' => 'Floream\\BusinessLogicServices\\SalesLogixService\\AdditionalQuestion',
  'SaveLeadEntities.SaveLeadResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\SaveLeadEntitiesSaveLeadResponse',
  'StoreResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\StoreResponse',
  'CreateLeadEntities.CreateLeadResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateLeadEntitiesCreateLeadResponse',
  'CreateLeadEntities.Identity' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateLeadEntitiesIdentity',
  'ArrayOfCreateLeadEntities.Identity' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfCreateLeadEntitiesIdentity',
  'CreateSaleEntities.CreateSaleRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateSaleEntitiesCreateSaleRequest',
  'PaymentPlan' => 'Floream\\BusinessLogicServices\\SalesLogixService\\PaymentPlan',
  'Card' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Card',
  'CardDate' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CardDate',
  'CreateSaleEntities.CreateSaleResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateSaleEntitiesCreateSaleResponse',
  'CreateSaleEntities.Identity' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateSaleEntitiesIdentity',
  'ProductEntities.ProductPricingRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ProductEntitiesProductPricingRequest',
  'ProductEntities.ProductPricingResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ProductEntitiesProductPricingResponse',
  'ArrayOfProductPricing' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfProductPricing',
  'ProductPricing' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ProductPricing',
  'CreateSaleEntities.CreateAdhocPaymentRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateSaleEntitiesCreateAdhocPaymentRequest',
  'ArrayOfProductPaymentPlan' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ArrayOfProductPaymentPlan',
  'ProductPaymentPlan' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ProductPaymentPlan',
  'SonarScoreEntities.SonarScoreRequest' => 'Floream\\BusinessLogicServices\\SalesLogixService\\SonarScoreEntitiesSonarScoreRequest',
  'SonarScoreEntities.SonarScoreResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\SonarScoreEntitiesSonarScoreResponse',
  'ExamCentreEntities.ExamCentreResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ExamCentreEntitiesExamCentreResponse',
  'ValidateStudent' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateStudent',
  'ValidateStudentResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateStudentResponse',
  'ValidateStudentOpportunity' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateStudentOpportunity',
  'ValidateStudentOpportunityResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateStudentOpportunityResponse',
  'ValidateTutor' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateTutor',
  'ValidateTutorResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateTutorResponse',
  'Encrypt' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Encrypt',
  'EncryptResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\EncryptResponse',
  'Decrypt' => 'Floream\\BusinessLogicServices\\SalesLogixService\\Decrypt',
  'DecryptResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\DecryptResponse',
  'ValidateSoftware' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateSoftware',
  'ValidateSoftwareResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\ValidateSoftwareResponse',
  'UpdateSoftware' => 'Floream\\BusinessLogicServices\\SalesLogixService\\UpdateSoftware',
  'UpdateSoftwareResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\UpdateSoftwareResponse',
  'GetExams' => 'Floream\\BusinessLogicServices\\SalesLogixService\\GetExams',
  'GetExamsResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\GetExamsResponse',
  'CreateExamBooking' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateExamBooking',
  'CreateExamBookingResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateExamBookingResponse',
  'CancelExamBooking' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CancelExamBooking',
  'CancelExamBookingResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CancelExamBookingResponse',
  'RescheduleExamBooking' => 'Floream\\BusinessLogicServices\\SalesLogixService\\RescheduleExamBooking',
  'RescheduleExamBookingResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\RescheduleExamBookingResponse',
  'CreateExamMembership' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateExamMembership',
  'CreateExamMembershipResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateExamMembershipResponse',
  'GetHistoryNotes' => 'Floream\\BusinessLogicServices\\SalesLogixService\\GetHistoryNotes',
  'GetHistoryNotesResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\GetHistoryNotesResponse',
  'CreateHistoryNote' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateHistoryNote',
  'CreateHistoryNoteResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateHistoryNoteResponse',
  'GradeStudent' => 'Floream\\BusinessLogicServices\\SalesLogixService\\GradeStudent',
  'GradeStudentResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\GradeStudentResponse',
  'SaveLead' => 'Floream\\BusinessLogicServices\\SalesLogixService\\SaveLead',
  'SaveLeadResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\SaveLeadResponse',
  'GenerateUrl' => 'Floream\\BusinessLogicServices\\SalesLogixService\\GenerateUrl',
  'GenerateUrlResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\GenerateUrlResponse',
  'CreateLead' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateLead',
  'CreateLeadResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateLeadResponse',
  'CreateSale' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateSale',
  'CreateSaleResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateSaleResponse',
  'GetPricing' => 'Floream\\BusinessLogicServices\\SalesLogixService\\GetPricing',
  'GetPricingResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\GetPricingResponse',
  'CreateAdhocPayment' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateAdhocPayment',
  'CreateAdhocPaymentResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\CreateAdhocPaymentResponse',
  'DoSonarScore' => 'Floream\\BusinessLogicServices\\SalesLogixService\\DoSonarScore',
  'DoSonarScoreResponse' => 'Floream\\BusinessLogicServices\\SalesLogixService\\DoSonarScoreResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://testapi.homelearningcollege.com/SalesLogix.svc')
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param ValidateStudent $parameters
     * @return ValidateStudentResponse
     */
    public function ValidateStudent(ValidateStudent $parameters)
    {
      return $this->__soapCall('ValidateStudent', array($parameters));
    }

    /**
     * @param ValidateStudentOpportunity $parameters
     * @return ValidateStudentOpportunityResponse
     */
    public function ValidateStudentOpportunity(ValidateStudentOpportunity $parameters)
    {
      return $this->__soapCall('ValidateStudentOpportunity', array($parameters));
    }

    /**
     * @param ValidateTutor $parameters
     * @return ValidateTutorResponse
     */
    public function ValidateTutor(ValidateTutor $parameters)
    {
      return $this->__soapCall('ValidateTutor', array($parameters));
    }

    /**
     * @param Encrypt $parameters
     * @return EncryptResponse
     */
    public function Encrypt(Encrypt $parameters)
    {
      return $this->__soapCall('Encrypt', array($parameters));
    }

    /**
     * @param Decrypt $parameters
     * @return DecryptResponse
     */
    public function Decrypt(Decrypt $parameters)
    {
      return $this->__soapCall('Decrypt', array($parameters));
    }

    /**
     * @param ValidateSoftware $parameters
     * @return ValidateSoftwareResponse
     */
    public function ValidateSoftware(ValidateSoftware $parameters)
    {
      return $this->__soapCall('ValidateSoftware', array($parameters));
    }

    /**
     * @param UpdateSoftware $parameters
     * @return UpdateSoftwareResponse
     */
    public function UpdateSoftware(UpdateSoftware $parameters)
    {
      return $this->__soapCall('UpdateSoftware', array($parameters));
    }

    /**
     * @param GetExams $parameters
     * @return GetExamsResponse
     */
    public function GetExams(GetExams $parameters)
    {
      return $this->__soapCall('GetExams', array($parameters));
    }

    /**
     * @param CreateExamBooking $parameters
     * @return CreateExamBookingResponse
     */
    public function CreateExamBooking(CreateExamBooking $parameters)
    {
      return $this->__soapCall('CreateExamBooking', array($parameters));
    }

    /**
     * @param CancelExamBooking $parameters
     * @return CancelExamBookingResponse
     */
    public function CancelExamBooking(CancelExamBooking $parameters)
    {
      return $this->__soapCall('CancelExamBooking', array($parameters));
    }

    /**
     * @param RescheduleExamBooking $parameters
     * @return RescheduleExamBookingResponse
     */
    public function RescheduleExamBooking(RescheduleExamBooking $parameters)
    {
      return $this->__soapCall('RescheduleExamBooking', array($parameters));
    }

    /**
     * @param CreateExamMembership $parameters
     * @return CreateExamMembershipResponse
     */
    public function CreateExamMembership(CreateExamMembership $parameters)
    {
      return $this->__soapCall('CreateExamMembership', array($parameters));
    }

    /**
     * @param GetHistoryNotes $parameters
     * @return GetHistoryNotesResponse
     */
    public function GetHistoryNotes(GetHistoryNotes $parameters)
    {
      return $this->__soapCall('GetHistoryNotes', array($parameters));
    }

    /**
     * @param CreateHistoryNote $parameters
     * @return CreateHistoryNoteResponse
     */
    public function CreateHistoryNote(CreateHistoryNote $parameters)
    {
      return $this->__soapCall('CreateHistoryNote', array($parameters));
    }

    /**
     * @param GradeStudent $parameters
     * @return GradeStudentResponse
     */
    public function GradeStudent(GradeStudent $parameters)
    {
      return $this->__soapCall('GradeStudent', array($parameters));
    }

    /**
     * @param SaveLead $parameters
     * @return SaveLeadResponse
     */
    public function SaveLead(SaveLead $parameters)
    {
      return $this->__soapCall('SaveLead', array($parameters));
    }

    /**
     * @param GenerateUrl $parameters
     * @return GenerateUrlResponse
     */
    public function GenerateUrl(GenerateUrl $parameters)
    {
      return $this->__soapCall('GenerateUrl', array($parameters));
    }

    /**
     * @param CreateLead $parameters
     * @return CreateLeadResponse
     */
    public function CreateLead(CreateLead $parameters)
    {
      return $this->__soapCall('CreateLead', array($parameters));
    }

    /**
     * @param CreateSale $parameters
     * @return CreateSaleResponse
     */
    public function CreateSale(CreateSale $parameters)
    {
      return $this->__soapCall('CreateSale', array($parameters));
    }

    /**
     * @param GetPricing $parameters
     * @return GetPricingResponse
     */
    public function GetPricing(GetPricing $parameters)
    {
      return $this->__soapCall('GetPricing', array($parameters));
    }

    /**
     * @param CreateAdhocPayment $parameters
     * @return CreateAdhocPaymentResponse
     */
    public function CreateAdhocPayment(CreateAdhocPayment $parameters)
    {
      return $this->__soapCall('CreateAdhocPayment', array($parameters));
    }

    /**
     * @param DoSonarScore $parameters
     * @return DoSonarScoreResponse
     */
    public function DoSonarScore(DoSonarScore $parameters)
    {
      return $this->__soapCall('DoSonarScore', array($parameters));
    }

}
