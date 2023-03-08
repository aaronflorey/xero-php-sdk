<?php

namespace Mochaka\XeroSDK\Resources;

use Mochaka\XeroSDK\Operations\Accounting\CreateAccountAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateAccountOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateBankTransactionAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateBankTransactionHistoryRecordOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateBankTransactionsOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateBankTransferAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateBankTransferHistoryRecordOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateBankTransferOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateBatchPaymentHistoryRecordOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateBatchPaymentOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateBrandingThemePaymentServicesOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateContactAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateContactGroupContactsOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateContactGroupOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateContactHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateContactsOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateCreditNoteAllocationOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateCreditNoteAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateCreditNoteHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateCreditNotesOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateCurrencyOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateEmployeesOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateExpenseClaimHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateExpenseClaimsOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateInvoiceAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateInvoiceHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateInvoicesOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateItemHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateItemsOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateLinkedTransactionOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateManualJournalAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateManualJournalHistoryRecordOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateManualJournalsOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateOverpaymentAllocationsOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateOverpaymentHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreatePaymentHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreatePaymentOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreatePaymentServiceOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreatePaymentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreatePrepaymentAllocationsOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreatePrepaymentHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreatePurchaseOrderAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreatePurchaseOrderHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreatePurchaseOrdersOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateQuoteAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateQuoteHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateQuotesOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateReceiptAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateReceiptHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateReceiptOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateRepeatingInvoiceAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateRepeatingInvoiceHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateRepeatingInvoicesOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateTaxRatesOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateTrackingCategoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\CreateTrackingOptionsOperation;
use Mochaka\XeroSDK\Operations\Accounting\DeleteAccountOperation;
use Mochaka\XeroSDK\Operations\Accounting\DeleteBatchPaymentByUrlParamOperation;
use Mochaka\XeroSDK\Operations\Accounting\DeleteBatchPaymentOperation;
use Mochaka\XeroSDK\Operations\Accounting\DeleteContactGroupContactOperation;
use Mochaka\XeroSDK\Operations\Accounting\DeleteContactGroupContactsOperation;
use Mochaka\XeroSDK\Operations\Accounting\DeleteItemOperation;
use Mochaka\XeroSDK\Operations\Accounting\DeleteLinkedTransactionOperation;
use Mochaka\XeroSDK\Operations\Accounting\DeletePaymentOperation;
use Mochaka\XeroSDK\Operations\Accounting\DeleteTrackingCategoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\DeleteTrackingOptionsOperation;
use Mochaka\XeroSDK\Operations\Accounting\EmailInvoiceOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetAccountAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetAccountAttachmentByIdOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetAccountAttachmentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetAccountOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetAccountsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBankTransactionAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBankTransactionAttachmentByIdOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBankTransactionAttachmentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBankTransactionOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBankTransactionsHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBankTransactionsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBankTransferAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBankTransferAttachmentByIdOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBankTransferAttachmentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBankTransferHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBankTransferOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBankTransfersOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBatchPaymentHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBatchPaymentOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBatchPaymentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBrandingThemeOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBrandingThemePaymentServicesOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBrandingThemesOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBudgetOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetBudgetsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetContactAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetContactAttachmentByIdOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetContactAttachmentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetContactByContactNumberOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetContactCISSettingsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetContactGroupOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetContactGroupsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetContactHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetContactOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetContactsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetCreditNoteAsPdfOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetCreditNoteAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetCreditNoteAttachmentByIdOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetCreditNoteAttachmentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetCreditNoteHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetCreditNoteOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetCreditNotesOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetCurrenciesOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetEmployeeOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetEmployeesOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetExpenseClaimHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetExpenseClaimOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetExpenseClaimsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetInvoiceAsPdfOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetInvoiceAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetInvoiceAttachmentByIdOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetInvoiceAttachmentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetInvoiceHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetInvoiceOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetInvoiceRemindersOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetInvoicesOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetItemHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetItemOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetItemsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetJournalByNumberOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetJournalOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetJournalsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetLinkedTransactionOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetLinkedTransactionsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetManualJournalAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetManualJournalAttachmentByIdOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetManualJournalAttachmentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetManualJournalOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetManualJournalsHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetManualJournalsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetOnlineInvoiceOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetOrganisationActionsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetOrganisationCISSettingsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetOrganisationsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetOverpaymentHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetOverpaymentOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetOverpaymentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPaymentHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPaymentOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPaymentServicesOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPaymentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPrepaymentHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPrepaymentOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPrepaymentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPurchaseOrderAsPdfOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPurchaseOrderAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPurchaseOrderAttachmentByIdOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPurchaseOrderAttachmentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPurchaseOrderByNumberOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPurchaseOrderHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPurchaseOrderOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetPurchaseOrdersOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetQuoteAsPdfOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetQuoteAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetQuoteAttachmentByIdOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetQuoteAttachmentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetQuoteHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetQuoteOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetQuotesOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReceiptAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReceiptAttachmentByIdOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReceiptAttachmentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReceiptHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReceiptOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReceiptsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetRepeatingInvoiceAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetRepeatingInvoiceAttachmentByIdOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetRepeatingInvoiceAttachmentsOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetRepeatingInvoiceHistoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetRepeatingInvoiceOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetRepeatingInvoicesOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReportAgedPayablesByContactOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReportAgedReceivablesByContactOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReportBalanceSheetOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReportBankSummaryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReportBudgetSummaryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReportExecutiveSummaryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReportFromIdOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReportProfitAndLossOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReportTenNinetyNineOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReportTrialBalanceOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetReportsListOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetTaxRatesOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetTrackingCategoriesOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetTrackingCategoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetUserOperation;
use Mochaka\XeroSDK\Operations\Accounting\GetUsersOperation;
use Mochaka\XeroSDK\Operations\Accounting\PostSetupOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateAccountAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateAccountOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateBankTransactionAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateBankTransactionOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateBankTransferAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateContactAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateContactGroupOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateContactOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateCreditNoteAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateCreditNoteOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateExpenseClaimOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateInvoiceAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateInvoiceOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateItemOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateLinkedTransactionOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateManualJournalAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateManualJournalOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateOrCreateBankTransactionsOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateOrCreateContactsOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateOrCreateCreditNotesOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateOrCreateEmployeesOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateOrCreateInvoicesOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateOrCreateItemsOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateOrCreateManualJournalsOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateOrCreatePurchaseOrdersOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateOrCreateQuotesOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateOrCreateRepeatingInvoicesOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdatePurchaseOrderAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdatePurchaseOrderOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateQuoteAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateQuoteOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateReceiptAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateReceiptOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateRepeatingInvoiceAttachmentByFileNameOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateRepeatingInvoiceOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateTaxRateOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateTrackingCategoryOperation;
use Mochaka\XeroSDK\Operations\Accounting\UpdateTrackingOptionsOperation;
use Mochaka\XeroSDK\XeroAccountingConnector;

