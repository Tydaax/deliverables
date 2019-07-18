( function( api ) {

	// Extends our custom "vw-cleaning-company" section.
	api.sectionConstructor['vw-cleaning-company'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );