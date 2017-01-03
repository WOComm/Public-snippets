<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00005fake_webhook_calls
{
    public function __construct($componentArgs)
    {
    // Script designed to fire off webhook calls, regardless of the activity performed in Jomres. Used for web development.
    
    if (!defined("AJAXCALL") || !AJAXCALL) {
        
        $webhook_data = array();
        
        // The ids of various items in the Jomres tables that allow us to test functionality.
        $property_uid = 1; // A valid property uid
        $contract_uid = 41; // A contract uid that belongs to the property uid above
        $incorrect_property_uid = 99999999; // A property that the manager does NOT have rights for
        $black_booking_id = 43; // A black booking that belongs to the property uid above
        $deleted_black_booking_id = 1000; // A non-existant contract id to test that the webhook api feature correctly responds that the contract uid doesn't exist
        $cancelled_booking = 37;
        $note_id = 46;
        $deleted_note_id = 99999999;
        $depositref = 'xyz123';
        $extras_uid = 2;
        $guest_uid = 13;
        $deleted_guest_uid = 99999999;
        $guest_type_uid = 18;
        $deleted_guest_type_uid = 99999999;
        $pending_invoice_uid = 24;
        $paid_invoice_uid = 25;
        $cancelled_invoice_uid = 28;
        $nonexistant_invoice_uid = 99999999;
        
        $property_manager_assigned_to_uid = 2;
        $property_nonexistant_uid = 10000;
        $property_manager_not_assigned_to_uid = 7;
        
        /*
        
        
        
        $guest_type_uid = N;
        
        $rating_id = N; */
        
        // The webhook events we will trigger. Comment/uncomment as needed
        /* $webhook_event = 'booking_modified';
        $webhook_data = array ( "property_uid" => $property_uid, "contract_uid" => $contract_uid );  */
        
        /* $webhook_event = 'booking_modified';
        $webhook_data = array ( "property_uid" => $incorrect_property_uid, "contract_uid" => $contract_uid );*/
        
        /*$webhook_event = 'blackbooking_added';
        $webhook_data = array ( "property_uid" => $property_uid, "contract_uid" => $black_booking_id );*/
        
        /*$webhook_event = 'blackbooking_deleted';
        $webhook_data = array ( "property_uid" => $property_uid, "contract_uid" => $deleted_black_booking_id );*/
        
        /* $webhook_event = 'booking_added';
        $webhook_data = array ( "property_uid" => $property_uid, "contract_uid" => $contract_uid ); */
        
        /* $webhook_event = 'booking_cancelled';
        $webhook_data = array ( "property_uid" => $property_uid, "contract_uid" => $cancelled_booking ); */
        
        /*$webhook_event = 'booking_note_deleted';
        $webhook_data = array ( "property_uid" => $property_uid, "note_uid" => $deleted_note_id ); */
        
        /*$webhook_event = 'booking_note_save';
        $webhook_data = array ( "property_uid" => $property_uid, "note_uid" => $note_id );*/
        
        /* $webhook_event = 'deposit_saved';
        $webhook_data = array ( "property_uid" => $property_uid, "contract_uid" => $contract_uid ); */
        
        /* $webhook_event = 'extra_deleted';
        $webhook_data = array ( "property_uid" => $property_uid, "extra_uid" => $extras_uid ); */
        
        /* $webhook_event = 'extra_saved';
        $webhook_data = array ( "property_uid" => $property_uid, "extra_uid" => $extras_uid ); */
        
        /* $webhook_event = 'guest_checkedin';
        $webhook_data = array ( "property_uid" => $property_uid, "contract_uid" => $contract_uid ); */
        
        /* $webhook_event = 'guest_checkedin_undone';
        $webhook_data = array ( "property_uid" => $property_uid, "contract_uid" => $contract_uid ); */
        
        /* $webhook_event = 'guest_checkedout';
        $webhook_data = array ( "property_uid" => $property_uid, "contract_uid" => $contract_uid ); */
        
        /* $webhook_event = 'guest_checkedout_undone';
        $webhook_data = array ( "property_uid" => $property_uid, "contract_uid" => $contract_uid ); */
        
        /* $webhook_event = 'guest_deleted';
        $webhook_data = array ( "property_uid" => $property_uid, "guest_uid" => $deleted_guest_uid ); */
        
        /* $webhook_event = 'guest_saved';
        $webhook_data = array ( "property_uid" => $property_uid, "guest_uid" => $guest_uid ); */
        
        /* $webhook_event = 'guest_type_deleted';
        $webhook_data = array ( "property_uid" => $property_uid, "guest_type_uid" => $deleted_guest_type_uid ); */
        
        /* $webhook_event = 'guest_type_saved';
        $webhook_data = array ( "property_uid" => $property_uid, "guest_type_uid" => $guest_type_uid ); */
        
        /* $webhook_event = 'invoice_cancelled';
        $webhook_data = array ( "property_uid" => $property_uid, "invoice_uid" => $nonexistant_invoice_uid ); */
        
        /* $webhook_event = 'invoice_cancelled';
        $webhook_data = array ( "property_uid" => $property_uid, "invoice_uid" => $pending_invoice_uid ); */
        
        /* $webhook_event = 'invoice_cancelled';
        $webhook_data = array ( "property_uid" => $property_uid, "invoice_uid" => $paid_invoice_uid ); */
        
        /* $webhook_event = 'invoice_saved';
        $webhook_data = array ( "property_uid" => $property_uid, "invoice_uid" => $pending_invoice_uid ); */
        
        /* $webhook_event = 'property_added';
        $webhook_data = array ( "property_uid" => $property_manager_assigned_to_uid); */
        
        /* $webhook_event = 'property_added';
        $webhook_data = array ( "property_uid" => $property_manager_not_assigned_to_uid ); */
        
        /* $webhook_event = 'property_added';
        $webhook_data = array ( "property_uid" => $property_nonexistant_uid );  */
        
        $webhook_event = 'property_deleted';
        $webhook_data = array ( "property_uid" => $property_nonexistant_uid ); 
        
        /*
        $webhook_event = 'property_published';
        $webhook_data = array ( "property_uid" => $property_manager_assigned_to_uid ); 
        
        $webhook_event = 'property_saved';
        $webhook_data = array ( "property_uid" => $property_manager_assigned_to_uid );  
                
        */
        
        if ( count($webhook_data) > 0 ) {
            $webhook_notification                               = new stdClass();
            $webhook_notification->webhook_event                = $webhook_event;
            $webhook_notification->data                         = new stdClass();
            foreach ( $webhook_data as $key=>$val ) {
                $webhook_notification->data->$key = $val;
                }
            add_webhook_notification($webhook_notification);
            }
        }
    }


    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