class AccountingResource
{
    private XeroAccountingConnector $connector;

    public function __construct(XeroAccountingConnector $connector)
    {
        $this->connector = $connector;
    }

    public function getAccounts(): GetAccountsOperation
    {
        return new GetAccountsOperation($this->connector);
    }

    public function createAccount(): CreateAccountOperation
    {
        return new CreateAccountOperation($this->connector, $requestBody);
    }

    public function getAccount(string $accountID): GetAccountOperation
    {
        return new GetAccountOperation($this->connector, $accountID);
    }

    public function updateAccount(string $accountID): UpdateAccountOperation
    {
        return new UpdateAccountOperation($this->connector, $accountID, $requestBody);
    }

    public function deleteAccount(string $accountID): DeleteAccountOperation
    {
        return new DeleteAccountOperation($this->connector, $accountID);
    }

    public function getAccountAttachments(string $accountID): GetAccountAttachmentsOperation
    {
        return new GetAccountAttachmentsOperation($this->connector, $accountID);
    }

    public function getAccountAttachmentById(string $accountID, string $attachmentID): GetAccountAttachmentByIdOperation
    {
        return new GetAccountAttachmentByIdOperation($this->connector, $accountID, $attachmentID);
    }

    public function getAccountAttachmentByFileName(
        string $accountID,
        string $fileName,
    ): GetAccountAttachmentByFileNameOperation {
        return new GetAccountAttachmentByFileNameOperation($this->connector, $accountID, $fileName);
    }

    public function updateAccountAttachmentByFileName(
        string $accountID,
        string $fileName,
    ): UpdateAccountAttachmentByFileNameOperation {
        return new UpdateAccountAttachmentByFileNameOperation($this->connector, $accountID, $fileName);
    }

    public function createAccountAttachmentByFileName(
        string $accountID,
        string $fileName,
    ): CreateAccountAttachmentByFileNameOperation {
        return new CreateAccountAttachmentByFileNameOperation($this->connector, $accountID, $fileName);
    }

    public function getBatchPayments(): GetBatchPaymentsOperation
    {
        return new GetBatchPaymentsOperation($this->connector);
    }

    public function deleteBatchPayment(): DeleteBatchPaymentOperation
    {
        return new DeleteBatchPaymentOperation($this->connector, $requestBody);
    }

    public function createBatchPayment(): CreateBatchPaymentOperation
    {
        return new CreateBatchPaymentOperation($this->connector, $requestBody);
    }

    public function getBatchPayment(string $batchPaymentID): GetBatchPaymentOperation
    {
        return new GetBatchPaymentOperation($this->connector, $batchPaymentID);
    }

    public function deleteBatchPaymentByUrlParam(string $batchPaymentID): DeleteBatchPaymentByUrlParamOperation
    {
        return new DeleteBatchPaymentByUrlParamOperation($this->connector, $batchPaymentID, $requestBody);
    }

    public function getBatchPaymentHistory(string $batchPaymentID): GetBatchPaymentHistoryOperation
    {
        return new GetBatchPaymentHistoryOperation($this->connector, $batchPaymentID);
    }

    public function createBatchPaymentHistoryRecord(string $batchPaymentID): CreateBatchPaymentHistoryRecordOperation
    {
        return new CreateBatchPaymentHistoryRecordOperation($this->connector, $batchPaymentID);
    }

    public function getBankTransactions(): GetBankTransactionsOperation
    {
        return new GetBankTransactionsOperation($this->connector);
    }

    public function updateOrCreateBankTransactions(): UpdateOrCreateBankTransactionsOperation
    {
        return new UpdateOrCreateBankTransactionsOperation($this->connector, $requestBody);
    }

    public function createBankTransactions(): CreateBankTransactionsOperation
    {
        return new CreateBankTransactionsOperation($this->connector, $requestBody);
    }

    public function getBankTransaction(string $bankTransactionID): GetBankTransactionOperation
    {
        return new GetBankTransactionOperation($this->connector, $bankTransactionID);
    }

    public function updateBankTransaction(string $bankTransactionID): UpdateBankTransactionOperation
    {
        return new UpdateBankTransactionOperation($this->connector, $bankTransactionID, $requestBody);
    }

    public function getBankTransactionAttachments(string $bankTransactionID): GetBankTransactionAttachmentsOperation
    {
        return new GetBankTransactionAttachmentsOperation($this->connector, $bankTransactionID);
    }

    public function getBankTransactionAttachmentById(
        string $bankTransactionID,
        string $attachmentID,
    ): GetBankTransactionAttachmentByIdOperation {
        return new GetBankTransactionAttachmentByIdOperation($this->connector, $bankTransactionID, $attachmentID);
    }

    public function getBankTransactionAttachmentByFileName(
        string $bankTransactionID,
        string $fileName,
    ): GetBankTransactionAttachmentByFileNameOperation {
        return new GetBankTransactionAttachmentByFileNameOperation($this->connector, $bankTransactionID, $fileName);
    }

    public function updateBankTransactionAttachmentByFileName(
        string $bankTransactionID,
        string $fileName,
    ): UpdateBankTransactionAttachmentByFileNameOperation {
        return new UpdateBankTransactionAttachmentByFileNameOperation($this->connector, $bankTransactionID, $fileName);
    }

    public function createBankTransactionAttachmentByFileName(
        string $bankTransactionID,
        string $fileName,
    ): CreateBankTransactionAttachmentByFileNameOperation {
        return new CreateBankTransactionAttachmentByFileNameOperation($this->connector, $bankTransactionID, $fileName);
    }

    public function getBankTransactionsHistory(string $bankTransactionID): GetBankTransactionsHistoryOperation
    {
        return new GetBankTransactionsHistoryOperation($this->connector, $bankTransactionID);
    }

