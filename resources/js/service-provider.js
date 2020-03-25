/**
 * Created by henry on 23-Mar-20.
 */
require('@Service/http')
require('@Service/clients/pending-approval-clients');
require('@Service/clients/closed');
require('@Service/clients/register');
require('@Service/clients/rejected');
require('@Service/clients/transfer');

//Loan services
require('@Service/loan/view-loan-service')
require('@Service/loan/pedding-approval-service')
require('@Service/loan/pedding-second-approval')
require('@Service/loan/overpaid-service')
require('@Service/loan/awaiting-service')
require('@Service/loan/rejected-service')
require('@Service/loan/writtenoff-service')
require('@Service/loan/closed-service')
require('@Service/loan/withdraw-service')
require('@Service/loan/loan-detail-service')
require("@Service/groups");

