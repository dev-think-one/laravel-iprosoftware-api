<?php

namespace Angecode\LaravelIproSoft;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Angecode\LaravelIproSoft\IproSoftware
 * @codeCoverageIgnore
 *
 * @method static \Angecode\IproSoftware\Contracts\HttpClient httpClient()
 * @method static \Psr\Http\Message\ResponseInterface getSourcesList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Sources
 * @method static \Psr\Http\Message\ResponseInterface getBookingRulesList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Booking-Rules
 * @method static \Psr\Http\Message\ResponseInterface getBookingTagsList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Booking-Tags
 * @method static \Psr\Http\Message\ResponseInterface getLocationsList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Locations
 * @method static \Psr\Http\Message\ResponseInterface getAttributesList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Attributes
 * @method static \Psr\Http\Message\ResponseInterface getContactTypesList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Contact-Types
 * @method static \Psr\Http\Message\ResponseInterface searchContacts($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Contacts
 * @method static \Psr\Http\Message\ResponseInterface getContact($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Get-Contact
 * @method static \Psr\Http\Message\ResponseInterface getExternalContact($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/External-Contact
 * @method static \Psr\Http\Message\ResponseInterface createOrUpdateContact($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Update-Contact
 * @method static \Psr\Http\Message\ResponseInterface getPropertiesList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Properties
 * @method static \Psr\Http\Message\ResponseInterface searchProperties($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Search
 * @method static \Psr\Http\Message\ResponseInterface getPropertiesReferenceLookupList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Reference-Lookup
 * @method static \Psr\Http\Message\ResponseInterface getPropertyDetails($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Detail
 * @method static \Psr\Http\Message\ResponseInterface getPropertyImages($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Images
 * @method static \Psr\Http\Message\ResponseInterface getPropertyExtras($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Extras
 * @method static \Psr\Http\Message\ResponseInterface getPropertyRates($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Rates
 * @method static \Psr\Http\Message\ResponseInterface getPropertyCustomRates($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Custom-Rates
 * @method static \Psr\Http\Message\ResponseInterface getPropertyAvailability($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Availabilities
 * @method static \Psr\Http\Message\ResponseInterface getPropertyDayAvailability($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Day-Availabilities
 * @method static \Psr\Http\Message\ResponseInterface getPropertyRooms($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Rooms
 * @method static \Psr\Http\Message\ResponseInterface getPropertyDistances($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Distances
 * @method static \Psr\Http\Message\ResponseInterface getPropertyAll($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-All
 * @method static \Psr\Http\Message\ResponseInterface getPropertyEnquiries($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Enquiries
 * @method static \Psr\Http\Message\ResponseInterface getPropertyWelcomepack($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Welcome-Pack
 * @method static \Psr\Http\Message\ResponseInterface createOrUpdateProperty($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Push-Property
 * @method static \Psr\Http\Message\ResponseInterface createEnquiry($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Enquiry
 * @method static \Psr\Http\Message\ResponseInterface searchBookings($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Bookings
 * @method static \Psr\Http\Message\ResponseInterface calculateBooking($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Calculate-Booking
 * @method static \Psr\Http\Message\ResponseInterface createBooking($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Booking
 * @method static \Psr\Http\Message\ResponseInterface getStatementsByOwner($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Statements
 * @method static \Psr\Http\Message\ResponseInterface getReviewsList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Reviews
 * @method static \Psr\Http\Message\ResponseInterface createReview($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Review
 * @method static \Psr\Http\Message\ResponseInterface createPayment($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Payment
 * @method static \Psr\Http\Message\ResponseInterface getLateDealsList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Late-Deals
 * @method static \Psr\Http\Message\ResponseInterface getSpecialOffersList($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Special-Offers-&-Last-Minute-Deals
 * @method static \Psr\Http\Message\ResponseInterface getVouchers($options = []) https://github.com/iprosoftware/api-csharp-client/wiki/Voucher-API---Query-vouchers-to-bring-through-validation-and-price
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
