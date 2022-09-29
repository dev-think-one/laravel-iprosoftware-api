<?php

namespace Angecode\LaravelIproSoft;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Angecode\LaravelIproSoft\IproSoftware
 * @codeCoverageIgnore
 *
 * @method static \Angecode\IproSoftware\Contracts\HttpClient httpClient()
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getSourcesList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Sources
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getBookingRulesList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Booking-Rules
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getBookingTagsList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Booking-Tags
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getLocationsList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Locations
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getAttributesList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Attributes
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getContactTypesList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Contact-Types
 * @method static \Angecode\LaravelIproSoft\IproApiResponse searchContacts($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Contacts
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getContact($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Get-Contact
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getExternalContact($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/External-Contact
 * @method static \Angecode\LaravelIproSoft\IproApiResponse createOrUpdateContact($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Update-Contact
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertiesList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Properties
 * @method static \Angecode\LaravelIproSoft\IproApiResponse searchProperties($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Search
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertiesReferenceLookupList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Reference-Lookup
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertyDetails($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Detail
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertyImages($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Images
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertyExtras($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Extras
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertyRates($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Rates
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertyCustomRates($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Custom-Rates
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertyAvailability($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Availabilities
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertyDayAvailability($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Day-Availabilities
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertyRooms($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Rooms
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertyDistances($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Distances
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertyAll($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-All
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertyEnquiries($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Enquiries
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getPropertyWelcomepack($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Welcome-Pack
 * @method static \Angecode\LaravelIproSoft\IproApiResponse createOrUpdateProperty($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Push-Property
 * @method static \Angecode\LaravelIproSoft\IproApiResponse createEnquiry($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Enquiry
 * @method static \Angecode\LaravelIproSoft\IproApiResponse searchBookings($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Bookings
 * @method static \Angecode\LaravelIproSoft\IproApiResponse calculateBooking($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Calculate-Booking
 * @method static \Angecode\LaravelIproSoft\IproApiResponse createBooking($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Booking
 * @method static \Angecode\LaravelIproSoft\IproApiResponse updateBooking($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Update-Booking
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getStatementsByOwner($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Statements
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getReviewsList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Reviews
 * @method static \Angecode\LaravelIproSoft\IproApiResponse createReview($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Review
 * @method static \Angecode\LaravelIproSoft\IproApiResponse createPayment($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Payment
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getLateDealsList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Late-Deals
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getSpecialOffersList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Special-Offers-&-Last-Minute-Deals
 * @method static \Angecode\LaravelIproSoft\IproApiResponse getVouchers($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Voucher-API---Query-vouchers-to-bring-through-validation-and-price
 */
class IproSoftwareFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'iprosoftware';
    }
}