    public function createBankTransactionHistoryRecord(string $bankTransactionID): CreateBankTransactionHistoryRecordOperation
    {
        return new CreateBankTransactionHistoryRecordOperation($this->connector, $bankTransactionID);
    }

    public function getBankTransfers(): GetBankTransfersOperation
    {
        return new GetBankTransfersOperation($this->connector);
    }

    public function createBankTransfer(): CreateBankTransferOperation
    {
        return new CreateBankTransferOperation($this->connector, $requestBody);
    }

    public function getBankTransfer(string $bankTransferID): GetBankTransferOperation
    {
        return new GetBankTransferOperation($this->connector, $bankTransferID);
    }

    public function getBankTransferAttachments(string $bankTransferID): GetBankTransferAttachmentsOperation
    {
        return new GetBankTransferAttachmentsOperation($this->connector, $bankTransferID);
    }

    public function getBankTransferAttachmentById(
        string $bankTransferID,
        string $attachmentID,
    ): GetBankTransferAttachmentByIdOperation {
        return new GetBankTransferAttachmentByIdOperation($this->connector, $bankTransferID, $attachmentID);
    }

    public function getBankTransferAttachmentByFileName(
        string $bankTransferID,
        string $fileName,
    ): GetBankTransferAttachmentByFileNameOperation {
        return new GetBankTransferAttachmentByFileNameOperation($this->connector, $bankTransferID, $fileName);
    }

    public function updateBankTransferAttachmentByFileName(
        string $bankTransferID,
        string $fileName,
    ): UpdateBankTransferAttachmentByFileNameOperation {
        return new UpdateBankTransferAttachmentByFileNameOperation($this->connector, $bankTransferID, $fileName);
    }

    public function createBankTransferAttachmentByFileName(
        string $bankTransferID,
        string $fileName,
    ): CreateBankTransferAttachmentByFileNameOperation {
        return new CreateBankTransferAttachmentByFileNameOperation($this->connector, $bankTransferID, $fileName);
    }

    public function getBankTransferHistory(string $bankTransferID): GetBankTransferHistoryOperation
    {
        return new GetBankTransferHistoryOperation($this->connector, $bankTransferID);
    }

    public function createBankTransferHistoryRecord(string $bankTransferID): CreateBankTransferHistoryRecordOperation
    {
        return new CreateBankTransferHistoryRecordOperation($this->connector, $bankTransferID);
    }

    public function getBrandingThemes(): GetBrandingThemesOperation
    {
        return new GetBrandingThemesOperation($this->connector);
    }

    public function getBrandingTheme(string $brandingThemeID): GetBrandingThemeOperation
    {
        return new GetBrandingThemeOperation($this->connector, $brandingThemeID);
    }

    public function getBrandingThemePaymentServices(string $brandingThemeID): GetBrandingThemePaymentServicesOperation
    {
        return new GetBrandingThemePaymentServicesOperation($this->connector, $brandingThemeID);
    }

    public function createBrandingThemePaymentServices(string $brandingThemeID): CreateBrandingThemePaymentServicesOperation
    {
        return new CreateBrandingThemePaymentServicesOperation($this->connector, $brandingThemeID, $requestBody);
    }

    public function getBudgets(): GetBudgetsOperation
    {
        return new GetBudgetsOperation($this->connector);
    }

    public function getBudget(string $budgetID): GetBudgetOperation
    {
        return new GetBudgetOperation($this->connector, $budgetID);
    }

    public function getContacts(): GetContactsOperation
    {
        return new GetContactsOperation($this->connector);
    }

    public function updateOrCreateContacts(): UpdateOrCreateContactsOperation
    {
        return new UpdateOrCreateContactsOperation($this->connector, $requestBody);
    }

    public function createContacts(): CreateContactsOperation
    {
        return new CreateContactsOperation($this->connector, $requestBody);
    }

    public function getContactByContactNumber(string $contactNumber): GetContactByContactNumberOperation
    {
        return new GetContactByContactNumberOperation($this->connector, $contactNumber);
    }

    public function getContact(string $contactID): GetContactOperation
    {
        return new GetContactOperation($this->connector, $contactID);
    }

    public function updateContact(string $contactID): UpdateContactOperation
    {
        return new UpdateContactOperation($this->connector, $contactID, $requestBody);
    }

    public function getContactAttachments(string $contactID): GetContactAttachmentsOperation
    {
        return new GetContactAttachmentsOperation($this->connector, $contactID);
    }

    public function getContactAttachmentById(string $contactID, string $attachmentID): GetContactAttachmentByIdOperation
    {
        return new GetContactAttachmentByIdOperation($this->connector, $contactID, $attachmentID);
    }

    public function getContactAttachmentByFileName(
        string $contactID,
        string $fileName,
    ): GetContactAttachmentByFileNameOperation {
        return new GetContactAttachmentByFileNameOperation($this->connector, $contactID, $fileName);
    }

    public function updateContactAttachmentByFileName(
        string $contactID,
        string $fileName,
    ): UpdateContactAttachmentByFileNameOperation {
        return new UpdateContactAttachmentByFileNameOperation($this->connector, $contactID, $fileName);
    }

    public function createContactAttachmentByFileName(
        string $contactID,
        string $fileName,
    ): CreateContactAttachmentByFileNameOperation {
        return new CreateContactAttachmentByFileNameOperation($this->connector, $contactID, $fileName);
    }

    public function getContactCISSettings(string $contactID): GetContactCISSettingsOperation
    {
        return new GetContactCISSettingsOperation($this->connector, $contactID);
    }

    public function getContactHistory(string $contactID): GetContactHistoryOperation
    {
        return new GetContactHistoryOperation($this->connector, $contactID);
    }

    public function createContactHistory(string $contactID): CreateContactHistoryOperation
    {
        return new CreateContactHistoryOperation($this->connector, $contactID);
    }

    public function getContactGroups(): GetContactGroupsOperation
    {
        return new GetContactGroupsOperation($this->connector);
    }

    public function createContactGroup(): CreateContactGroupOperation
    {
        return new CreateContactGroupOperation($this->connector, $requestBody);
    }

    public function getContactGroup(string $contactGroupID): GetContactGroupOperation
    {
        return new GetContactGroupOperation($this->connector, $contactGroupID);
    }

    public function updateContactGroup(string $contactGroupID): UpdateContactGroupOperation
    {
        return new UpdateContactGroupOperation($this->connector, $contactGroupID, $requestBody);
    }

