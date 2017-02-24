<?php

namespace AvadoLearning\BusinessLogicServices\SalesLogixService;

class SalesLogix extends \AvadoLearning\BusinessLogicServices\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfstring' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfstring',
      'ArrayOfKeyValueOfstringstring' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfKeyValueOfstringstring',
      'KeyValueOfstringstring' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\KeyValueOfstringstring',
      'ArrayOfKeyValueOfstringanyType' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfKeyValueOfstringanyType',
      'KeyValueOfstringanyType' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\KeyValueOfstringanyType',
      'ValidateEntities.ValidateStudentRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateEntitiesValidateStudentRequest',
      'ServiceRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ServiceRequest',
      'ValidateEntities.ValidateStudentResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateEntitiesValidateStudentResponse',
      'ServiceResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ServiceResponse',
      'ArrayOfValidationMessage' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfValidationMessage',
      'ValidationMessage' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidationMessage',
      'Contact' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Contact',
      'ArrayOfAddress' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfAddress',
      'Address' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Address',
      'Coordinates' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Coordinates',
      'Course' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Course',
      'Grade' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Grade',
      'AccessRights' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\AccessRights',
      'ExamMembership' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ExamMembership',
      'ExamVoucher' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ExamVoucher',
      'Action' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Action',
      'Opportunity' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Opportunity',
      'Communication' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Communication',
      'WelcomeCall' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\WelcomeCall',
      'ArrayOfProduct' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfProduct',
      'Product' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Product',
      'ValidateEntities.ValidateStudentOpportunityRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateEntitiesValidateStudentOpportunityRequest',
      'ValidateEntities.ValidateTutorRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateEntitiesValidateTutorRequest',
      'ValidateEntities.ValidateTutorResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateEntitiesValidateTutorResponse',
      'CryptographyEntities.CryptographyRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CryptographyEntitiesCryptographyRequest',
      'CryptographyEntities.CryptographyResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CryptographyEntitiesCryptographyResponse',
      'CourseSoftwareEntities.ValidateSoftwareRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CourseSoftwareEntitiesValidateSoftwareRequest',
      'CourseSoftwareEntities.ValidateSoftwareResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CourseSoftwareEntitiesValidateSoftwareResponse',
      'CourseSoftwareEntities.ValidateSoftwareResponse2' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CourseSoftwareEntitiesValidateSoftwareResponse2',
      'CourseSoftwareEntities.UpdateSoftwareRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CourseSoftwareEntitiesUpdateSoftwareRequest',
      'CourseSoftwareEntities.UpdateSoftwareResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CourseSoftwareEntitiesUpdateSoftwareResponse',
      'CourseSoftwareEntities.GenerateSoftwareUrlRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CourseSoftwareEntitiesGenerateSoftwareUrlRequest',
      'CourseSoftwareEntities.GenerateSoftwareUrlResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CourseSoftwareEntitiesGenerateSoftwareUrlResponse',
      'ExamEntities.GetExamsRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ExamEntitiesGetExamsRequest',
      'ExamEntities.GetExamsResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ExamEntitiesGetExamsResponse',
      'ArrayOfExam' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfExam',
      'Exam' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Exam',
      'ArrayOfExamVenue' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfExamVenue',
      'ExamVenue' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ExamVenue',
      'ArrayOfExamVenueDate' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfExamVenueDate',
      'ExamVenueDate' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ExamVenueDate',
      'ExamVenueBooking' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ExamVenueBooking',
      'DateSpan' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\DateSpan',
      'ExamEntities.ExamBookingRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ExamEntitiesExamBookingRequest',
      'ArrayOfExamBooking' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfExamBooking',
      'ExamBooking' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ExamBooking',
      'ExamEntities.ExamBookingResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ExamEntitiesExamBookingResponse',
      'ExamEntities.CreateExamMembershipRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ExamEntitiesCreateExamMembershipRequest',
      'ExamEntities.CreateExamMembershipResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ExamEntitiesCreateExamMembershipResponse',
      'HistoryEntities.GetHistoryRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\HistoryEntitiesGetHistoryRequest',
      'PagingRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\PagingRequest',
      'HistoryEntities.GetHistoryResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\HistoryEntitiesGetHistoryResponse',
      'PagingResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\PagingResponse',
      'ArrayOfListItem' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfListItem',
      'ListItem' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ListItem',
      'ArrayOfHistory' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfHistory',
      'History' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\History',
      'HistoryEntities.CreateHistoryRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\HistoryEntitiesCreateHistoryRequest',
      'HistoryEntities.CreateHistoryResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\HistoryEntitiesCreateHistoryResponse',
      'TutorEntities.GradeStudentRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\TutorEntitiesGradeStudentRequest',
      'TutorEntities.GradeStudentResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\TutorEntitiesGradeStudentResponse',
      'SaveLeadEntities.SaveLeadRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\SaveLeadEntitiesSaveLeadRequest',
      'StoreRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\StoreRequest',
      'CreateLeadEntities.CreateLeadRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateLeadEntitiesCreateLeadRequest',
      'ArrayOfContact' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfContact',
      'CreateLeadEntities.LeadSource' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateLeadEntitiesLeadSource',
      'CreateLeadEntities.Questions' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateLeadEntitiesQuestions',
      'ArrayOfAdditionalQuestion' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfAdditionalQuestion',
      'AdditionalQuestion' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\AdditionalQuestion',
      'SaveLeadEntities.SaveLeadResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\SaveLeadEntitiesSaveLeadResponse',
      'StoreResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\StoreResponse',
      'CreateLeadEntities.CreateLeadResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateLeadEntitiesCreateLeadResponse',
      'CreateLeadEntities.Identity' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateLeadEntitiesIdentity',
      'ArrayOfCreateLeadEntities.Identity' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfCreateLeadEntitiesIdentity',
      'CreateSaleEntities.CreateSaleRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateSaleEntitiesCreateSaleRequest',
      'PaymentPlan' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\PaymentPlan',
      'Card' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Card',
      'CardDate' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CardDate',
      'CreateSaleEntities.CreateSaleResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateSaleEntitiesCreateSaleResponse',
      'CreateSaleEntities.Identity' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateSaleEntitiesIdentity',
      'ProductEntities.ProductPricingRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ProductEntitiesProductPricingRequest',
      'ProductEntities.ProductPricingResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ProductEntitiesProductPricingResponse',
      'ArrayOfProductPricing' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfProductPricing',
      'ProductPricing' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ProductPricing',
      'CreateSaleEntities.CreateAdhocPaymentRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateSaleEntitiesCreateAdhocPaymentRequest',
      'ArrayOfProductPaymentPlan' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ArrayOfProductPaymentPlan',
      'ProductPaymentPlan' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ProductPaymentPlan',
      'SonarScoreEntities.SonarScoreRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\SonarScoreEntitiesSonarScoreRequest',
      'SonarScoreEntities.SonarScoreResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\SonarScoreEntitiesSonarScoreResponse',
      'DirectDebitEntities.ValidateAccountOwnershipRequest' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\DirectDebitEntitiesValidateAccountOwnershipRequest',
      'DirectDebitEntities.ValidateAccountOwnershipResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\DirectDebitEntitiesValidateAccountOwnershipResponse',
      'ValidateStudent' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateStudent',
      'ValidateStudentResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateStudentResponse',
      'ValidateStudentOpportunity' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateStudentOpportunity',
      'ValidateStudentOpportunityResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateStudentOpportunityResponse',
      'ValidateTutor' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateTutor',
      'ValidateTutorResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateTutorResponse',
      'Encrypt' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Encrypt',
      'EncryptResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\EncryptResponse',
      'Decrypt' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\Decrypt',
      'DecryptResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\DecryptResponse',
      'ValidateSoftware' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateSoftware',
      'ValidateSoftwareResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateSoftwareResponse',
      'ValidateSoftware2' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateSoftware2',
      'ValidateSoftware2Response' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateSoftware2Response',
      'UpdateSoftware' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\UpdateSoftware',
      'UpdateSoftwareResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\UpdateSoftwareResponse',
      'GenerateSoftwareUrl' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\GenerateSoftwareUrl',
      'GenerateSoftwareUrlResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\GenerateSoftwareUrlResponse',
      'GetExams' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\GetExams',
      'GetExamsResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\GetExamsResponse',
      'CreateExamBooking' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateExamBooking',
      'CreateExamBookingResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateExamBookingResponse',
      'CancelExamBooking' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CancelExamBooking',
      'CancelExamBookingResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CancelExamBookingResponse',
      'RescheduleExamBooking' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\RescheduleExamBooking',
      'RescheduleExamBookingResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\RescheduleExamBookingResponse',
      'CreateExamMembership' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateExamMembership',
      'CreateExamMembershipResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateExamMembershipResponse',
      'GetHistoryNotes' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\GetHistoryNotes',
      'GetHistoryNotesResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\GetHistoryNotesResponse',
      'CreateHistoryNote' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateHistoryNote',
      'CreateHistoryNoteResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateHistoryNoteResponse',
      'GradeStudent' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\GradeStudent',
      'GradeStudentResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\GradeStudentResponse',
      'SaveLead' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\SaveLead',
      'SaveLeadResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\SaveLeadResponse',
      'CreateLead' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateLead',
      'CreateLeadResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateLeadResponse',
      'CreateSale' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateSale',
      'CreateSaleResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateSaleResponse',
      'GetPricing' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\GetPricing',
      'GetPricingResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\GetPricingResponse',
      'CreateAdhocPayment' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateAdhocPayment',
      'CreateAdhocPaymentResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\CreateAdhocPaymentResponse',
      'DoSonarScore' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\DoSonarScore',
      'DoSonarScoreResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\DoSonarScoreResponse',
      'ValidateAccountOwnership' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateAccountOwnership',
      'ValidateAccountOwnershipResponse' => 'AvadoLearning\\BusinessLogicServices\\SalesLogixService\\ValidateAccountOwnershipResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'https://devapi.homelearningcollege.com/SalesLogix.svc')
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
     * @param ValidateSoftware2 $parameters
     * @return ValidateSoftware2Response
     */
    public function ValidateSoftware2(ValidateSoftware2 $parameters)
    {
      return $this->__soapCall('ValidateSoftware2', array($parameters));
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
     * @param GenerateSoftwareUrl $parameters
     * @return GenerateSoftwareUrlResponse
     */
    public function GenerateSoftwareUrl(GenerateSoftwareUrl $parameters)
    {
      return $this->__soapCall('GenerateSoftwareUrl', array($parameters));
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

    /**
     * @param ValidateAccountOwnership $parameters
     * @return ValidateAccountOwnershipResponse
     */
    public function ValidateAccountOwnership(ValidateAccountOwnership $parameters)
    {
      return $this->__soapCall('ValidateAccountOwnership', array($parameters));
    }

}
