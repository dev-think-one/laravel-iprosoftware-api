<?php

namespace LaravelIproSoftwareApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelIproSoftwareApi\IproSoftware
 * @codeCoverageIgnore
 *
 * @method static \IproSoftwareApi\Contracts\HttpClient httpClient()
 * @method static \LaravelIproSoftwareApi\IproApiResponse getSourcesList(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Sources
 * @method static \LaravelIproSoftwareApi\IproApiResponse getBookingRulesList(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Booking-Rules
 * @method static \LaravelIproSoftwareApi\IproApiResponse getBookingTagsList(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Booking-Tags
 * @method static \LaravelIproSoftwareApi\IproApiResponse getLocationsList(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Locations
 * @method static \LaravelIproSoftwareApi\IproApiResponse getAttributesList(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Attributes
 * @method static \LaravelIproSoftwareApi\IproApiResponse getContactTypesList(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Contact-Types
 * @method static \LaravelIproSoftwareApi\IproApiResponse searchContacts(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Contacts
 * @method static \LaravelIproSoftwareApi\IproApiResponse getContact(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Get-Contact
 * @method static \LaravelIproSoftwareApi\IproApiResponse getExternalContact(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/External-Contact
 * @method static \LaravelIproSoftwareApi\IproApiResponse createOrUpdateContact(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Update-Contact
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertiesList(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Properties
 * @method static \LaravelIproSoftwareApi\IproApiResponse searchProperties(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Search
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertiesReferenceLookupList(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Reference-Lookup
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyDetails(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Detail
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyImages(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Images
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyExtras(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Extras
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyRates(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Rates
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyCustomRates(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Custom-Rates
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyAvailability(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Availabilities
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyDayAvailability(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Day-Availabilities
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyBlockouts(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Blockouts
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyRooms(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Rooms
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyDistances(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Distances
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyAll(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-All
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyEnquiries(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Enquiries
 * @method static \LaravelIproSoftwareApi\IproApiResponse getPropertyWelcomepack(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Property-Welcome-Pack
 * @method static \LaravelIproSoftwareApi\IproApiResponse createOrUpdateProperty(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Push-Property
 * @method static \LaravelIproSoftwareApi\IproApiResponse createEnquiry(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Enquiry
 * @method static \LaravelIproSoftwareApi\IproApiResponse searchBookings(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Bookings
 * @method static \LaravelIproSoftwareApi\IproApiResponse calculateBooking(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Calculate-Booking
 * @method static \LaravelIproSoftwareApi\IproApiResponse createBooking(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Booking
 * @method static \LaravelIproSoftwareApi\IproApiResponse updateBooking(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Update-Booking
 * @method static \LaravelIproSoftwareApi\IproApiResponse getStatementsByOwner(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Statements
 * @method static \LaravelIproSoftwareApi\IproApiResponse getReviewsList(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Reviews
 * @method static \LaravelIproSoftwareApi\IproApiResponse createReview(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Review
 * @method static \LaravelIproSoftwareApi\IproApiResponse createPayment(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Create-Payment
 * @method static \LaravelIproSoftwareApi\IproApiResponse getLateDealsList(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Late-Deals
 * @method static \LaravelIproSoftwareApi\IproApiResponse getSpecialOffersList(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Special-Offers-&-Last-Minute-Deals
 * @method static \LaravelIproSoftwareApi\IproApiResponse getVouchers(...$options) https://github.com/iprosoftware/api-csharp-client/wiki/Voucher-API---Query-vouchers-to-bring-through-validation-and-price
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