    public function createContactGroupContacts(string $contactGroupID): CreateContactGroupContactsOperation
    {
        return new CreateContactGroupContactsOperation($this->connector, $contactGroupID, $requestBody);
    }

    public function deleteContactGroupContacts(string $contactGroupID): DeleteContactGroupContactsOperation
    {
        return new DeleteContactGroupContactsOperation($this->connector, $contactGroupID);
    }

    public function deleteContactGroupContact(
        string $contactGroupID,
        string $contactID,
    ): DeleteContactGroupContactOperation {
        return new DeleteContactGroupContactOperation($this->connector, $contactGroupID, $contactID);
    }

    public function getCreditNotes(): GetCreditNotesOperation
    {
        return new GetCreditNotesOperation($this->connector);
    }

    public function updateOrCreateCreditNotes(): UpdateOrCreateCreditNotesOperation
    {
        return new UpdateOrCreateCreditNotesOperation($this->connector, $requestBody);
    }

    public function createCreditNotes(): CreateCreditNotesOperation
    {
        return new CreateCreditNotesOperation($this->connector, $requestBody);
    }

    public function getCreditNote(string $creditNoteID): GetCreditNoteOperation
    {
        return new GetCreditNoteOperation($this->connector, $creditNoteID);
    }

    public function updateCreditNote(string $creditNoteID): UpdateCreditNoteOperation
    {
        return new UpdateCreditNoteOperation($this->connector, $creditNoteID, $requestBody);
    }

    public function getCreditNoteAttachments(string $creditNoteID): GetCreditNoteAttachmentsOperation
    {
        return new GetCreditNoteAttachmentsOperation($this->connector, $creditNoteID);
    }

    public function getCreditNoteAttachmentById(
        string $creditNoteID,
        string $attachmentID,
    ): GetCreditNoteAttachmentByIdOperation {
        return new GetCreditNoteAttachmentByIdOperation($this->connector, $creditNoteID, $attachmentID);
    }

    public function getCreditNoteAttachmentByFileName(
        string $creditNoteID,
        string $fileName,
    ): GetCreditNoteAttachmentByFileNameOperation {
        return new GetCreditNoteAttachmentByFileNameOperation($this->connector, $creditNoteID, $fileName);
    }

    public function updateCreditNoteAttachmentByFileName(
        string $creditNoteID,
        string $fileName,
    ): UpdateCreditNoteAttachmentByFileNameOperation {
        return new UpdateCreditNoteAttachmentByFileNameOperation($this->connector, $creditNoteID, $fileName);
    }

    public function createCreditNoteAttachmentByFileName(
        string $creditNoteID,
        string $fileName,
    ): CreateCreditNoteAttachmentByFileNameOperation {
        return new CreateCreditNoteAttachmentByFileNameOperation($this->connector, $creditNoteID, $fileName);
    }

    public function getCreditNoteAsPdf(string $creditNoteID): GetCreditNoteAsPdfOperation
    {
        return new GetCreditNoteAsPdfOperation($this->connector, $creditNoteID);
    }

    public function createCreditNoteAllocation(string $creditNoteID): CreateCreditNoteAllocationOperation
    {
        return new CreateCreditNoteAllocationOperation($this->connector, $creditNoteID, $requestBody);
    }

    public function getCreditNoteHistory(string $creditNoteID): GetCreditNoteHistoryOperation
    {
        return new GetCreditNoteHistoryOperation($this->connector, $creditNoteID);
    }

    public function createCreditNoteHistory(string $creditNoteID): CreateCreditNoteHistoryOperation
    {
        return new CreateCreditNoteHistoryOperation($this->connector, $creditNoteID);
    }

    public function getCurrencies(): GetCurrenciesOperation
    {
        return new GetCurrenciesOperation($this->connector);
    }

    public function createCurrency(): CreateCurrencyOperation
    {
        return new CreateCurrencyOperation($this->connector, $requestBody);
    }

    public function getEmployees(): GetEmployeesOperation
    {
        return new GetEmployeesOperation($this->connector);
    }

    public function updateOrCreateEmployees(): UpdateOrCreateEmployeesOperation
    {
        return new UpdateOrCreateEmployeesOperation($this->connector, $requestBody);
    }

    public function createEmployees(): CreateEmployeesOperation
    {
        return new CreateEmployeesOperation($this->connector, $requestBody);
    }

    public function getEmployee(string $employeeID): GetEmployeeOperation
    {
        return new GetEmployeeOperation($this->connector, $employeeID);
    }

    public function getExpenseClaims(): GetExpenseClaimsOperation
    {
        return new GetExpenseClaimsOperation($this->connector);
    }

    public function createExpenseClaims(): CreateExpenseClaimsOperation
    {
        return new CreateExpenseClaimsOperation($this->connector, $requestBody);
    }

    public function getExpenseClaim(string $expenseClaimID): GetExpenseClaimOperation
    {
        return new GetExpenseClaimOperation($this->connector, $expenseClaimID);
    }

    public function updateExpenseClaim(string $expenseClaimID): UpdateExpenseClaimOperation
    {
        return new UpdateExpenseClaimOperation($this->connector, $expenseClaimID, $requestBody);
    }

    public function getExpenseClaimHistory(string $expenseClaimID): GetExpenseClaimHistoryOperation
    {
        return new GetExpenseClaimHistoryOperation($this->connector, $expenseClaimID);
    }

    public function createExpenseClaimHistory(string $expenseClaimID): CreateExpenseClaimHistoryOperation
    {
        return new CreateExpenseClaimHistoryOperation($this->connector, $expenseClaimID);
    }

    public function getInvoices(): GetInvoicesOperation
    {
        return new GetInvoicesOperation($this->connector);
    }

    public function updateOrCreateInvoices(): UpdateOrCreateInvoicesOperation
    {
        return new UpdateOrCreateInvoicesOperation($this->connector, $requestBody);
    }

    public function createInvoices(): CreateInvoicesOperation
    {
        return new CreateInvoicesOperation($this->connector, $requestBody);
    }

    public function getInvoice(string $invoiceID): GetInvoiceOperation
    {
        return new GetInvoiceOperation($this->connector, $invoiceID);
    }

    public function updateInvoice(string $invoiceID): UpdateInvoiceOperation
    {
        return new UpdateInvoiceOperation($this->connector, $invoiceID, $requestBody);
    }

    public function getInvoiceAsPdf(string $invoiceID): GetInvoiceAsPdfOperation
    {
        return new GetInvoiceAsPdfOperation($this->connector, $invoiceID);
    }

    public function getInvoiceAttachments(string $invoiceID): GetInvoiceAttachmentsOperation
    {
        return new GetInvoiceAttachmentsOperation($this->connector, $invoiceID);
    }

    public function getInvoiceAttachmentById(string $invoiceID, string $attachmentID): GetInvoiceAttachmentByIdOperation
    {
        return new GetInvoiceAttachmentByIdOperation($this->connector, $invoiceID, $attachmentID);
    }

    public function getInvoiceAttachmentByFileName(
        string $invoiceID,
        string $fileName,
    ): GetInvoiceAttachmentByFileNameOperation {
        return new GetInvoiceAttachmentByFileNameOperation($this->connector, $invoiceID, $fileName);
    }

    public function updateInvoiceAttachmentByFileName(
        string $invoiceID,
        string $fileName,
    ): UpdateInvoiceAttachmentByFileNameOperation {
        return new UpdateInvoiceAttachmentByFileNameOperation($this->connector, $invoiceID, $fileName);
    }

    public function createInvoiceAttachmentByFileName(
        string $invoiceID,
        string $fileName,
    ): CreateInvoiceAttachmentByFileNameOperation {
        return new CreateInvoiceAttachmentByFileNameOperation($this->connector, $invoiceID, $fileName);
    }

    public function getOnlineInvoice(string $invoiceID): GetOnlineInvoiceOperation
    {
        return new GetOnlineInvoiceOperation($this->connector, $invoiceID);
    }

    public function emailInvoice(string $invoiceID): EmailInvoiceOperation
    {
        return new EmailInvoiceOperation($this->connector, $invoiceID, $requestBody);
    }

    public function getInvoiceHistory(string $invoiceID): GetInvoiceHistoryOperation
    {
        return new GetInvoiceHistoryOperation($this->connector, $invoiceID);
    }

    public function createInvoiceHistory(string $invoiceID): CreateInvoiceHistoryOperation
    {
        return new CreateInvoiceHistoryOperation($this->connector, $invoiceID);
    }

    public function getInvoiceReminders(): GetInvoiceRemindersOperation
    {
        return new GetInvoiceRemindersOperation($this->connector);
    }

    public function getItems(): GetItemsOperation
    {
        return new GetItemsOperation($this->connector);
    }

    public function updateOrCreateItems(): UpdateOrCreateItemsOperation
    {
        return new UpdateOrCreateItemsOperation($this->connector, $requestBody);
    }

    public function createItems(): CreateItemsOperation
    {
        return new CreateItemsOperation($this->connector, $requestBody);
    }

    public function getItem(string $itemID): GetItemOperation
    {
        return new GetItemOperation($this->connector, $itemID);
    }

    public function updateItem(string $itemID): UpdateItemOperation
    {
        return new UpdateItemOperation($this->connector, $itemID, $requestBody);
    }

    public function deleteItem(string $itemID): DeleteItemOperation
    {
        return new DeleteItemOperation($this->connector, $itemID);
    }

    public function getItemHistory(string $itemID): GetItemHistoryOperation
    {
        return new GetItemHistoryOperation($this->connector, $itemID);
    }

    public function createItemHistory(string $itemID): CreateItemHistoryOperation
    {
        return new CreateItemHistoryOperation($this->connector, $itemID);
    }

    public function getJournals(): GetJournalsOperation
    {
        return new GetJournalsOperation($this->connector);
    }

    public function getJournal(string $journalID): GetJournalOperation
    {
        return new GetJournalOperation($this->connector, $journalID);
    }

    public function getJournalByNumber(int $journalNumber): GetJournalByNumberOperation
    {
        return new GetJournalByNumberOperation($this->connector, $journalNumber);
    }

    public function getLinkedTransactions(): GetLinkedTransactionsOperation
    {
        return new GetLinkedTransactionsOperation($this->connector);
    }

    public function createLinkedTransaction(): CreateLinkedTransactionOperation
    {
        return new CreateLinkedTransactionOperation($this->connector, $requestBody);
    }

    public function getLinkedTransaction(string $linkedTransactionID): GetLinkedTransactionOperation
    {
        return new GetLinkedTransactionOperation($this->connector, $linkedTransactionID);
    }

    public function updateLinkedTransaction(string $linkedTransactionID): UpdateLinkedTransactionOperation
    {
        return new UpdateLinkedTransactionOperation($this->connector, $linkedTransactionID, $requestBody);
    }

    public function deleteLinkedTransaction(string $linkedTransactionID): DeleteLinkedTransactionOperation
    {
        return new DeleteLinkedTransactionOperation($this->connector, $linkedTransactionID);
    }

    public function getManualJournals(): GetManualJournalsOperation
    {
        return new GetManualJournalsOperation($this->connector);
    }

    public function updateOrCreateManualJournals(): UpdateOrCreateManualJournalsOperation
    {
        return new UpdateOrCreateManualJournalsOperation($this->connector, $requestBody);
    }

    public function createManualJournals(): CreateManualJournalsOperation
    {
        return new CreateManualJournalsOperation($this->connector, $requestBody);
    }

    public function getManualJournal(string $manualJournalID): GetManualJournalOperation
    {
        return new GetManualJournalOperation($this->connector, $manualJournalID);
    }

    public function updateManualJournal(string $manualJournalID): UpdateManualJournalOperation
    {
        return new UpdateManualJournalOperation($this->connector, $manualJournalID, $requestBody);
    }

    public function getManualJournalAttachments(string $manualJournalID): GetManualJournalAttachmentsOperation
    {
        return new GetManualJournalAttachmentsOperation($this->connector, $manualJournalID);
    }

    public function getManualJournalAttachmentById(
        string $manualJournalID,
        string $attachmentID,
    ): GetManualJournalAttachmentByIdOperation {
        return new GetManualJournalAttachmentByIdOperation($this->connector, $manualJournalID, $attachmentID);
    }

    public function getManualJournalAttachmentByFileName(
        string $manualJournalID,
        string $fileName,
    ): GetManualJournalAttachmentByFileNameOperation {
        return new GetManualJournalAttachmentByFileNameOperation($this->connector, $manualJournalID, $fileName);
    }

    public function updateManualJournalAttachmentByFileName(
        string $manualJournalID,
        string $fileName,
    ): UpdateManualJournalAttachmentByFileNameOperation {
        return new UpdateManualJournalAttachmentByFileNameOperation($this->connector, $manualJournalID, $fileName);
    }

    public function createManualJournalAttachmentByFileName(
        string $manualJournalID,
        string $fileName,
    ): CreateManualJournalAttachmentByFileNameOperation {
        return new CreateManualJournalAttachmentByFileNameOperation($this->connector, $manualJournalID, $fileName);
    }

    public function getManualJournalsHistory(string $manualJournalID): GetManualJournalsHistoryOperation
    {
        return new GetManualJournalsHistoryOperation($this->connector, $manualJournalID);
    }

    public function createManualJournalHistoryRecord(string $manualJournalID): CreateManualJournalHistoryRecordOperation
    {
        return new CreateManualJournalHistoryRecordOperation($this->connector, $manualJournalID);
    }

    public function getOrganisations(): GetOrganisationsOperation
    {
        return new GetOrganisationsOperation($this->connector);
    }

    public function getOrganisationActions(): GetOrganisationActionsOperation
    {
        return new GetOrganisationActionsOperation($this->connector);
    }

    public function getOrganisationCISSettings(string $organisationID): GetOrganisationCISSettingsOperation
    {
        return new GetOrganisationCISSettingsOperation($this->connector, $organisationID);
    }

    public function getOverpayments(): GetOverpaymentsOperation
    {
        return new GetOverpaymentsOperation($this->connector);
    }

    public function getOverpayment(string $overpaymentID): GetOverpaymentOperation
    {
        return new GetOverpaymentOperation($this->connector, $overpaymentID);
    }

    public function createOverpaymentAllocations(string $overpaymentID): CreateOverpaymentAllocationsOperation
    {
        return new CreateOverpaymentAllocationsOperation($this->connector, $overpaymentID, $requestBody);
    }

    public function getOverpaymentHistory(string $overpaymentID): GetOverpaymentHistoryOperation
    {
        return new GetOverpaymentHistoryOperation($this->connector, $overpaymentID);
    }

    public function createOverpaymentHistory(string $overpaymentID): CreateOverpaymentHistoryOperation
    {
        return new CreateOverpaymentHistoryOperation($this->connector, $overpaymentID);
    }

    public function getPayments(): GetPaymentsOperation
    {
        return new GetPaymentsOperation($this->connector);
    }

    public function createPayment(): CreatePaymentOperation
    {
        return new CreatePaymentOperation($this->connector, $requestBody);
    }

    public function createPayments(): CreatePaymentsOperation
    {
        return new CreatePaymentsOperation($this->connector, $requestBody);
    }

    public function getPayment(string $paymentID): GetPaymentOperation
    {
        return new GetPaymentOperation($this->connector, $paymentID);
    }

    public function deletePayment(string $paymentID): DeletePaymentOperation
    {
        return new DeletePaymentOperation($this->connector, $paymentID, $requestBody);
    }

    public function getPaymentHistory(string $paymentID): GetPaymentHistoryOperation
    {
        return new GetPaymentHistoryOperation($this->connector, $paymentID);
    }

    public function createPaymentHistory(string $paymentID): CreatePaymentHistoryOperation
    {
        return new CreatePaymentHistoryOperation($this->connector, $paymentID);
    }

    public function getPaymentServices(): GetPaymentServicesOperation
    {
        return new GetPaymentServicesOperation($this->connector);
    }

    public function createPaymentService(): CreatePaymentServiceOperation
    {
        return new CreatePaymentServiceOperation($this->connector, $requestBody);
    }

    public function getPrepayments(): GetPrepaymentsOperation
    {
        return new GetPrepaymentsOperation($this->connector);
    }

    public function getPrepayment(string $prepaymentID): GetPrepaymentOperation
    {
        return new GetPrepaymentOperation($this->connector, $prepaymentID);
    }

    public function createPrepaymentAllocations(string $prepaymentID): CreatePrepaymentAllocationsOperation
    {
        return new CreatePrepaymentAllocationsOperation($this->connector, $prepaymentID, $requestBody);
    }

    public function getPrepaymentHistory(string $prepaymentID): GetPrepaymentHistoryOperation
    {
        return new GetPrepaymentHistoryOperation($this->connector, $prepaymentID);
    }

    public function createPrepaymentHistory(string $prepaymentID): CreatePrepaymentHistoryOperation
    {
        return new CreatePrepaymentHistoryOperation($this->connector, $prepaymentID);
    }

    public function getPurchaseOrders(): GetPurchaseOrdersOperation
    {
        return new GetPurchaseOrdersOperation($this->connector);
    }

    public function updateOrCreatePurchaseOrders(): UpdateOrCreatePurchaseOrdersOperation
    {
        return new UpdateOrCreatePurchaseOrdersOperation($this->connector, $requestBody);
    }

    public function createPurchaseOrders(): CreatePurchaseOrdersOperation
    {
        return new CreatePurchaseOrdersOperation($this->connector, $requestBody);
    }

    public function getPurchaseOrderAsPdf(string $purchaseOrderID): GetPurchaseOrderAsPdfOperation
    {
        return new GetPurchaseOrderAsPdfOperation($this->connector, $purchaseOrderID);
    }

    public function getPurchaseOrder(string $purchaseOrderID): GetPurchaseOrderOperation
    {
        return new GetPurchaseOrderOperation($this->connector, $purchaseOrderID);
    }

    public function updatePurchaseOrder(string $purchaseOrderID): UpdatePurchaseOrderOperation
    {
        return new UpdatePurchaseOrderOperation($this->connector, $purchaseOrderID, $requestBody);
    }

    public function getPurchaseOrderByNumber(string $purchaseOrderNumber): GetPurchaseOrderByNumberOperation
    {
        return new GetPurchaseOrderByNumberOperation($this->connector, $purchaseOrderNumber);
    }

    public function getPurchaseOrderHistory(string $purchaseOrderID): GetPurchaseOrderHistoryOperation
    {
        return new GetPurchaseOrderHistoryOperation($this->connector, $purchaseOrderID);
    }

    public function createPurchaseOrderHistory(string $purchaseOrderID): CreatePurchaseOrderHistoryOperation
    {
        return new CreatePurchaseOrderHistoryOperation($this->connector, $purchaseOrderID);
    }

    public function getPurchaseOrderAttachments(string $purchaseOrderID): GetPurchaseOrderAttachmentsOperation
    {
        return new GetPurchaseOrderAttachmentsOperation($this->connector, $purchaseOrderID);
    }

    public function getPurchaseOrderAttachmentById(
        string $purchaseOrderID,
        string $attachmentID,
    ): GetPurchaseOrderAttachmentByIdOperation {
        return new GetPurchaseOrderAttachmentByIdOperation($this->connector, $purchaseOrderID, $attachmentID);
    }

    public function getPurchaseOrderAttachmentByFileName(
        string $purchaseOrderID,
        string $fileName,
    ): GetPurchaseOrderAttachmentByFileNameOperation {
        return new GetPurchaseOrderAttachmentByFileNameOperation($this->connector, $purchaseOrderID, $fileName);
    }

    public function updatePurchaseOrderAttachmentByFileName(
        string $purchaseOrderID,
        string $fileName,
    ): UpdatePurchaseOrderAttachmentByFileNameOperation {
        return new UpdatePurchaseOrderAttachmentByFileNameOperation($this->connector, $purchaseOrderID, $fileName);
    }

    public function createPurchaseOrderAttachmentByFileName(
        string $purchaseOrderID,
        string $fileName,
    ): CreatePurchaseOrderAttachmentByFileNameOperation {
        return new CreatePurchaseOrderAttachmentByFileNameOperation($this->connector, $purchaseOrderID, $fileName);
    }

    public function getQuotes(): GetQuotesOperation
    {
        return new GetQuotesOperation($this->connector);
    }

    public function updateOrCreateQuotes(): UpdateOrCreateQuotesOperation
    {
        return new UpdateOrCreateQuotesOperation($this->connector, $requestBody);
    }

    public function createQuotes(): CreateQuotesOperation
    {
        return new CreateQuotesOperation($this->connector, $requestBody);
    }

    public function getQuote(string $quoteID): GetQuoteOperation
    {
        return new GetQuoteOperation($this->connector, $quoteID);
    }

    public function updateQuote(string $quoteID): UpdateQuoteOperation
    {
        return new UpdateQuoteOperation($this->connector, $quoteID, $requestBody);
    }

    public function getQuoteHistory(string $quoteID): GetQuoteHistoryOperation
    {
        return new GetQuoteHistoryOperation($this->connector, $quoteID);
    }

    public function createQuoteHistory(string $quoteID): CreateQuoteHistoryOperation
    {
        return new CreateQuoteHistoryOperation($this->connector, $quoteID);
    }

    public function getQuoteAsPdf(string $quoteID): GetQuoteAsPdfOperation
    {
        return new GetQuoteAsPdfOperation($this->connector, $quoteID);
    }

    public function getQuoteAttachments(string $quoteID): GetQuoteAttachmentsOperation
    {
        return new GetQuoteAttachmentsOperation($this->connector, $quoteID);
    }

    public function getQuoteAttachmentById(string $quoteID, string $attachmentID): GetQuoteAttachmentByIdOperation
    {
        return new GetQuoteAttachmentByIdOperation($this->connector, $quoteID, $attachmentID);
    }

    public function getQuoteAttachmentByFileName(
        string $quoteID,
        string $fileName,
    ): GetQuoteAttachmentByFileNameOperation {
        return new GetQuoteAttachmentByFileNameOperation($this->connector, $quoteID, $fileName);
    }

    public function updateQuoteAttachmentByFileName(
        string $quoteID,
        string $fileName,
    ): UpdateQuoteAttachmentByFileNameOperation {
        return new UpdateQuoteAttachmentByFileNameOperation($this->connector, $quoteID, $fileName);
    }

    public function createQuoteAttachmentByFileName(
        string $quoteID,
        string $fileName,
    ): CreateQuoteAttachmentByFileNameOperation {
        return new CreateQuoteAttachmentByFileNameOperation($this->connector, $quoteID, $fileName);
    }

    public function getReceipts(): GetReceiptsOperation
    {
        return new GetReceiptsOperation($this->connector);
    }

    public function createReceipt(): CreateReceiptOperation
    {
        return new CreateReceiptOperation($this->connector, $requestBody);
    }

    public function getReceipt(string $receiptID): GetReceiptOperation
    {
        return new GetReceiptOperation($this->connector, $receiptID);
    }

    public function updateReceipt(string $receiptID): UpdateReceiptOperation
    {
        return new UpdateReceiptOperation($this->connector, $receiptID, $requestBody);
    }

    public function getReceiptAttachments(string $receiptID): GetReceiptAttachmentsOperation
    {
        return new GetReceiptAttachmentsOperation($this->connector, $receiptID);
    }

    public function getReceiptAttachmentById(string $receiptID, string $attachmentID): GetReceiptAttachmentByIdOperation
    {
        return new GetReceiptAttachmentByIdOperation($this->connector, $receiptID, $attachmentID);
    }

    public function getReceiptAttachmentByFileName(
        string $receiptID,
        string $fileName,
    ): GetReceiptAttachmentByFileNameOperation {
        return new GetReceiptAttachmentByFileNameOperation($this->connector, $receiptID, $fileName);
    }

    public function updateReceiptAttachmentByFileName(
        string $receiptID,
        string $fileName,
    ): UpdateReceiptAttachmentByFileNameOperation {
        return new UpdateReceiptAttachmentByFileNameOperation($this->connector, $receiptID, $fileName);
    }

    public function createReceiptAttachmentByFileName(
        string $receiptID,
        string $fileName,
    ): CreateReceiptAttachmentByFileNameOperation {
        return new CreateReceiptAttachmentByFileNameOperation($this->connector, $receiptID, $fileName);
    }

    public function getReceiptHistory(string $receiptID): GetReceiptHistoryOperation
    {
        return new GetReceiptHistoryOperation($this->connector, $receiptID);
    }

    public function createReceiptHistory(string $receiptID): CreateReceiptHistoryOperation
    {
        return new CreateReceiptHistoryOperation($this->connector, $receiptID);
    }

    public function getRepeatingInvoices(): GetRepeatingInvoicesOperation
    {
        return new GetRepeatingInvoicesOperation($this->connector);
    }

    public function updateOrCreateRepeatingInvoices(): UpdateOrCreateRepeatingInvoicesOperation
    {
        return new UpdateOrCreateRepeatingInvoicesOperation($this->connector, $requestBody);
    }

    public function createRepeatingInvoices(): CreateRepeatingInvoicesOperation
    {
        return new CreateRepeatingInvoicesOperation($this->connector, $requestBody);
    }

    public function getRepeatingInvoice(string $repeatingInvoiceID): GetRepeatingInvoiceOperation
    {
        return new GetRepeatingInvoiceOperation($this->connector, $repeatingInvoiceID);
    }

    public function updateRepeatingInvoice(string $repeatingInvoiceID): UpdateRepeatingInvoiceOperation
    {
        return new UpdateRepeatingInvoiceOperation($this->connector, $repeatingInvoiceID, $requestBody);
    }

    public function getRepeatingInvoiceAttachments(string $repeatingInvoiceID): GetRepeatingInvoiceAttachmentsOperation
    {
        return new GetRepeatingInvoiceAttachmentsOperation($this->connector, $repeatingInvoiceID);
    }

    public function getRepeatingInvoiceAttachmentById(
        string $repeatingInvoiceID,
        string $attachmentID,
    ): GetRepeatingInvoiceAttachmentByIdOperation {
        return new GetRepeatingInvoiceAttachmentByIdOperation($this->connector, $repeatingInvoiceID, $attachmentID);
    }

    public function getRepeatingInvoiceAttachmentByFileName(
        string $repeatingInvoiceID,
        string $fileName,
    ): GetRepeatingInvoiceAttachmentByFileNameOperation {
        return new GetRepeatingInvoiceAttachmentByFileNameOperation($this->connector, $repeatingInvoiceID, $fileName);
    }

    public function updateRepeatingInvoiceAttachmentByFileName(
        string $repeatingInvoiceID,
        string $fileName,
    ): UpdateRepeatingInvoiceAttachmentByFileNameOperation {
        return new UpdateRepeatingInvoiceAttachmentByFileNameOperation($this->connector, $repeatingInvoiceID, $fileName);
    }

    public function createRepeatingInvoiceAttachmentByFileName(
        string $repeatingInvoiceID,
        string $fileName,
    ): CreateRepeatingInvoiceAttachmentByFileNameOperation {
        return new CreateRepeatingInvoiceAttachmentByFileNameOperation($this->connector, $repeatingInvoiceID, $fileName);
    }

    public function getRepeatingInvoiceHistory(string $repeatingInvoiceID): GetRepeatingInvoiceHistoryOperation
    {
        return new GetRepeatingInvoiceHistoryOperation($this->connector, $repeatingInvoiceID);
    }

    public function createRepeatingInvoiceHistory(string $repeatingInvoiceID): CreateRepeatingInvoiceHistoryOperation
    {
        return new CreateRepeatingInvoiceHistoryOperation($this->connector, $repeatingInvoiceID);
    }

    public function getReportTenNinetyNine(): GetReportTenNinetyNineOperation
    {
        return new GetReportTenNinetyNineOperation($this->connector);
    }

    public function getReportAgedPayablesByContact(): GetReportAgedPayablesByContactOperation
    {
        return new GetReportAgedPayablesByContactOperation($this->connector);
    }

    public function getReportAgedReceivablesByContact(): GetReportAgedReceivablesByContactOperation
    {
        return new GetReportAgedReceivablesByContactOperation($this->connector);
    }

    public function getReportBalanceSheet(): GetReportBalanceSheetOperation
    {
        return new GetReportBalanceSheetOperation($this->connector);
    }

    public function getReportBankSummary(): GetReportBankSummaryOperation
    {
        return new GetReportBankSummaryOperation($this->connector);
    }

    public function getReportFromId(string $reportID): GetReportFromIdOperation
    {
        return new GetReportFromIdOperation($this->connector, $reportID);
    }

    public function getReportBudgetSummary(): GetReportBudgetSummaryOperation
    {
        return new GetReportBudgetSummaryOperation($this->connector);
    }

    public function getReportExecutiveSummary(): GetReportExecutiveSummaryOperation
    {
        return new GetReportExecutiveSummaryOperation($this->connector);
    }

    public function getReportsList(): GetReportsListOperation
    {
        return new GetReportsListOperation($this->connector);
    }

    public function getReportProfitAndLoss(): GetReportProfitAndLossOperation
    {
        return new GetReportProfitAndLossOperation($this->connector);
    }

    public function getReportTrialBalance(): GetReportTrialBalanceOperation
    {
        return new GetReportTrialBalanceOperation($this->connector);
    }

    public function postSetup(): PostSetupOperation
    {
        return new PostSetupOperation($this->connector, $requestBody);
    }

    public function getTaxRates(): GetTaxRatesOperation
    {
        return new GetTaxRatesOperation($this->connector);
    }

    public function updateTaxRate(): UpdateTaxRateOperation
    {
        return new UpdateTaxRateOperation($this->connector, $requestBody);
    }

    public function createTaxRates(): CreateTaxRatesOperation
    {
        return new CreateTaxRatesOperation($this->connector, $requestBody);
    }

    public function getTrackingCategories(): GetTrackingCategoriesOperation
    {
        return new GetTrackingCategoriesOperation($this->connector);
    }

    public function createTrackingCategory(): CreateTrackingCategoryOperation
    {
        return new CreateTrackingCategoryOperation($this->connector, $requestBody);
    }

    public function getTrackingCategory(string $trackingCategoryID): GetTrackingCategoryOperation
    {
        return new GetTrackingCategoryOperation($this->connector, $trackingCategoryID);
    }

    public function updateTrackingCategory(string $trackingCategoryID): UpdateTrackingCategoryOperation
    {
        return new UpdateTrackingCategoryOperation($this->connector, $trackingCategoryID, $requestBody);
    }

    public function deleteTrackingCategory(string $trackingCategoryID): DeleteTrackingCategoryOperation
    {
        return new DeleteTrackingCategoryOperation($this->connector, $trackingCategoryID);
    }

    public function createTrackingOptions(string $trackingCategoryID): CreateTrackingOptionsOperation
    {
        return new CreateTrackingOptionsOperation($this->connector, $trackingCategoryID, $requestBody);
    }

    public function updateTrackingOptions(
        string $trackingCategoryID,
        string $trackingOptionID,
    ): UpdateTrackingOptionsOperation {
        return new UpdateTrackingOptionsOperation($this->connector, $trackingCategoryID, $trackingOptionID, $requestBody);
    }

    public function deleteTrackingOptions(
        string $trackingCategoryID,
        string $trackingOptionID,
    ): DeleteTrackingOptionsOperation {
        return new DeleteTrackingOptionsOperation($this->connector, $trackingCategoryID, $trackingOptionID);
    }

    public function getUsers(): GetUsersOperation
    {
        return new GetUsersOperation($this->connector);
    }

    public function getUser(string $userID): GetUserOperation
    {
        return new GetUserOperation($this->connector, $userID);
    }
}
